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
            <li class="scroll"><a href="#activities" style="height: 50px; line-height: 25px; text-align: center;width: 100px; font-size:17px;">校庆活动</a></li> 
            <li class="scroll"><a href="#history" style="height: 50px; line-height: 25px; text-align: center;width: 100px; font-size:17px;">人物历史</a></li>    
            <li class="scroll"><a href="#message" style="height: 50px; line-height: 25px; text-align: center;width: 100px; font-size:17px;">情系南开</a></li>                 
            <li class="scroll"><a href="#team" style="height: 50px; line-height: 25px; text-align: center;width: 100px; font-size:17px;">团队介绍</a></li>
            <li class="scroll"><a href="#contact" style="height: 50px; line-height: 25px; text-align: center;width: 100px; font-size:17px;">联系我们</a></li>
           
            <li class="scroll"><a href="/site/count-down" style="height: 50px; line-height: 25px; text-align: center;width: 100px; font-size:17px;">倒计时</a></li>       
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->
<section id="activities" style="margin-bottom:8%;">


  <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
    <div class="text-center col-sm-8 col-sm-offset-2" style="margin-bottom:40px;">
      <h2 style="color:#000;margin:10% 0px 0px 0px;font-size:26px;font-weight: bold;">校庆活动</h2>
      <hr style="filter: alpha(opacity=100, finishopacity=0, style=3);" width="100%"SIZE=5>
    </div>
  </div>


    <div class="container">
      
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


<section id="about-us" class="parallax" style="background-image: url(/images/nk1.jpg);">
    <div class="container">
      <div class="row">
        <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">         
           <img src="/images/banner-bottom.png" style="display:block;margin:0 auto;margin-bottom:10%">
        </div>
      </div>
    </div>
  </div>
</section><!--/#about-us-->

<div style="height:50px;width:100%;" id="history"></div>

<section class="cd-horizontal-timeline" style="margin-top:0;">

  <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms" style="margin-top:30px;">
    <div class="text-center col-sm-8 col-sm-offset-2">
      <h2 style="color:#000;font-size:26px;font-weight: bold;">南开历程</h2>
      <hr style="filter: alpha(opacity=100, finishopacity=0, style=3);" width="100%"SIZE=5>
    </div>
  </div>

<div class="timeline">
    <div class="events-wrapper">
        <div class="events">
            <ol>
                <li><a href="#0" data-date="16/01/2014" class="selected">1919年</a></li>
                <li><a href="#0" data-date="28/02/2014">1927年</a></li>
                <li><a href="#0" data-date="20/04/2014">1937年7月</a></li>
                <li><a href="#0" data-date="20/05/2014">1937年8月</a></li>
                <li><a href="#0" data-date="09/07/2014">1946年</a></li>
                <li><a href="#0" data-date="30/08/2014">1958年</a></li>
                <li><a href="#0" data-date="15/09/2014">1980年</a></li>
                <li><a href="#0" data-date="01/11/2014">1995年12月</a></li>
                <li><a href="#0" data-date="10/12/2014">2000年12月</a></li>
                <li><a href="#0" data-date="19/01/2015">2015年9月</a></li>
                <li><a href="#0" data-date="03/03/2015">2018年</a></li>
            </ol>
    
            <span class="filling-line" aria-hidden="true"></span>
        </div> <!-- .events -->
    </div> <!-- .events-wrapper -->
            
    <ul class="cd-timeline-navigation">
        <li><a href="#0" class="prev inactive">Prev</a></li>
        <li><a href="#0" class="next">Next</a></li>
    </ul> <!-- .cd-timeline-navigation -->
</div> <!-- .timeline -->

<div class="events-content">
<ol>
        <li class="selected" data-date="16/01/2014">
  <!-- <h2 style="font-size:30px;font-weight: bold;">南开大学建校</h2><br> -->
    <!-- <em>1919</em> -->
    <img src="/images/history/1919.jpg"  style="display:block;margin:0 auto;" height="300px" width="500px"/><br>
            <p style="min-height:120px;">	
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1919年4月，在严、张二人的努力下，位于南开学校南端的大学部校舍开始兴建。9月7、8日，南开学校大学部举办招生考试。1919年9月25日，南开大学举行首次开学典礼。南开大学成立时，本着“文以治国、理以强国、商以富国”的办学理念，设文、理、商3科。1920年，李组绅捐款三万洋银，增设矿科。
            </p>
        </li>

        <li data-date="28/02/2014">
            <!-- <h2>Event title here</h2> -->
    <!-- <em>February 28th, 2014</em> -->
    <img src="/images/history/1927.jpg" style="display:block;margin:0 auto;" height="300px" width="500px"/><br>
            <p style="min-height:120px;">	
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1927年，成立社会经济研究委员会（后改称经济研究所）和满蒙研究会（后改称东北研究会），卢木斋捐资10万元，开始兴建“木斋图书馆”。
            </p>
        </li>

        <li data-date="20/04/2014">
            <!-- <h2>Event title here</h2> -->
    <!-- <em>March 20th, 2014</em> -->
    <img src="/images/history/19378.jpg" style="display:block;margin:0 auto;" height="300px" width="500px"/><br>
            <p style="min-height:120px;">	
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1937年7月，南开大学遭日本侵略军狂轰烂炸，三分之二的校舍被毁。
        </p>
        </li>

        <li data-date="20/05/2014">
            <!-- <h2>Event title here</h2> -->
    <!-- <em>May 20th, 2014</em> -->
    <img src="/images/history/19379.jpg" style="display:block;margin:0 auto;" height="300px" width="500px"/><br>
            <p style="min-height:120px;">	
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1937年8月，南开大学与北京大学、清华大学合组长沙临时大学，三校校长张伯苓、蒋梦麟、梅贻琦为常务委员，共主校务。翌年4月，长沙临时大学迁往昆明，改称西南联合大学。
            </p>
        </li>

        <li data-date="09/07/2014">
            <!-- <h2>Event title here</h2> -->
    <!-- <em>July 9th, 2014</em> -->
    <img src="/images/history/1946.jpg" style="display:block;margin:0 auto;" height="300px" width="500px"/><br>
            <p style="min-height:120px;">	
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1946年，南开大学迁回天津并改为国立。复校后设文学院、理学院、政治经济学院和工学院，计16个系，另设有经济研究所、应用化学研究所及边疆人文研究室。		</p>
        </li>

        <li data-date="30/08/2014">
            <!-- <h2>Event title here</h2> -->
    <!-- <em>August 30th, 2014</em> -->
    <img src="/images/history/1958.jpg" style="display:block;margin:0 auto;" height="300px" width="500px"/><br>
            <p style="min-height:120px;">	
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;中国共产党和中国政府十分关心南开大学的发展，1958年，毛泽东主席莅校视察。
            </p>
        </li>

        <li data-date="15/09/2014">
            <!-- <h2>Event title here</h2> -->
    <!-- <em>September 15th, 2014</em> -->
    <img src="/images/history/1980.jpg" style="display:block;margin:0 auto;" height="300px" width="500px"/><br>
            <p style="min-height:120px;">	
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1980年以后，南开大学为适应社会主义现代化建设需要，利用老专业基础好的优势，建立了一批新的专业和研究机构。文科重点增设了以财经类为主的应用性专业，并在此基础上于1983年恢复了经济学院，理科重点增设了交叉、边缘和高新科技类专业。到80年代中后期，南开大学发展成为一所包括人文社会科学、自然科学、技术科学、生命科学、管理科学及艺术等多学科的综合大学。</p>
        </li>

        <li data-date="01/11/2014">
            <!-- <h2>Event title here</h2> -->
    <!-- <em>November 1st, 2014</em> -->
    <img src="/images/history/1995.jpg" style="display:block;margin:0 auto;" height="300px" width="500px"/><br>
            <p style="min-height:120px;">	
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1995年12月，南开大学成为首批列入国家“211工程”重点建设的15所大学之一。
            </p>
        </li>

        <li data-date="10/12/2014">
            <!-- <h2>Event title here</h2> -->
    <!-- <em>December 10th, 2014</em> -->
    <img src="/images/history/2000.jpg" style="display:block;margin:0 auto;" height="300px" width="500px"/><br>
            <p style="min-height:120px;">	
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2000年12月25日，教育部和天津市人民政府签署重点共建南开大学协议，南开大学进入首批国家教育工程“985工程”。
            </p>
        </li>

        <li data-date="19/01/2015">
            <!-- <h2>Event title here</h2> -->
    <!-- <em>January 19th, 2015</em> -->
    <img src="/images/history/2015.jpg" style="display:block;margin:0 auto;" height="300px" width="500px"/><br>
            <p style="min-height:120px;">	
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2015年9月，南开大学津南校区建成启用，初步形成了八里台校区、津南校区、泰达学院“一校三区”办学格局。</p>
        </li>

        <li data-date="03/03/2015">
            <!-- <h2>Event title here</h2> -->
    <!-- <em>March 3rd, 2015</em> -->
    <img src="/images/history/2018.jpg" style="display:block;margin:0 auto;" height="300px" width="500px"/><br>
            <p style="min-height:120px;">	
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2018年1月，南开大学入选教育部首批挂牌中美青年创客交流中心名单。3月，入选教育部首批新工科研究与实践项目。5月，南开大学成立人工智能学院、网络空间安全学院、统计与数据科学学院。11月，教育部公示第一批中华优秀传统文化传承基地名单，南开大学入选。</p>
        </li>
    </ol>
	</div> <!-- .events-content -->


<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery.mobile.custom.min.js"></script>
<script type="text/javascript" src="js/main-timeline.js"></script>

</section>



  <section id="about-us" class="parallax"  style="background-image: url(/images/nk2.jpg);">
    <div class="container">
      <div class="row">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">

         
           <img src="/images/banner-bottom.png" style="display:block;margin:0 auto;margin-bottom:10%">

        </div>
      </div>
    </div>
  </section>



<div style="width:100%;height:50px;" id="message"></div>


  <section>
    <div class="row" >


    <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="text-center col-sm-8 col-sm-offset-2" style="margin-bottom:50px;">
        <h2 style="color:#000;margin:30px 0px 0px 0px;font-size:26px;font-weight: bold;">情系南开</h2>
        <hr style="filter: alpha(opacity=100, finishopacity=0, style=3);" width="100%"SIZE=5>
      </div>
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


      <div class="row" style="margin-top:80px;">
        <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2 style="color:#000;margin:10px 0px 0px 0px;font-size:26px;font-weight: bold;">给母校点赞</h2>
            <hr style="filter: alpha(opacity=100, finishopacity=0, style=3);" width="100%"SIZE=5>
          </div>
        </div>

        <div class="text-center col-sm-8 col-sm-offset-2" style="margin-bottom:50px;">
          <div class="layui-progress layui-progress-big" lay-showPercent="true">
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
            <h2>联系我们</h2>
          </div>
        </div>
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">
            <div class="col-sm-6">
              <form id="main-contact-form" name="contact-form" method="post" action="#">
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="姓名" required="required">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="邮箱地址" required="required">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" name="subject" class="form-control" placeholder="主题" required="required">
                </div>
                <div class="form-group">
                  <textarea name="message" id="message" class="form-control" rows="4" placeholder="请输入您要发送给我们的信息" required="required"></textarea>
                </div>                        
                <div class="form-group">
                  <button type="submit" class="btn-submit">发送</button>
                </div>
              </form>   
            </div>
            <div class="col-sm-6">
              <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <p style="font-size:16px;">我们致力于改善用户体验，为广大南开人和社会各界认识提供更好的服务，如果您发现了任何问题或者是对我们有什么建议，欢迎您联系我们。</p>
                <br>
                <ul class="address">
                  <li><i class="fa fa-map-marker"></i> <span> 地址:</span>天津海河教育园区同砚路38号</li>
                  <li><i class="fa fa-phone"></i> <span> 电话:</span> 17822001791  </li>
                  <li><i class="fa fa-envelope"></i> <span> 邮箱:</span>819814373@qq.com</li>
                </ul>
              </div>                            
            </div>
          </div>
        </div>
      </div>
    </div>        
  </section><!--/#contact-->
   
  
  <footer id="footer">
    
    <div class="footer-bottom" style="padding:20px;">
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