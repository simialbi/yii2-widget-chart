<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace simialbi\yii2\chart\models\legend;


use simialbi\yii2\chart\models\BaseObject;

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