<?php
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 12/2/15
 * Time: 9:11 AM
 * To change this template use File | Settings | File Templates.
 */
use yii\widgets\ListView;
echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemOptions' => ['class' => 'item'],
    'itemView' => '_news',
    /*function ($model, $key, $index, $widget) {
        return $this->render('_news', ['model' => $model]);
    },*/
    'ajaxUpdate'=>true,
    //'layout' => "{pager}\n{items}\n{summary}",
    'layout' => "{items}",
]);
?>

<div id="listView">

    <?php
    $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
    'ajaxUpdate'=>false,
    'template'=>"{items}\n{pager}",
    'pager'=>array(
        'htmlOptions'=>array(
            'class'=>'paginator'
        )
    ),
));
    ?>

</div>

<?php if ($dataProvider->totalItemCount > $dataProvider->pagination->pageSize): ?>

<p id="loading" style="display:none"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/loading.gif" alt="" /></p>
<p id="showMore">Показать ещё</p>

<script type="text/javascript">
    /*<![CDATA[*/
    (function($)
    {
        // скрываем стандартный навигатор
        $('.paginator').hide();

        // запоминаем текущую страницу и их максимальное количество
        var page = parseInt('<?php echo (int)Yii::app()->request->getParam('page', 1); ?>');
        var pageCount = parseInt('<?php echo (int)$dataProvider->pagination->pageCount; ?>');

        var loadingFlag = false;

        $('#showMore').click(function()
        {
            // защита от повторных нажатий
            if (!loadingFlag)
            {
                // выставляем блокировку
                loadingFlag = true;

                // отображаем анимацию загрузки
                $('#loading').show();

                $.ajax({
                    type: 'post',
                    url: window.location.href,
                    data: {
                        // передаём номер нужной страницы методом POST
                        'page': page + 1,
                        '<?php echo Yii::app()->request->csrfTokenName; ?>': '<?php echo Yii::app()->request->csrfToken; ?>'
                    },
                    success: function(data)
                    {
                        // увеличиваем номер текущей страницы и снимаем блокировку
                        page++;
                        loadingFlag = false;

                        // прячем анимацию загрузки
                        $('#loading').hide();

                        // вставляем полученные записи после имеющихся в наш блок
                        $('#listView').append(data);

                        // если достигли максимальной страницы, то прячем кнопку
                        if (page >= pageCount)
                            $('#showMore').hide();
                    }
                });
            }
            return false;
        })
    })(jQuery);
    /*]]>*/
</script>

<?php endif; ?>