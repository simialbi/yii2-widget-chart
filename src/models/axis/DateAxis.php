<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\models\axis;


use simialbi\yii2\chart\models\Axis;

class DateAxis extends Axis
{
    /**
     * @var integer A duration in milliseconds of the `baseInterval`.
     */
    public $baseDuaration;

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
}