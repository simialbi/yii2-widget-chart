<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\base\style;


use simialbi\yii2\chart\base\BaseObject;

class Pattern extends BaseObject
{
    const UNIT_USER_SPACE_ON_USE = 'userSpaceOnUse';
    const UNIT_OBJECT_BOUNDING_BOX = 'objectBoundingBox';

    /**
     * @var Color Pattern background fill color.
     */
    public $backgroundFill;

    /**
     * @var float Pattern backgorund opacity. (0-1)
     */
    public $backgroundOpacity;

    /**
     * @var Color Fill color of the pattern.
     */
    public $fill;

    /**
     * @var float Pattern fill opacity. (0-1)
     */
    public $fillOpacity;

    /**
     * @var integer Pattern height in pixels.
     */
    public $height;

    /**
     * @var string Pattern measuring units.
     *
     * One of:
     *  - [[self::UNIT_USER_SPACE_ON_USE]]
     *  - [[self::UNIT_OBJECT_BOUNDING_BOX]]
     */
    public $patternUnits;

    /**
     * @var integer Pattern rotation in degrees.
     */
    public $rotation;

    /**
     * @var ShapeRendering Shape rendering
     */
    public $shapeRendering;

    /**
     * @var Color Pattern stroke (border) color.
     */
    public $stroke;

    /**
     * @var float Pattern stroke opacity. (0-1)
     */
    public $strokeOpacity;

    /**
     * @var integer Pattern width in pixels.
     */
    public $strokeWidth;

    /**
     * @var integer X position. (pixels)
     */
    public $x;

    /**
     * @var integer Y position (px).
     */
    public $y;
}