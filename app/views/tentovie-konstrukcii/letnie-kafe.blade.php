@extends('layouts.landing-layout')

@section('title')
    Тентовые конструкции - Летние кафе
@stop

@section('page-title')
    Тентовые конструкции - Летние кафе
@stop

@section('slides')
    <li>
        {{ HTML::image('images/tentovie-konstrukcii/letnie-kafe/heineken-kafe.jpg'); }}
    </li>
    <li>
        {{ HTML::image('images/tentovie-konstrukcii/letnie-kafe/sbarro-kafe.jpg'); }}
    </li>
    <li>
        {{ HTML::image('images/tentovie-konstrukcii/letnie-kafe/venecia-kafe.jpg'); }}
    </li>
@stop

@section('landing-text-list')
    <span class="landing-right-list-item">Летние кафе любой сложности</span>
    <span class="landing-right-list-item">Наши кафе прочны, надежны, выдерживают существенные ветровые нагрузки</span>
    <!--<span class="landing-right-list-item">Бла-бла-бла</span>-->
    <span class="landing-right-list-item">Не ломайте голову над выбором, просто оформите заказ, а мы все сделаем за вас!</span>
@stop