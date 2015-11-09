<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\StatsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stats-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_match') ?>

    <?= $form->field($model, 'y_card1') ?>

    <?= $form->field($model, 'y_card2') ?>

    <?= $form->field($model, 'r_card1') ?>

    <?php // echo $form->field($model, 'r_card2') ?>

    <?php // echo $form->field($model, 'shots1') ?>

    <?php // echo $form->field($model, 'shots2') ?>

    <?php // echo $form->field($model, 'sh_on_ts1') ?>

    <?php // echo $form->field($model, 'sh_on_ts2') ?>

    <?php // echo $form->field($model, 'corners1') ?>

    <?php // echo $form->field($model, 'corners2') ?>

    <?php // echo $form->field($model, 'foul1') ?>

    <?php // echo $form->field($model, 'foul2') ?>

    <?php // echo $form->field($model, 'offsides1') ?>

    <?php // echo $form->field($model, 'offsides2') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
