<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\base\svg\filter;


use simialbi\yii2\chart\base\style\Color;
use simialbi\yii2\chart\base\svg\Filter;

class FocusFilter extends Filter
{
    /**
     * @var float Opacity of the outline. (0-1)
     */
    public $opacity;

    /**
     * @var Color Stroke (outline) color.
     */
    public $stroke;

    /**
     * @var integer Stroke (outline) thickness in pixels.
     */
    public $strokeWidth;
}