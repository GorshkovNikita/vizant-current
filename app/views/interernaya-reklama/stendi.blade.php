@extends('layouts.landing-layout')

@section('title')
    Интерьерная реклама - Стенды
@stop

@section('page-title')
    Интерьерная реклама - Стенды
@stop

@section('slides')
    <li>
        {{ HTML::image('images/interernaya-reklama/stendi/alrosa-svetovoy-stend.jpg'); }}
    </li>
    <li>
        {{ HTML::image('images/interernaya-reklama/stendi/alrosa-stend-display.jpg'); }}
    </li>
    <li>
        {{ HTML::image('images/interernaya-reklama/stendi/alrosa-interior-stend.jpg'); }}
    </li>
@stop

@section('landing-text-list')
    <span class="landing-right-list-item">Стенды любой сложности</span>
    <span class="landing-right-list-item">Стенды с уникальным дизайном</span>
    <!--<span class="landing-right-list-item">Бла-бла-бла</span>-->
    <span class="landing-right-list-item">Не ломайте голову над выбором, просто оформите заказ, а мы все сделаем за вас!</span>
@stop