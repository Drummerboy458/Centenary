<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'name' => 'Ahri',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        "admin" => [        
        "class" => "mdm\admin\Module",
        //'layout' => 'left-menu',//yii2-admin的导航菜单
        ],
    ],
    "aliases" => [    
    "@mdm/admin" => "@vendor/mdmsoft/yii2-admin",
    ],
    'language' => 'zh-CN',
    'components' => [

        "authManager" => [        
        "class" => 'yii\rbac\DbManager', 
        "defaultRoles" => ["guest"],
        ],
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\models\Adminuser',
            'enableAutoLogin' => true,
            'loginUrl' => array('/site/login'),
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        "urlManager" => [
            "enablePrettyUrl" => true,
            "enableStrictParsing" => false,
            "showScriptName" => false,
            "suffix" => "",
            "rules" => [        
            "<controller:\w+>/<id:\d+>"=>"<controller>/view",  
            "<controller:\w+>/<action:\w+>"=>"<controller>/<action>"    
            ],
        ],
    ],
    'as access' => [
         'class' => 'mdm\admin\components\AccessControl',
         'allowActions' => [
                 'site/*',
             ], // 后面对权限完善了以后，把*改回来
        ],
    'params' => $params,
    'defaultRoute' => 'site/login'
];
