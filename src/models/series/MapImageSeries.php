<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\models\series;


use simialbi\yii2\chart\models\map\MapImage;

class MapImageSeries extends MapSeries
{
    /**
     * @var MapImage[] A list of map images in the series.
     */
    public $mapImages;
}