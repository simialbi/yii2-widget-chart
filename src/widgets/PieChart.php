<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace simialbi\yii2\chart\widgets;

use simialbi\yii2\chart\ChartAsset;
use simialbi\yii2\chart\models\BaseObject;
use simialbi\yii2\chart\models\Series;
use simialbi\yii2\chart\models\series\PieSeries;
use Yii;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\helpers\Inflector;
use yii\helpers\Json;

class PieChart extends Chart
{
    /**
     * @var Series|Series[]|null A series is represented by a series class. If not defined, it will be auto created by data.
     */
    public $series;

    /**
     * {@inheritdoc}
     * @throws InvalidConfigException
     */
    public function init()
    {
        parent::init();

        if (isset($this->data)) {
            if (ArrayHelper::isAssociative($this->data, false)) {
                throw new InvalidConfigException(Yii::t(
                    'simialbi/chart/chart',
                    'The "data" property must be an array of objects'
                ));
            }
            if (empty($this->series)) {
                $this->generateSeries();
            }
        }
    }

    /**
     * Auto generate axes
     */
    protected function generateSeries()
    {
        $this->series = new PieSeries();

        foreach ($this->data[0] as $key => $value) {
            if (is_numeric($value)) {
                $this->series->dataFields['value'] = $key;
            } else {
                $this->series->dataFields['category'] = $key;
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function registerPlugin($pluginName = null)
    {
        ChartAsset::register($this->view);
        $id = $this->options['id'];
        $var = Inflector::variablize('chart_' . $id);
        $data = Json::htmlEncode($this->data);

        $js = "var $var = am4core.create('$id', am4charts.PieChart);\n";
        $js .= "$var.data = $data;\n";

        if (is_object($this->series) || ArrayHelper::isAssociative($this->series)) {
            $this->series = [$this->series];
        }

        foreach ($this->series as $series) {
            $series->variableParent = $var;
            $js .= "var {$series->varName} = " . (string)$series . ';';
            $js .= "$var.series.push({$series->varName});";
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