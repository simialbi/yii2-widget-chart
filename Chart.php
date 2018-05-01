<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart;

use simialbi\yii2\widgets\Widget;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\JsExpression;

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
class Chart extends Widget {
	/**
	 * Line chart type constant
	 */
	const TYPE_LINE = 'Line';
	/**
	 * Bar chart type constant
	 */
	const TYPE_BAR = 'Bar';
	/**
	 * Pie chart type constant
	 */
	const TYPE_PIE = 'Pie';

	/**
	 * @var array Allowed chart types
	 */
	protected $allowedTypes = [self::TYPE_LINE, self::TYPE_BAR, self::TYPE_PIE];

	/**
	 * @var string Chart type (one of class [[TYPE_*]] constants)
	 */
	private $_type = self::TYPE_LINE;

	/**
	 * @var string[] Chart labels (x-axis). (required)
	 */
	public $labels;

	/**
	 * @var array Chart data with series to use in chart. (required)
	 */
	public $series;

	/**
	 * @var array Specify an array of responsive option arrays which are a media query and options object pair
	 *
	 * ```php
	 * [
	 *      'screen and (min-width: 640px)' => [
	 *          'axisX' => [
	 *              'labelInterpolationFnc' => new JsExpression('function(value, index) {
	 *                  return index % 4 === 0 ? \'W\' + value : null;
	 *              }')
	 *          ]
	 *      ]
	 * ]
	 * ```
	 */
	public $responsiveOptions = [];

	/**
	 * @var boolean Wheter to show chart legend or not. (defaults to false)
	 */
	public $legend = false;

	/**
	 * @var array Legend plugin options ([[https://github.com/CodeYellowBV/chartist-plugin-legend]])
	 */
	public $legendOptions = [];

	/**
	 * {@inheritdoc}
	 * @throws InvalidConfigException
	 */
	public function init() {
		if (empty($this->labels) || empty($this->series)) {
			throw new InvalidConfigException('Labels and series attributes are required');
		}

		parent::init();
	}

	/**
	 * {@inheritdoc}
	 */
	public function run() {
		Html::addCssClass($this->options, 'sa-widget-chart');
		$container = Html::tag('div', '', $this->options);

		$this->registerPlugin();

		return $container;
	}

	/**
	 * Setter function for $type
	 *
	 * @param string $type Chart type (one of class [[TYPE_*]] constants)
	 *
	 * @throws InvalidConfigException
	 */
	public function setType($type) {
		if (!in_array($this->_type, $this->allowedTypes)) {
			throw new InvalidConfigException("Type must be one of the following: ".implode(', ', $this->allowedTypes));
		}
		$this->_type = $type;
	}

	/**
	 * Getter function for $type
	 *
	 * @return string
	 */
	public function getType() {
		return $this->_type;
	}

	/**
	 * {@inheritdoc}
	 */
	protected function registerPlugin($pluginName = null) {
		$view = $this->view;
		$id   = $this->options['id'];

		ChartAsset::register($view);

		if ($this->legend) {
			$this->clientOptions = ArrayHelper::merge($this->clientOptions, [
				'plugins' => [new JsExpression('Chartist.plugins.legend('.Json::htmlEncode($this->legendOptions).')')]
			]);
		}

		$js = "var chart = new Chartist.{$this->type}('#$id', ".Json::htmlEncode([
				'labels' => $this->labels,
				'series' => $this->series
			]).", ".Json::htmlEncode($this->clientOptions).", ".Json::htmlEncode($this->responsiveOptions).");";

		$view->registerJs($js);

		$this->registerClientEvents();
	}

	/**
	 * {@inheritdoc}
	 */
	protected function registerClientEvents() {
		if (!empty($this->clientEvents)) {
			$js = [];
			foreach ($this->clientEvents as $event => $handler) {
				$js[] = "chart.on('$event', $handler);";
			}
			$this->view->registerJs(implode("\n", $js));
		}
	}
}