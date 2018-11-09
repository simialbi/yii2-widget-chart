<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\base\svg\filter;


use simialbi\yii2\chart\base\svg\Filter;

class LightenFilter extends Filter
{
    /**
     * @var float Lightness of the target colors.
     *
     * If `lightness` is a positive number, the filter will make all colors lighter.
     * If `lightness` is negative, colors will be darkened.
     */
    public $lightness;
}