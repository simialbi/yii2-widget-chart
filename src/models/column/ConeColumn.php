<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace simialbi\yii2\chart\models\column;


use simialbi\yii2\chart\models\Column;
use simialbi\yii2\chart\models\geometry\Cone;

/**
 * Class used to creates ConeColumns.
 * @package simialbi\yii2\chart\models\column
 */
class ConeColumn extends Column
{
    /**
     * @var Cone Cone column element
     */
    public $coneColumn;
}