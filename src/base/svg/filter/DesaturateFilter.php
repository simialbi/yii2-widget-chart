<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\base\svg\filter;


use simialbi\yii2\chart\base\svg\Filter;

class DesaturateFilter extends Filter
{
    /**
     * @var float Saturation.
     *
     * - 0: completely desaturated.
     * - 1: fully saturated (gray).
     */
    public $saturation;
}