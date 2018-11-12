<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\models\map;


use simialbi\yii2\chart\models\Sprite;

class MapLineObject extends Sprite
{
    const NAME_SPACE = 'am4maps';

    /**
     * @var boolean If set to true, the object will be automatically rotated to face the direction of the line
     * at the specific position.
     *
     * This allows creating images that has its "front" always facing the logical direction of the line.
     * Defaults to `false`
     */
    public $adjustRotation;

    /**
     * @var float Sets object's relative position (0-1) within the line.
     *
     * 0 will place the object at the beginning of the line. 1 - at the end.
     *
     * Any intermediate number will place the object at some point within the line.
     */
    public $position;
}