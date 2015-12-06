<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\News */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'News'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .cancelLike, .cancelDislike{
        font-weight: bold;
    }
</style>
<script>
    //$(document).ready(function(){
    function likeNews(obj, id_news){
        $.ajax({
            url: "/news/like/",
            type: "get",
            data: {id : id_news},
            success: function(response) {
                likesArr = JSON.parse(response);
                obj.parents('.news_footer').find('.newsLike').html(likesArr[0]);
                obj.addClass('cancelLike');
                obj.parents('.news_footer').find('.disLikeBtn').removeClass('cancelDislike');
                obj.attr('onclick', 'cancelLikeNews($(this), '+id_news+')');
                obj.parents('.news_footer').find('.newsDislike').html(likesArr[1]);
            }
        });
    }

    function cancelLikeNews(obj, id_news){
        $.ajax({
            url: "/news/cancellike/",
            type: "get",
            data: {id : id_news},
            success: function(response) {
                obj.parents('.news_footer').find('.newsLike').html(response);
                obj.removeClass('cancelLike');
                obj.parents('.news_footer').find('.disLikeBtn').removeClass('cancelDislike');
                obj.attr('onclick', 'likeNews($(this), '+id_news+')');
            }
        });
    }

    function dislikeNews(obj, id_news){
        $.ajax({
            url: "/news/dislike/",
            type: "get",
            data: {id : id_news},
            success: function(response) {
                likesArr = JSON.parse(response);
                obj.parents('.news_footer').find('.newsLike').html(likesArr[0]);
                obj.parents('.news_footer').find('.newsDislike').html(likesArr[1]);

                obj.addClass('cancelDislike');
                obj.parents('.news_footer').find('.likeBtn').removeClass('cancelLike');
                obj.attr('onclick', 'cancelDislikeNews($(this), '+id_news+')');
            }
        });
    }

    function cancelDislikeNews(obj, id_news){
        $.ajax({
            url: "/news/canceldislike/",
            type: "get",
            data: {id : id_news},
            success: function(response) {
                likesArr = JSON.parse(response);
                obj.parents('.news_footer').find('.newsDislike').html(response);
                obj.removeClass('cancelDislike');
                obj.parents('.news_footer').find('.likeBtn').removeClass('cancelLike');
                obj.attr('onclick', 'dislikeNews($(this), '+id_news+')');
            }
        });
    }

    $(window).scroll(function()
    {
        loadingFlag = false;
        if (!loadingFlag)
        {
            if ($(window).scrollTop() == $(document).height() - $(window).height())
            {
                console.log('d');
                loadingFlag = true;
                //...

                // если достигли максимальной страницы, то прячем кнопку
                /*if (page >= pageCount)
                    loadingFlag = true;*/
            }
        }
    })

</script>
<div class="news-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <br>
    <br>
    <?//vd($model->attributes, false)?>
    <?=Html::img($model->img)?>
    <br>
    <?=Html::tag('div', $model->text)?>
    <br>

    <div class="news_footer">
        <span> Дата:</span>         <span class="newsDate bold"><?=date('d.m.Y', $model->date)?></span>
        <span> Лайки:</span>        <span class="newsLike bold"><?=$model->like?></span>
        <?= Html::a('like', 'javascript:void(0)', ['class' => 'likeBtn likeNews', 'onclick' => "likeNews($(this), $model->id)"]) ?>
        <span> Дислайки:</span>        <span class="newsDislike bold"><?=$model->dislike?></span>
        <?= Html::a('dislike', 'javascript:void(0)', ['class' => 'disLikeBtn dislikeNews', 'onclick' => "dislikeNews($(this), $model->id)"]) ?>

        <span> Комментариев:</span> <span class="newsDate bold"><?=$model->count_comment?></span>
        <span> Просмотров:</span>   <span class="newsDate bold"><?=$model->counter?></span>
    </div>
    <br>
    <?
        echo Html::a('Yangiliklar ro`yxatiga qaytish', Url::toRoute('/news/list'));
    ?>
<br>
<br>
<br>
    <?=Html::beginTag('div', ['class'=>'commentList']);?>
        <h1>Kommentarialar</h1>
        <?//=$this->render('commentsList');?>
    <?=Html::endTag('div');?>

</div>
