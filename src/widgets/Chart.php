<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace simialbi\yii2\chart\widgets;

use simialbi\yii2\widgets\Widget;
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
     * {@inheritdoc}
     * @throws \ReflectionException
     */
    public function init()
    {
        parent::init();

        $this->registerTranslations();
    }

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        Html::addCssClass($this->options, 'sa-widget-chart');
        $container = Html::tag('div', '', $this->options);

        $this->registerPlugin();

        return $container;
    }
}