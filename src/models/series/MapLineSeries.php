<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace simialbi\yii2\chart\models\series;


use simialbi\yii2\chart\models\map\MapLine;

class MapLineSeries extends MapSeries
{
    /**
     * @var MapLine[] A list of lines in the series.
     */
    public $mapLines;
}