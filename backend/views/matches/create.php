<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Matches */

$this->title = Yii::t('app', 'Create Matches');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Matches'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="matches-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
