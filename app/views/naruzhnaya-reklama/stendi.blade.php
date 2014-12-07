@extends('layouts.landing-layout')

@section('title')
    Наружная реклама - Стенды
@stop

@section('page-title')
    Наружная реклама - Стенды
@stop

@section('slides')
    <li>
        {{ HTML::image('images/naruzhnaya-reklama/stendi/stend-outdoor.jpg'); }}
    </li>
    <li>
        {{ HTML::image('images/naruzhnaya-reklama/stendi/stend-outdoor-2.jpg'); }}
    </li>
    <li>
        {{ HTML::image('images/naruzhnaya-reklama/stendi/stend-outdoor-3.jpg'); }}
    </li>
@stop

@section('landing-text-list')
    <span class="landing-right-list-item">Световые короба любой сложности</span>
    <span class="landing-right-list-item">Стенды с уникальным дизайном</span>
    <!--<span class="landing-right-list-item">Бла-бла-бла</span>-->
    <span class="landing-right-list-item">Не ломайте голову над выбором, просто оформите заказ, а мы все сделаем за вас!</span>
@stop