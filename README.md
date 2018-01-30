# yii2-widget-chart
Wrapper for [CHARTIST.JS](http://gionkunz.github.io/chartist-js/index.html) library.

## Resources
 * [yii2](https://github.com/yiisoft/yii2) framework
 * [gionkunz/chartist-js](https://github.com/gionkunz/chartist-js).

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
  		"simialbi/yii2-widget-chart": "~0.1"
	}
}
```

to the `require` section of your `composer.json`


## Example Usage

```php
<?php
/* @var $this yii\web\View */
/* @var $image stdClass */

use simialbi\yii2\chart\Chart;
use yii\web\JsExpression;

$this->title = 'my example';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="my-example">
<?php
echo  Chart::widget([
           'type'              => Chart::TYPE_LINE,
           'labels'            => [1, 2, 3, 4],
           'series'            => [[100, 120, 180, 200]],
           'clientOptions'     => [
               'showLine' => false,
               'axisX'    => [
                   'labelInterpolationFnc' => new JsExpression('function(value, index) {
                       return index % 13 === 0 ? \'W\' + value : null;
                   }')
               ]
           ],
           'responsiveOptions' => [
               'screen and (min-width: 640px)' => [
                   'axisX' => [
                       'labelInterpolationFnc' => new JsExpression('function(value, index) {
                           return index % 4 === 0 ? \'W\' + value : null;
                       }')
                   ]
               ]
           ]
      ]);
?>
</div>
```

## License
**yii2-widget-chart** is released under MIT license. See bundled [LICENSE](LICENSE) for details.