<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace simialbi\yii2\chart\widgets;

use simialbi\yii2\widgets\Widget;
use Yii;
use yii\base\InvalidConfigException;
use yii\helpers\Html;

/**
 * This widget is an Implementation of amcharts for yii2 framework ([[https://www.amcharts.com]])
 *
 * @author Simon Karlen <simi.albi@outlook.com>
 */
class Chart extends Widget
{
    /**
     * @var array
     */
    public $data;

    /**
     * @var array
     */
    public $dataSource;

    /**
     * {@inheritDoc}
     * @throws \ReflectionException
     * @throws InvalidConfigException
     */
    public function init()
    {
        parent::init();

        if (!isset($this->data) && !isset($this->dataSource) && static::class !== MapChart::class) {
            throw new InvalidConfigException(Yii::t(
                'simialbi/chart/chart',
                'Either the "data" or the "dataSource" property must be set'
            ));
        }

        $this->registerTranslations();
    }

    /**
     * {@inheritDoc}
     */
    public function run()
    {
        Html::addCssClass($this->options, 'sa-widget-chart');
        $container = Html::tag('div', '', $this->options);

        $this->registerPlugin();

        return $container;
    }
}