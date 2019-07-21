<?php

/**
 * Team: 404NotFound,NKU
 * Coding by 李钟毓 1711355, 20190721
 * This this the api config.
 */


$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-api',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'api\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-api',
        ],
        'response' => [                                                                     //错误响应
            'class' => 'yii\web\Response',
            'on beforeSend' => function ($event) {
                $response = $event->sender;
                $response->data = [
                    'success' => $response->isSuccessful,
                    'code' => $response->getStatusCode(),
                    'data' => $response->data,
                    'message' => $response->statusText
                ];
                $response->statusCode = 200;               
            },
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-api', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the api
            'name' => 'advanced-api',
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
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing'=>true,
            'showScriptName' => false,
            'rules' => [
               [
                    'class'=>'yii\rest\UrlRule',
                    'controller'=>'praise',
                    'pluralize'=>false,
                    'extraPatterns'=>[
                        'POST add'=>'add',
                    ]
                ], 

                [
                    'class'=>'yii\rest\UrlRule',
                    'controller'=>'site',
                    'pluralize'=>false,
                    'extraPatterns'=>[
                        'POST contact'=>'contact',
                    ]
                ], 
            ],
        ],
    ],
    'params' => $params,
];
