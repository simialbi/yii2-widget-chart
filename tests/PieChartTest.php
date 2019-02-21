<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace yiiunit\extensions\chart;


use simialbi\yii2\chart\ChartAsset;
use simialbi\yii2\chart\widgets\PieChart;

class PieChartTest extends TestCase
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
        PieChart::$counter = 0;
        $output = $this->app->view->render('@webroot/views/pie-chart/simple-chart');

        $this->assertArrayHasKey(ChartAsset::class, $this->app->view->assetManager->bundles);
        $this->assertContains(
            '<div id="w0" class="sa-widget-chart" style="min-height: 80vh;"></div>',
            $output
        );
        $this->assertContains('am4core.useTheme(am4themes_', $output);
    }
}