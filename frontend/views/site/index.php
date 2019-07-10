<?php
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

  <link rel='stylesheet prefetch' href='http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="/images/logo1.png">

<?php $this->head() ?>

<style>
  body {
      overflow-x : hidden;
  }
</style>
</head><!--/head-->

<body >
<?php $this->beginBody() ?>
<div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--.preloader-->
  <!-- <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div> -->
  <!--/.preloader-->

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active" style="background-image: url(/images/slider/1.jpg)">
              <div class="caption">
                <h1 class="animated fadeInLeftBig"><b>渤海之滨</b> <span><b>白河之津</b></span></h1>
                <!-- <p class="animated fadeInRightBig">NK</p>
                <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a> -->
              </div>
            </div>
            <div class="item" style="background-image: url(/images/slider/2.jpg)">
                <div class="caption">
                  <h1 class="animated fadeInLeftBig"><b>南开,</b><span><b>让世界听见你</b></span></h1>
                 <!--  <p class="animated fadeInRightBig">Bootstrap - Responsive Design - Retina Ready - Parallax</p>
                  <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a> -->
                </div>
            </div>
            <div class="item" style="background-image: url(/images/slider/3.jpg)">
              <div class="caption">
                <h1 class="animated fadeInLeftBig"><b>允公允能</b> <span><b>日新月异</b></span></h1>
                <!-- <p class="animated fadeInRightBig">Bootstrap - Responsive Design - Retina Ready - Parallax</p>
                <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a> -->
              </div>
            </div>
        </div>
        <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
        <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>
        <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>
    </div><!--/#home-slider-->
    
    <div class="main-nav" style="background-color: #800080; height:50px; width: auto;">
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
            <li class="scroll"><a href="#services" style="height: 50px; line-height: 25px; text-align: center;width: 100px; font-size:17px;">校庆活动</a></li> 
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
<section id="services">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2>校庆活动</h2>
          </div>
      </div>
       <hr>
      <div class="row"> <!--两列-->
        <div class="col-md-8" id="container">  <!--活动页-->
          <section id="portfolio" style="padding: 45px 0;">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-5" style="">
                    <div class="folio-item wow fadeInRightBig " data-wow-duration="1000ms" data-wow-delay="300ms">
                      <div class="folio-image">
                        <img class="img-responsive" src="/images/activity/act_play1.jpg" alt="">
                      </div>
                      <div class="overlay">
                        <div class="overlay-content">
                          <div class="overlay-text">
                            <div class="folio-info">
                              <h3 >校庆logo</h3>
                              <p >百年南开，再塑辉煌</p>
                            </div>
                            <div class="folio-overview">
                              <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                              <span class="folio-expand"><a href="/images/activity/act_play1.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5" style="">
                    <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
                      <div class="folio-image">
                        <img class="img-responsive" src="/images/activity/act_play3.jpg" alt="">
                      </div>
                      <div class="overlay">
                        <div class="overlay-content">
                          <div class="overlay-text">
                            <div class="folio-info">
                              <h3>Nature将用8期介绍百年南开</h3>
                              <p>首期看校长阐述迈向科学卓越新纪元</p>
                            </div>
                            <div class="folio-overview">
                              <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                              <span class="folio-expand"><a href="/images/activity/act_play3.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5" style="margin-top: 20px; ">
                    <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
                      <div class="folio-image">
                        <img class="img-responsive" src="/images/activity/act_play2.jpg" alt="">
                      </div>
                      <div class="overlay">
                        <div class="overlay-content">
                          <div class="overlay-text">
                            <div class="folio-info">
                              <h3>纪念周恩来总理入学100周年</h3>
                              <p>暨视察母校60周年主题展览举行</p>
                            </div>
                            <div class="folio-overview">
                              <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                              <span class="folio-expand"><a href="/images/activity/act_play2.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5" style=" margin-top: 20px;">
                    <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="600ms">
                      <div class="folio-image">
                        <img class="img-responsive" src="/images/activity/act_play5.jpg" alt="">
                      </div>
                      <div class="overlay">
                        <div class="overlay-content">
                          <div class="overlay-text">
                            <div class="folio-info">
                              <h3>习总书记访问南开</h3>
                              <p>观览百年南开主题展</p>
                            </div>
                            <div class="folio-overview">
                              <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                              <span class="folio-expand"><a href="/images/activity/act_play5.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="portfolio-single-wrap">
                <div id="portfolio-single">
                </div>
              </div><!-- /#portfolio-single-wrap -->
          </section><!--/#portfolio-->   
      </div>    
              <div class="col-md-3" >  <!--右侧筛选-->
               <h3><i class="fa fa-angle-right"></i> 近期活动</h4>
                  <div id="container" >  <!--活动页-->
                      <hr class="style-one" style="opacity: 0">
                       <div style="background-color: rgb(247,247,247); border-radius: 30px;">
                        <a href=<?php echo Yii::$app->urlManager->createUrl('act-activity/view?id=3'); ?>>
                        <p style="color: purple ;font-size: 16px; padding-top: 25px; padding-left: 20px;padding-right: 20px;">1. <?php echo $activities[0]['title']?> </p>
                        </a>
                         <a href=<?php echo Yii::$app->urlManager->createUrl('act-activity/view?id=4'); ?>>
                        <p style="color: purple ;font-size: 16px; padding-top: 25px; padding-left: 20px;padding-right: 20px;">2. <?php echo $activities[1]['title']?> </p>
                        </a>
                         <a href=<?php echo Yii::$app->urlManager->createUrl('act-activity/view?id=8'); ?>>
                        <p style="color: purple ;font-size: 16px; padding-top: 25px; padding-left: 20px;padding-right: 20px;">3. <?php echo $activities[2]['title']?> </p>
                        </a>
                         <a href=<?php echo Yii::$app->urlManager->createUrl('act-activity/view?id=5'); ?>>
                        <p style="color: purple ;font-size: 16px; padding-top: 25px; padding-left: 20px;padding-right: 20px;">4. <?php echo $activities[3]['title']?> </p>
                        </a>
                         <a href=<?php echo Yii::$app->urlManager->createUrl('act-activity/view?id=1'); ?>>
                        <p style="color: purple ;font-size: 16px; padding-top: 25px; padding-left: 20px;padding-right: 20px;">5. <?php echo $activities[4]['title']?> </p>
                        </a>
                         <a href=<?php echo Yii::$app->urlManager->createUrl('act-activity/view?id=10'); ?>>
                        <p style="color: purple ;font-size: 16px; padding-top: 25px; padding-left: 20px;padding-right: 20px;padding-bottom: 25px;">6. <?php echo $activities[5]['title']?> </p>
                        </a>
                        </div>

                        <div style="height: 10px; padding-top: 50px; text-align: center; ">   
                         <div style=" text-align: right;">
                          <a class="more-link" href="/act-activity/index" title="显示更多">
                              <span class="moretext">
                                  <font style='color: #a0468c;font-family: 微软雅黑;font-size: 16px;'>更多...</font>
                              </span>
                          </a>
                        </div>
                      </div> <!--分两列-->
                  </div>  
              </div>  
      </div>
  </div>
</section><!--#services-->
<section id="about-us" class="parallax">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>About us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>   
    </div>
  </div>
</section><!--/#about-us-->

  <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2>Our Portfolio</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
        </div>
      </div> 
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="folio-image">
              <img class="img-responsive" src="/images/portfolio/1.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="/images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="folio-image">
              <img class="img-responsive" src="/images/portfolio/2.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="/images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
            <div class="folio-image">
              <img class="img-responsive" src="/images/portfolio/3.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="/images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="folio-image">
              <img class="img-responsive" src="/images/portfolio/4.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="/images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="700ms">
            <div class="folio-image">
              <img class="img-responsive" src="/images/portfolio/5.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="/images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="800ms">
            <div class="folio-image">
              <img class="img-responsive" src="/images/portfolio/6.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="/images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="900ms">
            <div class="folio-image">
              <img class="img-responsive" src="/images/portfolio/7.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="/images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="1000ms">
            <div class="folio-image">
              <img class="img-responsive" src="/images/portfolio/8.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="/images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="portfolio-single-wrap">
      <div id="portfolio-single">
      </div>
    </div><!-- /#portfolio-single-wrap -->
  </section><!--/#portfolio-->

  <section id="team">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>The Team</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
        </div>
      </div>
      <div class="team-members">
        <div class="row">
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="member-image">
                <img class="img-responsive" src="/images/team/1.jpg" alt="">
              </div>
              <div class="member-info">
                <h3>Marian Dixon</h3>
                <h4>CEO &amp; Founder</h4>
                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              </div>
              <div class="social-icons">
                <ul>
                  <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
              <div class="member-image">
                <img class="img-responsive" src="/images/team/2.jpg" alt="">
              </div>
              <div class="member-info">
                <h3>Lawrence Lane</h3>
                <h4>UI/UX Designer</h4>
                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              </div>
              <div class="social-icons">
                <ul>
                  <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
              <div class="member-image">
                <img class="img-responsive" src="/images/team/3.jpg" alt="">
              </div>
              <div class="member-info">
                <h3>Lois Clark</h3>
                <h4>Developer</h4>
                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              </div>
              <div class="social-icons">
                <ul>
                  <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
              <div class="member-image">
                <img class="img-responsive" src="/images/team/4.jpg" alt="">
              </div>
              <div class="member-info">
                <h3>Marian Dixon</h3>
                <h4>Support Manager</h4>
                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              </div>
              <div class="social-icons">
                <ul>
                  <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>            
    </div>
  </section><!--/#team-->



  <section id="about-us" class="parallax">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>About us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="message">
    <div class="row" >
      <div class="text-center col-sm-8 col-sm-offset-2" style="margin-bottom:50px;">
        <h2 style="color:#000;margin:10px 0px 0px 0px;font-size:26px;font-weight: bold;">情系南开</h2>
        <hr style="filter: alpha(opacity=100, finishopacity=0, style=3);" width="100%"SIZE=5>
      </div>
        <div class="col-md-6">

            <article class="card" style="float:right;margin:0 10px 0 0;">
              <header class="card__thumb">
                <img src="/images/4.jpg"/>
              </header>

              <div class="card__body">
                <h2 class="card__title"><a href="#">南开大学迎来百年校庆！</a></h2>
                <div class="card__subtitle">快来和阳阳亮亮一起为母校送上祝福吧！</div>
                <div class="card__description">
                  <p style="margin:0px;">百载风雨，沧桑砥砺，诞生于1919年的南开大学，即将迎来建校100周年的历史性时刻。十秩峥嵘薪火传承，值此百年校庆之际，您是否有相对母校说的话？</p>
                  <p>Nankai university, born in 1919, is about to usher in the historic moment of its 100th anniversary. On the occasion of the centennial
                    anniversary, do you have any words to say to your Alma master.
                  </p>
                  <a href=<?php echo Yii::$app->urlManager->createUrl('message/create'); ?>>
                    <button style="background-color:#800080;border:none;color:#fff;padding:6px 10px;border-radius:5px;float:right;margin:0 10px 0px 0;">为母校送祝福</button>
                  </a>
                </div>
              </div>
            </article>
        </div>

        <div class="col-md-6">
          <ul class="layui-timeline" style="padding:0 20% 0 0;margin:0 0 0 10px">
          <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis" style="color:#800080;">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                <h3 class="layui-timeline-title" style="color:#800080;">@<?php echo $messages[0]['identity'],' ',$messages[0]['author'], ' ：' ?></h3>
                <p>
                <?php echo $messages[0]['content']?>
                </p>
                </div>
            </li>
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis" style="color:#800080;">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                <h3 class="layui-timeline-title" style="color:#800080;">@<?php echo $messages[1]['identity'],' ',$messages[1]['author'], ' ：' ?></h3>
                <p><?php echo $messages[1]['content']?></p>
                </div>
            </li>
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis" style="color:#800080;">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                <h3 class="layui-timeline-title" style="color:#800080;">@<?php echo $messages[2]['identity'],' ',$messages[2]['author'], ' ：' ?></h3>
                <p>
                <?php echo $messages[2]['content']?>
                </p>
                </div>
            </li>

            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis" style="color:#800080;">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                <h3 class="layui-timeline-title" style="color:#800080;">@<?php echo $messages[3]['identity'],' ',$messages[3]['author'], ' ：' ?></h3>
                <p>
                <?php echo $messages[3]['content']?>
                </p>
                </div>
            </li>

            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis" style="color:#800080;background-color:#800080;">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                <div class="layui-timeline-title"><a href=<?php echo Yii::$app->urlManager->createUrl('message/index'); ?> target="_blank" style="color:#800080;bold;font-size:16px;"><b>更多...</b></a></div>
                </div>
            </li>
          </ul>
        
        </div>
      </div>


      <div class="row" style="margin-top:100px;">
        <div class="text-center col-sm-8 col-sm-offset-2" style="margin-bottom:50px;">
          <h2 style="color:#000;margin:10px 0px 0px 0px;font-size:26px;font-weight: bold;">给母校点赞</h2>
          <hr style="filter: alpha(opacity=100, finishopacity=0, style=3);" width="100%"SIZE=5>
          <div class="layui-progress layui-progress-big" lay-showPercent="true" style="margin:50px 0 0 0;">
            <div class="layui-progress-bar layui-bg-blue" lay-percent=<?php echo $num/100*100,'%';?>></div>
          </div>

          <button href="#" id="praise" class="layui-btn layui-btn-primary" 
                  style="display:block;margin:0 auto;border:none;color:#fff;font-size:16px;
                        background-color:#800080;border-radius:25%;margin-top:20px;">
            点赞
          </button>
        </div>
      </div>





      <script type="text/javascript">
        document.querySelector('#praise').onclick = function () {
          $.post("http://admins.com/praise/add").done(
            function(data){
              console.log(String(100*data.data/100)+"%");
              document.getElementsByClassName("layui-progress-text")[0].innerText=String(100*data.data/100)+"%";
              document.getElementsByClassName("layui-progress-bar layui-bg-blue")[0].style.width=String(100*data.data/100)+"%";      
            }
          );
        }
      </script>

      

  </section>
  

  <section id="contact">

    <div id="contact-us" class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Contact Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
          </div>
        </div>
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">
            <div class="col-sm-6">
              <form id="main-contact-form" name="contact-form" method="post" action="#">
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Email Address" required="required">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" name="subject" class="form-control" placeholder="Subject" required="required">
                </div>
                <div class="form-group">
                  <textarea name="message" id="message" class="form-control" rows="4" placeholder="Enter your message" required="required"></textarea>
                </div>                        
                <div class="form-group">
                  <button type="submit" class="btn-submit">Send Now</button>
                </div>
              </form>   
            </div>
            <div class="col-sm-6">
              <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                <ul class="address">
                  <li><i class="fa fa-map-marker"></i> <span> Address:</span> 2400 South Avenue A </li>
                  <li><i class="fa fa-phone"></i> <span> Phone:</span> +928 336 2000  </li>
                  <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:someone@yoursite.com"> support@oxygen.com</a></li>
                  <li><i class="fa fa-globe"></i> <span> Website:</span> <a href="#">www.sitename.com</a></li>
                </ul>
              </div>                            
            </div>
          </div>
        </div>
      </div>
    </div>        
  </section><!--/#contact-->
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

  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>