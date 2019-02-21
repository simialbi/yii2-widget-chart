<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace simialbi\yii2\chart\models\style;


use simialbi\yii2\chart\models\BaseObject;
use yii\helpers\Json;

class Color extends BaseObject
{
    const NAME_SPACE = 'am4core';

    /**
     * @var float Set alpha (transparency) of the color.
     *
     * Returns current transparency.
     */
    public $alpha;

    /**
     * @var static Returns a either light or dark color that contrasts specifically with this color.
     *
     * Uses properties `darkColor` (default black) and `lightColor` (default white).
     *
     * Useful when determining which color label should be on a colored background, so that it stands out.
     */
    public $alternative;

    /**
     * @var static Sets "dark" color. Used when determining contrasting color.
     *
     * Returns current dark color setting.
     */
    public $darkColor;

    /**
     * @var string Returns color hex value string, e.g. "#FF0000".
     */
    public $hex;

    /**
     * @var static Sets "light" color. Used when determining contrasting color.
     *
     * Returns current light color setting.
     */
    public $lightColor;

    /**
     * @var array Return array representation of the color:
     * ```php
     * [
     *     'r' => 255,
     *     'g' => 0,
     *     'b' => 0
     * ]
     * ```
     */
    public $rgb;

    /**
     * @var string Returns an `rgba()` representation of the color, e.g.:
     * `rgba(255, 0, 0, 0.5)`
     */
    public $rgba;

    public function getExpression()
    {
        if (isset($this->hex)) {
            return static::NAME_SPACE . ".color('{$this->hex}')";
        } elseif ($this->rgb) {
            $rgb = Json::htmlEncode($this->rgb);
            return static::NAME_SPACE . ".color('{$rgb}')";
        } elseif ($this->rgba) {
            return static::NAME_SPACE . ".color('{$this->rgba}')";
        }

        return static::NAME_SPACE . ".color()";
    }
}