<!doctype html>
<html lang="ru" prefix="og: http://ogp.me/ns#"><head>
    <meta charset="UTF-8">
    <title>{{$sasha}}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ведущий украинский сервис для поиска удаленной работы и фриланс проектов. От статьи для сайта про бобров до социальной сети нового поколения. На нашей фриланс бирже вы найдете профессиональных исполнителей и честных заказчиков.">
    <meta name="author" content="freelancehunt.com">

    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css"/>

    <link rel="icon" href="data:image/png;base64,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" type="image/png">
    <link rel="apple-touch-icon" sizes="57x57" href="/static/images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/static/images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/static/images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/static/images/apple-icon-144x144.png">
    <link rel="manifest" href="/manifest.json">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="magic-token" content="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJwcm9maWxlX2lkIjozMjEwODksImV4cCI6MTU2NzkzNzkyNX0.EmN5MFHMFeJGiLuxQ4Kuy5F0ECdq42IWgVd7PQG6FrY">
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="https://freelancehunt.com/projects.rss">
    <meta property="og:title" content="Freelancehunt — я выбираю простой и честный фриланс">
    <meta name="twitter:title" content="Freelancehunt — я выбираю простой и честный фриланс">
    <meta property="og:description" content="Ведущий украинский сервис для поиска удаленной работы и фриланс проектов. От статьи для сайта про бобров до социальной сети нового поколения. На нашей фриланс бирже вы найдете профессиональных исполнителей и честных заказчиков.">
    <meta name="twitter:description" content="Ведущий украинский сервис для поиска удаленной работы и фриланс проектов. От статьи для сайта про бобров до социальной сети нового поколения. На нашей фриланс бирже вы найдете профессиональных исполнителей и честных заказчиков.">
    <meta property="og:image" content="https://freelancehunt.com/static/images/freelancehunt-header-ru.png">
    <meta name="twitter:image" content="https://freelancehunt.com/static/images/logo/freelancehunt-ru@2x.png">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Freelancehunt">
    <meta property="fb:app_id" content="759263494149166">
    <meta name="twitter:site" content="@atfreelancehunt">
    <link rel="alternate" hreflang="en" href="https://en.freelancehunt.com">
    <link rel="alternate" hreflang="ru-by" href="https://freelancehunt.by">
    <link rel="alternate" hreflang="ru-kz" href="https://freelancehunt.kz">
    <link rel="alternate" hreflang="ru-md" href="https://freelancehunt.md">
    <link rel="alternate" hreflang="ru-ru" href="https://freelancehunt.ru">
    <link rel="alternate" hreflang="ru-ua" href="https://freelancehunt.com">
    <link rel="alternate" hreflang="uk-ua" href="https://freelancehunt.ua">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic&amp;subset=cyrillic" media="screen">
    <!--
    <link rel="stylesheet" href="/static/dist/3.9621988e.css" type="text/css">
    <link rel="stylesheet" href="/static/dist/28.a22e5e7b.css" type="text/css">
    <link rel="stylesheet" href="/static/dist/freelancehunt-all.e9081942.css" type="text/css">
    <link rel="stylesheet" href="/static/dist/freelancehunt-default-all.15d9d892.css" type="text/css">
    -->
    <script async="" src="//static.hotjar.com/c/hotjar-250860.js?sv=5"></script><style type="text/css"></style><script async="" src="https://script.hotjar.com/modules.4d71caa5b820d76ee739.js" charset="utf-8"></script><style type="text/css">iframe#_hjRemoteVarsFrame {display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;}</style><style type="text/css">/*
 * contextMenu.js v 1.4.0
 * Author: Sudhanshu Yadav
 * s-yadav.github.com
 * Copyright (c) 2013 Sudhanshu Yadav.
 * Dual licensed under the MIT and GPL licenses
**/

        .iw-contextMenu {
            box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.10) !important;
            border: 1px solid #c8c7cc !important;
            border-radius: 11px !important;
            display: none;
            z-index: 1000000132;
            max-width: 300px !important;
            width: auto !important;
        }

        .dark-mode .iw-contextMenu,
        .TnITTtw-dark-mode.iw-contextMenu,
        .TnITTtw-dark-mode .iw-contextMenu {
            border-color: #747473 !important;
        }

        .iw-cm-menu {
            background: #fff !important;
            color: #000 !important;
            margin: 0px !important;
            padding: 0px !important;
            overflow: visible !important;
        }

        .dark-mode .iw-cm-menu,
        .TnITTtw-dark-mode.iw-cm-menu,
        .TnITTtw-dark-mode .iw-cm-menu {
            background: #525251 !important;
            color: #FFF !important;
        }

        .iw-curMenu {
        }

        .iw-cm-menu li {
            font-family: -apple-system, BlinkMacSystemFont, "Helvetica Neue", Helvetica, Arial, Ubuntu, sans-serif !important;
            list-style: none !important;
            padding: 10px !important;
            padding-right: 20px !important;
            border-bottom: 1px solid #c8c7cc !important;
            font-weight: 400 !important;
            cursor: pointer !important;
            position: relative !important;
            font-size: 14px !important;
            margin: 0 !important;
            line-height: inherit !important;
            border-radius: 0 !important;
            display: block !important;
        }

        .dark-mode .iw-cm-menu li, .TnITTtw-dark-mode .iw-cm-menu li {
            border-bottom-color: #747473 !important;
        }

        .iw-cm-menu li:first-child {
            border-top-left-radius: 11px !important;
            border-top-right-radius: 11px !important;
        }

        .iw-cm-menu li:last-child {
            border-bottom-left-radius: 11px !important;
            border-bottom-right-radius: 11px !important;
            border-bottom: none !important;
        }

        .iw-mOverlay {
            position: absolute !important;
            width: 100% !important;
            height: 100% !important;
            top: 0px !important;
            left: 0px !important;
            background: #FFF !important;
            opacity: .5 !important;
        }

        .iw-contextMenu li.iw-mDisable {
            opacity: 0.3 !important;
            cursor: default !important;
        }

        .iw-mSelected {
            background-color: #F6F6F6 !important;
        }

        .dark-mode .iw-mSelected, .TnITTtw-dark-mode .iw-mSelected {
            background-color: #676766 !important;
        }

        .iw-cm-arrow-right {
            width: 0 !important;
            height: 0 !important;
            border-top: 5px solid transparent !important;
            border-bottom: 5px solid transparent !important;
            border-left: 5px solid #000 !important;
            position: absolute !important;
            right: 5px !important;
            top: 50% !important;
            margin-top: -5px !important;
        }

        .dark-mode .iw-cm-arrow-right, .TnITTtw-dark-mode .iw-cm-arrow-right {
            border-left-color: #FFF !important;
        }

        .iw-mSelected > .iw-cm-arrow-right {
        }

        /*context menu css end */</style><style type="text/css">@-webkit-keyframes load4 {
                                                                    0%,
                                                                    100% {
                                                                        box-shadow: 0 -3em 0 0.2em, 2em -2em 0 0em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 0;
                                                                    }
                                                                    12.5% {
                                                                        box-shadow: 0 -3em 0 0, 2em -2em 0 0.2em, 3em 0 0 0, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 -1em;
                                                                    }
                                                                    25% {
                                                                        box-shadow: 0 -3em 0 -0.5em, 2em -2em 0 0, 3em 0 0 0.2em, 2em 2em 0 0, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 -1em;
                                                                    }
                                                                    37.5% {
                                                                        box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0em 0 0, 2em 2em 0 0.2em, 0 3em 0 0em, -2em 2em 0 -1em, -3em 0em 0 -1em, -2em -2em 0 -1em;
                                                                    }
                                                                    50% {
                                                                        box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 0em, 0 3em 0 0.2em, -2em 2em 0 0, -3em 0em 0 -1em, -2em -2em 0 -1em;
                                                                    }
                                                                    62.5% {
                                                                        box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 0, -2em 2em 0 0.2em, -3em 0 0 0, -2em -2em 0 -1em;
                                                                    }
                                                                    75% {
                                                                        box-shadow: 0em -3em 0 -1em, 2em -2em 0 -1em, 3em 0em 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 0, -3em 0em 0 0.2em, -2em -2em 0 0;
                                                                    }
                                                                    87.5% {
                                                                        box-shadow: 0em -3em 0 0, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 0, -3em 0em 0 0, -2em -2em 0 0.2em;
                                                                    }
                                                                }

        @keyframes load4 {
            0%,
            100% {
                box-shadow: 0 -3em 0 0.2em, 2em -2em 0 0em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 0;
            }
            12.5% {
                box-shadow: 0 -3em 0 0, 2em -2em 0 0.2em, 3em 0 0 0, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 -1em;
            }
            25% {
                box-shadow: 0 -3em 0 -0.5em, 2em -2em 0 0, 3em 0 0 0.2em, 2em 2em 0 0, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 -1em;
            }
            37.5% {
                box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0em 0 0, 2em 2em 0 0.2em, 0 3em 0 0em, -2em 2em 0 -1em, -3em 0em 0 -1em, -2em -2em 0 -1em;
            }
            50% {
                box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 0em, 0 3em 0 0.2em, -2em 2em 0 0, -3em 0em 0 -1em, -2em -2em 0 -1em;
            }
            62.5% {
                box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 0, -2em 2em 0 0.2em, -3em 0 0 0, -2em -2em 0 -1em;
            }
            75% {
                box-shadow: 0em -3em 0 -1em, 2em -2em 0 -1em, 3em 0em 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 0, -3em 0em 0 0.2em, -2em -2em 0 0;
            }
            87.5% {
                box-shadow: 0em -3em 0 0, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 0, -3em 0em 0 0, -2em -2em 0 0.2em;
            }
        }</style><style type="text/css">/* This is not a zero-length file! */</style></head>
<body>
<div class="main_content">
    <div id="top-nav">
        <div class="container">
            <div class="row" style="position: relative;">
                <div class="col-md-4" style="padding-top: 5px">
                    <a href="/" class="hidden-xs hidden-sm img-responsive pull-left marker-no-tooltip lang-ru default" title="Freelancehunt — фриланс и удаленная работа в Украине" id="header-logo"></a>
                    <a href="/" class="visible-xs visible-sm img-responsive pull-left marker-no-tooltip" title="Freelancehunt — фриланс и удаленная работа в Украине" id="header-logo-sm"></a>
                </div>

                <div id="top-ushki">
                    <div class="btn-group">
                        <div class="btn-group">
                            <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" href="#" id="my-feed-menu">
                                <i class="fa fa-bolt"></i> <span class="hidden-xs">Лента</span>
                                <span class="label color-light-blue  hidden" id="unread-feed-count">0</span>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-xs-wide smallest">
                                <table class="table table-condensed">
                                    <tbody><tr>
                                        <td class="text-center"><i class="fa fa-spinner fa-lg fa-spin"></i></td>
                                    </tr>
                                    </tbody></table>
                            </ul>
                        </div>
                        <a class="btn btn-default btn-sm" href="/mailbox" id="unread-messages-link">
                            <i class="fa fa-envelope-o"></i> <span class="hidden-xs">Сообщения</span>
                            <span class="label color-blue hidden" data-unread-message-count="">0</span>
                        </a>
                        <div class="btn-group">
                            <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" href="#" id="my-projects-menu">
                                <i class="fa fa-gavel"></i> <span class="hidden-xs">Проекты</span>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-xs-wide smallest">
                                <li><a href="https://freelancehunt.com/my/bids?status=open"><i class="fa fa-gavel"></i> Мои ставки <i class="fa fa-spinner fa-spin hidden"></i></a></li>
                            </ul>
                        </div>
                        <div class="btn-group">
                            <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" href="#" id="my-contests-menu">
                                <i class="fa fa-trophy"></i> <span class="hidden-xs">Конкурсы</span>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-xs-wide smallest">
                                <li><a href="https://freelancehunt.com/my/applications"><i class="fa fa-gavel"></i> Все конкурсные работы <i class="fa fa-spinner fa-spin hidden"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="btn-group">
                        <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" href="#" id="my-profile">
                            <img src="https://content.freelancehunt.com/profile/photo/50/{{$currentUser->login}}.png" width="16" height="16" class="vertical avatar avatar-small-border">
                            <span id="profile-logged-in" data-is-send-pm-audio-notify="0" class="hidden-xs">{{$currentUser->login}}</span>
                            <span class="label color-blue hidden"></span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right smaller">
                            <li class="visible-xs"><a href="https://freelancehunt.com/mailbox"><i class="fa fa-envelope-o"></i> Сообщения <span class="label color-blue hidden">0</span></a></li>
                            <li><a href="https://freelancehunt.com/my"><i class="fa fa-home"></i> Мой профиль</a></li>
                            <li><a href="https://freelancehunt.com/my/team"><i class="fa fa-users"></i> Команда </a></li>
                            <li><a href="https://freelancehunt.com/my/portfolio"><i class="fa fa-paint-brush"></i> Портфолио</a></li>
                            <li><a href="https://freelancehunt.com/my/personal"><i class="fa fa-address-card"></i> Личные данные</a></li>
                            <li><a href="https://freelancehunt.com/my/preferences"><i class="fa fa-cog"></i> Настройки</a></li>
                            <li><a href="https://freelancehunt.work/my/finance"><i class="fa fa-credit-card"></i> <span id="current-balance">Финансы</span></a></li>
                            <li><a id="whats-new"><i class="fa fa-magic"></i> <span>Что нового?</span></a></li>
                            <li class="divider"></li>
                            <li><a href="/profile/logout?magic_token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJwcm9maWxlX2lkIjozMjEwODksImV4cCI6MTU2NzkzNzkyNX0.EmN5MFHMFeJGiLuxQ4Kuy5F0ECdq42IWgVd7PQG6FrY"><i class="fa fa-sign-out"></i> Выход</a></li>
                        </ul>
                    </div>
                </div>

                <div class="pull-right hidden-xs top-menu">
                    @if($currentUser->profile_type == 'employee')
                        <a href="/createProject" class="btn btn-success"><i class="fa fa-trophy"></i>&nbsp;Создать проект</a>
                    @endif()
                    <a href="/projects?skills[]=28&amp;skills[]=1&amp;skills[]=86&amp;skills[]=99&amp;skills[]=129&amp;skills[]=68&amp;skills[]=45&amp;skills[]=78" class="btn btn-success"><i class="fa fa-gavel"></i>&nbsp;Проекты</a>
                    <a href="/contests" class="btn btn-success"><i class="fa fa-trophy"></i>&nbsp;Конкурсы</a>
                    <a href="/employers" class="btn btn-success"><i class="fa fa-briefcase"></i>&nbsp;Заказчики</a>
                    <a href="/freelancers" class="btn btn-success"><i class="fa fa-users"></i><span class="hidden-sm">&nbsp;Все фрилансеры</span></a>
                </div>
                <div class="pull-right visible-xs top-menu">
                    <a href="/createProject" class="btn btn-success" title="" data-original-title="Создать проект"><i class="fa fa-trophy"></i></a>
                    <a href="/projects?skills[]=28&amp;skills[]=1&amp;skills[]=86&amp;skills[]=99&amp;skills[]=129&amp;skills[]=68&amp;skills[]=45&amp;skills[]=78" class="btn btn-success" title="" data-original-title="Проекты"><i class="fa fa-gavel"></i></a>
                    <a href="/contests" class="btn btn-success" title="" data-original-title="Конкурсы"><i class="fa fa-trophy"></i></a>
                    <a href="/freelancers" class="btn btn-success" title="" data-original-title="Все фрилансеры"><i class="fa fa-users"></i></a>
                    <a href="/employers" class="btn btn-success" title="" data-original-title="Заказчики"><i class="fa fa-briefcase"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="page">
            <h1>Создание нового проекта!</h1>
            <form action="{{route('createProjectSave')}}" method="post">
                @csrf
                <input type="hidden" name="author_id" value="{{$currentUser->id}}"><br>
                <span>Заголовок: </span><input type="text" name="title"><br>
                <span>Описание:  </span><input type="text" name="description"><br>
                <span>Цена: </span><input type="text" name="price"><br><br>
                <input type="submit">
            </form>
        </div>
    </div>
</body>
</html>