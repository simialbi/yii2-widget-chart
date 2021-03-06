<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace simialbi\yii2\chart\models\svg\filter;


use simialbi\yii2\chart\models\svg\Filter;

class BlurFilter extends Filter
{
    /**
     * @var float Blur value.
     *
     * The bigger the value, the blurrier the target element will become. Defaults to `1.5`
     */
    public $blur;
}