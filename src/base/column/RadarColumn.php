<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\base\column;


use simialbi\yii2\chart\base\Column;
use simialbi\yii2\chart\base\geometry\Slice;

class RadarColumn extends Column
{
    /**
     * @var Slice Radar column element
     */
    public $radarColumn;
}