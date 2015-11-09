<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Streaming */

$this->title = Yii::t('app', 'Create Streaming');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Streamings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="streaming-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
