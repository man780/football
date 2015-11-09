<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Formations */

$this->title = Yii::t('app', 'Create Formations');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Formations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="formations-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
