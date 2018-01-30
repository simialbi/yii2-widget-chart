<?php
/**
 * @package yii2-charts
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart;


use simialbi\yii2\web\AssetBundle;

/**
 * Asset bundle for chart widget
 *
 * @author Simon Karlen <simi.albi@gmail.com>
 */
class ChartAsset extends AssetBundle {
	/**
	 * @var string the directory that contains the source asset files for this asset bundle.
	 */
	public $sourcePath = '@npm/chartist/dist';

	/**
	 * @var array list of CSS files that this bundle contains.
	 */
	public $css = [
		'chartist.min.css'
	];

	/**
	 * @var array list of JavaScript files that this bundle contains.
	 */
	public $js = [
		'chartist.min.js'
	];

	/**
	 * @var array list of bundle class names that this bundle depends on.
	 */
	public $depends = [
		'simialbi\yii2\web\MomentAsset'
	];

	/**
	 * @var array the options to be passed to [[AssetManager::publish()]] when the asset bundle
	 * is being published.
	 */
	public $publishOptions = [
		'forceCopy' => YII_DEBUG
	];
}