<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',


    'aliases' => array(
        'comments' => realpath(dirname(__FILE__) . '/../..') . '/vendor/pendalf89/yii-commentator/',
    ),
    'modules'=>array(
        'comments' => array(
            'class' => 'pendalf89\yii_commentator\CommentsModule',
            'userModelClass' => '',
            'isSuperuser' => '!Yii::app()->user->isGuest',
        ),
    ),


    'components' => [
        /*'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],*/
        'user' => [
            'identityCookie' => [
                'name'     => '_frontendIdentity',
                'path'     => '/',
                'httpOnly' => true,
            ],
        ],
        'session' => [
            'name' => 'FRONTENDSESSID',
            'cookieParams' => [
                'httpOnly' => true,
                'path'     => '/',
            ],
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@frontend/views' => '@frontend/themes/futbol/views',
                    '@frontend/modules' => '@frontend/themes/futbol/modules',
//                    '@frontend/modules' => '@frontend/themes/yamnik/modules'
//                    '@app/views' => '@app/themes/site/views',
                    //'@frontend/views' => '@frontend/themes/admin/views',
                ]
            ]
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
            'showScriptName' => false,
            //'suffix' => '.html',
            'rules' => [
                '' => 'site/index',
                '<action>'=>'site/<action>',
                '<action>'=>'champs/<action>',
            ],
        ],
        'assetManager' => [
            'basePath' => '@webroot/assets',
            'baseUrl' => '@web/assets'
        ],
        'request' => [
            'baseUrl' => ''
        ],
        'db' => require(__DIR__ . '/db.php')
    ],
    'params' => $params,
];
