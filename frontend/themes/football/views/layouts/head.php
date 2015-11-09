<?php
/**
 * @author Aripjanov Sherzod <sherzod@aripjanov.pro> (http://www.aripjanov.pro)
 * @version 0.1
 */

use backend\themes\metronic\assets\MetronicAssets;
use yii\helpers\Html;
use yii\helpers\Url;

?>
<title><?= Html::encode($this->title); ?></title>
<?= Html::csrfMetaTags(); ?>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
<?php $this->head(); ?>

<?php \frontend\themes\yamnik\assets\AppAssets::register($this);

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