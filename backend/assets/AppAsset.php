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
        'css/bootstrap.css',
        'css/font-awesome.css',
        'js/morris/morris-0.4.3.min.css',
        'css/custom-styles.css'
    ];
    public $js = [
        'js/jquery-1.10.2.js',
        'js/bootstrap.min.js',
        'js/jquery.metisMenu.js',
        'js/morris/raphael-2.1.0.min.js',
        'js/morris/morris.js',
        'js/custom-scripts.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
