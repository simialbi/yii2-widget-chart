<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\models\geometry;


use simialbi\yii2\chart\models\Sprite;

/**
 * Draws a line.
 * @package simialbi\yii2\chart\models\geometry
 */
class Line extends Sprite
{
    /**
     * @var integer X coordinate of first end.
     */
    public $x1;

    /**
     * @var integer X coordinate of second end.
     */
    public $x2;

    /**
     * @var integer Y coordinate of first end.
     */
    public $y1;

    /**
     * @var integer Y coordinate of second end.
     */
    public $y2;
}
