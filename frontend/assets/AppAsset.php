<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',
        'frontend/web/css/bootstrap.min.css',
	//	'//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css',
        'frontend/web/css/style.css',
        'frontend/web/plugins/lightbox/dist/css/lightbox.css'
    ];
    public $js = [
     //   'frontend/web/js/jquery-min.js',
        'frontend/web/js/bootstrap.min.js',
        'frontend/web/js/nivo-lightbox.js',
        'frontend/web/js/owl.carousel.js',
        'frontend/web/js/jquery.nav.js',
        'frontend/web/js/scrolling-nav.js',
        'frontend/web/js/custom.js',
        'frontend/web/plugins/lightbox/dist/js/lightbox.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
      //  'yii\bootstrap\BootstrapAsset',
    ];
}
