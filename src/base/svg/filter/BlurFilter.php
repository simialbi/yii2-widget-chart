<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\base\svg\filter;


use simialbi\yii2\chart\base\svg\Filter;

class BlurFilter extends Filter
{
    /**
     * @var float Blur value.
     *
     * The bigger the value, the blurrier the target element will become. Defaults to `1.5`
     */
    public $blur = 1.5;
}