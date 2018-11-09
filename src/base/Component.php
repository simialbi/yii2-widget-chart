<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\base;


class Component extends Sprite
{
    /**
     * @var array Sets source (raw) data for the element. The "data" is always an array of objects.
     *
     * Returns element's source (raw) data.
     */
    public $data = [];

    /**
     * @var array Holds data field names.
     *
     * Data fields define connection beween DataItem and actual properties in raw data.
     */
    public $dataFields = [];

    /**
     * @var Component A `Component` which provides data to this component (like Chart provides data for Series).
     */
    public $dataProvider;

    /**
     * @var DataSource A `DataSource` to be used for loading Component's data.
     */
    public $dataSource;
}