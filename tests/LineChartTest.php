<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@outlook.com>
 */

namespace yiiunit\extensions\chart;

use simialbi\yii2\chart\ChartAsset;
use simialbi\yii2\chart\models\BaseObject;
use simialbi\yii2\chart\widgets\LineChart;
use Yii;

/**
 * @group simialbi/chart
 */
class LineChartTest extends TestCase
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
        LineChart::$counter = 0;
        $output = $this->app->view->render('@webroot/views/line-chart/simple-chart');

        $this->assertArrayHasKey(ChartAsset::class, $this->app->view->assetManager->bundles);
        $this->assertContains('<div id="w0" class="sa-widget-chart"></div>', $output);
        $this->assertContains('am4core.useTheme(am4themes_', $output);
    }

    /**
     * @depends testSimpleChart
     */
    public function testInheritance()
    {
        LineChart::$counter = 0;
        BaseObject::$counter = 0;
        $output = $this->app->view->render('@webroot/views/line-chart/inheritance');

        $this->assertContains('scrollbarSaCo0.parent = chartW0.bottomAxesContainer', $output);
    }

    /**
     *
     */
    public function testMockApplication()
    {
        $this->assertEquals(Yii::getAlias('@webroot'), __DIR__);
        $this->assertEquals(Yii::getAlias('@runtime'), __DIR__ . DIRECTORY_SEPARATOR . 'runtime');
    }
}