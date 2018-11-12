<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\models\svg\filter;


use simialbi\yii2\chart\models\style\Color;
use simialbi\yii2\chart\models\svg\Filter;

class ColorizeFilter extends Filter
{
    /**
     * @var Color Target color to apply to the element.
     *
     * Depending on the intensity, all colors of the target element will steer towards this color.
     *
     * E.g. setting to [[simialbi\yii2\chart\models\style\Color('greener')]] will make all colors greener.
     */
    public $color;

    /**
     * @var float Intensity of the color (0-1).
     *
     * The bigger the number the more of a color target's colors will become.
     *
     * - 0: the colors will remain as they are.
     * - 1: all colors will become the target color.
     *
     * Defaults to `1`
     */
    public $intensity;
}