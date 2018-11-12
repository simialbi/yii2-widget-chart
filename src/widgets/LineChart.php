<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\widgets;

use simialbi\yii2\chart\models\Axis;
use simialbi\yii2\chart\models\axis\CategoryAxis;
use simialbi\yii2\chart\models\axis\ValueAxis;
use simialbi\yii2\chart\models\Series;
use simialbi\yii2\chart\models\series\ColumnSeries;
use Yii;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\helpers\Inflector;
use yii\helpers\Json;

/**
 * Class LineChart
 * @package simialbi\yii2\chart
 */
class LineChart extends Chart
{
    /**
     * @var Axis[]|null A line chart must have at least two axes. If not defined, it will be auto created by data.
     */
    public $axes;

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

        if (ArrayHelper::isAssociative($this->data, false)) {
            throw new InvalidConfigException(Yii::t('simialbi/chart/line',
                'The "data" property must be an array of objects'));
        }
        if (empty($this->axes)) {
            $this->generateAxes();
        }
        if (empty($this->series)) {
            $this->generateSeries();
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

        $js = "var $var = am4core.create('$id', am4charts.XYChart);\n";
        $js .= "$var.data = $data;\n";

        foreach ($this->clientOptions as $key => $value) {
            if (is_string($key)) {
                $js .= "$var.$key = " . Json::htmlEncode($value) . ";";
            }
        }

        foreach ($this->axes as $axis) {
            $js .= "var {$axis->varName} = " . (string)$axis . ";";
            if ($axis instanceof CategoryAxis) {
                $js .= "$var.xAxes.push({$axis->varName});\n";
            } else {
                $js .= "$var.yAxes.push({$axis->varName});\n";
            }
        }

        if (is_object($this->series) || ArrayHelper::isAssociative($this->series)) {
            $this->series = [$this->series];
        }

        foreach ($this->series as $series) {
            $js .= "var {$series->varName} = " . (string)$series . ";";
            $js .= "$var.series.push({$series->varName});";
        }

        $this->view->registerJs($js);
    }

    /**
     * Auto generate axes
     */
    protected function generateAxes()
    {
        $this->axes = [];

        foreach ($this->data[0] as $key => $value) {
            if (is_numeric($value)) {
                $this->axes[] = new ValueAxis();
            } else {
                $this->axes[] = new CategoryAxis([
                    'dataFields' => [
                        'category' => $key
                    ]
                ]);
            }
        }
    }

    /**
     * Auto generate axes
     */
    protected function generateSeries()
    {
        $this->series = new ColumnSeries([
            'dataFields' => []
        ]);

        foreach ($this->data[0] as $key => $value) {
            if (is_numeric($value)) {
                $this->series->dataFields['valueY'] = $key;
            } else {
                $this->series->dataFields['categoryX'] = $key;
            }
        }
    }
}