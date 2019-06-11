<?php
/* @var $this \yii\web\View */

/* @var $content string */

use jx\admin_chameleon\assets\AppAsset;
use yii\helpers\Html;

$asset = AppAsset::register($this);
$AssetUrl = $asset->baseUrl;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="vertical-layout vertical-menu-modern 2-columns fixed-navbar" data-open="click"
      data-menu="vertical-menu-modern" data-color="bg-chartbg" data-col="2-columns">
<?php $this->beginBody() ?>
<?= $this->render('parts/header') ?>
<?= $this->render('parts/left', ['AssetUrl' => $AssetUrl]) ?>
<?= $this->render('parts/content', ['content' => $content]) ?>
<?= $this->render('parts/setting', ['AssetUrl' => $AssetUrl]) ?>
<?= $this->render('parts/footer') ?>
<?= $this->render('parts/modal') ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
