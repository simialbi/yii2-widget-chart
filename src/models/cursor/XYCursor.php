<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\models\cursor;


use simialbi\yii2\chart\models\Axis;
use simialbi\yii2\chart\models\Cursor;
use simialbi\yii2\chart\models\series\XYSeries;
use simialbi\yii2\chart\models\Sprite;

class XYCursor extends Cursor
{
    /**
     * @var string Cursor's behavior when it's moved with pointer down:
     *
     * Behavior:
     * - "zoomX": zooms horizontally;
     * - "zoomY": zooms vertically;
     * - "zoomXY": zooms both horizontally and vertically;
     * - "selectX": selects a range horizontally;
     * - "selectY": selects a range vertically;
     * - "selectXY": selects a range both horizontally and vertically;
     * - "panX": moves (pans) current selection horizontally;
     * - "panY": moves (pans) current selection vertically;
     * - "panXY": moves (pans) current selection both horizontally and vertically;
     * - "none": does nothing with pointer down.
     *
     * E.g. "zoomXY" will mean that pressing a mouse (or touching) over plot area and dragging it will start zooming
     * the chart.
     */
    public $behavior;

    /**
     * @var boolean Cursor's horizontal line is expanded to take full width of the related Axis' cell/category.
     *
     * > NOTE: this setting will work properly if `xAxis` is set and only in case `xAxis` is [[CategoryAxis]] or
     * [[DateAxis]].
     */
    public $fullWidthLineX;

    /**
     * @var boolean Cursor's vertical line is expanded to take full width of the related Axis' cell/category.
     *
     * > NOTE: this setting will work properly if `yAxis` is set and only in case `yAxis` is [[CategoryAxis]] or
     * [[DateAxis]]
     */
    public $fullWidthLineY;

    /**
     * @var Sprite A Line element to use for X axis.
     */
    public $lineX;

    /**
     * @var Sprite A Line element to use for Y axis.
     */
    public $lineY;

    /**
     * @var float If cursor behavior is panX or panY, we allow to pan plot out of it's max bounds for a better
     * user experience.
     *
     * This setting specifies relative value by how much we can pan out the plot
     */
    public $maxPanOut;

    /**
     * @var Sprite A selection element ([[Sprite]]).
     */
    public $selection;

    /**
     * @var XYSeries Specifies to which series cursor lines should be snapped. Works when one of the axis is
     * [[DateAxis]] or [[CategoryAxis]]. Won't work if both axes are [[ValueAxis]].
     */
    public $snapToSeries;

    /**
     * @var Axis A reference to X [[Axis]].
     *
     * An XY cursor can live without `xAxis` set. You set `xAxis` for cursor when you have axis tooltip enabled and you
     * want cursor line to be at the same position as tooltip.
     *
     * This works with [[CategoryAxis]] and [[DateAxis]] but not with [[ValueAxis]].
     */
    public $xAxis;

    /**
     * @var Range A range of current horizontal selection.
     */
    public $xRange;

    /**
     * @var Axis A reference to Y [[Axis]].
     *
     * An XY cursor can live without `yAxis` set. You set `yAxis` for cursor when you have axis tooltip enabled and you
     * want cursor line to be at the same position as tooltip.
     *
     * This works with [[CategoryAxis]] and [[DateAxis]] but not with [[ValueAxis]].
     */
    public $yAxis;

    /**
     * @var Range A range of current horizontal selection.
     */
    public $yRange;
}
