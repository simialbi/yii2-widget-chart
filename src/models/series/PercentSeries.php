<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace simialbi\yii2\chart\models\series;


use simialbi\yii2\chart\models\Series;
use simialbi\yii2\chart\models\style\ColorSet;

class PercentSeries extends Series
{
    /**
     * @var boolean Align labels into nice vertical columns?
     *
     * This will ensure that labels never overlap with each other.
     *
     * Arranging labels into columns makes them more readble, and better user experience.
     *
     * If set to false labels will be positioned at label.radius distance, and may, in some cases, overlap.
     * Defaults to `true`
     */
    public $alignLabels;

    /**
     * @var ColorSet A color set to be used for slices.
     *
     * For each new subsequent slice, the chart will assign the next color in this set.
     */
    public $colors;

    /**
     * @var array
     */
    public $labels;

    /**
     * @var array
     */
    public $slices;

    /**
     * @var array
     */
    public $ticks;
}