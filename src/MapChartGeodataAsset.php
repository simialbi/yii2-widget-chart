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
     * {@inheritdoc}
     */
    public $sourcePath = null;

    /**
     * {@inheritdoc}
     */
    public $baseUrl = 'https://www.amcharts.com/lib/4/geodata';

    /**
     * {@inheritdoc}
     */
    public $js = [
        'worldLow.js'
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'simialbi\yii2\chart\MapChartAsset'
    ];
}