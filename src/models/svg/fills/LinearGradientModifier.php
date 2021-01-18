<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\models\svg\fills;

use simialbi\yii2\chart\models\style\LinearGradient;

/**
 * {@inheritDoc}
 * @package simialbi\yii2\chart\models\svg\fills
 */
class LinearGradientModifier extends GradientModifier
{
    /**
     * @var LinearGradient A reference to the gradient instance that this modifier is used for.
     */
    public $gradient;
}
