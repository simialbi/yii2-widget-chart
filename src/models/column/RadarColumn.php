<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace simialbi\yii2\chart\models\column;


use simialbi\yii2\chart\models\Column;
use simialbi\yii2\chart\models\geometry\Slice;

/**
 * Class used to creates RadarColumns.
 * @package simialbi\yii2\chart\models\column
 */
class RadarColumn extends Column
{
    /**
     * @var Slice Radar column element
     */
    public $radarColumn;
}