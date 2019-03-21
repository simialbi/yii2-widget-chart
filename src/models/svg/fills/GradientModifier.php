<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\models\svg\fills;

use simialbi\yii2\chart\models\style\LinearGradient;
use simialbi\yii2\chart\models\style\RadialGradient;

/**
 * This class can be used to modify linear gradient steps, changing visual properties like lightness, brightness,
 * opacity of each set.
 *
 * It can also set offsets for each gradient step.
 *
 * E.g. if I want to fill a columns in a column series to be a solid fill from top to 80% of height, then gradually
 * fades out, I can use the following gradient modifier as a `$fillModifier`:
 *
 * ```php
 * $fillModifier = new GradientModifier();
 * $fillModifier->opacities = [1, 1, 0];
 * $fillModifier->offsets = [0, 0.8, 1];
 * $columnSeries->columns->template->fillModifier = $fillModifier;
 * ```
 * @package simialbi\yii2\chart\models\svg\fills
 */
class GradientModifier extends ColorModifier
{
    /**
     * @var float[] An array of brightness values for each step.
     */
    public $brightnesses;

    /**
     * @var LinearGradient|RadialGradient A reference to the gradient instance that this modifier is used for.
     */
    public $gradient;

    /**
     * @var float[] An array of lightness values for each step.
     */
    public $lightnesses;
    /**
     * @var float[] An array of relative position (0-1) for each step.
     *
     * If not set, all steps will be of equal relative length.
     */
    public $offsets;
    /**
     * @var float[] An array of opacity values for each step.
     */
    public $opacities;
}