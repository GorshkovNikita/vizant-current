@extends('layouts.landing-layout')

@section('title')
    Дизайн тентовых конструкций
@stop

@section('page-title')
    Дизайн тентовых конструкций
@stop

@section('slides')
    <li>
        {{ HTML::image('images/razrabotka-disayna/tentovie-konstrukcii/planeta-sushi-disayn.jpg'); }}
    </li>
    <li>
        {{ HTML::image('images/razrabotka-disayna/tentovie-konstrukcii/venecia-disayn.jpg'); }}
    </li>
@stop

@section('landing-text-list')
    <span class="landing-right-list-item">Дизайн тентовых конструкций любой сложности</span>
    <span class="landing-right-list-item">Разработка уникального дизайна для Вашей компании</span>
    <!--<span class="landing-right-list-item">Бла-бла-бла</span>-->
    <span class="landing-right-list-item">Не ломайте голову над выбором, просто оформите заказ, а мы все сделаем за вас!</span>
@stop