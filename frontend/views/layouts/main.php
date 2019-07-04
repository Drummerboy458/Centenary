<?php
use yii\helpers\Html;
use frontend\assets\MainAsset;


frontend\assets\MainAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="<?= Yii::$app->charset ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= Html::csrfMetaTags() ?>
  <title><?= Html::encode($this->title) ?></title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>100南开 | Ahri</title>


<?php $this->head() ?>
</head><!--/head-->

<body >

<?php $this->beginBody() ?>

<header id="home">
    <div class="main-nav" style="background-color: #800080">
      <div   class="container" >
        <div class="collapse navbar-collapse" style="background-color: #800080">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll"><a href=<?php echo Yii::$app->urlManager->createUrl('site/index');?>>首页</a></li>             
            <li class="scroll"><a href=<?php echo Yii::$app->urlManager->createUrl('site/about');?>>团队介绍</a></li>
            <li class="scroll"><a href=<?php echo Yii::$app->urlManager->createUrl('site/contact');?>>联系我们</a></li>
            <li class="scroll"><a href=<?php echo Yii::$app->urlManager->createUrl('site/count-down');?>>倒计时</a></li>       
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->

<div class="wrap">
    <div class="container">
       
        <?= $content ?>
    </div>
</div>

<footer id="footer">
    
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>&copy; 2014 Oxygen Theme.</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">Designed by <a href="http://www.themeum.com/">Themeum</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
