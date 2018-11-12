<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\models\map;


use simialbi\yii2\chart\models\series\MapPolygonSeries;

class MapPolygon extends MapObject
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
     * @var array Set of coordinates for the polygon.
     */
    public $multiGeoPolygon;

    /**
     * @var array A visual polygon element.
     */
    public $polygon;

    /**
     * @var MapPolygonSeries A map series this object belongs to.
     */
    public $series;
}