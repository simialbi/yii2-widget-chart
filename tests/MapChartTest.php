<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace yiiunit\extensions\chart;


use simialbi\yii2\chart\widgets\MapChartGeodataAsset;

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
        $output = $this->app->view->render('@webroot/views/map-chart/simple-chart');

        $this->assertArrayHasKey(MapChartGeodataAsset::class, $this->app->view->assetManager->bundles);
        $this->assertContains('<div id="w0" class="sa-widget-chart" style="min-height: 80vh;"></div>', $output);
        $this->assertContains('am4core.useTheme(am4themes_', $output);

//        echo $output;
    }
}