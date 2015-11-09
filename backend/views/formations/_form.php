<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Formations */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="formations-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_match')->textInput() ?>

    <?= $form->field($model, 'soccers1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'soccers2')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
