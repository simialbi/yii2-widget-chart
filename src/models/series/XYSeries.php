<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace simialbi\yii2\chart\models\series;


use simialbi\yii2\chart\models\Axis;
use simialbi\yii2\chart\models\Series;

class XYSeries extends Series
{
    /**
     * @var Axis The main (models) axis.
     *
     * This is the axis that series fills will go to, or grow animations will happen from.
     */
    public $baseAxis;

    /**
     * @var boolean Can items from this series be included into stacks?
     */
    public $stacked;

    /**
     * @var Axis X axis the series is attached to.
     */
    public $xAxis;

    /**
     * @var Axis Y axis the series is attached to.
     */
    public $yAxis;
}