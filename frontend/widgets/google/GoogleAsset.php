<?php
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 11/24/15
 * Time: 8:01 PM
 * To change this template use File | Settings | File Templates.
 */
namespace frontend\widgets\google;
use yii\web\AssetBundle;
class GoogleAsset extends AssetBundle
{
    public $sourcePath = '@frontend/widgets/google/assets';
    public $css = [
        'css/google.maps.css'
    ];

    public $js = [
        'https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}