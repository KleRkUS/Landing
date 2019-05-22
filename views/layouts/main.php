<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerMetaTag(['name' => 'description', Yii::t('app', 'Creating and correcting websites, PHP/HTML5/JS. Always online!')])?>
    <meta name="keywords" content="Website development Веб разработка">
    <? Html::csrfMetaTags()?>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Roboto+Slab:300,400&amp;subset=cyrillic" rel="stylesheet">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- FAVICONs -->
    <?php
    $this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'sizes' => '32x32', 'href' => "images/fav/favicon-32x32.png"]);
    $this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'sizes' => '16x16','href' => "images/fav/favicon-16x16.png"]);
    $this->registerLinkTag(['rel' => 'manifest', 'href' => "images/fav/site.webmanifest"]);
    $this->registerLinkTag(['rel' => 'mask-icon', 'href' => "images/fav/safari-pinned-tab.svg", 'color' => '#ffc40d']);
    ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
