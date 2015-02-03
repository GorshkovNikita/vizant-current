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
    <meta name='yandex-verification' content='6950dab03e1b70bb' />
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
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter27441190 = new Ya.Metrika({id:27441190,
                        webvisor:true,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true});
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="//mc.yandex.ru/watch/27441190" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
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
                    <span class="order-text order-form-open">
                        Оформите заказ!
                    </span>
                </div>
                <div class="phone">
                    <span class="mphone-text callback-form-open">
                        Закажите обратный звонок!
                    </span>
                    <span class="mail-text mail-form-open">
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
                <li id="naruzh-item"
                    class="left-menu-item"
                    onmouseenter="anim_arrow_down(this)"
                    onmouseleave="anim_arrow_up(this)">
                    <a href="#" class="href-left-menu-item">
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
                <li id="interior-item"
                    class="left-menu-item"
                    onmouseenter="anim_arrow_down(this)"
                    onmouseleave="anim_arrow_up(this)">
                    <a href="#" class="href-left-menu-item">
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
                <li id="tent-item"
                    class="left-menu-item"
                    onmouseenter="anim_arrow_down(this)"
                    onmouseleave="anim_arrow_up(this)">
                    <a href="#" class="href-left-menu-item" >
                        {{ HTML::image('images/arrow-right.png', NUll, ['class' => 'img-left-menu-item']); }}
                        <span class="text-left-menu-item">Тентовые конструкции</span>
                    </a>
                    <ul class="sub-left-menu">
                        <li><a href="/tentovie-konstrukcii/letnie-kafe" class="href-sub-left-menu-item">Летние кафе</a></li>
                        <!--<li><a href="/tentovie-konstrukcii/zonti" class="href-sub-left-menu-item">Зонты</a></li>-->
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
                <li id="disayn-item"
                    class="left-menu-item"
                    onmouseenter="anim_arrow_down(this)"
                    onmouseleave="anim_arrow_up(this)">
                    <a href="#" class="href-left-menu-item">
                        {{ HTML::image('images/arrow-right.png', NUll, ['class' => 'img-left-menu-item']); }}
                        <span class="text-left-menu-item">Разработка дизайна</span>
                    </a>
                    <ul class="sub-left-menu">
                        <li><a href="/razrabotka-disayna/naruzhnaya-reklama" class="href-sub-left-menu-item">Наружная реклама</a></li>
                        <li><a href="/razrabotka-disayna/interernaya-reklama" class="href-sub-left-menu-item">Интерьерная реклама</a></li>
                        <li><a href="/razrabotka-disayna/tentovie-konstrukcii" class="href-sub-left-menu-item">Тентовые конструкции</a></li>
                    </ul>
                </li>
                <li id="remont-item"
                    class="left-menu-item"
                    onmouseenter="anim_arrow_down(this)"
                    onmouseleave="anim_arrow_up(this)">
                    <a href="#" class="href-left-menu-item">
                        {{ HTML::image('images/arrow-right.png', NUll, ['class' => 'img-left-menu-item']); }}
                        <span class="text-left-menu-item text-left-menu-item-short">Ремонт/монтаж</span>
                    </a>
                    <ul class="sub-left-menu">
                        <li><a href="/remont-montage/remont" class="href-sub-left-menu-item">Ремонт рекламных конструкций</a></li>
                        <li><a href="/remont-montage/montage" class="href-sub-left-menu-item">Монтаж рекламных конструкций</a></li>
                        <li><a href="/remont-montage/demontage" class="href-sub-left-menu-item">Демонтаж рекламных конструкций</a></li>
                        <li><a href="/remont-montage/remont-svetodiodnoy-reklami" class="href-sub-left-menu-item">Ремонт светодиодной рекламы</a></li>
                    </ul>
                </li>
                <li id="ograzhdenia-item"
                    class="left-menu-item"
                    onmouseenter="anim_arrow_down(this)"
                    onmouseleave="anim_arrow_up(this)">
                    <a href="/dekorativnie-ograzhdenia" class="href-left-menu-item">
                        {{ HTML::image('images/arrow-right.png', NUll, ['class' => 'img-left-menu-item', 'style' => 'margin-top: 17px']); }}
                        <span class="text-left-menu-item">Декоративные ограждения для летних кафе</span>
                    </a>
                </li>
                <li id="zonti-item"
                    class="left-menu-item"
                    onmouseenter="anim_arrow_down(this)"
                    onmouseleave="anim_arrow_up(this)">
                    <a href="/zonti" class="href-left-menu-item">
                        {{ HTML::image('images/arrow-right.png', NUll, ['class' => 'img-left-menu-item', 'style' => '']); }}
                        <span class="text-left-menu-item">Зонты для летних кафе</span>
                    </a>
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

    </div>
    <div class="footer">
        <div class="footer-content">
            <div class="footer-top-menu">
                <span class="footer-top-menu-item"><a href="/" class="footer-top-menu-item-href">О компании</a></span>
                <span class="footer-top-menu-item"><a href="/galereya" class="footer-top-menu-item-href">Галерея</a></span>
                <span class="footer-top-menu-item"><a href="/nashi-klienti" class="footer-top-menu-item-href">Наши клиенты</a></span>
                <span class="footer-top-menu-item"><a href="/kontakti" class="footer-top-menu-item-href">Контакты</a></span>
            </div>
            <div class="footer-left-menu">
                <span class="footer-left-menu-item"><a href="#" class="footer-left-menu-item-href">Наружная реклама</a></span>
                <span class="footer-left-menu-item"><a href="#" class="footer-left-menu-item-href">Интерьерная реклама</a></span>
                <span class="footer-left-menu-item"><a href="#" class="footer-left-menu-item-href">Тентовые конструкции</a></span>
                <span class="footer-left-menu-item"><a href="#" class="footer-left-menu-item-href">Разработка дизайна</a></span>
                <span class="footer-left-menu-item"><a href="#" class="footer-left-menu-item-href">Ремонт/монтаж</a></span>
            </div>
            <div class="footer-kontakti">
                <span class="footer-kontakti-item">(495) 585-37-22</span>
                <span class="footer-kontakti-item">(495) 922-00-45</span>
                <span class="footer-kontakti-item footer-kontakti-item-mail"><span class="footer-kontakti-item-mail-text mail-form-open">rk@vizant.ru</span></span>
                <span class="footer-kontakti-item footer-kontakti-item-site"><a href="http://rkvizant.ru" class="footer-kontakti-item-site-href" target="_blank">rkvizant.ru</a></span>
                <span class="footer-kontakti-item footer-kontakti-item-site"><a href="http://tentdesign.ru" class="footer-kontakti-item-site-href" target="_blank">tentdesign.ru</a></span>
            </div>
            <div class="footer-vizant">
                <span class="footer-vizant-item">Vizant &copy; 1992-2015</span>
            </div>
        </div>
        <!--<span class="copy">Vizant &copy 2015</span>-->
    </div>
    <!--<div style="position:absolute" id="hide-layout" class="hide-layout"></div>-->
</body>
</html>