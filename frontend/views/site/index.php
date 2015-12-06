<?php
use frontend\widgets\matches\MatchesWidget;
/* @var $this yii\web\View */
$this->title = 'Futbol.uz';
//vd(Yii::$app->user->id);
?>
<?php
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 11/22/15
 * Time: 9:36 PM
 * To change this template use File | Settings | File Templates.
 */?>


<?
//$matches = \backend\models\Matchs::find()->where([])->limit(3)->orderBy('id')->all();
//vd($matches);?>
<?//= \frontend\widgets\mywidget\HelloWidget::widget(['message' => 'ddd morning']) ?>
<div class="newsBlock">
    <div class="outNBHide">
        <div class="NBZag">
            <h2>Новости</h2>
            <div class="NBswitchPanel">
                <div class="goLeft"></div>
                <div class="goRight"></div>
            </div>
            <a href="javascript:void(0)" style="border-bottom-style:solid">Показать все</a>
            <a href="javascript:void(0)">Компания</a>
            <a href="javascript:void(0)">Узбекистан</a>
            <a href="javascript:void(0)">Мир</a>
        </div>
        <ul class="NBUl">
            <?
            $i=0;
            foreach($listNews as $news):
            $i++;
            ?>
            <li <?=($i%2 ? '':"class='liInNBPad'")?>>
                <h3 class="NBH3"><a href="javascript:void(0)"> <?=$news->title?></a></h3>
                <div class="NBcontent">
                    <img src="<?=$layoutPath?>/img/NBcontentIMG.png" alt="" />
                    <div class="NBcontentIn">
                        <span class="date"><?=date('d.m.Y',$news->date);?></span>
                        <p><?=$news->text ?><b class="GradiendEnd"></b></p>
                    </div>
                </div>
                <div class="likePanel">
                    <div class="like LPinNB">
                        <a href="javascript:void(0)" class="coolLink"><b class="cool"></b>Нравиться</a>
                        <a href="javascript:void(0)" class="collPeople">(9999)</a>
                    </div>
                    <div class="like LPinNB">
                        <a href="javascript:void(0)" class="see"></a>
                        <a href="javascript:void(0)" class=""><?=$news->counter?></a>
                    </div>
                    <div class="like LPinNBR">
                        <a href="javascript:void(0)" class="">(100)</a>
                        <a href="javascript:void(0)" class="comlike"><?=$news->like?></a>
                    </div>
                </div>
            </li>
            <?endforeach;?>
        </ul>
    </div>
    <div class="hideAndHow hovernews"></div>
    <div class="hideBlock hideinNB">
        <img src="<?=$layoutPath?>/img/raz.png" alt="" />
        <h2>Новости</h2>
    </div>
</div>
<div class="fixBlock">
    <div class="outFix">
        <div class="NBZag">
            <h2>Матчи</h2>
            <a href="javascript:void(0)" style="border-bottom-style:solid; margin-right:2px;">Показать все</a>
            <a href="javascript:void(0)">Узбекистан</a>
            <a href="javascript:void(0)">Мир</a>
        </div>
        <?=MatchesWidget::widget(['count'=>5, 'offset' => 0, 'tableClass'=>'TableInFix']);?>

        <?=MatchesWidget::widget(['count'=>5, 'offset' => 5, 'tableClass'=>'TableInFix TableInFixTwo']);?>

    </div>
    <div class="hideAndHow hoverFix"></div>
    <div class="hideBlock hideInFix">
        <img src="<?=$layoutPath?>/img/raz.png" alt="" />
        <h2>Матчи</h2>
    </div>
</div>

<div class="MyBan">
    <a href="javascript:voidd(0)"><img src="<?=$layoutPath?>/img/mybanimg.png" alt="" /></a>
</div>

<div class="loader">

<div class="OutInLoader">
<ul class="LoaderMenu">
    <li class="LMli oneLiLM LMActive" alt="statusinUP"><div class="LMdiv1">Статус</div></li>
    <li class="LMli" alt="Photo"><div class="LMdiv2">Фото</div></li>
    <li class="LMli" alt="Video"><div class="LMdiv3">Видео</div></li>
    <li class="LMli" alt="interview"><div class="LMdiv4">Опрос</div></li>
    <li class="LMli endLiLM" alt="links"><div class="LMdiv5">Линк</div></li>
</ul>

<div class="BlockChange">

<div class="statusinUP hideBlocks">
    <form action="" method="post">
        <div class="inputIield PLC" contenteditable="true" inText="Что нового?">Что нового?</div>
        <div class="BlockwithPanel">
            <div class="smile">
                <div class="hoverLink hoverSmile" alt="none">
                    <div class="topLineWin">
                        <div class="leftUg"></div>
                        <div class="leftLineWin"></div>
                        <div class="arrowWinTop"></div>
                        <div class="rightUg"></div>
                        <div class="rightlineWin"></div>
                        <div class="forIeblock"></div>
                    </div>
                    <div class="SmileIn">
                        <img src="<?=$layoutPath?>/img/smile/smile1.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile2.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile3.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile4.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile5.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile6.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile7.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile8.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile9.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile10.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile11.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile12.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile13.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile14.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile16.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile1.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile2.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile3.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile4.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile5.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile6.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile7.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile8.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile9.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile10.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile11.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile12.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile13.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile14.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile16.png" alt="" />
                    </div>
                    <div class="botLineWin">
                        <div class="botLeftUg"></div>
                        <div class="botRightUg"></div>
                        <div class="botCenterLine"></div>
                        <div class="forIeblockBot"></div>
                    </div>
                </div>
            </div>
            <div class="publish">Опубликовать</div>
        </div>
    </form>
</div>

<div class="Photo hideBlocks">
    <form action="" method="post">
        <div class="PhotoContent PLC" contenteditable="true" inText="Добавить описание к вашим фотографиям.">Добавить описание к вашим фотографиям.</div>
        <div class="BlockwithPanel">
            <div class="smile">
                <div class="hoverLink hoverSmile" alt="none">
                    <div class="topLineWin">
                        <div class="leftUg"></div>
                        <div class="leftLineWin"></div>
                        <div class="arrowWinTop"></div>
                        <div class="rightUg"></div>
                        <div class="rightlineWin"></div>
                        <div class="forIeblock"></div>
                    </div>
                    <div class="SmileIn">
                        <img src="<?=$layoutPath?>/img/smile/smile1.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile2.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile3.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile4.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile5.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile6.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile7.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile8.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile9.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile10.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile11.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile12.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile13.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile14.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile16.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile1.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile2.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile3.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile4.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile5.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile6.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile7.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile8.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile9.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile10.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile11.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile12.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile13.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile14.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile16.png" alt="" />
                    </div>
                    <div class="botLineWin">
                        <div class="botLeftUg"></div>
                        <div class="botRightUg"></div>
                        <div class="botCenterLine"></div>
                        <div class="forIeblockBot"></div>
                    </div>
                </div>
            </div>
            <div class="FileUP" onclick="$('.fileUpIn').click();"></div>
            <div class="publish">Опубликовать</div>
            <input type="file" class="fileUpIn"/>
        </div>
        <div class="loadPhoto">
            <div class="addPhoto" onclick="$('input.fileUpIn').click();">
                <b>+</b> <br />Добавить <br/> фото
            </div>
            <div class="PhotoaddImg">
                <div class="deleteImgP">
                    <img src="<?=$layoutPath?>/img/deleteImgPImg.png" alt="" />
                </div>
                <img src="<?=$layoutPath?>/img/galka.png" class="galka" alt="" />
                <img src="<?=$layoutPath?>/img/imgprosto.png" class="PhotoaddImgIn" alt="" />
            </div>
            <div class="PhotoaddImg">
                <div class="deleteImgP">
                    <img src="<?=$layoutPath?>/img/deleteImgPImg.png" alt="" />
                </div>
                <img src="<?=$layoutPath?>/img/galka.png" class="galka" alt="" />
                <img src="<?=$layoutPath?>/img/imgprosto.png" class="PhotoaddImgIn" alt="" />
            </div>
            <div class="PhotoaddImg">
                <div class="deleteImgP">
                    <img src="<?=$layoutPath?>/img/deleteImgPImg.png" alt="" />
                </div>
                <img src="<?=$layoutPath?>/img/galka.png" class="galka" alt="" />
                <img src="<?=$layoutPath?>/img/imgprosto.png" class="PhotoaddImgIn" alt="" />
            </div>
            <div class="PhotoaddImg">
                <div class="deleteImgP">
                    <img src="<?=$layoutPath?>/img/deleteImgPImg.png" alt="" />
                </div>
                <img src="<?=$layoutPath?>/img/galka.png" class="galka" alt="" />
                <img src="<?=$layoutPath?>/img/imgprosto.png" class="PhotoaddImgIn" alt="" />
            </div>
            <div class="PhotoaddImg">
                <div class="deleteImgP">
                    <img src="<?=$layoutPath?>/img/deleteImgPImg.png" alt="" />
                </div>
                <img src="<?=$layoutPath?>/img/galka.png" class="galka" alt="" />
                <img src="<?=$layoutPath?>/img/imgprosto.png" class="PhotoaddImgIn" alt="" />
            </div>
            <div class="PhotoaddImg">

            </div>
            <div class="PhotoaddImg">

            </div>
        </div>
    </form>
</div>


<div class="Video hideBlocks">
    <form action="" method="post">
        <div class="VideContent PLC" contenteditable="true" inText="Название видео">Название видео</div>
        <div class="videoOp PLC" contenteditable="true"inText="Описание видео">Описание видео</div>
        <p class="orInVideo">или</p>
        <div class="linkFromMover PLC" contenteditable="true" inText="Добавить ссылку на mover.uz видео">Добавить ссылку на mover.uz видео</div>
        <div class="BlockwithPanel">
            <div class="smile">
                <div class="hoverLink hoverSmile" alt="none">
                    <div class="topLineWin">
                        <div class="leftUg"></div>
                        <div class="leftLineWin"></div>
                        <div class="arrowWinTop"></div>
                        <div class="rightUg"></div>
                        <div class="rightlineWin"></div>
                        <div class="forIeblock"></div>
                    </div>
                    <div class="SmileIn">
                        <img src="<?=$layoutPath?>/img/smile/smile1.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile2.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile3.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile4.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile5.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile6.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile7.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile8.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile9.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile10.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile11.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile12.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile13.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile14.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile16.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile1.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile2.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile3.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile4.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile5.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile6.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile7.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile8.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile9.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile10.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile11.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile12.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile13.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile14.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile16.png" alt="" />
                    </div>
                    <div class="botLineWin">
                        <div class="botLeftUg"></div>
                        <div class="botRightUg"></div>
                        <div class="botCenterLine"></div>
                        <div class="forIeblockBot"></div>
                    </div>
                </div>
            </div>
            <div class="FileUP fileVid" onclick="$('.fileVidIn').click();"></div>
            <div class="publish">Опубликовать</div>
            <input type="file" class="fileVidIn"/>
            <div class="agre">
                <div class="forradioBut" onclick="$('.radioButagre').click();"></div>
                <p><b class="arrOne"></b>Я принимаю условия <a href="javascript:oid(0)">пользовательского соглашения</a> Видеофайл не должен нарушать авторские права.</p>
                <input type="radio" class="radioButagre"/>
            </div>
        </div>
        <div class="videoLoader">
            <div class="loaderVideo">
                <div class="loaderVideoin">
                    <span class="LDVspan"></span>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="interview hideBlocks">
    <form action="" method="post">
        <div class="EnterQuestion PLC" contenteditable="true" inText="Ввидите вопрос">Ввидите вопрос</div>
        <div class="outAnswar">
            <div class="answer PLC" contenteditable="true" inText="Ответ">Ответ</div>
            <div class="RemoveAnsver">-<div class="hint">Удалить<b></b></div></div>
        </div>
        <div class="outAnswar">
            <div class="answer PLC" contenteditable="true" inText="Ответ">Ответ</div>
            <div class="addAnswer">+ <div class="hint">Добавить еще<b></b></div></div>
        </div>
        <div class="BlockwithPanel">
            <div class="smile">
                <div class="hoverLink hoverSmile" alt="none">
                    <div class="topLineWin">
                        <div class="leftUg"></div>
                        <div class="leftLineWin"></div>
                        <div class="arrowWinTop"></div>
                        <div class="rightUg"></div>
                        <div class="rightlineWin"></div>
                        <div class="forIeblock"></div>
                    </div>
                    <div class="SmileIn">
                        <img src="<?=$layoutPath?>/img/smile/smile1.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile2.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile3.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile4.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile5.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile6.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile7.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile8.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile9.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile10.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile11.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile12.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile13.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile14.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile16.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile1.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile2.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile3.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile4.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile5.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile6.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile7.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile8.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile9.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile10.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile11.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile12.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile13.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile14.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile16.png" alt="" />
                    </div>
                    <div class="botLineWin">
                        <div class="botLeftUg"></div>
                        <div class="botRightUg"></div>
                        <div class="botCenterLine"></div>
                        <div class="forIeblockBot"></div>
                    </div>
                </div>
            </div>
            <div class="publish">Опубликовать</div>
        </div>
    </form>
</div>

<div class="links hideBlocks">
    <form action="" method="post">
        <div class="linkSlsout">
            <div class="addLinkSls">Добавить</div>
            <div class="linkSls PLC" contenteditable="true" inText="Укажите линк">Укажите линк</div>
            <div class="errorLinks">Не верный линк<img src="<?=$layoutPath?>/img/erorlLinksArr.png" alt="" /></div>
        </div>
        <div class="EnterQuestion PLC" contenteditable="true" inText="Добавьте описание к линку">Добавьте описание к линку</div>
        <div class="BlockwithPanel">
            <div class="smile">
                <div class="hoverLink hoverSmile" alt="none">
                    <div class="topLineWin">
                        <div class="leftUg"></div>
                        <div class="leftLineWin"></div>
                        <div class="arrowWinTop"></div>
                        <div class="rightUg"></div>
                        <div class="rightlineWin"></div>
                        <div class="forIeblock"></div>
                    </div>
                    <div class="SmileIn">
                        <img src="<?=$layoutPath?>/img/smile/smile1.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile2.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile3.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile4.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile5.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile6.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile7.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile8.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile9.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile10.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile11.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile12.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile13.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile14.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile16.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile1.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile2.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile3.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile4.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile5.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile6.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile7.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile8.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile9.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile10.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile11.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile12.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile13.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile14.png" alt="" />
                        <img src="<?=$layoutPath?>/img/smile/smile16.png" alt="" />
                    </div>
                    <div class="botLineWin">
                        <div class="botLeftUg"></div>
                        <div class="botRightUg"></div>
                        <div class="botCenterLine"></div>
                        <div class="forIeblockBot"></div>
                    </div>
                </div>
            </div>
            <div class="publish">Опубликовать</div>
        </div>
    </form>
</div>
</div>
</div>
<div class="masLoader">
    <p class="arrbgCHB"></p>
    Сервер mail.ru не найден из-за ошибки поиска DNS (веб-службы, которая преобразует название веб-сайта в интернет- адрес). Обычно это вызвано отсутствием подключения к Интернету или неправильной настройкой сети.
</div>
<div class="likepanelCHB">
    <div class="like LPinNB">
        <a href="javascript:void(0)" class="coolLink"><b class="cool"></b>Нравиться</a>
        <a href="javascript:void(0)" class="collPeople">(9999)</a>
    </div>
    <div class="like LPinNBR">
        <a href="javascript:void(0)" class="">(100)</a>
        <a href="javascript:void(0)" class="comlike"></a>
    </div>
</div>
</div>


<div class="tapeNews">
<div class="NBZag">
    <h2>Матчи</h2>
    <a href="javascript:void(0)" class="activeTapeN" style="margin-right:2px;">Показать все</a>
    <a href="javascript:void(0)">Друзья</a>
    <a href="javascript:void(0)">Клубы </a>
    <a href="javascript:void(0)">Моя стена</a>
</div>
<ul class="tapeNewsInUl">
<li class="tapeNewsInLi">

    <div class="tapeUsAva"><img src="<?=$layoutPath?>/img/tapeUsAva.png" alt="" /></div>
    <div class="tapeUsCon">
        <div class="UsNameOut">
            <div class="userName">
                <a href="javascript:void(0)" class="decUn UsName">Артем Лебердян </a>
                <div class="userStatsOut">
                    <div class="infcClubWindarr"></div>
                    <div class="userstats">
                        <div class="UsNameAndFc">
                            <div class="YourName">
                                <a href="javascript:void(0)">Артем Лебердян</a>
                                <img src="<?=$layoutPath?>/img/useronline.png" alt="" />
                                <b class="userNameBgGrad"></b>
                            </div>
                            <div class="FCclubName">
                                <a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag"  src="<?=$layoutPath?>/img/uzFlag.png">
                            </div>
                            <div class="clear"></div>
                        </div>
                        <img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="" />
                        <div class="ratio">
                            <div class="votes">41 голов</div>
                            <div class="status">Капитан</div>
                            <div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt="" /></div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
                </div>
            </div>подружился с
        </div>
        <div class="PodMes"  style="z-index:1;">
            <img src="<?=$layoutPath?>/img/tapeUsAva.png" class="withFriFri" alt="" />
            <div class="userName pDM">
                <a href="javascript:void(0)" class="decUn UsName">ZILOLA RUZIYEVA</a>
                <div class="userStatsOut">
                    <div class="infcClubWindarr"></div>
                    <div class="userstats">
                        <div class="UsNameAndFc">
                            <div class="YourName">
                                <a href="javascript:void(0)">ZILOLA RUZIYEVA</a>
                                <img src="<?=$layoutPath?>/img/useronline.png" alt="" />
                                <b class="userNameBgGrad"></b>
                            </div>
                            <div class="FCclubName">
                                <a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag"  src="<?=$layoutPath?>/img/uzFlag.png">
                            </div>
                            <div class="clear"></div>
                        </div>
                        <img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="" />
                        <div class="ratio">
                            <div class="votes">41 голов</div>
                            <div class="status">Капитан</div>
                            <div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt="" /></div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</li>
<li class="tapeNewsInLi">
    <div class="tapeUsAva"><img src="<?=$layoutPath?>/img/tapeUsAva.png" alt="" /></div>
    <div class="tapeUsCon">
        <div class="UsNameOut">

            <div class="userName">
                <a href="javascript:void(0)" class="decUn">Артем Лебердян <img src="<?=$layoutPath?>/img/useronline.png" alt="" /></a>
                <div class="userStatsOut">
                    <div class="infcClubWindarr"></div>
                    <div class="userstats">
                        <div class="UsNameAndFc">
                            <div class="YourName">
                                <a href="javascript:void(0)">Артем Лебердян</a>
                                <img src="<?=$layoutPath?>/img/useronline.png" alt="" />
                                <b class="userNameBgGrad"></b>
                            </div>
                            <div class="FCclubName">
                                <a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag"  src="<?=$layoutPath?>/img/uzFlag.png">
                            </div>
                            <div class="clear"></div>
                        </div>
                        <img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="" />
                        <div class="ratio">
                            <div class="votes">41 голов</div>
                            <div class="status">Капитан</div>
                            <div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt="" /></div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
                </div>
            </div>
            загрузил новые фотографии в альбом <a href="javascript:void(0)" class="UsName">Легенда футбола</a>


        </div>
        <div class="tapeUsImageBlock">
            <div class="tapeUsBigImg"><img src="<?=$layoutPath?>/img/img123.png" alt="" /><a href="javascript:void(0)" class="imgHovUs"></a></div>
            <div class="tapeUsMinImg"><img src="<?=$layoutPath?>/img/img321.png" alt="" /><a href="javascript:void(0)"  class="imgHovUs"></a></div>
            <div class="tapeUsMinImg"><img src="<?=$layoutPath?>/img/img321.png" alt="" /><a href="javascript:void(0)"  class="imgHovUs"></a></div>
            <div class="tapeUsMinImg endUsImg"><img src="<?=$layoutPath?>/img/img321.png" alt="" /><a href="javascript:void(0)"  class="imgHovUs"></a></div>
            <div class="tapeUsMinImg endUsImg"><img src="<?=$layoutPath?>/img/img321.png" alt="" /><a href="javascript:void(0)"  class="imgHovUs"></a></div>
        </div>
        <div class="LikePanelUs">
            <div class="likepanelCHB">
                <div class="like LPinNB">
                    <a href="javascript:void(0)" class="coolLink"><b class="cool"></b>Нравиться</a>
                    <a href="javascript:void(0)" class="collPeople">(9999)</a>
                </div>
                <div class="like LPinNB">
                    <a href="javascript:void(0)" class="see"></a>
                    <a href="javascript:void(0)" class="">0</a>
                </div>
                <div class="like LPinNBR">
                    <a href="javascript:void(0)" class="">(100)</a>
                    <a href="javascript:void(0)" class="comlike"></a>
                </div>
            </div>
        </div>
    </div>
</li>
<li class="tapeNewsInLi">
    <div class="tapeUsAva"><img src="<?=$layoutPath?>/img/tapeUsAva.png" alt="" /></div>
    <div class="tapeUsCon">
        <div class="UsNameOut">
            <div class="userName">
                <a href="javascript:void(0)" class="decUn UsName">Артем Лебердян</a>
                <div class="userStatsOut">
                    <div class="infcClubWindarr"></div>
                    <div class="userstats">
                        <div class="UsNameAndFc">
                            <div class="YourName">
                                <a href="javascript:void(0)">Артем Лебердянв</a>
                                <img src="<?=$layoutPath?>/img/useronline.png" alt="" />
                                <b class="userNameBgGrad"></b>
                            </div>
                            <div class="FCclubName">
                                <a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag"  src="<?=$layoutPath?>/img/uzFlag.png">
                            </div>
                            <div class="clear"></div>
                        </div>
                        <img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="" />
                        <div class="ratio">
                            <div class="votes">41 голов</div>
                            <div class="status">Капитан</div>
                            <div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt="" /></div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
                </div>
            </div> нравиться видео
        </div>
        <div class="VidOutUs">
            <div class="VidInUs">
                <div class="PlayVidUs PlayUsVid"></div>
                <div class="infoVidUs"><a href="javascript:void(0)">Эльзара Баталова - Бизим Тараф</a></div>
                <img src="<?=$layoutPath?>/img/img41222.png" alt="" />
            </div>
            <div class="authorIn">
                Автор:
                <div class="userName">
                    <a href="javascript:void(0)" class="decUn">Артем Лебердян</a>
                    <div class="userStatsOut">
                        <div class="infcClubWindarr"></div>
                        <div class="userstats">
                            <div class="UsNameAndFc">
                                <div class="YourName">
                                    <a href="javascript:void(0)">Артем Лебердян</a>
                                    <img src="<?=$layoutPath?>/img/useronline.png" alt="" />
                                    <b class="userNameBgGrad"></b>
                                </div>
                                <div class="FCclubName">
                                    <a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag"  src="<?=$layoutPath?>/img/uzFlag.png">
                                </div>
                                <div class="clear"></div>
                            </div>
                            <img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="" />
                            <div class="ratio">
                                <div class="votes">41 голов</div>
                                <div class="status">Капитан</div>
                                <div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt="" /></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="LikePanelUs">
            <div class="likepanelCHB">
                <div class="like LPinNB">
                    <a href="javascript:void(0)" class="coolLink"><b class="cool"></b>Нравиться</a>
                    <a href="javascript:void(0)" class="collPeople">(9999)</a>
                </div>
                <div class="like LPinNB">
                    <a href="javascript:void(0)" class="see"></a>
                    <a href="javascript:void(0)" class="">0</a>
                </div>
                <div class="like LPinNBR">
                    <a href="javascript:void(0)" class="">(100)</a>
                    <a href="javascript:void(0)" class="comlike"></a>
                </div>
            </div>
        </div>
    </div><div class="clear"></div>
</li>
<li class="tapeNewsInLi">
    <div class="tapeUsAva"><img src="<?=$layoutPath?>/img/tapeUsAva.png" alt="" /></div>
    <div class="tapeUsCon">
        <div class="UsNameOut">
            <div class="userName">
                <a href="javascript:void(0)" class="decUn UsName">Артем Лебердян</a>
                <div class="userStatsOut">
                    <div class="infcClubWindarr"></div>
                    <div class="userstats">
                        <div class="UsNameAndFc">
                            <div class="YourName">
                                <a href="javascript:void(0)">Артем Лебердянв</a>
                                <img src="<?=$layoutPath?>/img/useronline.png" alt="" />
                                <b class="userNameBgGrad"></b>
                            </div>
                            <div class="FCclubName">
                                <a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag"  src="<?=$layoutPath?>/img/uzFlag.png">
                            </div>
                            <div class="clear"></div>
                        </div>
                        <img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="" />
                        <div class="ratio">
                            <div class="votes">41 голов</div>
                            <div class="status">Капитан</div>
                            <div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt="" /></div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
                </div>
            </div>
            нравиться пост
        </div>
        <div class="likePost">
            <img src="<?=$layoutPath?>/img/likeF.png" class="likePostInImg" alt="" />
            <p class="forImageUs"><a href="javascript:void(0)" class="ThemsInfo">Welcome to Facebook - Log In, Sign Up or Learn More</a></p>
            <p class="WebSiteLinksOut"><a href="javascript:void(0)" class="WebSiteLinks">www.facebook.com</a></p>
            <p class="ThemsCon mrIg">Facebook is a social utility that connects people with friends and others who work, study and live around them. People use Facebook to keep up with friends, upload an unlimited number of photos, post</p>
            <div class="clear"></div>
        </div>
        <div class="authorIn">
            Автор:
            <div class="userName">
                <a href="javascript:void(0)" class="decUn UsName">Артем Лебердян</a>
                <div class="userStatsOut">
                    <div class="infcClubWindarr"></div>
                    <div class="userstats">
                        <div class="UsNameAndFc">
                            <div class="YourName">
                                <a href="javascript:void(0)">Артем Лебердянв</a>
                                <img src="<?=$layoutPath?>/img/useronline.png" alt="" />
                                <b class="userNameBgGrad"></b>
                            </div>
                            <div class="FCclubName">
                                <a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag"  src="<?=$layoutPath?>/img/uzFlag.png">
                            </div>
                            <div class="clear"></div>
                        </div>
                        <img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="" />
                        <div class="ratio">
                            <div class="votes">41 голов</div>
                            <div class="status">Капитан</div>
                            <div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt="" /></div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
                </div>
            </div>
        </div>
        <div class="LikePanelUs">
            <div class="likepanelCHB">
                <div class="like LPinNB">
                    <a href="javascript:void(0)" class="coolLink"><b class="cool"></b>Нравиться</a>
                    <a href="javascript:void(0)" class="collPeople">(9999)</a>
                </div>
                <div class="like LPinNB">
                    <a href="javascript:void(0)" class="see"></a>
                    <a href="javascript:void(0)" class="">0</a>
                </div>
                <div class="like LPinNBR">
                    <a href="javascript:void(0)" class="">(100)</a>
                    <a href="javascript:void(0)" class="comlike"></a>
                </div>
            </div>
        </div>
    </div>
</li>
<li class="tapeNewsInLi">
    <div class="tapeUsAva"><img src="<?=$layoutPath?>/img/tapeUsAva.png" alt="" /></div>
    <div class="tapeUsCon">
        <div class="UsNameOut">
            <div class="userName">
                <a href="javascript:void(0)" class="decUn UsName">Артем Лебердян</a>
                <div class="userStatsOut">
                    <div class="infcClubWindarr"></div>
                    <div class="userstats">
                        <div class="UsNameAndFc">
                            <div class="YourName">
                                <a href="javascript:void(0)">Артем Лебердянв</a>
                                <img src="<?=$layoutPath?>/img/useronline.png" alt="" />
                                <b class="userNameBgGrad"></b>
                            </div>
                            <div class="FCclubName">
                                <a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag"  src="<?=$layoutPath?>/img/uzFlag.png">
                            </div>
                            <div class="clear"></div>
                        </div>
                        <img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="" />
                        <div class="ratio">
                            <div class="votes">41 голов</div>
                            <div class="status">Капитан</div>
                            <div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt="" /></div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
                </div>
            </div>нравиться пост
        </div>
        <div class="likePost">
            <p>If you are thinking of dining at one of the Texas Roadhouse restaurants, don't forget your Texas Roadhouse coupons and you will have a one- of- a- kind experience. It is common to find long lines wait...If you are thinking of dining at one of the Texas Roadhouse restaurants, don't forget your Texas Roadhouse coupons and you will have a one- of- a- kind experience. It is common to find long lines wait...If you are thinking of dining at one of the Texas Roadhouse restaurants, don't forget your Texas Roadhouse coupons and you will have a one- of- a- kind experience. It is common to find long lines wait...If you are thinking of dining at one of the Texas Roadhouse restaurants, don't forget your Texas Roadhouse coupons and you will have a one- of- a- kind experience. It is common to find long lines wait...If you are thinking of dining at one of the Texas Roadhouse restaurants, don't forget your Texas Roadhouse coupons and you will have a one- of- a- kind experience. It is common to find long lines wait...If you are thinking of dining at one of the Texas Roadhouse restau</p>
            <div class="clear"></div>
        </div>
        <div class="authorIn">Автор:
            <div class="userName">
                <a href="javascript:void(0)" class="decUn UsName">Артем Лебердян</a>
                <div class="userStatsOut">
                    <div class="infcClubWindarr"></div>
                    <div class="userstats">
                        <div class="UsNameAndFc">
                            <div class="YourName">
                                <a href="javascript:void(0)">Артем Лебердянв</a>
                                <img src="<?=$layoutPath?>/img/useronline.png" alt="" />
                                <b class="userNameBgGrad"></b>
                            </div>
                            <div class="FCclubName">
                                <a href="javascript:void(0)">FC Neftchi</a><img alt="" id="ImgFlag"  src="<?=$layoutPath?>/img/uzFlag.png">
                            </div>
                            <div class="clear"></div>
                        </div>
                        <img src="<?=$layoutPath?>/img/noavatarImage.png" class="avatar dopWinPanel" alt="" />
                        <div class="ratio">
                            <div class="votes">41 голов</div>
                            <div class="status">Капитан</div>
                            <div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt="" /></div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <p class="botParInUsName"><a href="javascript:void(0)">Написать сообщение</a></p>
                </div>
            </div>
        </div>
        <div class="LikePanelUs">
            <div class="likepanelCHB">

                <div class="like LPinNB">
                    <a href="javascript:void(0)" class="coolLink"><b class="cool"></b>Нравиться</a>
                    <a href="javascript:void(0)" class="collPeople">(9999)</a>
                </div>
                <div class="like LPinNB">
                    <a href="javascript:void(0)" class="see"></a>
                    <a href="javascript:void(0)" class="">0</a>
                </div>
                <div class="like LPinNBR">
                    <a href="javascript:void(0)" class="">(100)</a>
                    <a href="javascript:void(0)" class="comlike"></a>
                </div>
            </div>
        </div>
    </div>
</li>
<div class="PreloadNewLi"></div>
</ul>
</div>
