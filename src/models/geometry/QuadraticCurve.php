<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\models\geometry;

/**
 * Draws a waved line.
 * @package simialbi\yii2\chart\models\geometry
 */
class QuadraticCurve extends Line
{
    /**
     * @var integer X coordinate of control point.
     */
    public $cpx;

    /**
     * @var integer Y coordinate of control point.
     */
    public $cpy;
}