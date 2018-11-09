<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\base\style;


use simialbi\yii2\chart\base\BaseObject;

class GradientStop extends BaseObject
{
    /**
     * @var Color Color.
     */
    public $color;

    /**
     * @var float Offset defines where in the gradient the color should kick in. Values from 0 to 1 are possible with
     * 0 meaning start, 0.5 half-way through the gradient, etc.
     */
    public $offset;

    /**
     * @var float Transparency of the color. 0 - completely transparent, 1 - fully opaque.
     */
    public $opacity;
}