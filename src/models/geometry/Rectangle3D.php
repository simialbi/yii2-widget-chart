<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace simialbi\yii2\chart\models\geometry;


use simialbi\yii2\chart\models\Sprite;

/**
 * Builds a 3D rectangle
 * @package simialbi\yii2\chart\models\geometry
 */
class Rectangle3D extends Sprite
{
    /**
     * @var integer Angle of the point of view to the 3D element. (0-360)
     * Defaults to `30`
     */
    public $angle;

    /**
     * @var integer Depth (Z dimension) of the 3D rectangle in pixels.
     * Defaults to `30`
     */
    public $depth;
}