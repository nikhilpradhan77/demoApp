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
        'web/css/font.css',
        'web/css/font-awesome.css',
        'web/css/jqvmap.css',
        'web/css/lightbox.css',
        'web/css/minimal.css',
        'web/css/monthly.css',
        'web/css/morris.css',
        'web/css/style.css',
        'web/css/style-responsive.css',
        // 'css/argon.css',
        // 'css/argon.min.css',
        // 'web/fonts/fontawesome-webfont.woff',
        // 'web/fonts/fontawesome-webfont.woff2',
        // 'web/fonts/glyphicons-halflings-regular.css',
        // 'web/fonts/glyphicons-halflings-regular.css',
        // 'web/fonts/fontawesome-webfont.css',
    
         ];
    public $js = [
        // 'web/js/jquery.dcjqaccordion.2.7.js',
        // 'web/js/jquery.nicescroll.js',
        // 'web/js/jquery.scrollTo.js',
        // 'web/js/jquery.slimscroll.js',
        // 'web/js/jquery2.0.3.min.js',
        // 'web/js/lightbox-plus-jquery.min.js',
        // 'web/js/monthly.js',
        // 'web/js/morris.js',
        // 'web/js/raphael-min.js',
        // 'web/js/scripts.js',
        // 'js/argon.js',
        // 'js/argon.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        
    ];
}
