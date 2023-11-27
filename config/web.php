<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'layout' => 'laser',
    'name' => 'Промдеталь',
    'language' => 'ru',
    'defaultRoute' => 'laser/index',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            'cookieValidationKey' => 'rabota',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.yandex.ru',
                'username' => 'lolbagg@yandex.ru',
                'password' => 'ndydvtrvlfhfpjfm',
                'port' => 587,
                'encryption' => 'tls',
                'streamOptions' => ['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]],
            ],
            'messageConfig' => [
                'charset' => 'UTF-8',
                'from' => ['lolbagg@yandex.ru' => 'Владислав'],
            ],
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
        'db' => $db,
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                'laser/application-form' => 'laser/application-form',
            ],
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // Отключаем модули Debug и Gii в разработке
    unset($config['bootstrap']);
    unset($config['modules']['debug']);
    unset($config['bootstrap']);
    unset($config['modules']['gii']);
}

return $config;
