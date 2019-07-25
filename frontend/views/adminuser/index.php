<?php

/**
 * Team: 404NotFound,NKU
 * Coding by:皮春莹 1711436,20190716
 * Coding by:李钟毓 1711355,20190713
 * This is index view of group presentation of frontend web.
 */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use frontend\models\Message;
use yii\helpers\HtmlPurifier;
use frontend\assets\MainAsset;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ActActivitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '南开大学迎来百年校庆！';

frontend\assets\AppAsset::register($this);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Oxygen - One Page HTML Template | Themeum</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    
  <link rel="shortcut icon" href=<?php echo Yii::$app->urlManager->createUrl('images/favicon.ico'); ?>     >
</head><!--/head-->

<body>

  <section id="team">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h1 style="color:#800080;font-size:28px;">团队介绍</h1>
          <br>
          <p>巍巍南开，百年树人；锐意进取，广纳新知</p>
          <p>众流合注，霈为大川；群山出材，巍成广厦</p>
          <p>日新月异兮中华之振兴，允公允能兮报国之渴想</p>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="member-image">
               
                <img class="img-responsive" src= <?php echo Yii::$app->urlManager->createUrl('images/team/1.jpg'); ?>  alt="">
              </div>
              <div class="member-info">
                <h2 style="color:#000;font-size:36px;"><?php echo $lzy['nickname']?></h2>
                <br><h4 style="font-size:18px;">组长</h4>
                <p style="font-size:16px;word-wrap:break-word;"><?php echo $lzy['profile']?></p>
              </div>
              <div class="social-icons">
                  <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                  <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
              <div class="member-image">

                <img class="img-responsive" src=<?php echo Yii::$app->urlManager->createUrl('images/team/2.jpg'); ?>  alt="">
              </div>
              <div class="member-info">
              <h2 style="color:#000;font-size:36px;"><?php echo $lww['nickname']?></h2>
                
              <br><h4 style="font-size:18px;">组员</h4>
              <p style="font-size:16px;word-wrap:break-word;"><?php echo $lww['profile']?></p>
              </div>
              <div class="social-icons">
                <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
              <div class="member-image">

                <img class="img-responsive" src= <?php echo Yii::$app->urlManager->createUrl('images/team/3.jpg'); ?>  alt="">
              </div>
              <div class="member-info">
              <h2 style="color:#000;font-size:36px;"><?php echo $sxr['nickname']?></h2>
              <br>
              <h4 style="font-size:18px;">组员</h4>
              <p style="font-size:16px;"><?php echo $sxr['profile']?></p>
              </div>
              <div class="social-icons">
              <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
              <div class="member-image">

                <img class="img-responsive" src=<?php echo Yii::$app->urlManager->createUrl('images/team/4.jpg'); ?>  alt="">
              </div>
              <div class="member-info">
              <h2 style="color:#000;font-size:36px;"><?php echo $pcy['nickname']?></h2>
              <br>
              <h4 style="font-size:18px;">组员</h4>
              <p style="font-size:16px;"><?php echo $pcy['profile']?></p>
              </div>
              <div class="social-icons">
              <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>            
    </div>
  </section><!--/#team-->


  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/mousescroll.js"></script>
  <script type="text/javascript" src="js/smoothscroll.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>

</body>
</html>