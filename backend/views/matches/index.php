<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use backend\models\Champs;
use backend\models\Clubs;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\MatchesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Matches');
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="matches-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Matches'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            'tur',
            'id_champ' => [
                'attribute' => 'id_champ',
                'value' => 'champ.name',
                'filter' => Html::activeDropDownList($searchModel, 'id_champ', ArrayHelper::map(Champs::find()->asArray()->all(), 'id', 'name'),['class'=>'form-control','prompt' => 'Select Category']),
            ],
            'date:date',
            /*'id_team1',
            'id_team2',*/
            [
                'attribute' => 'id_team1',
                'label' => Yii::t('app', 'Teams'),
                //'format' => 'raw',
                'value' => function($dataProvider) {
                    $score = Clubs::getClub($dataProvider['id_team1'])->name . ' - ' . Clubs::getClub($dataProvider['id_team2'])->name;
                    return $score;
                },
                'contentOptions'=>['style'=>'max-width: 100px;align:center'],
            ],
            [
                'label' => Yii::t('app', 'Score'),
                //'format' => 'raw',
                'value' => function($dataProvider) {
                    $score = $dataProvider['score1'] . (is_int($dataProvider['score11'])?'($dataProvider["score11"])':'').' - ' . $dataProvider['score2'].(is_int($dataProvider['score21'])?'($dataProvider["score21"])':'');
                    return $score;
                },
                'contentOptions'=>['style'=>'max-width: 100px;align:center'],
            ],
            /*'score1',
            'score2',
            'score11',
            'score21',*/
            // 'text:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
