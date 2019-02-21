<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace yiiunit\extensions\chart;


use simialbi\yii2\chart\MapChartGeodataAsset;
use simialbi\yii2\chart\widgets\MapChart;

class MapChartTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->mockWebApplication();
    }

    /**
     * @throws \Exception
     */
    public function testSimpleChart()
    {
        MapChart::$counter = 0;
        $output = $this->app->view->render('@webroot/views/map-chart/simple-chart');

        $this->assertArrayHasKey(MapChartGeodataAsset::class, $this->app->view->assetManager->bundles);
        $this->assertContains(
            '<div id="w0" class="sa-widget-chart" style="min-height: 80vh;"></div>',
            $output
        );
        $this->assertContains('am4core.useTheme(am4themes_', $output);
    }
}