<?php

use simialbi\yii2\chart\widgets\LineChart;
use yii\helpers\Html;

/* @var $this \yii\web\View */

$this->beginPage(); ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language; ?>">
    <head>
        <meta charset="<?= Yii::$app->charset; ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags(); ?>
        <title><?= Html::encode($this->title); ?></title>
        <?php $this->head(); ?>
    </head>
    <body>
    <?php $this->beginBody(); ?>

    <div class="container">
        <?php
        echo LineChart::widget([
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
            ],
            'clientOptions' => [
                'scrollbarX' => Yii::createObject([
                    'class' => 'simialbi\yii2\chart\models\Scrollbar'
                ])
            ]
        ]);
        ?>
    </div>

    <?php $this->endBody(); ?>
    </body>
    </html>
<?php $this->endPage();