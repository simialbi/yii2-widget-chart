<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\widgets;

use simialbi\yii2\widgets\Widget;
use Yii;
use yii\base\InvalidConfigException;
use yii\helpers\Html;

/**
 * This widget is an Implementation of chartist.js for yii2 framework ([[http://gionkunz.github.io/chartist-js/]])
 *
 * ```php
 * Chart::widget([
 *      'type'              => Chart::TYPE_LINE,
 *      'labels'            => [1, 2, 3, 4],
 *      'series'            => [[100, 120, 180, 200]],
 *      'clientOptions'     => [
 *          'showLine' => false,
 *          'axisX'    => [
 *              'labelInterpolationFnc' => new JsExpression('function(value, index) {
 *                  return index % 13 === 0 ? \'W\' + value : null;
 *              }')
 *          ]
 *      ],
 *      'responsiveOptions' => [
 *          'screen and (min-width: 640px)' => [
 *              'axisX' => [
 *                  'labelInterpolationFnc' => new JsExpression('function(value, index) {
 *                      return index % 4 === 0 ? \'W\' + value : null;
 *                  }')
 *              ]
 *          ]
 *      ]
 * ]);
 * ```
 *
 * @author Simon Karlen <simi.albi@gmail.com>
 *
 * @property string $type
 * @property array $clientOptions Additional chartist js options ([[http://gionkunz.github.io/chartist-js/api-documentation.html]])
 */
class Chart extends Widget
{
    /**
     * @var array
     */
    public $data;

    /**
     * {@inheritdoc}
     * @throws InvalidConfigException
     * @throws \ReflectionException
     */
    public function init()
    {
        parent::init();

        $this->registerTranslations();

        if (empty($this->data)) {
            throw new InvalidConfigException(Yii::t('simialbi/chart', 'The "data" property cannot be empty'));
        }
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