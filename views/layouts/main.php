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
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(53787118, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/53787118" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-124276090-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-124276090-2');
    </script>
    
    <meta property="og:title" content="villieyour.tech | Website development" />
    <meta property="og:image:secure_url" content="https://villieyour.tech/images/preview.png" />
    <meta property="og:image" content="https://villieyour.tech/images/preview.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:site_name" content="Villieyourtech" />
    <meta property="og:description" content="Website development in Saint-petersburg" />

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
