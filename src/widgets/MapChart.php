<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\widgets;


use simialbi\yii2\chart\MapChartGeodataAsset;
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
     * {@inheritdoc}
     */
    public function registerPlugin($pluginName = null)
    {
        $asset = MapChartGeodataAsset::register($this->view);
        $asset->js = [$this->geodata . '.js'];

        $id = $this->options['id'];
        $var = Inflector::variablize('chart_' . $id);

        $js = "var $var = am4core.create('$id', am4maps.MapChart);\n";
        if ($this->projection) {
            $js .= "$var.projection = {$this->projection};";
        }
        $js .= "$var.geodata = am4geodata_{$this->geodata};\n";

        foreach ($this->clientOptions as $key => $value) {
            if (is_string($key)) {
                $js .= "$var.$key = " . Json::htmlEncode($value) . ";";
            }
        }

        if ($this->series) {
            if (is_object($this->series) || ArrayHelper::isAssociative($this->series)) {
                $this->series = [$this->series];
            }

            foreach ($this->series as $series) {
                $js .= "var {$series->varName} = " . (string)$series . ";";
                $js .= "$var.series.push({$series->varName});";
            }
        }

        $this->view->registerJs($js);
    }
}