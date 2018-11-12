<?php
/**
 * @package yii2-charts
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace simialbi\yii2\chart\widgets;


use simialbi\yii2\web\AssetBundle;
use Yii;
use yii\helpers\ArrayHelper;
use yii\web\View;

/**
 * Asset bundle for chart widget
 *
 * @author Simon Karlen <simi.albi@gmail.com>
 */
class ChartAsset extends AssetBundle
{
    /**
     * @var string the directory that contains the source asset files for this asset bundle.
     */
    public $sourcePath = '@npm/amcharts--amcharts4/dist/script';

    /**
     * @var string Themes in amCharts 4 is much more than just collection of appearance settings.
     */
    public $theme = 'animated';

    /**
     * @var array list of JavaScript files that this bundle contains.
     */
    public $js = [
        'core.js',
        'charts.js'
    ];

    /**
     * @var array the options to be passed to [[AssetManager::publish()]] when the asset bundle
     * is being published.
     */
    public $publishOptions = [
        'only' => [
            'deps/*',
            'lang/*',
            'themes/*',
            'core.js',
            'core.js.map',
            'charts.js',
            'charts.js.map',
            'maps.js',
            'maps.js.map'
        ],
        'forceCopy' => YII_DEBUG
    ];

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        $themeFile = Yii::getAlias($this->sourcePath . '/themes/' . $this->theme . '.js');
        if (file_exists($themeFile)) {
            $this->theme = 'animated';
        }
        ArrayHelper::setValue($this->js, 'theme', 'themes/' . $this->theme . '.js');

        $language = str_replace('-', '_', Yii::$app->language);
        $langFile = Yii::getAlias($this->sourcePath . '/lang/' . $language . '.js');
        if (file_exists($langFile)) {
            $this->js[] = 'lang/' . $language . '.js';
        }

        Yii::$app->view->registerJs("am4core.useTheme(am4themes_{$this->theme});\n", View::POS_READY, 'sa-chart-theme');

        parent::init();
    }
}