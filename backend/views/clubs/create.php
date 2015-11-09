<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Clubs */

$this->title = Yii::t('app', 'Create Clubs');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Clubs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clubs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
