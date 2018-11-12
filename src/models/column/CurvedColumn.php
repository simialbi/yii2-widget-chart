<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\models\column;


use simialbi\yii2\chart\models\Column;
use simialbi\yii2\chart\models\Sprite;

class CurvedColumn extends Column
{
    /**
     * @var Sprite The element that holds curved column shape.
     */
    public $curvedColumn;

    /**
     * @var string Orientation of the column.
     * One of:
     *  - [[self::ORIENTATION_HORIZONTAL]]
     *  - [[ORIENTATION_VERTICAL]]
     * Defaults to [[self::ORIENTATION_VERTICAL]]
     */
    public $orientation;

    /**
     * @var float Horizontal tension of the curve.
     *
     * Tension defines how "lose" the line will be.
     *
     * 1 is the maximum tension which would result in pointy columns with straight edges.
     *
     * The smaller the tension th wider the column will be. Defaults to `0.7`
     */
    public $tension;
}