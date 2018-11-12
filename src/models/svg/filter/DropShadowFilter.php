<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\models\svg\filter;


use simialbi\yii2\chart\models\style\Color;
use simialbi\yii2\chart\models\svg\Filter;

class DropShadowFilter extends Filter
{
    /**
     * @var integer Blur.
     */
    public $blur;

    /**
     * @var Color Shadow color.
     */
    public $color;

    /**
     * @var integer Horizontal offset in pixels.
     */
    public $dx;

    /**
     * @var integer Vertical offset in pixels.
     */
    public $dy;

    /**
     * @var float Horizontal Opacity of the shadow. (0-1)
     */
    public $opacity;
}