<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\models\data;

use simialbi\yii2\chart\models\BaseObject;

/**
 * Base class for the data parsers.
 * @package simialbi\yii2\chart\models
 */
class DataParser extends BaseObject
{
    const NAME_SPACE = 'am4core';

    /**
     * @var string Content type, relevant to the specific format.
     */
    public $contentType;

    /**
     * @var array Parser options.
     *
     * Supported fields:
     *  - dataFields string[]: List of fields in data that need to be treated as Dates, i.e. converted to Date
     *                         objects from whatever source format they are currently in.
     *  - dateFormat string: Override date format set in dateFormatter.
     *  - dateFormatter DateFormatter: An instance of DateFormatter to use when parsing string-based dates. If
     *                                 it's not set, the parser will create it's own instance of DateFormatter,
     *                                 should any date parsing required. (dateFields is set)Unless dateFormat is
     *                                 set in parser options, the parser will try to look for dateFormat in dateFormatter.
     *  - emptyAs mixed: Empty values (e.g. empty strings, null, etc.) will be replaced with this.
     *  - numberFields string[]: List of fields in data that hold numeric values. Parser will try to convert the value
     *                           in those fields to a number.
     */
    public $options;
}
