<?php
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 9/15/15
 * Time: 6:41 PM
 * To change this template use File | Settings | File Templates.
 */
?>

<nav class="nav clear">
    <ul class="top_menu clear">
        <li><a href="#">Bosh sahifa</a></li>
        <li>
            <a href="#">Yangiliklar</a>
            <div class="submenu big">
                <ul>
                    <li>
                        <span>Yangiliklar</span>
                        <ul>
                            <li><a href="#">Barcha yangiliklar</a></li>
                            <li><a href="#">O`zbek Futboli</a></li>
                            <li><a href="#">Ekslyuziv</a></li>
                            <li><a href="#">Ballon d'Or</a></li>
                            <li><a href="#">Anonslar</a></li>
                            <li><a href="#">O`yinchilar reytingi</a></li>
                        </ul>
                    </li>
                    <li>
                        <span>Yevropa</span>
                        <ul>
                            <li><a href="#">Angliya</a></li>
                            <li><a href="#">Ispaniya</a></li>
                            <li><a href="#">Italiya</a></li>
                            <li><a href="#">Germaniya</a></li>
                            <li><a href="#">Boshqa davlatlar</a></li>
                        </ul>
                    </li>
                    <li>
                        <span>Boshqa davlatlar</span>
                        <ul>
                            <li><a href="#">Janubiy Amerika</a></li>
                            <li><a href="#">Osiyo</a></li>
                            <li><a href="#">Afrika</a></li>
                            <li><a href="#">Shimoliy Amerika</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#">Musobaqalar</a>
            <?
            $champs = \backend\models\Champs::findAll([1,2,3,4]);
            ?>
            <div class="submenu" style="left:255px;">
                <ul>
                    <li>
                        <ul>
                            <?
                            foreach($champs as $champ){
                                echo '<li><a href="#">'.$champ->name.'</a></li>';
                            }
                            ?>
                            <!--<li><a href="#">O`zbekiston Oliy Ligasi</a></li>
                            <li><a href="#">Osiyo Chempionlar Ligasi</a></li>
                            <li><a href="#">Chempionlar Ligasi</a></li>
                            <li><a href="#">Kopa Amerika</a></li>
                            <li><a href="#">Premyer Liga</a></li>
                            <li><a href="#">La Liga</a></li>
                            <li><a href="#">Seria A</a></li>
                            <li><a href="#">Bundesliga</a></li>
                            <li><a href="#">Rossiya Premyer Ligasi</a></li>
                            <li><a href="#">Osiyo Saralash O`yinlari</a></li>
                            <li><a href="#">Yevropa Saralash O`yinlari</a></li>
                            <li><a href="#">Jahon Chempionati 2018</a></li>
                            <li><a href="#">Qolgan Yevropa</a></li>-->

                        </ul>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#">Klublar</a>
            <div class="submenu big">
                <ul>
                    <li>
                        <span><i class="icon-uzbekistan"></i>O`zbekiston</span>
                        <ul>
                            <li><a href="#">Paxtakor</a></li>
                            <li><a href="#">Lokomotiv</a></li>
                            <li><a href="#">Nasaf</a></li>
                            <li><a href="#">Bunyodkor</a></li>
                            <li><a href="#">Neftchi</a></li>
                            <li><a href="#">Masha`l</a></li>
                        </ul>
                    </li>
                    <li>
                        <span><i class="icon-england"></i>Angliya</span>
                        <ul>
                            <li><a href="#">Arsenal</a></li>
                            <li><a href="#">Chelsi</a></li>
                            <li><a href="#">Liverpul</a></li>
                            <li><a href="#">Manchester Siti</a></li>
                            <li><a href="#">Manchester Yunayted</a></li>
                            <li><a href="#">Tottenham</a></li>
                        </ul>
                    </li>
                    <li>
                        <span><i class="icon-spain"></i>Ispaniya</span>
                        <ul>
                            <li><a href="#">Barselona</a></li>
                            <li><a href="#">Real Madrid</a></li>
                            <li><a href="#">Atletiko Madrid</a></li>
                            <li><a href="#">Real Sosyedad</a></li>
                            <li><a href="#">Sevilya</a></li>
                            <li><a href="#">Valensiya</a></li>
                        </ul>
                    </li>
                    <li>
                        <span><i class="icon-italy"></i>Italiya</span>
                        <ul>
                            <li><a href="#">Milan</a></li>
                            <li><a href="#">Yuventus</a></li>
                            <li><a href="#">Fiorentina</a></li>
                            <li><a href="#">Inter</a></li>
                            <li><a href="#">Napoli</a></li>
                            <li><a href="#">Roma</a></li>
                        </ul>
                    </li>
                    <li>
                        <span><i class="icon-germany"></i>Germaniya</span>
                        <ul>
                            <li><a href="#">Bavariya</a></li>
                            <li><a href="#">Borussiya Dortmund</a></li>
                            <li><a href="#">Liverkuzen</a></li>
                            <li><a href="#">Volsburg</a></li>
                            <li><a href="#">Bayer</a></li>
                            <li><a href="#">Shalke</a></li>
                        </ul>
                    </li>
                    <li>
                        <span><i class="icon-europe"></i>Qolgan Yevropa</span>
                        <ul>
                            <li><a href="#">PSG</a></li>
                            <li><a href="#">Zenit</a></li>
                            <li><a href="#">SSKA</a></li>
                            <li><a href="#">Krasnodar</a></li>
                            <li><a href="#">Galatasaroy</a></li>
                            <li><a href="#">Portu</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </li>
        <li><a href="#">Translatsiyalar</a></li>
        <li>
            <a href="#">Loyihalar</a>
            <div class="submenu" style="left:660px;">
                <ul>
                    <li>
                        <ul>
                            <li><a href="#">Basharotchi</a></li>
                            <li><a href="#">Bloglar</a></li>
                            <li><a href="#">Kun Karikaturasi</a></li>
                            <li><a href="#">Hafta Jamoasi</a></li>
                            <li><a href="#">Haftaning eng chroyli gollari</a></li>
                            <li><a href="#">Eng boylar</a></li>
                            <li><a href="#">FIFA reytingi</a></li>
                            <li><a href="#">UEFA reytingi</a></li>
                            <li><a href="#">AFK reytingi</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
    <div class="header-search">
    </div>
    <div class="top_socials">
        <ul>
            <li><a class="ico_facebook" href="#" title="группа в facebook"><i class="icon-facebook"></i></a></li>
            <li><a class="ico_instagram" href="#" title="instagram"><i class="icon-instagram"></i></a></li>
            <li><a class="ico_mover" href="#" title="канал на mover"><i class="icon-play"></i></a></li>
        </ul>
    </div>
</nav>
<div class="search_block">
    <div class="search_inner">
        <form action="" method="GET">
            <input class="header-search-input" name="" type="text" placeholder="Qidiring...">
        </form>
    </div>
</div>