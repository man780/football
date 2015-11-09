<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Stats */

$this->title = Yii::t('app', 'Create Stats');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Stats'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stats-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
