<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace simialbi\yii2\chart\models\map;


use simialbi\yii2\chart\models\series\MapImageSeries;

class MapImage extends MapObject
{
    /**
     * @var integer Latitude image is placed at.
     */
    public $latitude;

    /**
     * @var integer Longitude image is placed on.
     */
    public $longitude;

    /**
     * @var MapImageSeries A map series this object belongs to.
     */
    public $series;
}