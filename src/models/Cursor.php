<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\models;


class Cursor extends Sprite
{
    const NAME_SPACE = 'am4charts';

    /**
     * @var integer Relative horizontal position.
     */
    public $xPosition;

    /**
     * @var integer Relative vertical position.
     */
    public $yPosition;
}
