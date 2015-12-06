<?php
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 11/22/15
 * Time: 9:17 PM
 * To change this template use File | Settings | File Templates.
 */
use yii\helpers\Url;?>
<div id="afternav">

    <div class="inafternav">
        <a href="<?=Url::toRoute('/')?>" class="logo" ></a>
        <div class="toolbar">
            <div class="endcom">

                <div class="akkinfo topinfo">
                    <img src="<?=$layoutPath?>/img/ava.png" class="avatar topava" />
                    <div class="userpanelt">
                        <div class="ratiot">10 054 голов</div>
                        <div class="statust">Капитан</div>
                        <div class="ImageStatus"><img src="<?=$layoutPath?>/img/ImageStatus1.png" alt="" /></div>
                        <div class="mynamet">
                            <p>Бил Гейтс джоли:D<b class="userNameBgGrad"></b></p>
                            <div class="settingst activeli">
                                <ul class="vcbar settingmenu">
                                    <a style="display: none;"></a>
                                    <div class="toplinavar">
                                        <div class="starr"></div>
                                        <div class="cenarbg poneus"></div>
                                        <div class="mainar"></div>
                                        <div class="endarr"></div>
                                        <div class="reparrt"></div>
                                        <div class="ieras"></div>
                                    </div>
                                    <li class="sptwo"><b class="addava"></b><a href="javascript:void(0)">Добавить личное фото</a></li>
                                    <li class="sptwt"><b class="addava"></b><a href="javascript:void(0)">Пригласить фанатов</a></li>
                                    <li class="sptwf"><b class="addava"></b><a href="javascript:void(0)">Настройки аккаунта</a></li>
                                    <li class="endnav sptwfr"><b class="addava"></b><a href="javascript:void(0)">Создать рекламу</a></li>
                                </ul>
                            </div>
                            <a href="/user/security/logout"><div class="exitt">
                               <span class="hint">Выход</span>
                            </div></a>
                            <div class="pereg"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="barone">
                <a href="javascript:void(0)" class="krn marka"><div class="krugxd">12</div></a>
                Оценки
            </div>
            <div class="barone">
                <a href="javascript:void(0)" class="krn guesa"></a>
                Гости
            </div>
            <div class="barone">
                <a href="javascript:void(0)" class="krn uva"></a>
                Уведомления
            </div>
            <div class="barone">
                <a href="javascript:void(0)" class="krn comma"></a>
                Комментарии
            </div>
            <div class="barone">
                <a href="javascript:void(0)" class="krn massa"></a>
                Сообщения
            </div>
        </div>
    </div>
</div>