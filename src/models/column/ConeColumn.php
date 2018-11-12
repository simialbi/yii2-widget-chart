<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\models\column;


use simialbi\yii2\chart\models\Column;
use simialbi\yii2\chart\models\geometry\Cone;

class ConeColumn extends Column
{
    /**
     * @var Cone Cone column element
     */
    public $coneColumn;
}