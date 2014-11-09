@extends('layouts.landing-layout')

@section('title')
    Интерьерная реклама - Объемные буквы
@stop

@section('page-title')
    Интерьерная реклама - Объемные буквы
@stop

@section('slides')
    <li>
        {{ HTML::image('images/interernaya-reklama/obiemnie-bukvi/igrushka-bukvi.jpg'); }}
    </li>
    <li>
        {{ HTML::image('images/interernaya-reklama/obiemnie-bukvi/shokoladnica-bukvi.jpg'); }}
    </li>
@stop

@section('landing-text-list')
    <span class="landing-right-list-item">Объемные буквы любой сложности</span>
    <span class="landing-right-list-item">Множество типов шрифтов  для букв</span>
    <!--<span class="landing-right-list-item">Бла-бла-бла</span>-->
    <span class="landing-right-list-item">Не ломайте голову над выбором, просто оформите заказ, а мы все сделаем за вас!</span>
@stop