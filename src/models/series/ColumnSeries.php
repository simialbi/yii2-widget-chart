<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace simialbi\yii2\chart\models\series;

use simialbi\yii2\chart\models\Column;

class ColumnSeries extends XYSeries
{
    /**
     * @var boolean Cluster this series columns?
     *
     * Setting to `false` will make columns overlap with pther series. Defaults to `true`
     */
    public $clustered;

    /**
     * @var Column[] A list of column elements in the series.
     */
    public $columns;

    /**
     * @var boolean When working value of dataItem changes, we must process all the values to calculate sum, min, max
     * etc. Also update stack values. This is quite expensive operation.
     *
     * Unfortunately we do not know if user needs this processed values or not. By setting `simplifiedProcessing = true`
     * you disable this processing and in case working value changes, we only redraw the particular column. Do not do
     * this if you have staked chart or use calculated values in bullets or in tooltips.
     * Defaults to `false`
     */
    public $simplifiedProcessing;
}