<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace simialbi\yii2\chart\widgets;

use simialbi\yii2\chart\ChartAsset;
use simialbi\yii2\chart\models\Axis;
use simialbi\yii2\chart\models\axis\CategoryAxis;
use simialbi\yii2\chart\models\axis\DateAxis;
use simialbi\yii2\chart\models\axis\ValueAxis;
use simialbi\yii2\chart\models\BaseObject;
use simialbi\yii2\chart\models\Series;
use simialbi\yii2\chart\models\series\ColumnSeries;
use simialbi\yii2\chart\models\series\ColumnSeries3D;
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
     * @var boolean True to generate a 3d chart
     */
    public $is3D = false;

    /**
     * {@inheritDoc}
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
            if (empty($this->axes)) {
                $this->generateAxes();
            }
            if (empty($this->series)) {
                $this->generateSeries();
            }
        }
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
        if ($this->is3D) {
            $this->series = new ColumnSeries3D([
                'dataFields' => []
            ]);
        } else {
            $this->series = new ColumnSeries([
                'dataFields' => []
            ]);
        }

        foreach ($this->data[0] as $key => $value) {
            if (is_numeric($value)) {
                $this->series->dataFields['valueY'] = $key;
            } else {
                $this->series->dataFields['categoryX'] = $key;
            }
        }
    }

    /**
     * {@inheritDoc}
     */
    public function registerPlugin($pluginName = null, $selector = null)
    {
        ChartAsset::register($this->view);
        $id = $this->options['id'];
        $var = Inflector::variablize('chart_' . $id);

        if (empty($selector)) {
            $selector = $id;
        }

        $js = "var $var = am4core.create('$selector', am4charts.XYChart" . ($this->is3D ? '3D' : '') . ");\n";
        if (isset($this->data)) {
            $js .= "$var.data = " . Json::htmlEncode($this->data) . ";\n";
        } else {
            foreach ($this->dataSource as $key => $value) {
                $js .= "$var.dataSource.$key = " . Json::htmlEncode($value) . "\n;";
            }
        }

        foreach ($this->axes as $key => $axis) {
            $axis->variableParent = $var;
            $js .= "var {$axis->varName} = " . (string)$axis . ';';
            if ($key === 'x') {
                $js .= "$var.xAxes.push({$axis->varName});\n";
                continue;
            } elseif ($key === 'y') {
                $js .= "$var.yAxes.push({$axis->varName});\n";
                continue;
            }
            if ($axis instanceof CategoryAxis || $axis instanceof DateAxis) {
                $js .= "$var.xAxes.push({$axis->varName});\n";
            } else {
                $js .= "$var.yAxes.push({$axis->varName});\n";
            }
        }

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
