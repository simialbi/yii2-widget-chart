<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\base\geometry;


use simialbi\yii2\chart\base\Sprite;

class Rectangle3D extends Sprite
{
    /**
     * @var integer Angle of the point of view to the 3D element. (0-360)
     * Defaults to `30`
     */
    public $angle = 30;

    /**
     * @var integer Depth (Z dimension) of the 3D rectangle in pixels.
     * Defaults to `30`
     */
    public $depth = 30;
}