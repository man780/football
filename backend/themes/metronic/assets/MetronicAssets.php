<?php
namespace backend\themes\metronic\assets;
use yii\web\AssetBundle;

/**
 * @author Aripjanov Sherzod <sherzod@aripjanov.pro> (http://www.aripjanov.pro)
 * @version 0.1
 */

class MetronicAssets extends AssetBundle
{
    public $sourcePath = '@backend/themes/metronic/assets';

    /**
     * @inheritdoc
     */
    public $css = [
        'global/plugins/font-awesome/css/font-awesome.min.css',
        'global/plugins/simple-line-icons/simple-line-icons.min.css',
        'global/plugins/bootstrap-switch/css/bootstrap-switch.min.css',
        'global/plugins/select2/select2.css',
        'global/css/components.css',
        'global/css/plugins.css',
        'admin/layout/css/layout.css',
        'admin/layout/css/themes/default.css',
        'admin/layout/css/custom.css',
    ];

    public $js = [
        'global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
        'global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
        'global/plugins/jquery.blockui.min.js',
        'global/plugins/jquery.cokie.min.js',
        'global/plugins/uniform/jquery.uniform.min.js',
        'global/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
        'global/plugins/select2/select2.min.js',
        'global/scripts/metronic.js',
        'admin/layout/scripts/layout.js',
        'admin/layout/scripts/quick-sidebar.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
} 