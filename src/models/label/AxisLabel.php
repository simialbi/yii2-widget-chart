<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace simialbi\yii2\chart\models\label;


use simialbi\yii2\chart\models\Label;

/**
 * Used to create labels on [[Axis]].
 * @package simialbi\yii2\chart\models\label
 */
class AxisLabel extends Label
{
    const NAME_SPACE = 'am4charts';

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