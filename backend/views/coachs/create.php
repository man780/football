<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Coachs */

$this->title = Yii::t('app', 'Create Coachs');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Coachs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coachs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'clubsList' => $clubsList,
        'countriesList' => $countriesList,
    ]) ?>

</div>
