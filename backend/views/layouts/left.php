<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
               <p><?= yii::$app->user->identity->username; ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
       <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [

                     [
                        'label' => '校庆活动',
                        'icon' => ' fa-user',
                        'url' => 'javascript:;',
                        'items' => [
                            ['label' => '活动分类', 'icon' => '  fa-tag', 'url' => ['/act-category/index']],
                            ['label' => '发布活动', 'icon' => ' fa-check-circle', 'url' => ['/act-activity/index']],
                        ],
                    ],    

                    ['label' => '管理员信息', 'icon' => ' fa-user', 'url' => ['/adminuser/index'],],
                    // ['label' => '活动分类', 'icon' => ' fa-database', 'url' => ['/act_category/index'],],
                    // ['label' => '百年活动', 'icon' => ' fa-check-circle', 'url' => ['/act_activity/index'],],
                    ['label' => '留言管理', 'icon' => ' fa-user', 'url' => ['/message/index'],],
                    
                    ['label' => '流量情况', 'icon' => ' fa-road', 'url' => ['/visit-count/index'],],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => '权限管理',
                        'icon' => ' fa-unlock-alt',
                        'url' => 'javascript:;',
                        'items' => [
                            ['label' => '路由', 'icon' => ' fa-road', 'url' => ['/admin/route'],],
                            ['label' => '权限', 'icon' => ' fa-certificate', 'url' => ['/admin/permission'],],
                            ['label' => '角色', 'icon' => ' fa-user', 'url' => ['/admin/role'],],
                            ['label' => '分配', 'icon' => ' fa-check-circle', 'url' => ['/admin/assignment'],],
                            ['label' => '菜单', 'icon' => ' fa-list-alt', 'url' => ['/admin/menu'],],
                        ],
                    ],
                    [
                        'label' => '系统工具',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                        ],
                    ],
                ],
            ]
        ) ?>



    </section>

</aside>
