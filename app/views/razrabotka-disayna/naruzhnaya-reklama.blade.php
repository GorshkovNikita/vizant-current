@extends('layouts.landing-layout')

@section('title')
    Разработка дизайна - Наружная реклама
@stop

@section('page-title')
    Разработака дизайна - Наружная реклама
@stop

@section('slides')
    <li>
        {{ HTML::image('images/razrabotka-disayna/naruzhnaya-reklama/grattoni-disayn.jpg'); }}
    </li>
    <li>
        {{ HTML::image('images/razrabotka-disayna/naruzhnaya-reklama/bar-gantino-disayn.jpg'); }}
    </li>
@stop

@section('landing-text-list')
    <span class="landing-right-list-item">Дизайн наружной рекламы любой сложности</span>
    <span class="landing-right-list-item">Разработка уникального дизайна для Вашей компании</span>
    <!--<span class="landing-right-list-item">Бла-бла-бла</span>-->
    <span class="landing-right-list-item">Не ломайте голову над выбором, просто оформите заказ, а мы все сделаем за вас!</span>
@stop