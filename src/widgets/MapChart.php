<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace simialbi\yii2\chart\widgets;


use simialbi\yii2\chart\MapChartGeodataAsset;
use simialbi\yii2\chart\models\BaseObject;
use simialbi\yii2\chart\models\map\Projection;
use simialbi\yii2\chart\models\Series;
use yii\helpers\ArrayHelper;
use yii\helpers\Inflector;
use yii\helpers\Json;

class MapChart extends Chart
{
    /**
     * @var string Map geodata file name
     */
    public $geodata = 'worldLow';
    /**
     * @var Series|Series[]|null A series is represented by a series class. If not defined, it will be auto created by data.
     */
    public $series;

    /**
     * @var Projection Projection to use for the map.
     *
     * Available projections:
     *  - Eckert6
     *  - Mercator
     *  - Miller
     *  - Orthographic
     */
    public $projection;

    /**
     * {@inheritDoc}
     */
    public function registerPlugin($pluginName = null, $selector = null)
    {
        $asset = MapChartGeodataAsset::register($this->view);
        $asset->js = [$this->geodata . '.js'];

        $id = $this->options['id'];
        $var = Inflector::variablize('chart_' . $id);

        if (empty($selector)) {
            $selector = $id;
        }

        $js = "var $var = am4core.create('$selector', am4maps.MapChart);\n";
        if ($this->projection) {
            $js .= "$var.projection = {$this->projection};";
        }
        $js .= "$var.geodata = am4geodata_{$this->geodata};\n";

        if ($this->series) {
            if (is_object($this->series) || ArrayHelper::isAssociative($this->series)) {
                $this->series = [$this->series];
            }

            foreach ($this->series as $series) {
                $series->variableParent = $var;
                $js .= "var {$series->varName} = " . (string)$series . ';';
                $js .= "$var.series.push({$series->varName});";
            }
        }

        foreach ($this->clientOptions as $key => $value) {
            if ($value instanceof BaseObject) {
                $value->variableParent = $var;
            }
            if (is_string($key)) {
                $js .= "$var.$key = " . Json::htmlEncode($value) . ';';
            }
        }

        $this->view->registerJs($js);
    }
}