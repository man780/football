<?php
namespace frontend\themes\football\assets;
use yii\web\AssetBundle;

/**
 * @author Aripjanov Sherzod <sherzod@aripjanov.pro> (http://www.aripjanov.pro)
 * @version 0.1
 */

class AppAssets  extends AssetBundle
{
    public $sourcePath = '@frontend/themes/football/assets';
    public $baseUrl = '@web';

    public $css = [
        'css/_main.css',
        'css/fonts.css',
        'css/normalize.css',
        'css/slick.css',
    ];

    public $js = [
        'js/_main.js',
        'js/fonts.js',
        'js/normalize.js',
        'js/slick.js',
        'js/calendar.js',
        'js/classie.js',
        'js/jquery.js',
        'js/jscrollpane.js',
        'js/modernizr.js',
        'js/mousewheel.js',
        'js/stempsForm.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset'
        //'frontend\modules\maths\assets\MathsAssets',
//        'frontend\modules\mathematics\assets\MathematicsAssets',

    ];
}
