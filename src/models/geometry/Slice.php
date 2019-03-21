<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace simialbi\yii2\chart\models\geometry;


use simialbi\yii2\chart\models\Sprite;

/**
 * Draws a wedged semi-circle - slice. Usually used for Pie/Donut charts.
 * @package simialbi\yii2\chart\models\geometry
 */
class Slice extends Sprite
{
    /**
     * @var float arc
     * @todo Description
     */
    public $arc;

    /**
     * @var integer Radius of slice's outer corners in pixels.
     */
    public $cornerRadius;

    /**
     * @var integer Radius of slice's inner corners in pixels.
     */
    public $innerCornerRadius;

    /**
     * @var float Inner radius of the slice for creating cut out (donut) slices.
     */
    public $innerRadius;

    /**
     * @var integer Radius of the slice in pixels.
     */
    public $pixelInnerRadius;

    /**
     * @var integer Radius of the slice in pixels.
     */
    public $radius;

    /**
     * @var float Vertical radius for creating skewed slices.
     *
     * This is relevant to `radius`, e.g. 0.5 will set vertical radius to half the radius.
     */
    public $radiusY;

    /**
     * @var float
     * @todo description
     */
    public $shiftRadius;

    /**
     * @var Sprite Main slice element.
     *
     * Slice itself is a [[Container]] so that [[Slice3D]] could extend it and add 3D elements to it.
     */
    public $slice;

    /**
     * @var integer The angle at which left edge of the slice is drawn. (0-360)
     * 0 is to the right of the center.
     */
    public $startAngle;
}