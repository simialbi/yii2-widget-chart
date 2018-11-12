# yii2-widget-chart
Wrapper for [amcharts4](https://www.amcharts.com/) library.

## Resources
 * [yii2](https://github.com/yiisoft/yii2) framework
 * [AM charts](https://www.amcharts.com/).

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```sh
$ php composer.phar require --prefer-dist "simialbi/yii2-widget-chart"
```
or add

```json
{
	"require": {
  		"simialbi/yii2-widget-chart": "^0.5"
	}
}
```

to the `require` section of your `composer.json`


## Example Usage

```php
<?php
/* @var $this yii\web\View */
/* @var $image stdClass */

use simialbi\yii2\chart\widgets\LineChart;

$this->title = 'my example';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="my-example">
<?php
echo  LineChart::widget([
  'data' => [
      [
          'country' => 'Lithuania',
          'litres' => 501.9
      ],
      [
          'country' => 'Czech Republic',
          'litres' => 301.9
      ],
      [
          'country' => 'Ireland',
          'litres' => 201.1
      ],
      [
          'country' => 'Germany',
          'litres' => 165.8
      ],
      [
          'country' => 'Australia',
          'litres' => 139.9
      ],
      [
          'country' => 'Austria',
          'litres' => 128.3
      ],
      [
          'country' => 'UK',
          'litres' => 99
      ],
      [
          'country' => 'Belgium',
          'litres' => 60
      ],
      [
          'country' => 'The Netherlands',
          'litres' => 50
      ]
  ]
]);
?>
</div>
```

## License
**yii2-widget-chart** is released under MIT license. See bundled [LICENSE](LICENSE) for details.