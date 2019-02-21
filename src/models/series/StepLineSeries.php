<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace simialbi\yii2\chart\models\series;


class StepLineSeries extends LineSeries
{
    /**
     * @var float Step end location.
     */
    public $endLocation;

    /**
     * @var boolean Specifies if step line series should draw only horizontal (or only vertical, depending on base axis)
     * lines, instead of connecting them with vertical (or horizontal) lines. Defaults to `false`
     */
    public $noRisers;

    /**
     * @var float start location of the step. Defaults to `0`
     */
    public $startLocation;
}