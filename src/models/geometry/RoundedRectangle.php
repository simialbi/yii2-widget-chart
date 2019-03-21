<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace simialbi\yii2\chart\models\geometry;


use simialbi\yii2\chart\models\Sprite;

/**
 * Draws a rectangle with rounded corners.
 * @package simialbi\yii2\chart\models\geometry
 */
class RoundedRectangle extends Sprite
{
    /**
     * @var integer Radius of the bottom-left corner in pixels.
     * Defaults to `3`
     */
    public $cornerRadiusBottomLeft;

    /**
     * @var integer Radius of the bottom-right corner in pixels.
     * Defaults to `3`
     */
    public $cornerRadiusBottomRight;

    /**
     * @var integer Radius of the top-left corner in pixels.
     * Defaults to `3`
     */
    public $cornerRadiusTopLeft;

    /**
     * @var integer Radius of the top-right corner in pixels.
     * Defaults to `3`
     */
    public $cornerRadiusTopRight;
}