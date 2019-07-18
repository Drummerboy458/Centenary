
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
  <link rel="shortcut icon" href="images/favicon.ico">
</head><!--/head-->

<body>

  <section id="team">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2 class="layui-timeline-title" style="color:#800080;">团队介绍</h2>
          <p>巍巍南开，百年树人；锐意进取，广纳新知</p>
          <p>众流合注，霈为大川；群山出材，巍成广厦</p>
          <p>日新月异兮中华之振兴，允公允能兮报国之渴想</p>
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
                <h3><?php echo $nickname[1]['nickname']?></h3>
                <h4>组长</h4>
                <p><?php echo $profile[1]['profile']?></p>
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
                <h3><?php echo $nickname[0]['nickname']?></h3>
                <h4>组员</h4>
                <p><?php echo $profile[0]['profile']?></p>
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
                <h3><?php echo $nickname[2]['nickname']?></h3>
                <h4>组员</h4>
                <p><?php echo $profile[2]['profile']?></p>
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
                <h3><?php echo $nickname[3]['nickname']?></h3>
                <h4>组员</h4>
                <p><?php echo $profile[3]['profile']?></p>
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