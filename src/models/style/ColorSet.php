<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\models\style;


use simialbi\yii2\chart\models\BaseObject;

class ColorSet extends BaseObject
{
    const NAME_SPACE = 'am4core';

    /**
     * @var Color A base color. If there are no colors pre-set in the color list, ColorSet will use this color as a
     * base when generating new ones, applying `stepOptions` and `passOptions` to this base color.
     * Defaults to
     * ```php
     * new Color([
     *     'r' => 103,
     *     'g' => 183,
     *     'b' => 220
     * ]);
     * ```
     */
    public $baseColor;

    /**
     * @var Color[] Sets a list of pre-defined colors to use for the iterator.
     *
     * Returns current list of colors.
     *
     * If there are none, a new list of colors is generated, based on various ColorSet settings.
     */
    public $list;

    /**
     * @var float Do not let the "lightness" of generated color to get above this threshold.
     * Defaults to `0.9`
     */
    public $maxLightness;

    /**
     * @var integer A number of colors to generate in one "pass".
     *
     * This setting can be automatically overridden, if ColorSet has a list of pre-set colors. In such case ColorSet
     * will generate exactly the same number of colors with each pass as there were colors in original set.
     * Defaults to `20`
     */
    public $minColors;

    /**
     * @var float Do not let the "lightness" of generated color to fall below this threshold.
     * Defaults to `0.2`
     */
    public $minLightness;

    /**
     * @var boolean Re-use same colors in the pre-set list, when ColorSet runs out of colors, rather than start
     * generating new ones. Defaults to `false`
     */
    public $reuse;

    /**
     * @var float Saturation (0-1) of colors. This will change saturation of all colors of color set.
     *
     * It is recommended to set this in theme, as changing it at run time won't make the items to redraw and change
     * color. Defaults to `1`
     */
    public $saturation;

    /**
     * @var boolean Randomly shuffle generated colors.
     * Defaults to `false`
     */
    public $shuffle;

    /**
     * @var integer An index increment to use when iterating through color list.
     *
     * Default is 1, which means returning each and every color.
     *
     * Setting it to a bigger number will make ColorSet `next()` iterator skip some colors.
     *
     * E.g. setting to 2, will return every second color in the list.
     *
     * This is useful, when the color list has colors that are too close each other for contrast.
     *
     * However, having bigger number will mean that `next()` iterator will go through the list quicker, and the
     * generator will kick sooner. Defaults to `1`
     */
    public $step;

    /**
     * @var array Modifications to apply with each new generated color.
     * Valid properties:
     *  - brighten: float
     *  - hue: float
     *  - lighten: float
     *  - lightness: float
     *  - saturation: float
     */
    public $stepOptions;

    /**
     * @var boolean When colors are generated, based on `stepOptions`, each generated color gets either lighter
     * or darker.
     *
     * If this is set to `true`, color generator will switch to opposing spectrum when
     * reaching `minLightness` or `maxLightness`.
     *
     * E.g. if we start off with a red color, then gradually generate lighter colors through rose shades, then
     * switch back to dark red and gradually increase the lightness of it until it reaches the starting red.
     *
     * If set to `false` it will stop there and cap lightness at whatever level we hit
     * `minLightness` or `maxLightness`, which may result in a number of the same colors.
     */
    public $wrap;
}