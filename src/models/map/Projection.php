<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\models\map;


use simialbi\yii2\chart\models\BaseObject;

class Projection extends BaseObject
{
    const NAME_SPACE = 'am4maps.projections';

    /**
     * @var float Defaults to `0`
     */
    public $deltaGamma;
    /**
     * @var float Defaults to `0`
     */
    public $deltaLatitude;
    /**
     * @var float Defaults to `0`
     */
    public $deltaLongitude;
    /**
     * @var float Defaults to `1`
     */
    public $scale;
}