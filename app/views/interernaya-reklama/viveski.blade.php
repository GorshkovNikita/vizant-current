@extends('layouts.landing-layout')

@section('title')
    Интерьерная реклама - Вывески
@stop

@section('page-title')
    Интерьерная реклама - Вывески
@stop

@section('slides')
    <li >
        {{ HTML::image('images/interernaya-reklama/viveski/svyaznoy-viveska.jpg'); }}
    </li>
    <li>
        {{ HTML::image('images/interernaya-reklama/viveski/shokoladnica-viveska.jpg'); }}
    </li>
@stop

@section('landing-text-list')
    <span class="landing-right-list-item">Вывески любой сложности</span>
    <span class="landing-right-list-item">Световые и несветовые вывески</span>
    <!--<span class="landing-right-list-item">Бла-бла-бла</span>-->
    <span class="landing-right-list-item">Не ломайте голову над выбором, просто оформите заказ, а мы все сделаем за вас!</span>
@stop