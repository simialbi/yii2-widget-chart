<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\base\style;


use simialbi\yii2\chart\base\BaseObject;

class RadialGradient extends BaseObject
{
    /**
     * @var integer|float Center x coordinate of the gradient
     */
    public $cx;

    /**
     * @var integer|float Center y coordinate of the gradient
     */
    public $cy;

    /**
     * @var integer|float x coordinate of the focal point of a gradient
     */
    public $fx;

    /**
     * @var integer|float y coordinate of the focal point of a gradient
     */
    public $fy;

    /**
     * @var GradientStop[] A list of color stops in the gradient.
     */
    public $stops;
}