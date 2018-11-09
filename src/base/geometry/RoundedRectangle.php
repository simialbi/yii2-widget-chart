<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\base\geometry;


use simialbi\yii2\chart\base\Sprite;

class RoundedRectangle extends Sprite
{
    /**
     * @var integer Radius of the bottom-left corner in pixels.
     * Defaults to `3`
     */
    public $cornerRadiusBottomLeft = 3;

    /**
     * @var integer Radius of the bottom-right corner in pixels.
     * Defaults to `3`
     */
    public $cornerRadiusBottomRight = 3;

    /**
     * @var integer Radius of the top-left corner in pixels.
     * Defaults to `3`
     */
    public $cornerRadiusTopLeft = 3;

    /**
     * @var integer Radius of the top-right corner in pixels.
     * Defaults to `3`
     */
    public $cornerRadiusTopRight = 3;
}