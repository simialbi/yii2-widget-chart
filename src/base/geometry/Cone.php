<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\base\geometry;


use simialbi\yii2\chart\base\Sprite;

class Cone extends Sprite
{
    /**
     * @var integer Angle of the point of view to the 3D element. (0-360)
     * Defaults to `30`
     */
    public $angle = 30;

    /**
     * @var array Gradient for the fill of the body.
     */
    public $bodyFillModifier;

    /**
     * @var string Orientation of the cone
     * One of:
     *  - [[self::ORIENTATION_HORIZONTAL]]
     *  - [[ORIENTATION_VERTICAL]]
     * Defaults to [[self::ORIENTATION_VERTICAL]]
     */
    public $orientation = self::ORIENTATION_VERTICAL;

    /**
     * @var float A relative radius of the cone's bottom (base). (0-1)
     *
     * It is relevant to the inner width or height of the element.
     * Defaults to `1`
     */
    public $radius = 1;

    /**
     * @var float A relative radius of the cone's top (tip). (0-1)
     *
     * It is relevant to the inner width or height of the element.
     * Defaults to `0`
     */
    public $topRadius = 0;
}