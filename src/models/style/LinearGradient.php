<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\models\style;


use simialbi\yii2\chart\models\BaseObject;
use simialbi\yii2\chart\models\svg\Group;

class LinearGradient extends BaseObject
{
    const NAME_SPACE = 'am4core';

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