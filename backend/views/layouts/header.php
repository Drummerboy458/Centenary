<?php
/**
 * Team:404NotFound,NKU
 * Coding by:皮春莹 1711436,20190721
 * This is layouts of backend web
 */
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">
    <nav class="navbar navbar-static-top" role="navigation" style="background-color: purple;">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu" >

            <ul class="nav navbar-nav">

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <img src="<?= $directoryAsset ?>/img/user2.png" class="user-image" alt="User Image"/>

                        <span class="hidden-xs"><?= yii::$app->user->identity->username; ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header" style="background-color: purple;">
                            <img src="<?= $directoryAsset ?>/img/user2.png" class="img-circle"
                                 alt="User Image"/>

                            <p>
                               <?= yii::$app->user->identity->username; ?>
                                <small>Since 2019年7月</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <!-- <li class="user-body">
                            <div class="col-xs-4 text-center">
                                <a href="#">Followers</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Sales</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Friends</a>
                            </div>
                        </li> -->
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="view?id= <?= yii::$app->user->identity->id; ?>" 
                                class="btn btn-default btn-flat">个人简介</a>
                            </div>
                            <div class="pull-right">
                                <?= Html::a(
                                    '注销',
                                    ['/site/logout'],
                                    ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                ) ?>
                            </div>
                        </li>
                    </ul>
                </li>

                <!-- User Account: style can be found in dropdown.less -->
               <!--  <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li> -->
            </ul>
        </div>
    </nav>
</header>
