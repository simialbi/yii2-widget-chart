<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\models\data;

/**
 * A parser for CSV format.
 * @package simialbi\yii2\chart\models\data
 */
class CSVParser extends DataParser
{
    /**
     * @var string Content-type suitable for CSV format. Defaults to `text/csv`
     */
    public $contentType;
}