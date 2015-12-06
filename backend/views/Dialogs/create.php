<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Dialogs */

$this->title = Yii::t('app', 'Create Dialogs');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dialogs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dialogs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
