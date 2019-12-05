<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
       'css/site.css',
        'css/main.css',
        'https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css',
        'css/custom.css'
    ];
    public $js = [
        'scripts/main.js',
        'https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js',
        'scripts/custom.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
    'yii\bootstrap\BootstrapAsset',
    ];
}
