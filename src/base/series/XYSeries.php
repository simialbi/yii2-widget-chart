<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\base\series;


use simialbi\yii2\chart\base\Axis;
use simialbi\yii2\chart\base\Series;

class XYSeries extends Series
{
    /**
     * @var Axis The main (base) axis.
     *
     * This is the axis that series fills will go to, or grow animations will happen from.
     */
    public $baseAxis;

    /**
     * @var boolean Can items from this series be included into stacks?
     */
    public $stacked = false;

    /**
     * @var Axis X axis the series is attached to.
     */
    public $xAxis;

    /**
     * @var Axis Y axis the series is attached to.
     */
    public $yAxis;
}