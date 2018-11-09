<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\base\label;


use simialbi\yii2\chart\base\Label;

class AxisLabel extends Label
{
    const LOCATION_START = 0;
    const LOCATION_MIDDLE = 0.5;
    const LOCATION_END = 1;

    /**
     * @var boolean Sets if label should be drawn inside axis.
     *
     * Returns if label is set to be drawn inside axis.
     */
    public $inside;

    /**
     * @var float Relative location of the label.
     * Available choices:
     *   - [[self::LOCATION_START]]
     *   - [[self::LOCATION_MIDDLE]]
     *   - [[self::LOCATION_END]]
     */
    public $location;
}