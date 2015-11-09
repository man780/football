<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model backend\models\Soccers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="soccers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'oname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'goals')->textInput() ?>

    <?= $form->field($model, 'assists')->textInput() ?>

    <?= $form->field($model, 'id_club')->dropDownList(
        ArrayHelper::map($clubsList, 'id', 'name')
    ) ?>

    <?= $form->field($model, 'id_country')->dropDownList(
        ArrayHelper::map($countriesList, 'id', 'name')
    ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
