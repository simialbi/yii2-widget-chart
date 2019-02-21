<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace simialbi\yii2\chart;

class MapChartAsset extends ChartAsset
{
    /**
     * {@inheritdoc}
     */
    public $js = [
        'core.js',
        'charts.js',
        'maps.js'
    ];
}