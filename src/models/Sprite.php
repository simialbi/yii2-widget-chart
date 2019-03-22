<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace simialbi\yii2\chart\models;

use simialbi\yii2\chart\models\geometry\RoundedRectangle;
use simialbi\yii2\chart\models\style\Color;
use simialbi\yii2\chart\models\style\LinearGradient;
use simialbi\yii2\chart\models\style\Pattern;
use simialbi\yii2\chart\models\style\RadialGradient;
use simialbi\yii2\chart\models\svg\Filter;
use simialbi\yii2\chart\models\svg\Group;

/**
 * Class Sprite
 * @package simialbi\yii2\chart\models
 */
class Sprite extends BaseObject
{
    const NAME_SPACE = 'am4core';

    const ALIGN_LEFT = 'left';
    const ALIGN_CENTER = 'center';
    const ALIGN_MIDDLE = 'middle';
    const ALIGN_RIGHT = 'right';
    const ALIGN_NONE = 'none';

    const VALIGN_TOP = 'top';
    const VALIGN_MIDDLE = 'middle';
    const VALIGN_BOTTOM = 'bottom';
    const VALIGN_NONE = 'none';

    const ORIENTATION_HORIZONTAL = 'horizontal';
    const ORIENTATION_VERTICAL = 'vertical';

    const POSITION_LEFT = 'left';
    const POSITION_RIGHT = 'right';

    const ROLE_ALERT = 'alert';
    const ROLE_ALERTDIALOG = 'alertdialog';
    const ROLE_APPLICATION = 'application';
    const ROLE_ARTICLE = 'article';
    const ROLE_BANNER = 'banner';
    const ROLE_BUTTON = 'button';
    const ROLE_CHECKBOX = 'checkbox';
    const ROLE_COLUMNHEADER = 'columnheader';
    const ROLE_COMBOBOX = 'combobox';
    const ROLE_COMMAND = 'command';
    const ROLE_COMPLEMENTARY = 'complementary';
    const ROLE_COMPOSITE = 'composite';
    const ROLE_CONTENTINFO = 'contentinfo';
    const ROLE_DEFINITION = 'definition';
    const ROLE_DIALOG = 'dialog';
    const ROLE_DIRECTORY = 'directory';
    const ROLE_DOCUMENT = 'document';
    const ROLE_FORM = 'form';
    const ROLE_GRID = 'grid';
    const ROLE_GRIDCELL = 'gridcell';
    const ROLE_GROUP = 'group';
    const ROLE_HEADING = 'heading';
    const ROLE_IMG = 'img';
    const ROLE_INPUT = 'input';
    const ROLE_LANDMARK = 'landmark';
    const ROLE_LINK = 'link';
    const ROLE_LIST = 'list';
    const ROLE_LISTBOX = 'listbox';
    const ROLE_LISTITEM = 'listitem';
    const ROLE_LOG = 'log';
    const ROLE_MAIN = 'main';
    const ROLE_MARQUEE = 'marquee';
    const ROLE_MATH = 'math';
    const ROLE_MENU = 'menu';
    const ROLE_MENUBAR = 'menubar';
    const ROLE_MENUITEM = 'menuitem';
    const ROLE_MENUITEMCHECKBOX = 'menuitemcheckbox';
    const ROLE_MENUITEMRADIO = 'menuitemradio';
    const ROLE_NAVIGATION = 'navigation';
    const ROLE_NOTE = 'note';
    const ROLE_OPTION = 'option';
    const ROLE_PRESENTATION = 'presentation';
    const ROLE_PROGRESSBAR = 'progressbar';
    const ROLE_RADIO = 'radio';
    const ROLE_RADIOGROUP = 'radiogroup';
    const ROLE_RANGE = 'range';
    const ROLE_REGION = 'region';
    const ROLE_ROLETYPE = 'roletype';
    const ROLE_ROW = 'row';
    const ROLE_ROWGROUP = 'rowgroup';
    const ROLE_ROWHEADER = 'rowheader';
    const ROLE_SCROLLBAR = 'scrollbar';
    const ROLE_SEARCH = 'search';
    const ROLE_SECTION = 'section';
    const ROLE_SECTIONHEAD = 'sectionhead';
    const ROLE_SELECT = 'select';
    const ROLE_SEPARATOR = 'separator';
    const ROLE_SLIDER = 'slider';
    const ROLE_SPINBUTTON = 'spinbutton';
    const ROLE_STATUS = 'status';
    const ROLE_STRUCTURE = 'structure';
    const ROLE_TAB = 'tab';
    const ROLE_TABLIST = 'tablist';
    const ROLE_TABPANEL = 'tabpanel';
    const ROLE_TEXTBOX = 'textbox';
    const ROLE_TIMER = 'timer';
    const ROLE_TOOLBAR = 'toolbar';
    const ROLE_TOOLTIP = 'tooltip';
    const ROLE_TREE = 'tree';
    const ROLE_TREEGRID = 'treegrid';
    const ROLE_TREEITEM = 'treeitem';
    const ROLE_WIDGET = 'widget';
    const ROLE_WINDOW = 'window';

    const SHAPE_RENDERING_AUTO = 'auto';
    const SHAPE_RENDERING_OPTIMIZE_SPEED = 'optimizeSpeed';
    const SHAPE_RENDERING_CRISP_EDGES = 'crispEdges';
    const SHAPE_RENDERING_GEOMETRIC_PRECISION = 'geometricPrecision';
    const SHAPE_RENDERING_INHERIT = 'inherit';

    const TOOLTIP_POSITION_FIXED = 'fixed';
    const TOOLTIP_POSITION_POINTER = 'pointer';

    const URL_TARGET_BLANK = '_blank';
    const URL_TARGET_SELF = '_self';
    const URL_TARGET_PARENT = '_parent';
    const URL_TARGET_TOP = '_top';

    /**
     * @var string Controls horizontal alignment of the element.
     *
     * This is used by parent Container when layouting its children.
     * One of:
     *  - [[self::ALIGN_LEFT]]
     *  - [[self::ALIGN_CENTER]]
     *  - [[self::ALIGN_RIGHT]]
     *  - [[self::ALIGN_NONE]]
     */
    public $align;

    /**
     * @var array Returns a list elements's animations currently being played.
     *
     * If the list has not been initialized it is created.
     */
    public $animations;

    /**
     * @var boolean Specifies if property changes on this object should be propagated to the objects cloned from
     * this object.
     *
     * This setting affects property changes **after** cloning, since at the moment of cloning all of properties from
     * source object are copied to the clone anyway.
     * Defaults to `false`
     */
    public $applyOnClones;

    /**
     * @var string
     */
    public $baseId;

    /**
     * @var RoundedRectangle An element to use as container background.
     */
    public $background;

    /**
     * @var boolean Indicates if the element is clickable.
     *
     * Some times of the elements, like buttons are clickable by default.
     *
     * Most of the elements are not clickable by default.
     *
     * Use `hit`, `doublehit`, `up`, `down`, `toggled` events to watch for respective click/touch actions.
     */
    public $clickable;

    /**
     * @var array|string A field in data context of element's dataItem that holds config values for this element.
     *
     * This is a very powerful feature, allowing changing virtually any setting, including those for element's
     * children, for the element via data.
     *
     * Example data:
     * ```php
     * [
     *     'value' => 100,
     *     'config' => [
     *         'fill' => '#F00'
     *     ]
     * ]
     * ```
     * If you set element's `configField = "config"`, the element for this specific data point will have a red fill.
     */
    public $configField;

    /**
     * @var array A shortcut to setting mouse cursor when button is pressed down.
     */
    public $cursorDownStyle;

    /**
     * @var array Returns element's cursor options.
     *
     * Cursor options usually define cursor style for various states of the hovered element.
     *
     * Elements inherit cursorOptions from their parents if they don't have them set explicitly.
     *
     * Possible array keys are:
     *  - `defaultStyle`
     *  - `downStyle`
     *  - `overStyle`
     */
    public $cursorOptions;

    /**
     * @var array A shortcut to setting mouse cursor on hover.
     */
    public $cursorOverStyle;

    /**
     * @var DataItem A DataItem to use as element's data source.
     */
    public $dataItem;

    /**
     * @var DateFormatter A DateFormatter instance.
     *
     * This is used to format dates, e.g. on a date axes, balloons, etc.
     *
     * You can set a separate instance of formatter for each individual element. However that would be unnecessary
     * overhead as all elements would automatically inherit formatter from their parents, all the way up to the chart
     * itself.
     */
    public $dateFormatter;

    /**
     * @var boolean Controls if element is disabled.
     *
     * A disabled element is hidden, and is removed from any processing, layout calculations, and generally treated
     * like if it does not existed.
     *
     * The element itself is not destroyed, though. Setting this back to `false`, will "resurrect" the element.
     */
    public $disabled;

    /**
     * @var boolean Controls if the element is draggable.
     */
    public $draggable;

    /**
     * @var mixed A property which you can use to store any data you want.
     */
    public $dummyData;

    /**
     * @var DurationFormatter A `DurationFormatter` instance.
     *
     * This is used to format numbers as durations, e.g. on a value axes.
     *
     * You can set a separate instance of formatter for each individual element. However that would be unnecessary
     * overhead as all elements would automatically inherit formatter from their parents, all the way up to the chart
     * itself.
     */
    public $durationFormatter;

    /**
     * @var integer A horizontal offset for the element in pixels.
     *
     * Can be negative value for offset to the left.
     */
    public $dx;

    /**
     * @var integer A vertical offset for the element in pixels.
     *
     * Can be negative value for offset upwards.
     */
    public $dy;

    /**
     * @var Color|Pattern|LinearGradient|RadialGradient Element's fill color or pattern.
     */
    public $fill;

    /**
     * @var array `ColorModifier` that can be used to modify color and pattern of the element's fill, e.g. create
     * gradients.
     */
    public $fillModifier;

    /**
     * @var float Element's fill opacity.
     *
     * Opacity ranges from 0 (fully transparent) to 1 (fully opaque).
     */
    public $fillOpacity;

    /**
     * @var Filter[] Returns list of SVG filters (effects) applied to element. If the filter list is not yet
     * initilized, creates and returns an empty one.
     *
     * Note, not all filters combine well with one another. We recommend using one filter per sprite.
     */
    public $filters;

    /**
     * @var boolean Controls if the element can gain focus.
     *
     * Focusable element will be selectable via TAB key.
     *
     * Please note, clicking it with a mouse or touching will not add focus to it.
     *
     * Focused element will show a system-specific highlight, which might ruin the overal look. This is why we don't
     * focus element on click/touch.
     *
     * A default setting varies for different elements. By default all elements are not focusable, except certain
     * items like buttons, legend items, etc
     */
    public $focusable;

    /**
     * @var string Font family to be used for the text.
     *
     * Parts of the text may override this setting using in-line formatting.
     */
    public $fontFamily;

    /**
     * @var string|integer Font size to be used for the text. The size can either be numeric, in pixels,
     * or other measurements.
     *
     * Parts of the text may override this setting using in-line formatting.
     */
    public $fontSize;

    /**
     * @var string Font weight to use for text.
     *
     * Parts of the text may override this setting using in-line formatting.
     */
    public $fontWeight;

    /**
     * @var integer Returns element's current "global" scale.
     *
     * Scale values accumulate over hierarchy of elements.
     *
     * E.g. if a `Container` has `scale = 2` and it's child has a `scale = 2`, the child's `globalScale` will be 4.
     * (a multitude of `2 x 2`)
     */
    public $globalScale;

    /**
     * @var Group Holds Sprite's main SVG group (`<g>`) element. Other Sprite's elements are all placed in this group.
     */
    public $group;

    /**
     * @var integer|float Element's absolute or relative height.
     *
     * The height can either be absolute, set in numer pixels, or relative, set in Percent.
     *
     * Relative height will be calculated using closest measured ancestor Container.
     */
    public $height;

    /**
     * @var boolean If a sprite has `showOnInit = true`, it will animate from "hidden" to "default" state when
     * initialized. To prevent this but keep `showOnInit = true`, you can set `sprite.hidden = true`
     */
    public $hidden;

    /**
     * @var string Controls which part of the element to treat as a horizontal center.
     *
     * The setting will be used when positioning, resizing and rotating the element.
     * One of:
     *  - [[self::ALIGN_LEFT]]
     *  - [[self::ALIGN_MIDDLE]]
     *  - [[self::ALIGN_RIGHT]]
     *  - [[self::ALIGN_NONE]]
     */
    public $horizontalCenter;

    /**
     * @var boolean If set to true, this element will also trigger `"over"` event with all the related consequences,
     * like "hover" state being applied and tooltip being shown.
     *
     * Useful as an accessibility feature to display rollover tooltips on items selected via keyboard.
     * Defaults to `false`
     */
    public $hoverOnFocus;

    /**
     * @var array Returns Sprite's hover options.
     * Valid properties:
     *  - touchOutBehavior: 'remove'|'delay'|'leave': What happens when element is no longer touched.
     *      - 'remove': "out" event is triggered immediately, meaning all related hover states and tooltips will
     *                  be removed.
     *      - 'delay': "out" event is delayed by touchOutDelay milliseconds.
     *      - 'leave': "out" event will not be triggered until any other interaction takes place somewhere else. (default)
     *  - touchOutDelay: integer: How long in milliseconds should "out" event be delayed when the element is not longer
     *                            being touched. Works only if touchOutBehavior = "delay".
     */
    public $hoverOptions;

    /**
     * @var boolean Controls if the element is hoverable (hover events are registered).
     *
     * Use `over` and `out` events, to watch for those respective actions.
     * Defaults to `false`
     */
    public $hoverable;

    /**
     * @var mixed An HTML element to be used when placing wrapper element (<div>) for the whole chart.
     *
     * This is the same for **all** elements within the same chart.
     */
    public $htmlContainer;

    /**
     * @var boolean Controls if the element should use inertia when interacted with.
     *
     * "Inert" element, when dragged and released, will carry the momentum of the movement, and will continue
     * moving in the same drag direction, gradually reducing in speed until finally stops.
     * Defaults to `false`
     */
    public $inert;

    /**
     * @var array Returns element's options to be used for inertia. This setting is inheritable, meaning that if not
     * set directly, it will search in all its ascendants until very top.
     *
     * Inertia is used only if element's `inert` is set to `true`.
     *
     * Valid properties:
     *  - duration: integer: How long should inertia animation play out.
     *  - easing: \yii\web\JsExpression: asing function to be used for inertia animation.
     *  - factor: integer: How far should object go by inertia counting from its reference point in trail and its release
     *      point. I.e. if there are 100 pixels between reference point and drop point, then it will go another 100 x
     *      inertiaFactor pixels by inertia.
     *  - time: integer: When calculating inertia direction and speed, we look back at the log of coordinates. This
     *      setting holds number of milliseconds to check back to.
     */
    public $inertiaOptions;

    /**
     * @var boolean Returns true if Sprite has already finished initializing.
     */
    public $inited;

    /**
     * @var InteractionObject Returns (creates if necessary) an `InteractionObject` associated with this element.
     *
     * `InteractionObject` is used to attach all kinds of user-interactions to the element, e.g. click/touch,
     * dragging, hovering, and similar events.
     */
    public $interactions;

    /**
     * @var boolean Setting this to false will effectively disable all interactivity on the element.
     */
    public $interactionsEnabled;

    /**
     * @var boolean Indicates if this element is currently active (toggled on) or not (toggled off).
     */
    public $isActive;

    /**
     * @var boolean Indicates if this element has any pointers (mouse or touch) pressing down on it.
     */
    public $isDown;

    /**
     * @var boolean Returns indicator if this element is being dragged at the moment.
     */
    public $isDragged;

    /**
     * @var boolean Indicates if this element is focused (possibly by tab navigation).
     */
    public $isFocused;

    /**
     * @var boolean If sprite.hide() is called, we set isHidden to true when sprite is hidden.
     *
     * This was added becaus hidden state might have visibility set to true and so there would not be possible to find
     * out if a sprite is technically hidden or not.
     */
    public $isHidden;

    /**
     * @var boolean If `sprite.hide()` is called and we have "hidden" state and `transitionDuration > 0`, we set
     * `isHiding` flag to `true` in order to avoid restarting animations in case `hide()` method is called multiple
     * times.
     */
    public $isHiding;

    /**
     * @var boolean Indicates if this element has a mouse pointer currently hovering over it, or if it has any touch
     * pointers pressed on it.
     *
     * Returns indicator if this element has a mouse pointer currently hovering over it, or if it has any touch
     * pointers pressed on it.
     */
    public $isHover;

    /**
     * @var boolean This property indicates if Sprite is currently being revealed from hidden state. This is used to
     * prevent multiple calls to sprite.show() to restart reveal animation. (if enabled)
     */
    public $isShowing;

    /**
     * @var array Returns elements keyboard options.
     *
     * Valid properties:
     *  - accelleration: float: A multiplication factor for move speed growth per second. For example if the initial
     *      speed is 10px/s (0.01px/ms) and accelleration is 0.5, pressing and holding arrow key will make the element
     *      move at 10px/s, then will accellerate to 15px/s after 1s, and so on.
     *  - accellerationDelay: integer: Number of milliseconds before accelleration kicks in.
     *  - speed: integer: Number of pixels to move per millisecond.
     */
    public $keyboardOptions;

    /**
     * @var Language A `Language` instance to use for translations.
     *
     * Normally it is enough to set language for the top-most element - chart.
     *
     * All other element child elements will automatically re-use that language object.
     */
    public $language;

    /**
     * @var float Bottom margin - absolute (px)
     */
    public $marginBottom;

    /**
     * @var float Left margin - absolute (px)
     */
    public $marginLeft;

    /**
     * @var float Right margin - absolute (px)
     */
    public $marginRight;

    /**
     * @var float Top margin - absolute (px)
     */
    public $marginTop;

    /**
     * @var integer Minimum height for the element in pixels.
     */
    public $minHeight;

    /**
     * @var integer Minimum width of the element in pixels.
     */
    public $minWidth;

    /**
     * @var Modal Returns a Modal instance, associated with this chart.
     *
     * Accessing modal does not make it appear. To make a modal appear, use `showModal()` method.
     */
    public $modal;

    /**
     * @var boolean Controls if element should keep constant size and not scale even if there is space available,
     * or it does not fit.
     */
    public $nonScaling;

    /**
     * @var boolean Controls if the element's stroke (outline) should remain keep constant thicnkess and do not scale
     * when the whole element is resized.
     */
    public $nonScalingStroke;

    /**
     * @var NumberFormatter A NumberFormatter instance.
     *
     * This is used to format numbers.
     * ```php
     * $sprite->numberFormatter->numberFormat = '#,###.#####';
     * ```
     * You can set a separate instance of formatter for each individual element. However that would be unnecessary
     * overhead as all elements would automatically inherit formatter from their parents, all the way up to the chart
     * itself.
     */
    public $numberFormatter;

    /**
     * @var float Element's opacity.
     *
     * Opacity setting can range from 0 (fully transparent) to 1 (fully opaque).
     *
     * ATTENTION: It is highly not recommended to use `opacity` directly on the element. The charts use `opacity` to
     * hide/show elements, so your setting might be lost if element is hidden and then later shown.
     *
     * Instead use methods `hide()` and `show()` to completely toggle off and on the element.
     *
     * Or, use properties `fillOpacity` and `strokeOpacity`, if you need to make the element semi-transparent.
     */
    public $opacity;

    /**
     * @var float Bottom padding - absolute (px) or relative (Percent).
     */
    public $paddingBottom;

    /**
     * @var float Left padding - absolute (px) or relative (Percent).
     */
    public $paddingLeft;

    /**
     * @var float Right padding - absolute (px) or relative (Percent).
     */
    public $paddingRight;

    /**
     * @var float Top padding - absolute (px) or relative (Percent).
     */
    public $paddingTop;

    /**
     * @var static Elements' parent Container.
     */
    public $parent;

    /**
     * @var string Path of a sprite element Path of a tick element
     */
    public $path;

    /**
     * @var Popup[] A list of popups for this chart.
     */
    public $popups;

    /**
     * @var array Holds values for Sprite's properties.
     */
    public $properties;

    /**
     * @var array A collection of key/value pairs that can be used to bind specific Sprite properties to DataItem.
     *
     * For example: `fill` property can be bound to `myCustomColor` field in DataItem. The Sprite will automatically
     * get the value for `fill` from its DataItem
     */
    public $propertyFields;

    /**
     * @var string Screen reader description of the element.
     */
    public $readerDescription;

    /**
     * @var boolean Controls if element should be hidden from screen readers.
     */
    public $readerHidden;

    /**
     * @var string Screen reader title of the element.
     */
    public $readerTitle;

    /**
     * @var Color|Pattern|LinearGradient|RadialGradient A reference to a real fill object. Sometimes might be useful
     * to modify gradient (when fill is color but we have FillModifier).
     */
    public $realFill;

    /**
     * @var Color|Pattern|LinearGradient|RadialGradient A reference to a real stroke object. Sometimes might be useful
     * to modify gradient (when fill is color but we have FillModifier).
     */
    public $realStroke;

    /**
     * @var boolean Indicates if this element is resizable.
     *
     * Enabling resize will turn on various interactions on the element. Their actual functionality will depend on
     * other properties.
     *
     * If the element also `draggable`, resize will only happen with two points of contact on a touch device.
     *
     * If the element is not draggable, resize can be performed with just one point of contact, touch or mouse.
     *
     * Will invoke `resize` event every time the size of the element changes.
     */
    public $resizable;

    /**
     * @var string A WAI-ARIA role for the element.
     * One of [[self::ROLE_*]] constants
     */
    public $role;

    /**
     * @var integer Time in milliseconds after which rollout event happens when user rolls-out of the sprite.
     * This helps to avoid flickering in some cases. Defaults to `0`
     */
    public $rollOutDelay;

    /**
     * @var integer Rotation of the element in degrees. (0-360)
     */
    public $rotation;

    /**
     * @var boolean An RTL (righ-to-left) setting.
     *
     * RTL may affect alignment, text, and other visual properties.
     */
    public $rtl;

    /**
     * @var float Scale of the element.
     *
     * The scale is set from 0 (element reduced to nothing) to 1 (default size).
     *  - 2 will mean element is increased twice.
     *  - 0.5: reduced by 50%.
     */
    public $scale;

    /**
     * @var string An SVG-specific shape-rendering value.
     *
     * `shape-rendering` controls how vector graphics are drawn and rendered.
     *
     * One of:
     *  - [[self::SHAPE_RENDERING_AUTO]]
     *  - [[self::SHAPE_RENDERING_OPTIMIZE_SPEED]]
     *  - [[self::SHAPE_RENDERING_CRISP_EDGES]]
     *  - [[self::SHAPE_RENDERING_GEOMETRIC_PRECISION]]
     *  - [[self::SHAPE_RENDERING_INHERIT]]
     * Defaults to [[self::SHAPE_RENDERING_AUTO]]
     */
    public $shapeRendering;

    /**
     * @var boolean If this is set to `true`, Sprite, when inited will be instantly hidden
     * ("hidden" state applied) and then shown ("default" state applied).
     *
     * If your "default" state's `transitionDuration > 0` this will result in initial animation from "hidden"
     * state to "default" state.
     *
     * If you need a Sprite which has `showOnInit = true` not to be shown initially, set `sprite.hidden = true`.
     * Setting `sprite.visible = false` will not prevent the animation and the sprite will be shown.
     */
    public $showOnInit;

    /**
     * @var boolean Indicates whether the element should attempt to construct itself in a way so that system tooltip
     * is shown if its `readerTitle` is set.
     */
    public $showSystemTooltip;

    /**
     * @var Color|Pattern|LinearGradient|RadialGradient Element's stroke (outline) color or pattern.
     */
    public $stroke;

    /**
     * @var string A `stroke-dasharray` for the stroke (outline).
     *
     * "Dasharray" allows setting rules to make lines dashed, dotted, etc.
     */
    public $strokeDasharray;

    /**
     * @var array `ColorModifier` that can be used to modify color and pattern of the element's stroke (outline), e.g.
     * create gradients.
     */
    public $strokeModifier;

    /**
     * @var float Stroke (outline) opacity.
     *
     * The values may range from 0 (fully transparent) to 1 (fully opaque).
     */
    public $strokeOpacity;

    /**
     * @var float Stroke (outline) opacity.
     *
     * The values may range from 0 (fully transparent) to 1 (fully opaque).
     */
    public $strokeWidth;

    /**
     * @var array Returns element's swipe gesture options.
     * Valid properties:
     *  - horizontalThreshold: integer: Minimum number of pixels to move horizontally for swipe to register.
     *  - time: integer: Time limit in milliseconds for swipe to occur.
     *  - verticalThreshold: integer: Vertical limit in pixels. Gesture deviating more than that will cancel swipe.
     */
    public $swipeOptions;

    /**
     * @var boolean Controls if element is swipeable.
     *
     * Swipable element will invoke `swipe`, `swipeleft` and `swiperight` events, when quick horizontal drag action is
     * performed with either mouse or touch.
     *
     * Please note that combining swipe and drag is possible, however will incur a slight but noticeable delay in
     * drag start.
     */
    public $swipeable;

    /**
     * @var integer Sets TAB index.
     *
     * Returns current TAB index for focusable item.
     *
     * Tab index maintains the order in which focusable elements gain focus when TAB key is pressed.
     *
     * Please note, tab index is not local to the chart. It affects the whole of the page, including non-SVG elements.
     * Maintain extreme causion when setting tab indexes, as it affects the user experience for the whole web page.
     */
    public $tabindex;

    /**
     * @var boolean Indicates if element can be toggled on and off by subsequent clicks/taps.
     *
     * Togglable element will alternate its `isActive` property between `true` and `false` with each click.
     */
    public $togglable;

    /**
     * @var Tooltip A Tooltip object to be used when displayed rollover information for the element.
     */
    public $tooltip;

    /**
     * @var static A Sprite or sprite template to use when getting colors for tooltip. If a template is set, tooltip
     * will look for a clone in tooltipDataItem.sprites. If no clone is found, then template colors will be used.
     */
    public $tooltipColorSource;

    /**
     * @var DataItem A DataItem to use when populating content for the element's Tooltip.
     */
    public $tooltipDataItem;

    /**
     * @var string An HTML template to be used to populate Tooltip contents.
     *
     * If element has `tooltipDataItem` or `dataItem` set, this will be parsed for any data values to be replaced
     * with the values from respective data items.
     */
    public $tooltipHTML;

    /**
     * @var string Specifies if Tooltip should follow the mouse or touch pointer or stay at the fixed position.
     * One of:
     *  - [[self::TOOLTIP_POSITION_FIXED]]
     *  - [[self::TOOLTIP_POSITION_POINTER]]
     */
    public $tooltipPosition;

    /**
     * @var string A text template to be used to populate Tooltip's contents.
     *
     * If element has `tooltipDataItem` or `dataItem` set, this will be parsed for any data values to be replaced
     * with the values from respective data items.
     *
     * This template will also be parsed for any special formatting tags.
     */
    public $tooltipText;

    /**
     * @var boolean Indicates if the element is trackable (mouse position over it is reported to event listeners).
     *
     * Will invoke `track` events whenever pointer (cursor) changes position while over element.
     *
     * Please note, touch devices will also invoke track events when touch point is moved while holding down on a
     * trackable element.
     */
    public $trackable;

    /**
     * @var string Click-through URL for this element.
     *
     * If set, clicking/tapping this element will open the new URL in a target window/tab as set by `urlTarget`.
     *
     * Please note that URL will be parsed by data placeholders in curly brackets, to be populated from data. E.g.:
     * ```php
     * $series->columns->template->url = 'https://www.google.com/search?q={category.urlEncode()}';
     * ```
     */
    public $url;

    /**
     * @var string Target to use for URL clicks.
     * One of
     *  - [[self::URL_TARGET_BLANK]]
     *  - [[self::URL_TARGET_SELF]]
     *  - [[self::URL_TARGET_PARENT]]
     *  - [[self::URL_TARGET_TOP]]
     *  - or Name of the window/frame
     * Ignored if url is not set.
     * Defaults to [[self::URL_TARGET_SELF]]
     */
    public $urlTarget;

    /**
     * @var string Controls vertical alignment of the element.
     * This is used by parent Container when layouting its children.
     * One of:
     *  - [[self::VALIGN_TOP]]
     *  - [[self::VALIGN_MIDDLE]]
     *  - [[self::VALIGN_BOTTOM]]
     *  - [[self::VALIGN_NONE]]
     */
    public $valign;

    /**
     * @var string Controls which part of the element to treat as a vertical center.
     *
     * The setting will be used when positioning, resizing and rotating the element.
     * One of:
     *  - [[self::VALIGN_TOP]]
     *  - [[self::VALIGN_MIDDLE]]
     *  - [[self::VALIGN_BOTTOM]]
     *  - [[self::VALIGN_NONE]]
     */
    public $verticalCenter;

    /**
     * @var boolean Sets visibility of the element.
     *
     * Returns current visibility of the element.
     */
    public $visible;

    /**
     * @var boolean Indicates if the element can be interacted with mouse wheel.
     *
     * Will invoke `wheel`, `wheelup`, `wheeldown`, `wheelleft`, and `wheelright` events when using mouse wheel over
     * the element.
     */
    public $wheelable;

    /**
     * @var float Element's absolute or relative width.
     *
     * The width can either be absolute, set in numer pixels, or relative, set in Percent.
     *
     * Relative width will be calculated using closest measured ancestor Container.
     */
    public $width;

    /**
     * @var float Element's absolute or relative X coordinate.
     *
     * If setting both X and Y, please consider using `moveTo()` method instead, as it will be faster to set
     * both coordinates at once.
     */
    public $x;

    /**
     * @var float Element's absolute or relative Y coordinate.
     *
     * If setting both X and Y, please consider using `moveTo()` method instead, as it will be faster to set
     * both coordinates at once.
     */
    public $y;

    /**
     * @var integer A "zIndex" of the element.
     *
     * "zIndex" determines the order of how elements are placed over each other.
     *
     * Higher "zIndex" will mean the element will be draw on top of elements with lower "zIndexes".
     */
    public $zIndex;
}