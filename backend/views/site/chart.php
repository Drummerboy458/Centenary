<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SpaceLab</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Fonts from Font Awsome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- CSS Animate -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Fonts -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> -->
    <!-- Feature detection -->
    <script src="assets/js/modernizr-2.6.2.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <section id="container">
        <header id="header">
            <!--logo start-->
            <div class="brand">
                <a href="index.html" class="logo">
                    <span>Space</span>Lab</a>
            </div>
            <!--logo end-->
            <div class="toggle-navigation toggle-left">
                <button type="button" class="btn btn-default" id="toggle-left" data-toggle="tooltip" data-placement="right" title="Toggle Navigation">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <div class="user-nav">
                <ul>
                    <li class="dropdown messages">
                        <span class="badge badge-danager animated bounceIn" id="new-messages">5</span>
                        <button type="button" class="btn btn-default dropdown-toggle options" id="toggle-mail" data-toggle="dropdown">
                            <i class="fa fa-envelope"></i>
                        </button>
                        <ul class="dropdown-menu alert animated fadeInDown">
                            <li>
                                <h1>You have
                                    <strong>5</strong>new messages</h1>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="assets/img/avatar.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                        <span class="sender">James Bagian</span>
                                        <span class="time">30 mins</span>
                                        <div class="message-content">Lorem ipsum dolor sit amet, elit rutrum felis sed erat augue fusce...</div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="assets/img/avatar1.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                        <span class="sender">Jeffrey Ashby</span>
                                        <span class="time">2 hour</span>
                                        <div class="message-content">hendrerit pellentesque, iure tincidunt, faucibus vitae dolor aliquam...</div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="assets/img/avatar2.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                        <span class="sender">John Douey</span>
                                        <span class="time">3 hours</span>
                                        <div class="message-content">Penatibus suspendisse sit pellentesque eu accumsan condimentum nec...</div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="assets/img/avatar3.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                        <span class="sender">Ellen Baker</span>
                                        <span class="time">7 hours</span>
                                        <div class="message-content">Sem dapibus in, orci bibendum faucibus tellus, justo arcu...</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="assets/img/avatar4.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                        <span class="sender">Ivan Bella</span>
                                        <span class="time">6 hours</span>
                                        <div class="message-content">Curabitur metus faucibus sapien elit, ante molestie sapien...</div>
                                    </div>
                                </a>
                            </li>
                            <li><a href="#">Check all messages <i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>

                    </li>
                    <li class="profile-photo">
                        <img src="assets/img/avatar.png" alt="" class="img-circle">
                    </li>
                    <li class="dropdown settings">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      Mike Adams <i class="fa fa-angle-down"></i>
                    </a>
                        <ul class="dropdown-menu animated fadeInDown">
                            <li>
                                <a href="#"><i class="fa fa-user"></i> Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-calendar"></i> Calendar</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge badge-danager" id="user-inbox">5</span></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-power-off"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div class="toggle-navigation toggle-right">
                            <button type="button" class="btn btn-default" id="toggle-right">
                                <i class="fa fa-comment"></i>
                            </button>
                        </div>
                    </li>

                </ul>
            </div>
        </header>
        <!--sidebar start-->
        <aside class="sidebar">
            <div id="leftside-navigation" class="nano">
                <ul class="nano-content">
                    <li>
                        <a href="index.html"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-cogs"></i><span>UI Elements</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>

                            <li><a href="ui-alerts-notifications.html">Alerts &amp; Notifications</a>
                            </li>
                            <li><a href="ui-panels.html">Panels</a>
                            </li>
                            <li><a href="ui-buttons.html">Buttons</a>
                            </li>
                            <li><a href="ui-slider-progress.html">Sliders &amp; Progress</a>
                            </li>
                            <li><a href="ui-modals-popups.html">Modals &amp; Popups</a>
                            </li>
                            <li><a href="ui-icons.html">Icons</a>
                            </li>
                            <li><a href="ui-grid.html">Grid</a>
                            </li>
                            <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a>
                            </li>
                            <li><a href="ui-nestable-list.html">Nestable Lists</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-table"></i><span>Tables</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="tables-basic.html">Basic Tables</a>
                            </li>

                            <li><a href="tables-data.html">Data Tables</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa fa-tasks"></i><span>Forms</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="forms-components.html">Components</a>
                            </li>
                            <li><a href="forms-validation.html">Validation</a>
                            </li>
                            <li><a href="forms-mask.html">Mask</a>
                            </li>
                            <li><a href="forms-wizard.html">Wizard</a>
                            </li>
                            <li><a href="forms-multiple-file.html">Multiple File Upload</a>
                            </li>
                            <li><a href="forms-wysiwyg.html">WYSIWYG Editor</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-envelope"></i><span>Mail</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="mail-inbox.html">Inbox</a>
                            </li>
                            <li><a href="mail-compose.html">Compose Mail</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-menu active">
                        <a href="javascript:void(0);"><i class="fa fa-bar-chart-o"></i><span>Charts</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li class="active"><a href="charts-chartjs.html">Chartjs</a>
                            </li>
                            <li><a href="charts-morris.html">Morris</a>
                            </li>
                            <li><a href="charts-c3.html">C3 Charts</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-map-marker"></i><span>Maps</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="map-google.html">Google Map</a>
                            </li>
                            <li><a href="map-vector.html">Vector Map</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="typography.html"><i class="fa fa-text-height"></i><span>Typography</span></a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-file"></i><span>Pages</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="pages-blank.html">Blank Page</a>
                            </li>
                            <li><a href="pages-login.html">Login</a>
                            </li>
                            <li><a href="pages-sign-up.html">Sign Up</a>
                            </li>
                            <li><a href="pages-calendar.html">Calendar</a>
                            </li>
                            <li><a href="pages-timeline.html">Timeline</a>
                            </li>
                            <li><a href="pages-404.html">404</a>
                            </li>
                            <li><a href="pages-500.html">500</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </aside>
        <!--sidebar end-->
        <!--main content start-->
        <section class="main-content-wrapper">
            <section id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">
                            <li><a href="#">Dashboard</a>
                            </li>
                            <li>Charts</li>
                            <li class="active">Chart.js</li>
                        </ul>
                        <!--breadcrumbs end -->
                        <h1 class="h1">Chart.js</h1>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Doughnut</h3>
                                <div class="actions pull-right">
                                    <i class="fa fa-chevron-down"></i>
                                    <i class="fa fa-times"></i>
                                </div>
                            </div>
                            <div class="panel-body text-center">
                                <canvas id="doughnut" height="300" width="400"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Line</h3>
                                <div class="actions pull-right">
                                    <i class="fa fa-chevron-down"></i>
                                    <i class="fa fa-times"></i>
                                </div>
                            </div>
                            <div class="panel-body text-center">
                                <canvas id="line" height="300" width="450"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Bar</h3>
                                <div class="actions pull-right">
                                    <i class="fa fa-chevron-down"></i>
                                    <i class="fa fa-times"></i>
                                </div>
                            </div>
                            <div class="panel-body text-center">
                                <canvas id="bar" height="300" width="400"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Polar Area</h3>
                                <div class="actions pull-right">
                                    <i class="fa fa-chevron-down"></i>
                                    <i class="fa fa-times"></i>
                                </div>
                            </div>
                            <div class="panel-body text-center">
                                <canvas id="polarArea" height="300" width="450"></canvas>
                            </div>
                        </div>
                    </div>
                </div>


            </section>
        </section>
        <!--main content end-->
        <!--sidebar right start-->
        <aside class="sidebarRight">
            <div id="rightside-navigation">
                <div class="sidebar-heading"><i class="fa fa-user"></i> Contacts</div>
                <div class="sidebar-title">online</div>
                <div class="list-contacts">
                    <a href="javascript:void(0)" class="list-item">
                        <div class="list-item-image">
                            <img src="assets/img/avatar.gif" class="img-circle">
                        </div>
                        <div class="list-item-content">
                            <h4>James Bagian</h4>
                            <p>Los Angeles, CA</p>
                        </div>
                        <div class="item-status item-status-online"></div>
                    </a>
                    <a href="javascript:void(0)" class="list-item">
                        <div class="list-item-image">
                            <img src="assets/img/avatar1.gif" class="img-circle">
                        </div>
                        <div class="list-item-content">
                            <h4>Jeffrey Ashby</h4>
                            <p>New York, NY</p>
                        </div>
                        <div class="item-status item-status-online"></div>
                    </a>
                    <a href="javascript:void(0)" class="list-item">
                        <div class="list-item-image">
                            <img src="assets/img/avatar2.gif" class="img-circle">
                        </div>
                        <div class="list-item-content">
                            <h4>John Douey</h4>
                            <p>Dallas, TX</p>
                        </div>
                        <div class="item-status item-status-online"></div>
                    </a>
                    <a href="javascript:void(0)" class="list-item">
                        <div class="list-item-image">
                            <img src="assets/img/avatar3.gif" class="img-circle">
                        </div>
                        <div class="list-item-content">
                            <h4>Ellen Baker</h4>
                            <p>London</p>
                        </div>
                        <div class="item-status item-status-away"></div>
                    </a>
                </div>

                <div class="sidebar-title">offline</div>
                <div class="list-contacts">
                    <a href="javascript:void(0)" class="list-item">
                        <div class="list-item-image">
                            <img src="assets/img/avatar4.gif" class="img-circle">
                        </div>
                        <div class="list-item-content">
                            <h4>Ivan Bella</h4>
                            <p>Tokyo, Japan</p>
                        </div>
                        <div class="item-status"></div>
                    </a>
                    <a href="javascript:void(0)" class="list-item">
                        <div class="list-item-image">
                            <img src="assets/img/avatar5.gif" class="img-circle">
                        </div>
                        <div class="list-item-content">
                            <h4>Gerald Carr</h4>
                            <p>Seattle, WA</p>
                        </div>
                        <div class="item-status"></div>
                    </a>
                    <a href="javascript:void(0)" class="list-item">
                        <div class="list-item-image">
                            <img src="assets/img/avatar6.gif" class="img-circle">
                        </div>
                        <div class="list-item-content">
                            <h4>Viktor Gorbatko</h4>
                            <p>Palo Alto, CA</p>
                        </div>
                        <div class="item-status"></div>
                    </a>
                </div>
            </div>
        </aside>
        <!--sidebar right end-->
    </section>
    <!--Global JS-->
    <script src="assets/js/jquery-1.10.2.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/waypoints/waypoints.min.js"></script>
    <script src="assets/js/application.js"></script>
    <!--Page Leve JS -->
    <script src="assets/plugins/chartjs/Chart.min.js"></script>
    <script src="assets/plugins/chartjs/chartjs-demo.js"></script>

</body>

</html>
