<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace simialbi\yii2\chart\models\map;


use simialbi\yii2\chart\models\series\MapLineSeries;

class MapLine extends MapObject
{
    /**
     * @var MapLineObject A MapLineObject to use as an option arrowhead on the line.
     *
     * Just accessing this property will create a default arrowhead on the line automatically.
     */
    public $arrow;

    /**
     * @var MapImage[]|string[] Instead of setting longitudes/latitudes you can set an array of images
     * which will be connected by the line.
     *
     * Parameter is an array that can hold string id's to of the images, or references to actual MapImage objects.
     */
    public $imagesToConnect;

    /**
     * @var array A line visual element.
     */
    public $line;

    /**
     * @var array Set of lines.
     */
    public $multiGeoLine;

    /**
     * @var MapLineSeries A map series this object belongs to
     */
    public $series;

    /**
     * @var boolean The line should take the shortest path over the globe.
     *
     * Enabling this will make the line look differently in different projections. Only `MapLine` supports this
     * setting, `MapArc` and `MapSplice` don't.
     * Defaults to `false`
     */
    public $shortestDistance;
}