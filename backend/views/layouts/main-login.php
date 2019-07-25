<?php
/**
 * Team:404NotFound,NKU
 * Coding by:皮春莹 1711436,20190721
 * This is layouts of backend web
 */
use backend\assets\AppAsset;
use yii\helpers\Html;
use vendor\dmstr\web\AdminLteAsset;
/* @var $this \yii\web\View */
/* @var $content string */

dmstr\web\AdminLteAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="shortcut icon" href= <?php echo Yii::$app->urlManager->createUrl('img/logo1.png'); ?>>
    <?php $this->head() ?>
</head>
<body class="login-page"  style="background-image:url(<?php echo Yii::$app->urlManager->createUrl('img/nku.jpg'); ?>);">

<?php $this->beginBody() ?>

    <?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
