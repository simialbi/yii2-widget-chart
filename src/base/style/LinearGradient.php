<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\base\style;


use simialbi\yii2\chart\base\BaseObject;
use simialbi\yii2\chart\base\svg\Group;

class LinearGradient extends BaseObject
{
    /**
     * @var Group An SVG `<group>` element used to draw gradient.
     */
    public $element;

    /**
     * @var integer Pattern rotation in degrees.
     */
    public $rotation;

    /**
     * @var GradientStop[] A list of color stops in the gradient.
     */
    public $stops;
}