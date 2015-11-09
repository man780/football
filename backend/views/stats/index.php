<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\StatsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Stats');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stats-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Stats'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_match',
            'y_card1',
            'y_card2',
            'r_card1',
            'r_card2',
            // 'shots1',
            // 'shots2',
            // 'sh_on_ts1',
            // 'sh_on_ts2',
            // 'corners1',
            // 'corners2',
            // 'foul1',
            // 'foul2',
            // 'offsides1',
            // 'offsides2',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
