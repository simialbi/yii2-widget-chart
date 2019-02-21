<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace simialbi\yii2\chart\models\column;


use simialbi\yii2\chart\models\Column;
use simialbi\yii2\chart\models\geometry\Rectangle3D;

class Column3D extends Column
{
    /**
     * @var Rectangle3D column3D element
     */
    public $column3D;
}