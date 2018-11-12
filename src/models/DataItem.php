<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\models;


class DataItem extends BaseObject
{
    const NAME_SPACE = 'am4core';

    /**
     * @var array A list of `Animation` objects currently mutating Data Item's values.
     */
    public $animations;

    /**
     * @var array An array containing categories.
     */
    public $categories;

    /**
     * @var mixed Sets to a reference to an original object from Component's data.
     *
     * A reference to an original object in Component's data, that this Data Item is derived from.
     */
    public $dataContext;

    /**
     * @var array An array containing dates.
     */
    public $dates;

    /**
     * @var integer Depth of the Data Item.
     *
     * In nested data structures, like TreeMap, this indicates the level this data point is at, in relation to the
     * parent Data Item.
     */
    public $depth;

    /**
     * @var boolean Indicates whether Data Item has any properties set.
     *
     * If it does not have any, the code can use this property to check whether they need to apply costly
     * operation of re-applying properties, whenever Data Item-related element is redrawn, e.g. series.
     * Defaults to `false`
     */
    public $hasProperties;

    /**
     * @var boolean Sets hidden flag for data item. Mostly used to initially hide data item.
     *
     * Returns true if this Data Item is currently hidden.
     */
    public $hidden;

    /**
     * @var boolean Sets whether this data point should not be included in the scale and minimum/maximum calculations.
     *
     * Exclude from min/max calculations?
     *
     * E.g. some we may want to exclude a particular data point from influencing
     * [[simialbi\yii2\chart\models\axis\ValueAxis]] scale.
     */
    public $ignoreMinMax;

    /**
     * @var integer Data Item's position index in Component's data.
     */
    public $index;

    /**
     * @var boolean Indicates whether Data Item is currently animiting from visible to hidden state.
     * Defauts to `false`
     */
    public $isHiding;

    /**
     * @var boolean Identifies if this object is a "template" and should not be treated as real object that is drawn
     * or actually used in the chart. Defaults to `false`
     */
    public $isTemplate;

    /**
     * @var array An array containing locations for the Data Item.
     *
     * A location is a position within date or category, or, in some other cases,
     * where there is no single point but rather some period.
     */
    public $locations;

    /**
     * @var float Sets opacity for all Data Item's related elements (Sprites).
     */
    public $opacity;

    /**
     * @var static When we are using a nested data structure, like for example in a TreeMap, this property points to a
     * parent Data Item of this one
     */
    public $parent;

    /**
     * @var array An object containing Data Item specific appearance properties in key-value pairs.
     *
     * Sometimes a single Data Item needs to apply different properties than the rest of the data Series it is part of.
     * E.g. a single column, represented by a Data Item needs to be filled with a different color than the reset of the
     * ColumnSeries it belongs to.
     *
     * That's where Data Item's properties come into play.
     */
    public $properties;

    /**
     * @var array An array containing calculated values.
     */
    public $values;

    /**
     * @var boolean Sets visibility of the Data Item.
     *
     * Returns true if this Data Item is currently visible.
     */
    public $visible;

    /**
     * @var array Current working locations.
     */
    public $workingLocations;
}