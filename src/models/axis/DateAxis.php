<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace simialbi\yii2\chart\models\axis;

/**
 * Used to create a date/time-based axis for the chart.
 * @package simialbi\yii2\chart\models\axis
 */
class DateAxis extends ValueAxis
{
    /**
     * @var integer A duration in milliseconds of the `baseInterval`.
     */
    public $baseDuration;

    /**
     * @var mixed A models interval (granularity) of data.
     *
     * Used to indicate what are the models units of your data.
     *
     * For example, if you have a data set that has a data point every 5 minutes,
     * you may want to set this to
     * ```php
     * [
     *     'timeUnit' => 'minute',
     *     'count' => 5
     * ]
     * ```
     *
     * If not set, the Axis will try to determine the setting by its own, looking at actual data.
     */
    public $baseInterval;

    /**
     * @var array A collection of date formats to use when formatting different time units on Date/time axis.
     *
     * Actual defaults will depend on the language locale set for the chart.
     */
    public $dateFormats;

    /**
     * @var array Current grid interval.
     */
    public $gridInterval;

    /**
     * @var array A list of date/time intervals for Date axis.
     *
     * This define various granularities available for the axis. For example if you have an axis spanning an hour,
     * and space for 6 grid lines / labels the axis will choose the granularity of 10 minutes, displaying a label
     * every 10 minutes.
     *
     * Default intervals:
     * ```php
     * [
     *     ['timeUnit' => 'millisecond', 'count' => 1],
     *     ['timeUnit' => 'millisecond', 'count' => 5],
     *     ['timeUnit' => 'millisecond', 'count' => 10],
     *     ['timeUnit' => 'millisecond', 'count' => 50],
     *     ['timeUnit' => 'millisecond', 'count' => 100],
     *     ['timeUnit' => 'millisecond', 'count' => 500],
     *     ['timeUnit' => 'second', 'count' => 1],
     *     ['timeUnit' => 'second', 'count' => 5],
     *     ['timeUnit' => 'second', 'count' => 10],
     *     ['timeUnit' => 'second', 'count' => 30],
     *     ['timeUnit' => 'minute', 'count' => 1],
     *     ['timeUnit' => 'minute', 'count' => 5],
     *     ['timeUnit' => 'minute', 'count' => 10],
     *     ['timeUnit' => 'minute', 'count' => 30],
     *     ['timeUnit' => 'hour', 'count' => 1],
     *     ['timeUnit' => 'hour', 'count' => 3],
     *     ['timeUnit' => 'hour', 'count' => 6],
     *     ['timeUnit' => 'hour', 'count' => 12],
     *     ['timeUnit' => 'day', 'count' => 1],
     *     ['timeUnit' => 'day', 'count' => 2],
     *     ['timeUnit' => 'day', 'count' => 3],
     *     ['timeUnit' => 'day', 'count' => 4],
     *     ['timeUnit' => 'day', 'count' => 5],
     *     ['timeUnit' => 'week', 'count' => 1],
     *     ['timeUnit' => 'month', 'count' => 1],
     *     ['timeUnit' => 'month', 'count' => 2],
     *     ['timeUnit' => 'month', 'count' => 3],
     *     ['timeUnit' => 'month', 'count' => 6],
     *     ['timeUnit' => 'year', 'count' => 1],
     *     ['timeUnit' => 'year', 'count' => 2],
     *     ['timeUnit' => 'year', 'count' => 5],
     *     ['timeUnit' => 'year', 'count' => 10],
     *     ['timeUnit' => 'year', 'count' => 50],
     *     ['timeUnit' => 'year', 'count' => 100]
     * ]
     * ```
     */
    public $gridIntervals;

    /**
     * @var boolean Use `$periodChangeDateFormats` to apply different formats to the first label in
     * bigger time unit. Defaults to `true`
     */
    public $markUnitChange;

    /**
     * @var array These formats are applied to labels that are first in a larger unit.
     *
     * For example, if we have a [[DateAxis]] with days on it, the first day of month indicates
     * a break in month - a start of the bigger period.
     *
     * For those labels, `$periodChangeDateFormats` are applied instead of `$dateFormats`.
     *
     * This allows us implement convenient structures, like instead of:
     * `Jan 1 - Jan 2 - Jan 3 - ...` We can have:
     * `Jan - 1 - 2 - 3 - ...` This can be disabled by setting `$markUnitChange = false`.
     */
    public $periodChangeDateFormats;

    /**
     * @var boolean If enabled, axis will automatically collapse empty (without data points) periods of time,
     * i.e. weekends.
     *
     * An "empty" period is considered a stretch of time in the length of current `$baseInterval`
     * without a single data point in it.
     *
     * For each such empty period, axis will automatically create an [[AxisBreak]]. By default they will be invisible.
     * You can still configure them by accessing `$axis->breaks->template`.
     *
     * > Important notes:
     * > If you set this property to `true`, you can not add your custom axis breaks to this axis anymore.
     * > Using this feature affects performance. Use only if you need it.
     * > Setting this to `true` will reset appearance of breaks. If you want to modify appearance,
     * > do it *after* you set `$skipEmptyPeriods`.
     *
     * Defaults to `false`
     */
    public $skipEmptyPeriods;

    /**
     * @var boolean Should the nearest tooltip be shown if no data item is found on the current cursor position.
     * Defaults to `true`
     */
    public $snapTooltip;

    /**
     * @var string A special date format to apply axis tooltips.
     *
     * Will use same format as for labels, if not set.
     */
    public $tooltipDateFormat;
}
