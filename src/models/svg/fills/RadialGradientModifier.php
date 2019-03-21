<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\models\svg\fills;

use simialbi\yii2\chart\models\style\RadialGradient;

/**
 * {@inheritdoc}
 * @package simialbi\yii2\chart\models\svg\fills
 */
class RadialGradientModifier extends GradientModifier
{
    /**
     * @var RadialGradient A reference to the gradient instance that this modifier is used for.
     */
    public $gradient;
}
