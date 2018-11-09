<?php
/**
 * @package yii2-widget-chart
 * @author Simon Karlen <simi.albi@gmail.com>
 */

namespace yiiunit\extensions\chart;

use simialbi\yii2\chart\widgets\ChartAsset;
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
        $output = $this->app->view->render('@webroot/views/line-chart/simple-chart');

        $this->assertArrayHasKey(ChartAsset::class, $this->app->view->assetManager->bundles);
        $this->assertContains('<div id="w0" class="sa-widget-chart"></div>', $output);
        $this->assertContains('am4core.useTheme(am4themes_', $output);

        echo $output;
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