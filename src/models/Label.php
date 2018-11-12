<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\models;


class Label extends Sprite
{
    const TEXT_ALIGN_START = 'start';
    const TEXT_ALIGN_MIDDLE = 'middle';
    const TEXT_ALIGN_END = 'end';

    /**
     * @var string Ellipsis character to use if `truncate` is enabled. Defaults to "..."
     */
    public $ellipsis;

    /**
     * @var boolean If `truncate` is enabled, should Label try to break only on full words (`true`),
     * or whenever needed, including middle of the word (`false`). Defaults to `true`
     */
    public $fullWords;

    /**
     * @var boolean Indicates whether the whole text should be hidden if it does not fit into its allotted space.
     */
    public $hideOversized;

    /**
     * @var string Raw HTML to be used as text.
     *
     * NOTE: HTML text is subject to browser support. It relies on browsers supporting SVG `foreignObject` nodes.
     * Some browsers (read IEs) do not support it. On those browsers, the text will fall back to basic SVG text,
     * striping out all HTML markup and styling that goes with it.
     *
     * @see https://developer.mozilla.org/en/docs/Web/SVG/Element/foreignObject#Browser_compatibility
     */
    public $html;

    /**
     * @var boolean If set to `true` square-bracket formatting blocks will be treated as regular text.
     * Defaults to `true`
     */
    public $ignoreFormatting;

    /**
     * @var boolean Forces the text to be selectable. This setting will be ignored if the object has some kind of
     * interaction attached to it, such as it is `draggable`, `swipeable`, `resizable`. Defaults to `false`
     */
    public $selectable;

    /**
     * @var string An SVG text.
     *
     * Please note that setting `html` will override this setting if browser supports `foreignObject` in SGV, such as
     * most modern browsers excluding IEs.
     */
    public $text;

    /**
     * @var string Horizontal text alignment.
     *  Available choices:
     *   - [[self::TEXT_ALIGN_START]]
     *   - [[self::TEXT_ALIGN_MIDDLE]]
     *   - [[self::TEXT_ALIGN_END]]
     */
    public $textAlign;

    /**
     * @var boolean Indicates if text lines need to be truncated if they do not fit, using configurable `ellipsis`
     * string.
     *
     * `truncate` overrides `wrap` if both are set to `true`.
     *
     * NOTE: For HTML text, this setting won't trigger a parser and actual line truncation with ellipsis. It will just
     * hide everything that goes outside the label.
     */
    public $truncate;

    /**
     * @var boolean Enables or disables autowrapping of text.
     */
    public $wrap;
}