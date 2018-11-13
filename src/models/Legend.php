<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\models;


class Legend extends Component
{
    const NAME_SPACE = 'am4charts';

    const POSITION_ABSOLUTE = 'absolute';
    const POSITION_BOTTOM = 'bottom';
    const POSITION_LEFT = 'left';
    const POSITION_RIGHT = 'right';
    const POSITION_TOP = 'top';

    /**
     * @var array Currently focused legend item (for toggling via keyboard)
     */
    public $focusedItem;

    /**
     * @var array List of legend Item containers. Legend item containers contain marker, title label and value label.
     */
    public $itemContainers;

    /**
     * @var array List of legend item labels.
     */
    public $labels;

    /**
     * @var array List of legend item markers.
     */
    public $markers;

    /**
     * @var string Position of the legend.
     * Valid options:
     *  - [[self::POSITION_ABSOLUTE]]
     *  - [[self::POSITION_BOTTOM]]
     *  - [[self::POSITION_LEFT]]
     *  - [[self::POSITION_RIGHT]]
     *  - [[self::POSITION_TOP]]
     *
     * Defaults to [[self::POSITION_BOTTOM]]
     */
    public $position;

    /**
     * @var boolean Should legend try to mirror the look of the related item when building the marker for legend item?
     *
     * If set to `true` it will try to make the marker look like its related item.
     *
     * E.g. if an item is for a Line Series, it will display a line of the same thickness, color, and will use the
     * same bullets if series have them.
     *
     * Defaults to `false`
     */
    public $useDefaultMarker;

    /**
     * @var array List of legend item value labels.
     */
    public $valueLabels;
}