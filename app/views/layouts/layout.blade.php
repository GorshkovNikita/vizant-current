<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - Vizant</title>
    {{ HTML::style('css/style.css'); }}
    {{ HTML::style('css/screen.css'); }}
    {{ HTML::style('css/lightbox.css'); }}
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    {{ HTML::script('js/js.js'); }}
    {{ HTML::script('js/lightbox.js'); }}
    {{ HTML::script('js/responsiveslides.min.js'); }}
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <!--<script type="text/javascript">
        document.ondragstart = noselect;
        // запрет на перетаскивание
        document.onselectstart = noselect;
        // запрет на выделение элементов страницы
        document.oncontextmenu = noselect;
        // запрет на выведение контекстного меню
        function noselect() {return false;}
    </script>-->
</head>
<body oncopy="return false;">
    <div class="container">
        <div class="header">
            <div class="ci">
                <div class="logo">
                    <a class="logo-href" href="/">
                        {{ HTML::image('images/logo2.png', NUll, ['class' => 'logo-href']); }}
                    </a>
                </div>
                <div class="phone">
                    <span class="phone-text">
                        (495) 585-37-22 (495) 922-00-45
                    </span>
                    <span class="order-text" id="order-text-button">
                        Оформите заказ!
                    </span>
                </div>
                <div class="phone">
                    <span class="mphone-text" id="mphone-text-button">
                        Закажите обратный звонок!
                    </span>
                    <span class="mail-text" id="mail-text-button">
                        Напишите нам!
                    </span>
                </div>
            </div>

            <nav class="menu1">
                <ul class="menu1-list">
                    <li class="menu1-item menu1-item-left">
                        <a class="menu1-item-href" href="/">
                            <span class="menu1-item-text menu1-item-text-home">Главная</span>
                        </a>
                    </li>
                    <li class="menu1-item">
                        <a class="menu1-item-href" href="/galereya">
                            <span class="menu1-item-text menu1-item-text-gallery">Галерея</span>
                        </a>
                    </li>
                    <!--<li class="menu1-item">
                        <a class="menu1-item-href" href="/kak-zakazat">
                            <span class="menu1-item-text menu1-item-text-order">Как заказать</span>
                        </a>
                    </li>
                    -->
                    <li class="menu1-item">
                        <a class="menu1-item-href" href="/nashi-klienti">
                            <span class="menu1-item-text menu1-item-text-clients">Наши клиенты</span>
                        </a>
                    </li>
                    <!--<li class="menu1-item">
                        <a class="menu1-item-href" href="/o-nas">
                            <span class="menu1-item-text menu1-item-text-about">О нас</span>
                        </a>
                    </li>-->
                    <li class="menu1-item menu1-item-right">
                        <a class="menu1-item-href" href="/kontakti">
                            <span class="menu1-item-text menu1-item-text-contacts">Контакты</span>
                        </a>
                    </li>
                </ul>
            </nav>
            @yield('slider')
        </div>
        <div class="left-menu">
            <ul class="left-menu-items">
                <h4 class="title-left-menu">ПРОИЗВОДСТВО И УСЛУГИ</h4>
                <li class="left-menu-item"
                    onmouseenter="anim_arrow_down(this)"
                    onmouseleave="anim_arrow_up(this)">
                    <a href="/naruzhnaya-reklama" class="href-left-menu-item">
                        {{ HTML::image('images/arrow-right.png', NUll, ['class' => 'img-left-menu-item']); }}
                        <span class="text-left-menu-item text-left-menu-item-short">Наружная реклама</span>
                    </a>
                    <ul class="sub-left-menu">
                        <li><a href="/naruzhnaya-reklama/viveski" class="href-sub-left-menu-item">Вывески</a></li>
                        <li><a href="/naruzhnaya-reklama/svetovie-koroba" class="href-sub-left-menu-item">Световые короба</a></li>
                        <li><a href="/naruzhnaya-reklama/obemnie-bukvi" class="href-sub-left-menu-item">Объемные буквы</a></li>
                        <!--<li><a href="" class="href-sub-left-menu-item">Фризы</a></li>-->
                        <li><a href="/naruzhnaya-reklama/stendi" class="href-sub-left-menu-item">Стенды</a></li>
                        <li><a href="/naruzhnaya-reklama/oformlenie-fasadov" class="href-sub-left-menu-item">Оформление фасадов</a></li>
                    </ul>
                </li>
                <li class="left-menu-item"
                    onmouseenter="anim_arrow_down(this)"
                    onmouseleave="anim_arrow_up(this)">
                    <a href="/interernaya-reklama" class="href-left-menu-item">
                        {{ HTML::image('images/arrow-right.png', NUll, ['class' => 'img-left-menu-item']); }}
                        <span class="text-left-menu-item">Интерьерная реклама</span>
                    </a>
                    <ul class="sub-left-menu">
                        <li><a href="/interernaya-reklama/viveski" class="href-sub-left-menu-item">Вывески</a></li>
                        <li><a href="/interernaya-reklama/svetovie-koroba" class="href-sub-left-menu-item">Световые короба</a></li>
                        <li><a href="/interernaya-reklama/obemnie-bukvi" class="href-sub-left-menu-item">Объемные буквы</a></li>
                        <!--<li><a href="" class="href-sub-left-menu-item">Фризы</a></li>-->
                        <li><a href="/interernaya-reklama/stendi" class="href-sub-left-menu-item">Стенды</a></li>
                        <li><a href="/interernaya-reklama/kompleksnoe-oformlenie" class="href-sub-left-menu-item">Комплексное оформление</a></li>
                    </ul>
                </li>
                <li class="left-menu-item"
                    onmouseenter="anim_arrow_down(this)"
                    onmouseleave="anim_arrow_up(this)">
                    <a href="/tentovie-konstrukcii" class="href-left-menu-item" >
                        {{ HTML::image('images/arrow-right.png', NUll, ['class' => 'img-left-menu-item']); }}
                        <span class="text-left-menu-item">Тентовые конструкции</span>
                    </a>
                    <ul class="sub-left-menu">
                        <li><a href="/tentovie-konstrukcii/letnie-kafe" class="href-sub-left-menu-item">Летние кафе</a></li>
                        <li><a href="/tentovie-konstrukcii/zonti" class="href-sub-left-menu-item">Зонты</a></li>
                        <!--<li><a href="/tentovie-konstrukcii/verandi" class="href-sub-left-menu-item">Веранды</a></li>-->
                        <li><a href="/tentovie-konstrukcii/markizi" class="href-sub-left-menu-item">Маркизы</a></li>
                        <!--<li><a href="/tentovie-konstrukcii/kozirki" class="href-sub-left-menu-item">Козырьки</a></li>-->
                    </ul>
                </li>
                <!--<li class="left-menu-item"
                    onmouseenter="anim_arrow_down(this)"
                    onmouseleave="anim_arrow_up(this)">
                    <a href="/svetopropuskaushie-konstrukcii" class="href-left-menu-item">
                        {{ HTML::image('images/arrow-right.png', NUll, ['class' => 'img-left-menu-item']); }}
                        <span class="text-left-menu-item">Светопропускающие конструкции</span>
                    </a>
                    <ul class="sub-left-menu">
                        <li><a href="" class="href-sub-left-menu-item">Кафе</a></li>
                        <li><a href="" class="href-sub-left-menu-item">Веранды</a></li>
                        <li><a href="" class="href-sub-left-menu-item">Зонты</a></li>
                    </ul>
                </li>
                <li class="left-menu-item"
                    onmouseenter="anim_arrow_down(this)"
                    onmouseleave="anim_arrow_up(this)">
                    <a href="" class="href-left-menu-item">
                        {{ HTML::image('images/arrow-right.png', NUll, ['class' => 'img-left-menu-item']); }}
                        <span class="text-left-menu-item text-left-menu-item-short">Шторы, карнизы</span>
                    </a>
                    <ul class="sub-left-menu">
                        <li><a href="" class="href-sub-left-menu-item">Шторы</a></li>
                        <li><a href="" class="href-sub-left-menu-item">Карнизы</a></li>
                    </ul>
                </li>-->
                <li class="left-menu-item"
                    onmouseenter="anim_arrow_down(this)"
                    onmouseleave="anim_arrow_up(this)">
                    <a href="/razrabotka-disayna" class="href-left-menu-item">
                        {{ HTML::image('images/arrow-right.png', NUll, ['class' => 'img-left-menu-item']); }}
                        <span class="text-left-menu-item">Разработка дизайна</span>
                    </a>
                    <ul class="sub-left-menu">
                        <li><a href="/razrabotka-disayna/naruzhnaya-reklama" class="href-sub-left-menu-item">Наружная реклама</a></li>
                        <li><a href="/razrabotka-disayna/interernaya-reklama" class="href-sub-left-menu-item">Интерьерная реклама</a></li>
                        <li><a href="/razrabotka-disayna/tentovie-konstrukcii" class="href-sub-left-menu-item">Тентовые конструкции</a></li>
                    </ul>
                </li>
                <li class="left-menu-item"
                    onmouseenter="anim_arrow_down(this)"
                    onmouseleave="anim_arrow_up(this)">
                    <a href="/uslugi" class="href-left-menu-item">
                        {{ HTML::image('images/arrow-right.png', NUll, ['class' => 'img-left-menu-item']); }}
                        <span class="text-left-menu-item text-left-menu-item-short">Услуги</span>
                    </a>
                    <ul class="sub-left-menu">
                        <li><a href="/uslugi/remont" class="href-sub-left-menu-item">Ремонт рекламных конструкций</a></li>
                        <li><a href="/uslugi/montage" class="href-sub-left-menu-item">Монтаж рекламных конструкций</a></li>
                        <li><a href="/uslugi/demontage" class="href-sub-left-menu-item">Демонтаж рекламных конструкций</a></li>
                    </ul>
                </li>
                <!--<li class="left-menu-item"
                    onmouseenter="anim_arrow_down(this)"
                    onmouseleave="anim_arrow_up(this)">
                    <a href="/pos-materiali" class="href-left-menu-item" >
                        {{ HTML::image('images/arrow-right.png', NUll, ['class' => 'img-left-menu-item']); }}
                        <span class="text-left-menu-item text-left-menu-item-short">POS-материалы</span>
                    </a>
                    <ul class="sub-left-menu">
                        <li><a href="" class="href-sub-left-menu-item">Стойки</a></li>
                        <li><a href="" class="href-sub-left-menu-item">Буклеты</a></li>
                        <li><a href="" class="href-sub-left-menu-item">Листовки</a></li>
                        <li><a href="" class="href-sub-left-menu-item">Таблички</a></li>
                        <li><a href="" class="href-sub-left-menu-item">Плакаты</a></li>
                        <li><a href="" class="href-sub-left-menu-item">Банеры</a></li>
                        <li><a href="" class="href-sub-left-menu-item">Стикеры</a></li>
                    </ul>
                </li>-->
            </ul>
        </div>
        <div class="content">
            {{ Route::currentRouteName(); }}
            <h1 class="page-title">@yield('page-title')</h1>
            @yield('content')
            @include('forms')

        </div>
        <div class="footer">
            <span class="copy">Vizant &copy 2015</span>
        </div>
    </div>
    <!--<div style="position:absolute" id="hide-layout" class="hide-layout"></div>-->
</body>
</html>