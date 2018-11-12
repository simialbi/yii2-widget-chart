<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\models;


use simialbi\yii2\chart\models\label\AxisLabel;

class Axis extends Component
{
    const NAME_SPACE = 'am4charts';

    const LOCATION_START = 0;
    const LOCATION_MIDDLE = 0.5;
    const LOCATION_END = 1;

    /**
     * @var boolean Specifies if axis should be automatically disposed when removing from chart's axis list.
     * Defaults to `true`
     */
    public $autoDispose;

    /**
     * @var boolean Indicates if axis should display a tooltip for chart's cursor.
     */
    public $cursorTooltipEnabled;

    /**
     * @var float Axis end location. Works on Date/Category axis, doesn't work on Value axis.
     * One of:
     *  - [[self::LOCATION_START]] : None of the last cell is shown. (don't do that)
     *  - [[self::LOCATION_MIDDLE]] : Half of the last cell is shown.
     *  - [[self::LOCATION_END]] : Full last cell is shown.
     */
    public $endLocation;

    /**
     * @var AxisLabel Ghost label is used to prevent chart shrinking/expanding when zooming or when data is invalidated.
     * You can set custom text on it so that it would be bigger/smaller
     */
    public $ghostLabel;

    /**
     * @var Label A [[Label]] instance that is used for Axis title label.
     */
    public $title;
}