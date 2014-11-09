@extends('layouts.landing-layout')

@section('title')
    Тентовые конструкции - Зонты
@stop

@section('page-title')
    Тентовые конструкции - Зонты
@stop

@section('slides')
    <li>
        {{ HTML::image('images/tentovie-konstrukcii/zonti/heineken-zonti.jpg'); }}
    </li>
    <li>
        {{ HTML::image('images/tentovie-konstrukcii/zonti/sbarro-zonti.jpg'); }}
    </li>
    <li>
        {{ HTML::image('images/tentovie-konstrukcii/zonti/praim-zonti.jpg'); }}
    </li>
@stop

@section('landing-text-list')
    <span class="landing-right-list-item">Зонты любой сложности</span>
    <span class="landing-right-list-item">Наши зонты прочны, надежны, выдерживают существенные ветровые нагрузки</span>
    <!--<span class="landing-right-list-item">Бла-бла-бла</span>-->
    <span class="landing-right-list-item">Не ломайте голову над выбором, просто оформите заказ, а мы все сделаем за вас!</span>
@stop