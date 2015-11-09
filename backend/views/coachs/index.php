<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CoachsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Coachs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coachs-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Add {modelClass}', ['modelClass' => mb_convert_case(Yii::t('app', 'Coach'), MB_CASE_LOWER, "UTF-8")]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'fname',
            'oname',
            'img',
            'id_club',
            'id_country',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
