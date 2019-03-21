<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\models\data;

/**
 * A parser for JSON.
 * @package simialbi\yii2\chart\models\data
 */
class JSONParser extends DataParser
{
    /**
     * @var string Content-type suitable for JSON format. Defaults to `application/json`
     */
    public $contentType;
}
