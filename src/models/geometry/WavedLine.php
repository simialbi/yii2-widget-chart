<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\models\geometry;

/**
 * Draws a waved line.
 * @package simialbi\yii2\chart\models\geometry
 */
class WavedLine extends Line
{
    /**
     * @var float Tension of the wave. Defaults to `0.8`
     */
    public $tension;

    /**
     * @var integer Wave height in pixels. Defaults to 4
     */
    public $waveHeight;

    /**
     * @var integer Wave length in pixels. Defaults to 16
     */
    public $waveLength;
}