<?php

/**
 * Theme main layout.
 *
 * @var \yii\web\View $this View
 * @var string $content Content
 */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
?>
<?php $this->beginPage(); ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <?= $this->render('//layouts/head') ?>
        <?= Html::csrfMetaTags() ?>
    </head>
    <body class="page-quick-sidebar-over-content">
    <?php $this->beginBody(); ?>
    <!-- BEGIN HEADER -->
    <div class="page-header navbar">
        <div class="page-logo" style="padding: 10px 0 0 10px">
            <a href="#">
                <!--<img src="<?/*= Yii::$app->assetManager->getPublishedUrl('@backend/themes/metronic/assets')*/?>/admin/layout/img/logo.png" alt="logo" class="logo-default"/>-->
                <span style="padding: 10px 0 0 10px">SOFT-</span><span>M</span>
            </a>
            <div class="menu-toggler sidebar-toggler hide">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>

        <!-- BEGIN HEADER INNER -->
        <div class="page-header-inner">
            <div class="hor-menu hor-menu-light hidden-sm hidden-xs">
                <ul class="nav navbar-nav">
                    <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the horizontal opening on mouse hover -->
                    <li class="classic-menu-dropdown">
                        <a data-toggle="dropdown" href="javascript:;">Быстрые ссылки <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu pull-left">
                            <li>
                                <a href="/" target="_blank">Frontend</a>
                                <a href="/backend/admin/test/test" target="_blank">Админка тест</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>



            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <li class="dropdown dropdown-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <img alt="" class="img-circle" src="<?= Yii::$app->assetManager->getPublishedUrl('@backend/themes/metronic/assets')?>/admin/layout/img/avatar1_small.jpg"/>
                            <span class="username"><?= Yii::$app->user->identity->username?> </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/admin/user/profile"><i class="icon-user"></i> Профиль </a>
                            </li>
                            <li>

                                <!--<a href="<?/*= Url::to('/admin/user/logout')*/?>"> Выход </a>-->
                                <?
                                echo $url = Html::a('<i class="icon-key"></i>Logout',
                                    ['//user/logout'],
                                    ['data-method'=>'post']);
                                ?>
                            </li>
                        </ul>
                        <?= Html::csrfMetaTags() ?>
                        <?/*
                        NavBar::begin([
                            'brandLabel' => 'My Company',
                            'brandUrl' => Yii::$app->homeUrl,
                            'options' => [
                                'class' => 'navbar-inverse navbar-fixed-top',
                            ],
                        ]);
                        $menuItems = [
                            ['label' => 'Профиль', 'url' => ['/user/profile']],
                        ];
                        if (Yii::$app->user->isGuest) {
                            $menuItems[] = ['label' => 'Signup', 'url' => ['/user/register']];
                            $menuItems[] = ['label' => 'Login', 'url' => ['/user/login']];
                        } else {
                            $menuItems[] = [
                                'label' => 'Выход (' . Yii::$app->user->identity->username . ')',
                                'url' => ['/user/logout'],
                                'linkOptions' => ['data-method' => 'post']
                            ];
                        }
                        echo Nav::widget([
                            'options' => ['class' => 'navbar-nav navbar-right'],
                            'items' => $menuItems,
                        ]);
                        NavBar::end();
                        */?>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END HEADER INNER -->
    </div>
    <!-- END HEADER -->
    <div class="clearfix"></div>
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar-wrapper">
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
                <?= $this->render('//layouts/sidebar-menu') ?>
            <!-- END SIDEBAR MENU -->
            </div>
        </div>
        <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                    <h3 class="page-title">
                        <?= $this->title ?>
                        <?php if (isset($this->params['subtitle'])) : ?>
                            <small><?= $this->params['subtitle'] ?></small>
                        <?php endif; ?>
                    </h3>
                    <?php
                    echo Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]);
                    ?>
                    <!-- END PAGE TITLE & BREADCRUMB-->
                </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-12">
                    <?= $content ?>
                </div>
            </div>
            <!-- END PAGE CONTENT-->
        </div>
    </div>
    <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <div class="page-footer">
        <div class="page-footer-inner">
        2014 &copy;
        </div>
        <div class="page-footer-tools">
            <span class="go-top">
                <i class="fa fa-angle-up"></i>
            </span>
        </div>
    </div>
    <!-- END FOOTER -->
    <?php $this->registerJs('
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        QuickSidebar.init() // init quick sidebar
    ') ?>
    <?php $this->endBody(); ?>
    </body>
    </html>
<?php $this->endPage(); ?>