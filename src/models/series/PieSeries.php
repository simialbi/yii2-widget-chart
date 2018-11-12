<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\models\series;


class PieSeries extends PercentSeries
{
    /**
     * @var float Outer radius for the series' slices in pixels or percent.
     */
    public $radius;
}