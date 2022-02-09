<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700',
        'css/font-awesome.min.css',
        'css/linearicons.css',
        'css/magnific-popup.css',
        'css/animate.min.css',
        'css/owl.carousel.css',
        'css/main.css',


    ];
    public $js = [

        'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js',
        'js/vendor/jquery-2.2.4.min.js',
        'js/jquery.ajaxchimp.min.js',
        'js/jquery.magnific-popup.min.js',
        'js/owl.carousel.min.js',
        'js/jquery.sticky.js',
        'js/jquery.sticky.js',
        'js/jquery.counterup.min.js',
        'js/waypoints.min.js',
        'js/main.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}