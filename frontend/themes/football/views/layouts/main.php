<!DOCTYPE html>
<html class="page-main">
<?
use \frontend\themes\football\assets\AppAssets;
use \backend\models\Champs;
$layoutPath = Yii::$app->assetManager->getPublishedUrl('@frontend/themes/football/assets');
AppAssets::register($this);
?>
<head>
    <!--<meta charset="windows-1251">-->
    <title>FOOTBALL.UZ || Главная</title>
    <link rel="stylesheet" href="<?=$layoutPath?>/css/normalize.css">
    <link rel="stylesheet" href="<?=$layoutPath?>/css/fonts.css">
    <link rel="stylesheet" href="<?=$layoutPath?>/css/slick.css" />
    <link rel="stylesheet" href="<?=$layoutPath?>/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?=$layoutPath?>/css/_main.css">
</head>

<body>
<div class="main">
<header id="header">
<div class="menu">
    <?=$this->render('/layouts/_top_menu')?>
</div>
<div class="header_middle">
    <div class="container">
        <div class="middle_results">
            <div class="middle_left">
                <ul>
                    <li>
                        <span class="results_day">01.07.15</span>
                        <span class="results_time">17:45</span>
                        <a href="#" class="results_league">Премьер-лига</a>
                        <a href="#" class="results_rivals_home">Челчи</a>
                        <a href="#" class="results_count">2:0</a>
                        <a href="#" class="results_rivals_guests">Вест Хэм</a>
                    </li>
                    <li>
                        <span class="results_day">01.07.15</span>
                        <span class="results_time">17:45</span>
                        <a href="#" class="results_league">Премьер-лига</a>
                        <a href="#" class="results_rivals_home">МЮ</a>
                        <a href="#" class="results_count">2:0</a>
                        <a href="#" class="results_rivals_guests">Ньюкасл</a>
                    </li>
                    <li>
                        <span class="results_day">01.07.15</span>
                        <span class="results_time">17:45</span>
                        <a href="#" class="results_league">Товарищеский матч</a>
                        <a href="#" class="results_rivals_home">Катар</a>
                        <a href="#" class="results_count">2:0</a>
                        <a href="#" class="results_rivals_guests">Эстония</a>
                    </li>
                </ul>
            </div>

            <div class="middle_logo">
                <div class="text-center"><a href="#">Войти</a> / <a href="#">Регистрация</a></div>
                <a class="logo_link" href="#"></a>
            </div>

            <div class="middle_right">
                <ul>
                    <li>
                        <span class="results_day">01.07.15</span>
                        <span class="results_time">17:45</span>
                        <a href="#" class="results_league">Премьер-лига</a>
                        <a href="#" class="results_rivals_home">Челчи</a>
                        <a href="#" class="results_count">2:0</a>
                        <a href="#" class="results_rivals_guests">Вест Хэм</a>
                    </li>
                    <li>
                        <span class="results_day">01.07.15</span>
                        <span class="results_time">17:45</span>
                        <a href="#" class="results_league">Премьер-лига</a>
                        <a href="#" class="results_rivals_home">МЮ</a>
                        <a href="#" class="results_count">2:0</a>
                        <a href="#" class="results_rivals_guests">Ньюкасл</a>
                    </li>
                    <li>
                        <span class="results_day">01.07.15</span>
                        <span class="results_time">17:45</span>
                        <a href="#" class="results_league">Товарищеский матч</a>
                        <a href="#" class="results_rivals_home">Катар</a>
                        <a href="#" class="results_count">2:0</a>
                        <a href="#" class="results_rivals_guests">Эстония</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="header_bottom">
    <div class="leagues_nav">
        <div class="leagues_nav_left">
            <ul>
                <li><span class="last_news_count">2</span><a class="chleague" href="#"></a></li>
                <li><a class="lfp" href="#"></a></li>
                <li class="active"><span class="last_news_count">2</span><a class="preleague" href="#"></a></li>
                <li><a class="bundes" href="#"></a></li>
            </ul>
        </div>
        <div class="leagues_nav_right">
            <ul>
                <li><a class="seriaa" href="#"></a></li>
                <li><span class="last_news_count">2</span><a class="league1" href="#"></a></li>
                <li><a class="sogaz" href="#"></a></li>
                <li><a class="bundes" href="#"></a></li>
            </ul>
        </div>
    </div>
</div>
</header>
<section id="content" class="content">
<div class="content_left">
    <div class="caraoucel_wrapper">
        <div id="mycarousel" class="topSlider">
            <div>
                <a class="slide_image" href="#"><img src="images/fabregas.jpg" alt="" /></a>
                <a href="#" class="slide_title">
                    <div class="slide-title-date">12:00</div>
                    <div class="slide-title-text">Обмен Торреса в «Атлетико» задерживается из-за желания Черчи перейти в «Интер»</div>
                </a>
            </div>
            <div>
                <a class="slide_image" href="#"><img src="images/toystory.jpg" alt="" /></a>
                <a href="#" class="slide_title">
                    <div class="slide-title-date">13:00</div>
                    <div class="slide-title-text">Обмен Торреса в «Атлетико» задерживается из-за желания Черчи перейти в «Интер»</div>
                </a>
            </div>
            <div>
                <a class="slide_image" href="#"><img src="images/up.jpg" alt="" /></a>
                <a href="#" class="slide_title">
                    <div class="slide-title-date">14:00</div>
                    <div class="slide-title-text">Обмен Торреса в «Атлетико» задерживается из-за желания Черчи перейти в «Интер»</div>
                </a>
            </div>
            <div>
                <a class="slide_image" href="#"><img src="images/walle.jpg" alt="" /></a>
                <a href="#" class="slide_title">
                    <div class="slide-title-date">15:00</div>
                    <div class="slide-title-text">Обмен Торреса в «Атлетико» задерживается из-за желания Черчи перейти в «Интер»</div>
                </a>
            </div>
        </div>
    </div>
    <a href="#" class="news_last">
        <div class="news_last_img">
            <img src="images/last_news1.jpg">
        </div>
        <div class="news_last_texts">
            <span class="news_time">12:00</span>
            <span class="news_champ">Ла Лига</span>
            <span class="news_comments"><i class="icon-comment"></i>29</span>
            <span class="news_photo"><i class="icon-image"></i>фото</span>
            <div class="news_last_texts_name">Дунга проголосовал за Роналду при выборе обладателя “Золотого мяча”</div>
        </div>
    </a>
    <a href="#" class="news_last">
        <div class="news_last_img">
            <img src="images/last_news1.jpg">
        </div>
        <div class="news_last_texts">
            <span class="news_time">12:00</span>
            <span class="news_champ">Ла Лига</span>
            <span class="news_comments"><i class="icon-comment"></i>29</span>
            <span class="news_photo"><i class="icon-image"></i>видео</span>
            <div class="news_last_texts_name">Скоулз: не удивлюсь, если «МЮ» сделает то же самое, что и «Ливерпуль» в том году </div>
        </div>
    </a>
    <a href="#" class="news_last">
        <div class="news_last_img">
            <img src="images/last_news1.jpg">
        </div>
        <div class="news_last_texts">
            <span class="news_time">12:00</span>
            <span class="news_champ">Ла Лига</span>
            <span class="news_comments"><i class="icon-comment"></i>29</span>
            <span class="news_photo"><i class="icon-image"></i>фото</span>
            <div class="news_last_texts_name">Дунга проголосовал за Роналду при выборе обладателя “Золотого мяча”</div>
        </div>
    </a>
    <a href="#" class="news_last">
        <div class="news_last_img">
            <img src="images/last_news1.jpg">
        </div>
        <div class="news_last_texts">
            <span class="news_time">12:00</span>
            <span class="news_champ">Ла Лига</span>
            <span class="news_comments"><i class="icon-comment"></i>29</span>
            <span class="news_photo"><i class="icon-image"></i>видео</span>
            <div class="news_last_texts_name">Скоулз: не удивлюсь, если «МЮ» сделает то же самое, что и «Ливерпуль» в том году </div>
        </div>
    </a>
    <a href="#" class="news_last">
        <div class="news_last_img">
            <img src="images/last_news1.jpg">
        </div>
        <div class="news_last_texts">
            <span class="news_time">12:00</span>
            <span class="news_champ">Ла Лига</span>
            <span class="news_comments"><i class="icon-comment"></i>29</span>
            <span class="news_photo"><i class="icon-image"></i>фото</span>
            <div class="news_last_texts_name">Дунга проголосовал за Роналду при выборе обладателя “Золотого мяча”</div>
        </div>
    </a>
    <a href="#" class="news_last">
        <div class="news_last_img">
            <img src="images/last_news1.jpg">
        </div>
        <div class="news_last_texts">
            <span class="news_time">12:00</span>
            <span class="news_champ">Ла Лига</span>
            <span class="news_comments"><i class="icon-comment"></i>29</span>
            <span class="news_photo"><i class="icon-image"></i>видео</span>
            <div class="news_last_texts_name">Скоулз: не удивлюсь, если «МЮ» сделает то же самое, что и «Ливерпуль» в том году </div>
        </div>
    </a>
    <a href="#" class="news_last">
        <div class="news_last_img">
            <img src="images/last_news1.jpg">
        </div>
        <div class="news_last_texts">
            <span class="news_time">12:00</span>
            <span class="news_champ">Ла Лига</span>
            <span class="news_comments"><i class="icon-comment"></i>29</span>
            <span class="news_photo"><i class="icon-image"></i>видео</span>
            <div class="news_last_texts_name">Скоулз: не удивлюсь, если «МЮ» сделает то же самое, что и «Ливерпуль» в том году </div>
        </div>
    </a>
    <a href="#" class="news_last">
        <div class="news_last_img">
            <img src="images/last_news1.jpg">
        </div>
        <div class="news_last_texts">
            <span class="news_time">12:00</span>
            <span class="news_champ">Ла Лига</span>
            <span class="news_comments"><i class="icon-comment"></i>29</span>
            <span class="news_photo"><i class="icon-image"></i>видео</span>
            <div class="news_last_texts_name">Скоулз: не удивлюсь, если «МЮ» сделает то же самое, что и «Ливерпуль» в том году </div>
        </div>
    </a>
    <a href="#" class="news_last">
        <div class="news_last_img">
            <img src="images/last_news1.jpg">
        </div>
        <div class="news_last_texts">
            <span class="news_time">12:00</span>
            <span class="news_champ">Ла Лига</span>
            <span class="news_comments"><i class="icon-comment"></i>29</span>
            <span class="news_photo"><i class="icon-image"></i>видео</span>
            <div class="news_last_texts_name">Скоулз: не удивлюсь, если «МЮ» сделает то же самое, что и «Ливерпуль» в том году </div>
        </div>
    </a>
    <div class="br-35"></div>
    <a class="button button-transparent" href="#">Все новости</a>
</div>
<div class="content_middle">
    <a href="#" class="news_popular">
        <div class="news_popular_image">
            <img src="images/middle_news.jpg" alt="">
            <span class="news_time">12:00</span>
        </div>
        <div class="news_popular_text">
            Гётце у меня нет проблем с мотивацией, и я хочу выиграть чемпионат Европы
        </div>
    </a>
    <a href="#" class="news_popular">
        <div class="news_popular_image">
            <img src="images/middle_news2.jpg" alt="">
            <span class="news_time">12:00</span>
        </div>
        <div class="news_popular_text">
            Гётце у меня нет проблем с мотивацией, и я хочу выиграть чемпионат Европы
        </div>
    </a>
    <a href="#" class="news_popular">
        <div class="news_popular_image">
            <img src="images/middle_news3.jpg" alt="">
            <span class="news_time">12:00</span>
        </div>
        <div class="news_popular_text">
            Гётце у меня нет проблем с мотивацией, и я хочу выиграть чемпионат Европы
        </div>
    </a>
    <a href="#" class="news_popular">
        <div class="news_popular_image">
            <img src="images/middle_news4.jpg" alt="">
            <span class="news_time">12:00</span>
        </div>
        <div class="news_popular_text">
            Гётце у меня нет проблем с мотивацией, и я хочу выиграть чемпионат Европы
        </div>
    </a>
    <a href="#" class="news_popular">
        <div class="news_popular_image">
            <img src="images/middle_news5.jpg" alt="">
            <span class="news_time">12:00</span>
        </div>
        <div class="news_popular_text">
            Гётце у меня нет проблем с мотивацией, и я хочу выиграть чемпионат Европы
        </div>
    </a>
</div>
<div class="content_right">
    <?=$this->render('/layouts/_content_right');?>
</div>
<div class="clear">
</div>
<div class="video_content">
    <div class="video_head">
        <div class="h2">ВИДЕОБЗОРЫ МАТЧЕЙ</div>
        <a class="button button-transparent float-right" href="#">Все видеообзоры</a>
    </div>
    <div class="slider slider-for">
        <div>
            <div class="video_name">Команда мечты Месута Озила</div>
            <iframe width="560" height="350" src="http://mover.uz/video/embed/y2n8SFmm/" frameborder="0" allowfullscreen></iframe>
        </div>
        <div>
            <div class="video_name">Барселона искусственный офсайд</div>
            <iframe width="560" height="350" src="http://mover.uz/video/embed/xjibDkmm/" frameborder="0" allowfullscreen></iframe>
        </div>
        <div>
            <div class="video_name">Команда мечты Месута Озила</div>
            <iframe width="560" height="350" src="http://mover.uz/video/embed/y2n8SFmm/" frameborder="0" allowfullscreen></iframe>
        </div>
        <div>
            <div class="video_name">Барселона искусственный офсайд</div>
            <iframe width="560" height="350" src="http://mover.uz/video/embed/xjibDkmm/" frameborder="0" allowfullscreen></iframe>
        </div>
        <div>
            <div class="video_name">Команда мечты Месута Озила</div>
            <iframe width="560" height="350" src="http://mover.uz/video/embed/y2n8SFmm/" frameborder="0" allowfullscreen></iframe>
        </div>
        <div>
            <div class="video_name">Барселона искусственный офсайд</div>
            <iframe width="560" height="350" src="http://mover.uz/video/embed/xjibDkmm/" frameborder="0" allowfullscreen></iframe>
        </div>
        <div>
            <div class="video_name">Команда мечты Месута Озила</div>
            <iframe width="560" height="350" src="http://mover.uz/video/embed/y2n8SFmm/" frameborder="0" allowfullscreen></iframe>
        </div>
        <div>
            <div class="video_name">Барселона искусственный офсайд</div>
            <iframe width="560" height="350" src="http://mover.uz/video/embed/xjibDkmm/" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <div class="slider slider-nav">
        <div>
            <div class="video_image"><img alt="" src="images/middle_news2.jpg"></div>
            <div class="video_name">Команда мечты Месута Озила</div>
            <div class="video_views">Просмотров 24</div>
        </div>
        <div>
            <div class="video_image"><img alt="" src="images/middle_news3.jpg"></div>
            <div class="video_name">Барселона искусственный офсайд</div>
            <div class="video_views">Просмотров 24</div>
        </div>
        <div>
            <div class="video_image"><img alt="" src="images/middle_news2.jpg"></div>
            <div class="video_name">Команда мечты Месута Озила</div>
            <div class="video_views">Просмотров 24</div>
        </div>
        <div>
            <div class="video_image"><img alt="" src="images/middle_news3.jpg"></div>
            <div class="video_name">Барселона искусственный офсайд</div>
            <div class="video_views">Просмотров 24</div>
        </div>
        <div>
            <div class="video_image"><img alt="" src="images/middle_news2.jpg"></div>
            <div class="video_name">Команда мечты Месута Озила</div>
            <div class="video_views">Просмотров 24</div>
        </div>
        <div>
            <div class="video_image"><img alt="" src="images/middle_news3.jpg"></div>
            <div class="video_name">Барселона искусственный офсайд</div>
            <div class="video_views">Просмотров 24</div>
        </div>
        <div>
            <div class="video_image"><img alt="" src="images/middle_news2.jpg"></div>
            <div class="video_name">Команда мечты Месута Озила</div>
            <div class="video_views">Просмотров 24</div>
        </div>
        <div>
            <div class="video_image"><img alt="" src="images/middle_news3.jpg"></div>
            <div class="video_name">Барселона искусственный офсайд</div>
            <div class="video_views">Просмотров 24</div>
        </div>
    </div>-->
</div>
<div class="br-50"></div>
<div class="content_left">
    <div class="h2">БЛОГ УЧАСТНИКОВ</div>
    <a href="#" class="blog_news_last">
        <div class="blog_news_last_img">
            <img src="images/last_news1.jpg">
        </div>
        <div class="blog_news_last_texts">
            <span class="news_time">12:00</span>
            <span class="news_champ">Ла Лига</span>
            <span class="news_comments"><i class="icon-comment"></i>29</span>
            <span class="news_photo"><i class="icon-image"></i>фото</span>
            <div class="blog_news_last_texts_name">Дунга проголосовал за Роналду при выборе обладателя “Золотого мяча”</div>
        </div>
    </a>
    <a href="#" class="blog_news_last">
        <div class="blog_news_last_img">
            <img src="images/last_news1.jpg">
        </div>
        <div class="blog_news_last_texts">
            <span class="news_time">12:00</span>
            <span class="news_champ">Ла Лига</span>
            <span class="news_comments"><i class="icon-comment"></i>29</span>
            <span class="news_photo"><i class="icon-image"></i>фото</span>
            <div class="blog_news_last_texts_name">Дунга проголосовал за Роналду при выборе обладателя “Золотого мяча”</div>
        </div>
    </a>
    <a href="#" class="blog_news_last">
        <div class="blog_news_last_img">
            <img src="images/last_news1.jpg">
        </div>
        <div class="blog_news_last_texts">
            <span class="news_time">12:00</span>
            <span class="news_champ">Ла Лига</span>
            <span class="news_comments"><i class="icon-comment"></i>29</span>
            <span class="news_photo"><i class="icon-image"></i>фото</span>
            <div class="blog_news_last_texts_name">Дунга проголосовал за Роналду при выборе обладателя “Золотого мяча”</div>
        </div>
    </a>
    <div class="br-25"></div>
    <a class="button button-transparent" href="#">Все новости</a>
</div>
<div class="content_middle">
    <div class="player_stats">
        <div class="player_stats_head">
            <h2>СТАТИСТИКА ИГРОКОВ</h2>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th></th>
                <th>Игрок</th>
                <th>Очк</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td></td>
                <td><a href="#">Луис Суарес</a></td>
                <td>31</td>
            </tr>
            <tr>
                <td>2</td>
                <td><i class="icon-up"></i></td>
                <td><a href="#">Дэниел Старридж</a></td>
                <td>22</td>
            </tr>
            <tr>
                <td>3</td>
                <td></td>
                <td><a href="#">Яя Туре</a></td>
                <td>20</td>
            </tr>
            <tr>
                <td>4</td>
                <td><i class="icon-down"></i></td>
                <td><a href="#">Серхио Агуэро</a></td>
                <td>17</td>
            </tr>
            <tr>
                <td>5</td>
                <td><i class="icon-down"></i></td>
                <td><a href="#">Уэйн Руни</a></td>
                <td>17</td>
            </tr>
            <tr>
                <td>6</td>
                <td></td>
                <td><a href="#">Вильфрид Бони</a></td>
                <td>17</td>
            </tr>
            <tr>
                <td>7</td>
                <td></td>
                <td><a href="#">Эдин Джеко</a></td>
                <td>16</td>
            </tr>
            <tr>
                <td>8</td>
                <td></td>
                <td><a href="#">Оливье Жиру</a></td>
                <td>16</td>
            </tr>
            <tr>
                <td>9</td>
                <td></td>
                <td><a href="#">Джей Родригес</a></td>
                <td>15</td>
            </tr>
            <tr>
                <td>10</td>
                <td></td>
                <td><a href="#">Ромелу Лукаку</a></td>
                <td>15</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="content_right">
    <div class="poll">
        <form>
            <div class="poll_question">Кто на ваш взгляд лучший игрок СЕЗОНА?</div>
            <label class="radio"><input id="opros_1" type="radio" name="q2">Кристиано Рональдо</label>
            <label class="radio"><input id="opros_2" type="radio" name="q2">Леонель Месси</label>
            <label class="radio"><input id="opros_3" type="radio" name="q2">Уэйн Руни</label>
            <label class="radio"><input id="opros_4" type="radio" name="q2">Луис Суарес</label>
            <label class="radio"><input id="opros_5" type="radio" name="q2">Серхио Агуэро</label>
            <label class="radio"><input id="opros_6" type="radio" name="q2">Оливье Жиру</label>
            <button type="submit" class="button button-transparent">ПРОГОЛОСОВАТЬ</button>
            <a class="all_polls" href="#">Все опросы</a>
        </form>
    </div>
</div>
</section>
<footer id="footer" class="footer clear">
    <div class="footer_logo">
        <a href="#">
            <img src="images/logo_footer.png" alt="">
        </a>
    </div>
    <div class="footer_content">
        <div class="footer_row clear">
            <nav>
                <ul class="clear">
                    <li><a href="#">Контакты</a></li>
                    <li><a href="#">Реклама на сайте</a></li>
                    <li><a href="#">О проекте</a></li>
                    <li><a href="#">Добавить новость</a></li>
                    <li><a href="#">Нашли ошибку?</a></li>
                </ul>
            </nav>
        </div>
        <div class="footer_row clear">
            <div class="copy">Copyright © 2015 Football.uz - Новостной сайт фанатов футбола</div>
        </div>
    </div>
    <div class="design_by">
        <a href="#" title="Дизайн G-Max"><img src="images/designer2.png" alt="Веб–дизайн G-Max"></a>
    </div>
</footer>
</div>

<script src="js/jquery.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/classie.js"></script>
<script src="js/slick.js"></script>
<script src="js/jscrollpane.js"></script>
<script src="js/mousewheel.js"></script>
<script src="js/_main.js"></script>

</body>

</html>