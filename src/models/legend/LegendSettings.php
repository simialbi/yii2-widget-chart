<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace simialbi\yii2\chart\models\legend;


use simialbi\yii2\chart\models\BaseObject;

/**
 * Defines a class that carries legend settings.
 *
 * A legend might change its settings dynamically. Legend can also be shared by several elements, requiring different settings.
 *
 * Having legend's settings in a separate object is a good way to "hot swap" a set of settings for the legend.
 *
 * @package simialbi\yii2\chart\models\legend
 */
class LegendSettings extends BaseObject
{
    /**
     * @var boolean Should marker be created for each legend item. Defaults to `true`
     */
    public $createMarker;

    /**
     * @var string A text template for the label part of the legend item.
     */
    public $itemLabelText;

    /**
     * @var string A text template for the value part of the legend item.
     */
    public $itemValueText;

    /**
     * @var string Label text
     * @todo Description
     */
    public $labelText;

    /**
     * @var string Value text
     * @todo Description
     */
    public $valueText;
}