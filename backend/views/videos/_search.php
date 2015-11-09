<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\VideosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="videos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_champ') ?>

    <?= $form->field($model, 'id_country') ?>

    <?= $form->field($model, 'id_club') ?>

    <?= $form->field($model, 'id_soccer') ?>

    <?php // echo $form->field($model, 'id_coach') ?>

    <?php // echo $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'img') ?>

    <?php // echo $form->field($model, 'text') ?>

    <?php // echo $form->field($model, 'counter') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
