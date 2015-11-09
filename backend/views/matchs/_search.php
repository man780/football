<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MatchsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="matchs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_champ') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'id_team1') ?>

    <?= $form->field($model, 'id_team2') ?>

    <?php // echo $form->field($model, 'score1') ?>

    <?php // echo $form->field($model, 'score2') ?>

    <?php // echo $form->field($model, 'score11') ?>

    <?php // echo $form->field($model, 'score21') ?>

    <?php // echo $form->field($model, 'text') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
