<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\models;

/**
 * Button class is capable of drawing a simple rectangular button with optionally rounded corners and an icon in it.
 * @package simialbi\yii2\chart\models
 */
class Button extends Sprite
{
    /**
     * @var Sprite A [[Sprite]] to be used as an icon on button.
     */
    public $icon;

    /**
     * @var string Icon position: [[self::POSITION_LEFT]] or [[self::POSITION_RIGHT]].
     */
    public $iconPosition;

    /**
     * @var Label [[Label]] element to be used for text.
     */
    public $label;
}
