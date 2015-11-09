<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Soccers */

$this->title = Yii::t('app', 'Create Soccers');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Soccers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="soccers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
