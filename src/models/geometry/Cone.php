<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace simialbi\yii2\chart\models\geometry;


use simialbi\yii2\chart\models\Sprite;
use simialbi\yii2\chart\models\svg\fills\LinearGradientModifier;

/**
 * Builds a round cone/cylinder.
 * @package simialbi\yii2\chart\models\geometry
 */
class Cone extends Sprite
{
    /**
     * @var integer Angle of the point of view to the 3D element. (0-360)
     * Defaults to `30`
     */
    public $angle;

    /**
     * @var LinearGradientModifier Gradient for the fill of the body.
     */
    public $bodyFillModifier;

    /**
     * @var string Orientation of the cone
     * One of:
     *  - [[self::ORIENTATION_HORIZONTAL]]
     *  - [[ORIENTATION_VERTICAL]]
     * Defaults to [[self::ORIENTATION_VERTICAL]]
     */
    public $orientation;

    /**
     * @var float A relative radius of the cone's bottom (models). (0-1)
     *
     * It is relevant to the inner width or height of the element.
     * Defaults to `1`
     */
    public $radius;

    /**
     * @var float A relative radius of the cone's top (tip). (0-1)
     *
     * It is relevant to the inner width or height of the element.
     * Defaults to `0`
     */
    public $topRadius;
}