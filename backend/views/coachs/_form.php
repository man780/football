<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model backend\models\Coachs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="coachs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'oname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'img')->fileInput() ?>

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
