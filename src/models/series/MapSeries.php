<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace simialbi\yii2\chart\models\series;


use simialbi\yii2\chart\models\DataSource;
use simialbi\yii2\chart\models\Series;

class MapSeries extends Series
{
    const NAME_SPACE = 'am4maps';

    /**
     * @var integer The longitude of the East-most point in the series. (out of all elements)
     */
    public $east;

    /**
     * @var string[] A list of object ids that should be excluded from the series.
     *
     * E.g. you want to include all of the areas from a GeoJSON map, except Antarctica.
     *
     * You'd leave `include` empty, and set `exclude = ["AQ"]`.
     */
    public $exclude;

    /**
     * @var array Map data in GeoJSON format
     *
     * The series supports the following GeoJSON objects: `Point`, `LineString`, `Polygon`, `MultiPoint`,
     * `MultiLineString`, and `MultiPolygon`.
     *
     * @see http://geojson.org/ Official GeoJSON format specification
     */
    public $geodata;

    /**
     * @var DataSource Sets a DataSource to be used for loading Component's data.
     *
     * Returns a DataSource specifically for loading Component's data.
     */
    public $geodataSource;

    /**
     * @var string[] A list of object ids that should be explictly included in the series.
     *
     * If this is not set, the series will automatically include all of the objects, available in the GeoJSON map.
     * (minus the ones listed in `exclude`) If you need to display only specific objects, use include.
     * E.g.: `include = ["FR", "ES", "DE"];`
     * The above will show only France, Spain, and Germany out of the whole map.
     */
    public $include;

    /**
     * @var integer The latitude of the North-most point in the series. (out of all elements)
     */
    public $north;

    /**
     * @var integer The latitude of the South-most point in the series. (out of all elements)
     */
    public $south;

    /**
     * @var boolean Should the map extract all the data about element from the GeoJSON?
     *
     * This is especially relevant for MapPolygonSeries. If not set to `true` polygon series will need to contain
     * geographical data in itself in order to be drawn.
     *
     * If this is set to `true`, series will try to extract data for its objects from either chart-level `geodata`
     * or from series' `geodata` which holds map infor in GeoJSON format. Defaults to `false`
     */
    public $useGeodata;

    /**
     * @var integer The longitude of the West-most point in the series. (out of all elements)
     */
    public $west;
}