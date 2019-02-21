<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace simialbi\yii2\chart\models\series;


class LineSeries extends XYSeries
{
    /**
     * @var boolean Connect the lines over empty data points?
     *
     * If set to `true` the line will connect two adjacent data points by a straight line. Even if there are data
     * points with missing values in-between.
     *
     * If you set this to `false`, the line will break when there are missing values. Default to `true`
     */
    public $connect;

    /**
     * @var float Minimum distance in pixels between two adjacent points.
     *
     * If the distance is less than this setting, a point is skipped.
     *
     * This allows acceptable performance with huge amounts of data points. Defaults to `0.5`
     */
    public $minDistance;

    /**
     * @var array A list of line series segments.
     *
     * Segments are used in two cases:
     *  - When we want to change the appearance of a part of the line series;
     *  - When we have an axis range.
     */
    public $segments;

    /**
     * @var float Horizontal tension setting of the line (0-1).
     *
     * Can be used to create smoothed lines. It works like this:
     *
     * Accepted values are in the range between 0 and 1. The biggest value (1) will mean that the "tension" is very
     * high, so the line is maximally attracted to the points it connects, hence the straight line.
     *
     * Using smaller numbers will "relax" the tension, creating some curving.
     *
     * The smaller the tension setting, the more relaxed the line and the more wide the curve.
     *
     * This setting is for horizontal tension, meaning the curve will bend in such way that it never goes below or
     * above connecting points. To enable vertical bending as well, use `tensionY`.
     * Defaults to `1`
     */
    public $tensionX;

    /**
     * @var float Can be used to create smoothed lines. It works like this:
     *
     * Accepted values are in the range between 0 and 1. The biggest value (1) will mean that the "tension" is very
     * high, so the line is maximally attracted to the points it connects, hence the straight line.
     *
     * Using smaller numbers will "relax" the tension, creating some curving.
     *
     * The smaller the tension setting, the more relaxed the line and the more wide the curve.
     *
     * This setting is for vertical tension, meaning the curve might bend in such way that it will go below or above
     * connected points.
     * Combine this setting with tensionX to create beautifully looking smoothed line series.
     * Defaults to `1`
     */
    public $tensionY;
}