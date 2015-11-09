<?php

use backend\themes\metronic\assets\MetronicAssets;
use yii\helpers\Html;
use yii\helpers\Url;

?>
<title><?= Html::encode($this->title); ?></title>
<?= Html::csrfMetaTags(); ?>
<?php $this->head(); ?>

<?php MetronicAssets::register($this);

$this->registerMetaTag(
    [
        'charset' => Yii::$app->charset
    ]
);
$this->registerMetaTag(
    [
        'name' => 'viewport',
        'content' => 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'
    ]
);
$this->registerLinkTag(
    [
        'rel' => 'canonical',
        'href' => Url::canonical()
    ]
); ?>