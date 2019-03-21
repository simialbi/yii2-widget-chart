<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\models\button;

use simialbi\yii2\chart\models\Button;

/**
 * Creates a draggable resize/grip button.
 * @package simialbi\yii2\chart\models\button
 */
class ResizeButton extends Button
{
    /**
     * @var string Use for setting of direction (orientation) of the resize button.
     *
     * Available options: [[self::ORIENTATION_HORIZONTAL]], [[self::ORIENTATION_VERTICAL]].
     */
    public $orientation;
}
