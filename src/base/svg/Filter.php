<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\base\svg;


use simialbi\yii2\chart\base\BaseObject;

class Filter extends BaseObject
{
    /**
     * @var Group An SVG <group> element hold primitive (effect) definitions.
     */
    public $filterElement;

    /**
     * @var integer Height of the filter element in pixels. Defaults to `120`
     */
    public $height = 120;

    /**
     * @var boolean Identifies if this object is a "template" and should not be treated as real object that is drawn
     * or actually used in the chart. Defaults to `false`
     */
    public $isTemplate = false;

    /**
     * @var boolean If a filter is non scaling, it will look the same even if the sprite is scaled, otherwise filter
     * will scale together with a Sprite. Defaults to `false`
     */
    public $nonScaling = false;

    /**
     * @var integer Width of the filter element in pixels. Defaults to `120`
     */
    public $width = 120;
}