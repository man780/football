    <?php

/**
 * Sidebar menu layout.
 *
 * @var \yii\web\View $this View
 */

use backend\themes\metronic\widgets\Menu;
$actionParams = $this->context->actionParams;
echo Menu::widget(
    [
        'options' => [
            'class' => 'page-sidebar-menu',
            'data' => [
                'auto-scroll' => "true",
                'slide-speed' => 200
            ],
            'style' => 'margin-top:25px;',
        ],
        'items' => [
            [
                'label' => '<div class="sidebar-toggler"></div>',
                'encode' => false,
                'options' => ['class' => 'sidebar-toggler-wrapper']
            ],
            [
                'label' => Yii::t('themes', 'Dashboard'),
                'url' => Yii::$app->homeUrl,
                'icon' => 'fa-dashboard',
                'active' => Yii::$app->request->url === Yii::$app->homeUrl,
                'options' => ['class' => 'start']
            ],
            [
                'label' => 'Разделы',
                'url' => '#',
                'icon' => 'fa-sitemap',
                'active' => $this->context->module->id === 'sections',
                'items' => [
                    [
                        'label' => Yii::t('app', 'Champs'),
                        'url' => '#',
                        'active' => $this->context->id === 'champs',
                        'items' => [
                            [
                                'label' => 'Chempionat qo`shish',
                                'url' => ['/champs/create'],
                                'active' => false
                            ],
                            [
                                'label' => 'Chempionatlar ro`yxati',
                                'url' => ['/champs/index'],
                                'active' => false
                            ]
                        ]
                    ],
                    [
                        'label' => Yii::t('app', 'Countries'),
                        'url' => '#',
                        'active' => $this->context->id === 'countries',
                        'items' => [
                            [
                                'label' => 'Terma jamoa qo`shish',
                                'url' => ['/countries/create'],
                                'active' => false
                            ],
                            [
                                'label' => 'Terma jamoalar ro`yxati',
                                'url' => ['/countries/index'],
                                'active' => false
                            ]
                        ]
                    ],
                    [
                        'label' => Yii::t('app', 'Clubs'),
                        'url' => '#',
                        'active' => $this->context->id === 'clubs',
                        'items' => [
                            [
                                'label' => 'Futbol klubi qo`shish',
                                'url' => ['/clubs/create'],
                                'active' => false
                            ],
                            [
                                'label' => 'Futbol klublari ro`yxati',
                                'url' => ['/clubs/index'],
                                'active' => false
                            ]
                        ]
                    ],
                    [
                        'label' => Yii::t('app', 'Soccers'),
                        'url' => '#',
                        'active' => $this->context->id === 'soccers',
                        'items' => [
                            [
                                'label' => 'Futbol o`yinchisini qo`shish',
                                'url' => ['/soccers/create'],
                                'active' => false
                            ],
                            [
                                'label' => 'Futbol o`yinchilari ro`yxati',
                                'url' => ['/soccers/index'],
                                'active' => false
                            ]
                        ]
                    ],
                    [
                        'label' => Yii::t('app', 'Coaches'),
                        'url' => '#',
                        'active' => $this->context->id === 'coachs',
                        'items' => [
                            [
                                'label' => 'Futbol murabbiy qo`shish',
                                'url' => ['/coachs/create'],
                                'active' => false
                            ],
                            [
                                'label' => 'Futbol murabbiylari ro`yxati',
                                'url' => ['/coachs/index'],
                                'active' => false
                            ]
                        ]
                    ],
                ],
            ],
            [
                'label' => 'Kommentariya va teglar',
                'url' => '#',
                'icon' => 'fa-sitemap',
                'active' => $this->context->id === 'comments_tags',
                'items' => [
                    [
                        'label' => Yii::t('app', 'Comments'),
                        'url' => '#',
                        'active' => $this->context->id === 'comments',
                        'items' => [
                            [
                                'label' => 'Kommentariy qo`shish',
                                'url' => ['/comments/create'],
                                'active' => false
                            ],
                            [
                                'label' => 'Kommentariylar ro`yxati',
                                'url' => ['/comments/index'],
                                'active' => false
                            ]
                        ]
                    ],
                    [
                        'label' => Yii::t('app', 'Tags'),
                        'url' => '#',
                        'active' => $this->context->id === 'tags',
                        'items' => [
                            [
                                'label' => 'Teg qo`shish',
                                'url' => ['/tags/create'],
                                'active' => false
                            ],
                            [
                                'label' => 'Teglar ro`yxati',
                                'url' => ['/tags/index'],
                                'active' => false
                            ],
                        ]
                    ],
                ]
            ],
            [
                'label' => 'Video va yangiliklar',
                'url' => '#',
                'icon' => 'fa-sitemap',
                'active' => $this->context->id === 'video_news',
                'items' => [
                    [
                        'label' => Yii::t('app', 'News'),
                        'url' => '#',
                        'active' => $this->context->id === 'news',
                        'items' => [
                            [
                                'label' => 'Yangilik qo`shish',
                                'url' => ['/news/create'],
                                'active' => false
                            ],
                            [
                                'label' => 'Yangiliklar ro`yxati',
                                'url' => ['/news/index'],
                                'active' => false
                            ]
                        ]
                    ],
                    [
                        'label' => Yii::t('app', 'Videos'),
                        'url' => '#',
                        'active' => $this->context->id === 'videos',
                        'items' => [
                            [
                                'label' => 'Video qo`shish',
                                'url' => ['/videos/create'],
                                'active' => false
                            ],
                            [
                                'label' => 'Videolar ro`yxati',
                                'url' => ['/videos/index'],
                                'active' => false
                            ],
                            /*[
                                'label' => 'Дерево',
                                'url' => ['/sections/category/tree'],
                                'active' => false
                            ],
                            [
                                'label' => 'Дерево Русский язык ro`yxati',
                                'url' => ['/sections/category/tree?subject=2'],
                                'active' => false
                            ]*/
                        ]
                    ],
                ]
            ],
            /*[
                'label' => 'Математика',
                'url' => ['/editor/maths/index'],
                'icon' => 'fa-calculator',
                'active' => $this->context->module->id === 'editor' && $actionParams['subject'] == 'maths',
                'items' => [
                    [
                        'label' => Yii::t('themes', 'Редактор Математика'),
                        'url' => ['/editor/maths/create'],
                        'active' => false
                    ],

                    [
                        'label' => Yii::t('themes', 'Список шаблонов'),
                        'url' => ['/editor/maths/list'],
                        'active' => false
                    ],
                    [
                        'label' => Yii::t('themes', 'Список вопросов'),
                        'url' => ['/editor/maths/questions'],
                        'active' => false
                    ],

                ]
            ],
            [
                'label' => 'Русский язык',
                'url' => ['/editor/russian/list'],
                'icon' => 'fa-calculator',
                'active' => $this->context->module->id === 'editor' && $actionParams['subject'] == 'russian',
                'items' => [
                    [
                        'label' => Yii::t('themes', 'Редактор Руссикий язык'),
                        'url' => ['/editor/russian/create'],
                        'active' => false
                    ],
                    [
                        'label' => Yii::t('themes', 'Список шаблонов'),
                        'url' => ['/editor/russian/list'],
                        'active' => false
                    ],
                ]
            ],
            [
                'label' => 'Генератор',
                'url' => ['/generator'],
                'icon' => 'fa-heart',
                'active' => $this->context->module->id === 'generator',
                'items' => [
                    [
                        'label' => Yii::t('themes', 'Создать Генератор'),
                        'url' => ['/generator/default/create'],
                        'active' => false
                    ],
                    [
                        'label' => Yii::t('themes', 'Список'),
                        'url' => ['/generator'],
                        'active' => false
                    ],
                ]
            ],*/
            [
                'label' => Yii::t('themes', 'Пользователи'),
                'url' => ['/user/index'],
                'icon' => 'fa-group',
                'active' => $this->context->module->id === 'user',
                'items' => [
                    [
                        'label' => 'Добавить пользователя',
                        'url' => ['/user/create'],
                        'active' => false
                    ],
                    [
                        'label' => 'Список пользователей',
                        'url' => ['/user/admin'],
                        'active' => false
                    ]

                ]
            ],
        ]
    ]
);