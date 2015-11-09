<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \dosamigos\ckeditor\CKEditor;
use \dosamigos\datepicker\DatePicker;
use \yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model backend\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descr')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'advanced'
    ]) ?>

    <?= $form->field($model, 'text')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'advanced'
    ]) ?>

    <?= $form->field($model, 'img')->fileInput() ?>

    <?= $form->field($model, 'id_champ')->dropDownList(
        ArrayHelper::map($champsList, 'id', 'name')
    ) ?>

    <?= $form->field($model, 'id_country')->dropDownList(
        ArrayHelper::map($countriesList, 'id', 'name')
    ) ?>

    <?= $form->field($model, 'id_club')->dropDownList(
        ArrayHelper::map($clubsList, 'id', 'name')
    ) ?>

    <?= $form->field($model, 'id_soccer')->dropDownList(
        ArrayHelper::map($soccersList, 'id', 'name')
    ) ?>

    <?= $form->field($model, 'counter')->textInput() ?>

    <?= $form->field($model, 'date')->widget(
        DatePicker::className(), [
        // inline too, not bad
        'inline' => true,
        // modify template for custom rendering
        'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'dd.mm.yyyy'
        ]
    ]);?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
