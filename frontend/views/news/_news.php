<?php
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 12/1/15
 * Time: 12:18 PM
 * To change this template use File | Settings | File Templates.
 */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;
?>


<h3><?=Html::a(Html::encode($model->title), Url::toRoute(['news/view', 'id'=>$model->id]));?></h3>
<div class="descr">
    <?=Html::encode($model->descr);?>
</div>
<div class="news_footer">
    <span> Дата:</span>         <span class="newsDate bold"><?=date('d.m.Y', $model->date)?></span>
    <span> Лайки:</span>        <span class="newsLike bold"><?=$model->like?></span>

    <?= Html::a('like', 'javascript:void(0)', ['class' => 'btn btn-lg btn-warning glyphicon glyphicon-arrow-up', 'onclick' => "likeNews($(this), $model->id)"]) ?>
    <?= Html::a('dislike', 'javascript:void(0)', ['class' => 'btn btn-lg btn-primary glyphicon glyphicon-arrow-down', 'onclick' => "dislikeNews($(this), $model->id)"]) ?>

    <span> Комментариев:</span> <span class="newsDate bold"><?=$model->count_comment?></span>
    <span> Просмотров:</span>   <span class="newsDate bold"><?=$model->counter?></span>
</div>
