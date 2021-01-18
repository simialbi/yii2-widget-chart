<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace simialbi\yii2\chart;

use simialbi\yii2\web\AssetBundle;

class MapChartGeodataAsset extends AssetBundle
{
    /**
     * {@inheritDoc}
     */
    public $sourcePath = null;

    /**
     * {@inheritDoc}
     */
    public $baseUrl = 'https://www.amcharts.com/lib/4/geodata';

    /**
     * {@inheritDoc}
     */
    public $js = [
        'worldLow.js'
    ];

    /**
     * {@inheritDoc}
     */
    public $depends = [
        'simialbi\yii2\chart\MapChartAsset'
    ];
}