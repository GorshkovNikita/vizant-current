@extends('layouts.landing-layout')

@section('title')
    Дизайн интерьерной рекламы
@stop

@section('page-title')
    Дизайн интерьерной рекламы
@stop

@section('slides')
    <li>
        {{ HTML::image('images/razrabotka-disayna/interernaya-reklama/eurotek-disayn.jpg'); }}
    </li>
    <li>
        {{ HTML::image('images/razrabotka-disayna/interernaya-reklama/vostochniy-bazar-disayn.jpg'); }}
    </li>
@stop

@section('landing-text-list')
    <span class="landing-right-list-item">Дизайн интерьерной рекламы любой сложности</span>
    <span class="landing-right-list-item">Разработка уникального дизайна для Вашей компании</span>
    <!--<span class="landing-right-list-item">Бла-бла-бла</span>-->
    <span class="landing-right-list-item">Не ломайте голову над выбором, просто оформите заказ, а мы все сделаем за вас!</span>
@stop