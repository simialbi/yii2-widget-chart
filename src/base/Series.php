<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\base;


use simialbi\yii2\chart\base\legend\LegendSettings;

class Series extends Component
{
    /**
     * @var boolean Specifies if series should be automatically disposed when removing from chart's series list.
     * Defaults to `true`
     */
    public $autoDispose = true;

    /**
     * @var boolean As calculating totals is expensive operation and not often needed, by default we do not do it.
     * In case you use percent for your charts, you must set this to `true`.
     *
     * Pie chart, which uses percent sets this to `true` by default.
     */
    public $calculatePercent = false;

    /**
     * @var boolean Should the series be hidden in legend?
     */
    public $hiddenInLegend;

    /**
     * @var boolean Should this series excluded from the axis scale calculations? Defaults to `false`
     */
    public $ignoreMinMax = false;

    /**
     * @var string Screen reader text to be applied to each individual data item, such as bullets, columns or slices.
     *
     * The template can contain field reference meta codes, i.e. `{dateX}`, `{valueY}`, etc.
     *
     * Any text formatting options, e.g. `[bold]` will be ignored.
     */
    public $itemReaderText;

    /**
     * @var LegendSettings Settings for the appearance of the related legend items.
     */
    public $legendSettings;

    /**
     * @var integer Minimal distance between two adjacent bullets in pixels.
     *
     * If bullet is closer, it will be skipped and not shown.
     *
     * This allows to avoid crammed up graphs wil a lot of bullets.
     */
    public $minBulletDistance;

    /**
     * @var string Series' name.
     */
    public $name;

    /**
     * @var integer Normally series items are focusable using keyboard, so that people can select them with a TAB key.
     * However, if there are a lot of data points on screen it might be long and useless to tab through all of them.
     *
     * This is where `skipFocusThreshold` comes in. If there are more items than the value set here, we will not make
     * those focusable and rather let screen reader software rely on the series summary, or authors provide alternative
     * detailed information display, such as HTML table.
     *
     * Different series might have different threshold defaults. Defaults to `20`
     */
    public $skipFocusThreshold = 20;

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        if (!isset($this->legendSettings)) {
            $this->legendSettings = new LegendSettings();
        }
    }
}