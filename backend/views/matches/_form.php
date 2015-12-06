<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Matches */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="matches-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tur')->textInput() ?>

    <?= $form->field($model, 'id_champ')->textInput() ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'id_team1')->textInput() ?>

    <?= $form->field($model, 'id_team2')->textInput() ?>

    <?= $form->field($model, 'score1')->textInput() ?>

    <?= $form->field($model, 'score2')->textInput() ?>

    <?= $form->field($model, 'score11')->textInput() ?>

    <?= $form->field($model, 'score21')->textInput() ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
