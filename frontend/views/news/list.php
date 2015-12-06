<?php
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 12/1/15
 * Time: 11:57 AM
 * To change this template use File | Settings | File Templates.
 */
use yii\widgets\ListView;
use yii\widgets\Pjax;

?>
<style>
    .item_news{
        /*box-shadow: 10px;*/
        padding: 10px;
    }
    .item_news .bold{
        font-weight: bold;
    }
    .item_news .news_footer{
        background-color: #ccc;
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
                obj.parents('.news_footer').find('.newsDislike').html(likesArr[1]);
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

<div class="news_list">
<?
    Pjax::begin();
    echo ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item_news'],
        'itemView' => function ($model, $key, $index, $widget) {
            return $this->render('_news', ['model' => $model]);
        },
        //'layout' => "{pager}\n{items}\n{summary}",
        'layout' => "{items}",
    ]);
    Pjax::end();
?>
</div>
    <?
//echo $this->render('_loop', array('dataProvider'=>$dataProvider)); ?>