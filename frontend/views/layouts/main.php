<?php

/**
 * Team: 404NotFound,NKU
 * Coding by 李钟毓 1711355, 20190717
 * This this the main layout in frontend web.
 */

use yii\helpers\Html;
use frontend\assets\MainAsset;
use common\models\VisitRaw;

MainAsset::register($this);
VisitRaw::ExitVisit();
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
  <title>100南开 | Ahri</title>

  <link rel="shortcut icon" href="/images/logo1.png"> <!--网站图标--->
<?php $this->head() ?>


</head><!--/head-->

<body >

<?php $this->beginBody() ?>

<header id="home">
   <div id="headerImg">
        <img src="/images/bg_head.jpg" style="width:100%;"> 
   </div>

   <div class="main-nav" style="background-color: #800080; height:50px; width:auto;">
      <div class="container" style="background-color: #800080">
        <!-- <div class="navbar-header" style="width: 100%"> -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" style="padding-top: 0px" href="index">
            <h1>
              <img class="img-responsive" src="/images/logo4.png" alt="logo"/>
            </h1>
          </a>                    
        <!--  </div> -->
        <div class="collapse navbar-collapse" style="background-color: #800080">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll"><a href="/site/index" style="height: 50px; line-height: 25px; text-align: center;width: 100px; font-size:17px;">首页</a></li>
            <li class="scroll"><a href="/act-activity/index" style="height: 50px; line-height: 25px; text-align: center;width: 100px; font-size:17px;">校庆活动</a></li> 
            <li class="scroll"><a href="/site/index#history" style="height: 50px; line-height: 25px; text-align: center;width: 100px; font-size:17px;">人物历史</a></li>    
            <li class="scroll"><a href="/message/create" style="height: 50px; line-height: 25px; text-align: center;width: 100px; font-size:17px;">情系南开</a></li>                 
            <li class="scroll"><a href="/adminuser/index" style="height: 50px; line-height: 25px; text-align: center;width: 100px; font-size:17px;">团队介绍</a></li>
            <li class="scroll"><a href="/site/index#contact" style="height: 50px; line-height: 25px; text-align: center;width: 100px; font-size:17px;">联系我们</a></li>
           
            <li class="scroll"><a href="/site/count-down" style="height: 50px; line-height: 25px; text-align: center;width: 100px; font-size:17px;">倒计时</a></li>       
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
            <p><b>&copy; 2019 Ahri Team</b></p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">Designed by <a href="http://www.themeum.com/"><b>Ahri</b></a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
