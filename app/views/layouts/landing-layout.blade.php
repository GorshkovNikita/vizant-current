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
                    <div class="landing-right-button-img order-form-open"></div>
                </div>
                <div class="landing-right-cons callback-form-open">
                    <span class="landing-right-cons-text">
                        <strong style="color: orange">Есть вопросы? Закажите звонок!</strong>
                    </span>
                </div>
                @if(!isset($type_gallery))
                    <a href="/galereya">
                        <span class="landing-right-gallery">
                            <strong style="color: orange">Посмотрите наши работы!</strong>
                        </span>
                    </a>
                @else
                    <a href="/galereya?type={{ $type_gallery }}">
                        <span class="landing-right-gallery">
                            <strong style="color: orange">Посмотрите наши работы!</strong>
                        </span>
                    </a>
                @endif
            </div>
        </div>
    </div>
    @yield('landing-middle')
    <div class="landing-type-work-full">
        <h2 class="landing-type-work-title">У нас Вы можете заказать:</h2>
        {{ HTML::image('images/full-work.png', NULL, [ 'class' => 'landing-type-work-full-img' ]); }}
        <h3 class="landing-type-work-full-subtitle">или каждую услугу отдельно.</h3>
    </div>
    <div class="plan">
        <h2 class="plan-header">Схема работы</h2>
        <div class="plan-order">
            <span class="plan-order-text">Вы оставляете заявку</span>
        </div>
        <div class="plan-call">
            <span class="plan-call-text">Мы Вам перезваниваем<br>в течение 24 часов</span>
        </div>
        <div class="plan-consult">
            <span class="plan-consult-text">Консультация</span>
        </div>
        <div class="plan-calc">
            <span class="plan-calc-text">Расчет стоимости заказа</span>
        </div>
        <div class="plan-deal">
            <span class="plan-deal-text">Сделка</span>
        </div>
        <div class="plan-work">
            <span class="plan-work-text">Выполнение работ</span>
        </div>
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
            <div class="landing-clients-item landing-clients-item-shoko">
                {{ HTML::image('images/logo-shokoladnica.png', NULL, [ 'class' => 'landing-clients-item-shokoladnica' ]); }}
            </div>
        </div>
    </div>
@stop