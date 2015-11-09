<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\SprEvents */

$this->title = Yii::t('app', 'Create Spr Events');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Spr Events'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spr-events-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
