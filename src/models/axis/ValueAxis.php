<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace simialbi\yii2\chart\models\axis;


use simialbi\yii2\chart\models\Axis;

class ValueAxis extends Axis
{
    /**
     * @var float A models value.
     *
     * This is a threshold value that will divide "positive" and "negative" value ranges.
     *
     * Other scale-related functionality also depend on models value. E.g. stacks, value-dependent coloring, etc.
     */
    public $baseValue;

    /**
     * @var boolean As calculating totals is expensive operation and not often needed, we don't do it by default.
     *
     * In case you use `totalPercent` or `total` in your charts, this must be set to true.
     *
     * Defaults to `false`
     */
    public $calculateTotals;

    /**
     * @var float Allows relatively adjusting maximum value of the axis' scale.
     *
     * The value is relative to the actual range of values currently displayed on the axis.
     *
     * E.g.: 0.5 will mean half of the current range. If we have axis displaying from 100 to 200, we will now have axis
     * displaying from 100 to 250 because we asked to expand maximum value by 50% (0.5).
     */
    public $extraMax;

    /**
     * @var float Allows relatively adjusting minimum value of the axis' scale.
     *
     * The value is relative to the actual range of values currently displayed on the axis.
     *
     * E.g.: 0.5 will mean half of the current range. If we have axis displaying from 100 to 200, we will now have axis
     * displaying from 50 to 200 because we asked to expand minimum value by 50% (0.5).
     */
    public $extraMin;

    /**
     * @var boolean Indicates if this axis should use a logarithmic scale.
     *
     * Please note that logarithmic axis can **only** accommodate values bigger than zero.
     *
     * Having zero or negative values will result in error and failure of the whole chart.
     */
    public $logarithmic;

    /**
     * @var float A maximum value for the axis scale.
     *
     * This value might be auto-adjusted by the Axis in order to accomodate the grid nicely, i.e. plot area is divided
     * by grid in nice equal cells.
     *
     * The above might be overridden by `strictMinMax` which will force exact user-defined min and max values to be used
     * for scale.
     */
    public $max;

    /**
     * @var float Maximum number of decimals to allow when placing grid lines and labels on axis.
     *
     * Set it to `0` (zero) to force integer-only axis labels.
     */
    public $maxPrecision;

    /**
     * @var float A biggest value in axis scale within current zoom.
     */
    public $maxZoomed;

    /**
     * @var float A minimum value for the axis scale.
     *
     * This value might be auto-adjusted by the Axis in order to accomodate the grid nicely, i.e. plot area is divided
     * by grid in nice equal cells.
     *
     * The above might be overridden by `strictMinMax` which will force exact user-defined min and max values to be used
     * for scale.
     */
    public $min;

    /**
     * @var float A smallest value in axis scale within current zoom.
     */
    public $minZoomed;

    /**
     * @var boolean Indicates whether to blindly use exact `min` and `max` values set by user when generating Axis
     * scale.
     *
     * If not set, the Axis might slightly adjust those values to accomodate a better looking grid.
     */
    public $stricMinMax;
}