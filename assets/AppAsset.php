<?php

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/vendor.css',
        'css/main.css',
        'https://fonts.googleapis.com/css2?family=Source+Sans+3&display=swap',
        'https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@600&display=swap',
        'https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@700&display=swap',
    ];
    public $js = [
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];

   
}
