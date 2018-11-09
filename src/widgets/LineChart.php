<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\widgets;

use simialbi\yii2\chart\base\Axis;
use simialbi\yii2\chart\base\axis\CategoryAxis;
use simialbi\yii2\chart\base\axis\ValueAxis;
use simialbi\yii2\chart\base\Series;
use simialbi\yii2\chart\base\series\ColumnSeries;
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
     * @var Series|null A series is represented by a series class. If not defined, it will be auto created by data.
     */
    public $series;

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        if (ArrayHelper::isAssociative($this->data, false)) {
            throw new InvalidConfigException(Yii::t('simialbi/chart/line', 'The "data" property must be an array of objects'));
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
        $var = Inflector::variablize('chart' . $id);
        $data = Json::htmlEncode($this->data);


        $js = <<<JS
var $var = am4core.create('$id', am4charts.XYChart);
JS;

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
        $this->series = new ColumnSeries();

        foreach ($this->data[0] as $key => $value) {
            if (is_numeric($value)) {
                $this->series->dataFields['valueY'] = $key;
            } else {
                $this->series->dataFields['categoryX'] = $key;
            }
        }
    }
}