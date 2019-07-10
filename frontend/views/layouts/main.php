<?php
use yii\helpers\Html;
use frontend\assets\MainAsset;


MainAsset::register($this);

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

  <style>
.comment { width: 680px; margin: 20px auto; position: relative; background: #fff; padding: 20px 50px 50px; border: 1px solid #DDD; border-radius: 5px; }
.comment h3 { height: 28px; line-height: 28px }
.com_form { width: 100%; position: relative }
.input { width: 99%; height: 60px; border: 1px solid #ccc }
.com_form p { height: 28px; line-height: 28px; position: relative; margin-top: 10px; }
span.emotion { width: 42px; height: 20px; padding-left: 20px; cursor: pointer }
span.emotion:hover { background-position: 2px -28px }
.qqFace { margin-top: 4px; background: #fff; padding: 2px; border: 1px #dfe6f6 solid; }
.qqFace table td { padding: 0px; }
.qqFace table td img { cursor: pointer; border: 1px #fff solid; }
.qqFace table td img:hover { border: 1px #0066cc solid; }
#show { width: 770px; margin: 20px auto; background: #fff; padding: 5px; border: 1px solid #DDD; vertical-align: top; }
.sub_btn { position: absolute; right: 0px; top: 0; display: inline-block; zoom: 1; /* zoom and *display = ie7 hack for display:inline-block */  *display: inline;
vertical-align: baseline; margin: 0 2px; outline: none; cursor: pointer; text-align: center; font: 14px/100% Arial, Helvetica, sans-serif; padding: .5em 2em .55em; text-shadow: 0 1px 1px rgba(0,0,0,.6); -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2); -moz-box-shadow: 0 1px 2px rgba(0,0,0,.2); box-shadow: 0 1px 2px rgba(0,0,0,.2); color: #e8f0de; border: solid 1px #538312; background: #64991e; background: -webkit-gradient(linear, left top, left bottom, from(#7db72f), to(#4e7d0e)); background: -moz-linear-gradient(top, #7db72f, #4e7d0e);  filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#7db72f', endColorstr='#4e7d0e');
}
.sub_btn:hover { background: #538018; background: -webkit-gradient(linear, left top, left bottom, from(#6b9d28), to(#436b0c)); background: -moz-linear-gradient(top, #6b9d28, #436b0c);  filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#6b9d28', endColorstr='#436b0c');
}
</style>
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
          <a class="navbar-brand" style="padding-top: 0px" href="index.php">
            <h1>
              <img class="img-responsive" src="/images/logo4.png" alt="logo"/>
            </h1>
          </a>                    
        <!--  </div> -->
        <div class="collapse navbar-collapse" style="background-color: #800080">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll"><a href="/site/index" style="height: 50px; line-height: 25px; text-align: center;width: 100px; font-size:17px;">首页</a></li>
            <li class="scroll"><a href="/act-activity/index" style="height: 50px; line-height: 25px; text-align: center;width: 100px; font-size:17px;">校庆活动</a></li> 
            <li class="scroll"><a href="#about-us" style="height: 50px; line-height: 25px; text-align: center;width: 100px; font-size:17px;">人物历史</a></li>    
            <li class="scroll"><a href="#message" style="height: 50px; line-height: 25px; text-align: center;width: 100px; font-size:17px;">情系南开</a></li>                 
            <li class="scroll"><a href="#team" style="height: 50px; line-height: 25px; text-align: center;width: 100px; font-size:17px;">团队介绍</a></li>
            <li class="scroll"><a href="#contact" style="height: 50px; line-height: 25px; text-align: center;width: 100px; font-size:17px;">联系我们</a></li>
           
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
