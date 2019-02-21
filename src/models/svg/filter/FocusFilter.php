<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace simialbi\yii2\chart\models\svg\filter;


use simialbi\yii2\chart\models\style\Color;
use simialbi\yii2\chart\models\svg\Filter;

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