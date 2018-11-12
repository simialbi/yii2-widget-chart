<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\models;


use simialbi\yii2\chart\models\geometry\RoundedRectangle;

class Column extends Sprite
{
    const NAME_SPACE = 'am4charts';

    /**
     * @var RoundedRectangle column element
     */
    public $column;
}