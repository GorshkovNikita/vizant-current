@extends('layouts.layout')

@section('content')
    <div class="landing-top">
        <div class="landing-slider">
            <div class="callbacks_container">
                <ul class="rslides" id="slider4">
                    @yield('slides')
                </ul>
            </div>
            <script>
                $(function () {
                    $("#slider4").responsiveSlides({
                        auto: true,
                        pager: false,
                        nav: true,
                        speed: 700,
                        namespace: "callbacks"
                    });
                });
            </script>
        </div>
        <div class="landing-right">
            <div class="landing-right-list">
                @yield('landing-text-list')
            </div>
            <div class="landing-right-nav">
                <div class="landing-right-button">
                    <div class="landing-right-button-img" id="order-button"></div>
                </div>
                <div class="landing-right-cons" id="cons-button">
                    <span class="landing-right-cons-text">
                        <strong>Есть вопросы? Закажите звонок!</strong>
                    </span>
                </div>
                <a href="/galereya">
                    <span class="landing-right-gallery">
                        <strong>Посмотреть наши работы!</strong>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <!--<div class="landing-type-work">
        <h2 class="landing-type-work-title">У нас Вы можете заказать:</h2>
        <div class="landing-type-work-design">
            <span class="landing-type-work-design-text">Дизайн</span>
            <img src="images/design.png" class="landing-type-work-design-img">
        </div>
        <div class="landing-type-work-assembly">
            <span class="landing-type-work-assembly-text">Монтаж/демонтаж</span>
            <img src="images/assembly.png" class="landing-type-work-design-img">
        </div>
        <div class="landing-type-work-production">
            <span class="landing-type-work-production-text">Изготовление</span>
            <img src="images/production.png" class="landing-type-work-design-img">
        </div>
        <div class="landing-type-work-repair">
            <span class="landing-type-work-repair-text">Ремонт</span>
            <img src="images/repair.png" class="landing-type-work-design-img">
        </div>
    </div>-->
    <div class="landing-type-work-full">
        <h2 class="landing-type-work-title">У нас Вы можете заказать:</h2>
        {{ HTML::image('images/full-work.png', NULL, [ 'class' => 'landing-type-work-full-img' ]); }}
        <h3 class="landing-type-work-full-subtitle">или каждую услугу отдельно.</h3>
    </div>
    <div class="landing-clients">
        <h2 class="landing-clients-title">Наши клиенты:</h2>
        <div class="landing-clients-items">
            <div class="landing-clients-item">
                {{ HTML::image('images/logo-burger-king.png', NULL, [ 'class' => 'landing-clients-item-burger-king' ]); }}
            </div>
            <div class="landing-clients-item">
                {{ HTML::image('images/logo-sbarro.png', NULL, [ 'class' => 'landing-clients-item-sbarro' ]); }}
            </div>
            <div class="landing-clients-item">
                {{ HTML::image('images/logo-svyaznoy.png', NULL, [ 'class' => 'landing-clients-item-svyaznoy' ]); }}
            </div>
            <div class="landing-clients-item">
                {{ HTML::image('images/logo-shokoladnica.png', NULL, [ 'class' => 'landing-clients-item-shokoladnica' ]); }}
            </div>
        </div>
    </div>
@stop