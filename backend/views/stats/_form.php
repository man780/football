<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Stats */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stats-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_match')->textInput() ?>

    <?= $form->field($model, 'y_card1')->textInput() ?>

    <?= $form->field($model, 'y_card2')->textInput() ?>

    <?= $form->field($model, 'r_card1')->textInput() ?>

    <?= $form->field($model, 'r_card2')->textInput() ?>

    <?= $form->field($model, 'shots1')->textInput() ?>

    <?= $form->field($model, 'shots2')->textInput() ?>

    <?= $form->field($model, 'sh_on_ts1')->textInput() ?>

    <?= $form->field($model, 'sh_on_ts2')->textInput() ?>

    <?= $form->field($model, 'corners1')->textInput() ?>

    <?= $form->field($model, 'corners2')->textInput() ?>

    <?= $form->field($model, 'foul1')->textInput() ?>

    <?= $form->field($model, 'foul2')->textInput() ?>

    <?= $form->field($model, 'offsides1')->textInput() ?>

    <?= $form->field($model, 'offsides2')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
