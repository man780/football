<?php
namespace frontend\themes\futbol\assets;
use yii\web\AssetBundle;

/**
 * @author
 * @version 0.1
 */

class AppAssets  extends AssetBundle
{
    public $sourcePath = '@frontend/themes/futbol/assets';
    public $baseUrl = '@web';

    public $css = [
        'css/style.css',
        'css/reset.css',
        'css/myStyle.css',
        'css/ie.css',
        'css/ie10.css',
        'css/jquery.jscrollpane.css',
    ];

    public $js = [
        'js/jquery.alphanumerick.js',
        'js/jquery.event.frame.js',
        'js/jquery.jparalax.min.js',
        'js/jquery.js',
        'js/jquery.jscrollpane.min.js',
        'js/jquery.maskedinput-1.3.min.js',
        'js/jquery.mousewheel.js',
        'js/myscript.js',
        'js/myscript2.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset'
        //'frontend\modules\maths\assets\MathsAssets',
//        'frontend\modules\mathematics\assets\MathematicsAssets',

    ];
}
