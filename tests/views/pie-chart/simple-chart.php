<?php

use simialbi\yii2\chart\widgets\PieChart;
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
        echo PieChart::widget([
            'options' => [
                'style' => [
                    'min-height' => '80vh'
                ]
            ],
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

    <?php $this->endBody(); ?>
    </body>
    </html>
<?php $this->endPage();