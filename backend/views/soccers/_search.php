<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SoccersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="soccers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'fname') ?>

    <?= $form->field($model, 'oname') ?>

    <?= $form->field($model, 'img') ?>

    <?php // echo $form->field($model, 'goals') ?>

    <?php // echo $form->field($model, 'assists') ?>

    <?php // echo $form->field($model, 'id_club') ?>

    <?php // echo $form->field($model, 'id_country') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
