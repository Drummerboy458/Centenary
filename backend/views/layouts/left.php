<aside class="main-sidebar" style="background-color: rgba(99,0,45,0.26);">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image" style="height:25px;">
                
            </div>
            <div class="pull-left info">
               <p class="img-circle" style="font-size:22px;"><?= yii::$app->user->identity->username; ?></p>

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
                        'icon' => ' fa-map-signs',
                        'url' => 'javascript:;',
                        'items' => [
                            ['label' => '活动分类', 'icon' => '  fa-tag', 'url' => ['/act-category/index']],
                            ['label' => '发布活动', 'icon' => ' fa-check-circle', 'url' => ['/act-activity/index']],
                            ['label' => '活动评论', 'icon' => ' fa-comments', 'url' => ['/act-comment/index']],
                        ],
                    ],    

                    ['label' => '管理员信息', 'icon' => ' fa-user', 'url' => ['/adminuser/index'],],
                    // ['label' => '活动分类', 'icon' => ' fa-database', 'url' => ['/act_category/index'],],
                    // ['label' => '百年活动', 'icon' => ' fa-check-circle', 'url' => ['/act_activity/index'],],
                    ['label' => '留言管理', 'icon' => ' fa-commenting', 'url' => ['/message/index'],],
                    
                    ['label' => '流量情况', 'icon' => ' fa-binoculars', 'url' => ['/visit-count/index'],],

                    //个人作业展示
                    [
                        'label' => '个人作业',
                        'icon' => ' fa-download',
                        'url' => 'javascript:;',
                        'items' => [
                            ['label' => '作业1(1711351_李汶蔚)', 'icon' => ' fa-tag', 'url' => ['/data/personal/作业1(1711351_李汶蔚).pdf']],
                            ['label' => '作业1(1711355_李钟毓)', 'icon' => ' fa-tag', 'url' => ['/data/personal/作业1(1711355_李钟毓).zip']],
                            ['label' => '作业1(1711436_皮春莹)', 'icon' => ' fa-tag', 'url' => ['/data/personal/作业1(1711436_皮春莹).pdf']],
                            ['label' => '作业1(1711438_史晓融)', 'icon' => ' fa-tag', 'url' => ['/data/personal/作业1(1711438_史晓融).pdf']],
                            ['label' => '作业2(1711351_李汶蔚)', 'icon' => ' fa-tag', 'url' => ['/data/personal/作业2(1711351_李汶蔚).zip']],
                            ['label' => '作业2(1711355_李钟毓)', 'icon' => ' fa-tag', 'url' => ['/data/personal/作业2(1711355_李钟毓).zip']],
                            ['label' => '作业2(1711436_皮春莹)', 'icon' => ' fa-tag', 'url' => ['/data/personal/作业2(1711436_皮春莹).rar']],
                            ['label' => '作业2(1711438_史晓融)', 'icon' => ' fa-tag', 'url' => ['/data/personal/作业2(1711438_史晓融).zip']],
                            ['label' => '作业3(1711351_李汶蔚)', 'icon' => ' fa-tag', 'url' => ['/data/personal/作业3(1711351_李汶蔚).pdf']],
                            ['label' => '作业3(1711355_李钟毓)', 'icon' => ' fa-tag', 'url' => ['/data/personal/作业3(1711355_李钟毓).zip']],
                            ['label' => '作业3(1711436_皮春莹)', 'icon' => ' fa-tag', 'url' => ['/data/personal/作业3(1711436_皮春莹).pdf']],
                            ['label' => '作业3(1711438_史晓融)', 'icon' => ' fa-tag', 'url' => ['/data/personal/作业3(1711438_史晓融).pdf']],
                        ],
                    ], 
                     [
                        'label' => '团队作业',
                        'icon' => ' fa-download',
                        'url' => 'javascript:;',
                        'items' => [
                            ['label' => '本项目亮点一览', 'icon' => ' fa-tag', 'url' => ['/data/team/404NotFound_本项目亮点一览(1711355_1711351_1711436_1711438).pdf']],
                            ['label' => '目录结构', 'icon' => ' fa-tag', 'url' => ['/data/team/404NotFound_目录结构(1711355_1711351_1711436_1711438).pdf']],
                            ['label' => '需求文档', 'icon' => ' fa-tag', 'url' => ['/data/team/404NotFound_需求文档(1711355_1711351_1711436_1711438).pdf']],
                            ['label' => '设计文档', 'icon' => ' fa-tag', 'url' => ['/data/team/404NotFound_设计文档(1711355_1711351_1711436_1711438).pdf']],
                            ['label' => '实现文档', 'icon' => ' fa-tag', 'url' => ['/data/team/404NotFound_实现文档(1711355_1711351_1711436_1711438).pdf']],
                            ['label' => '用户手册', 'icon' => ' fa-tag', 'url' => ['/data/team/404NotFound_用户手册(1711355_1711351_1711436_1711438).pdf']],
                            ['label' => '部署文档', 'icon' => ' fa-tag', 'url' => ['/data/team/404NotFound_部署文档(1711355_1711351_1711436_1711438).pdf']],
                            ['label' => '项目展示', 'icon' => ' fa-tag', 'url' => ['/data/team/404NotFound_项目展示(1711355_1711351_1711436_1711438).pptx']],


                        ],
                    ], 

                    [
                        'label' => '数据库文件及源码',
                        'icon' => ' fa-download',
                        'url' => 'javascript:;',
                        'items' => [
                            ['label' => '数据库文件', 'icon' => ' fa-tag', 'url' => ['/data/install.sql']],
                            ['label' => 'github项目链接', 'icon' => ' fa-tag', 'url' => 'https://github.com/lzyhha/Centenary'],
                            ['label' => '一键部署sh文件', 'icon' => ' fa-tag', 'url' => '/data/command.sh'],
                        ],
                    ],     

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
