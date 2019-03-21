<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\models;

use simialbi\yii2\chart\models\button\ResizeButton;

/**
 * Scrollbar is a generic control allowing to select a range of values or pan the selection.
 * @package simialbi\yii2\chart\models
 */
class Scrollbar extends Sprite
{
    /**
     * @var integer Duration in milliseconds of scrollbar animation (happens when user clicks on a
     * background of a scrollbar)
     */
    public $animationDuration;

    /**
     * @var mixed Animation easing function. Defaults to `$ease.cubicOut`
     */
    public $animationEasing;

    /**
     * @var float Relative position (0-1) of the end grip.
     */
    public $end;

    /**
     * @var ResizeButton End grip element. (button)
     */
    public $endGrip;

    /**
     * @var boolean Use this property to set whether grips should be always visible (`false`),
     * or they should just appear on scrollbar hover (`true`).
     */
    public $hideGrips;

    /**
     * @var string Orientation of the scrollbar.
     *
     * Available options: [[self::ORIENTATION_HORIZONTAL]] and [[self::ORIENTATION_VERTICAL]].
     * Defaults to [[self::ORIENTATION_HORIZONTAL]]
     */
    public $orientation;

    /**
     * @var float Relative position (0-1) of the start grip.
     */
    public $start;

    /**
     * @var ResizeButton Start grip element. (button)
     */
    public $startGrip;

    /**
     * @var Button A "thumb" element.
     *
     * It's a draggable square space between the grips, that can be used to pan the seleciton.
     */
    public $thumb;

    /**
     * @var boolean Update the selection when dragging the grips.
     *
     * If set to `false` selection will be updated only when the grip is released. Defaults to `true`
     */
    public $updateWhileMoving;
}
