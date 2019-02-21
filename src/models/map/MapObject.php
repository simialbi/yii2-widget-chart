<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace simialbi\yii2\chart\models\map;


use simialbi\yii2\chart\models\series\MapSeries;
use simialbi\yii2\chart\models\Sprite;

class MapObject extends Sprite
{
    const NAME_SPACE = 'am4maps';

    /**
     * @var MapSeries A map series this object belongs to.
     */
    public $series;
}