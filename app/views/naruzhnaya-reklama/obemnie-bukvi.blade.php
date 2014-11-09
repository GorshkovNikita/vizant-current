@extends('layouts.landing-layout')

@section('title')
    Наружная реклама - Объемные буквы
@stop

@section('page-title')
    Наружная реклама - Объемные буквы
@stop

@section('slides')
    <li>
        {{ HTML::image('images/naruzhnaya-reklama/obiemnie-bukvi/lukoil-bukvi.jpg'); }}
    </li>
    <li>
        {{ HTML::image('images/naruzhnaya-reklama/obiemnie-bukvi/dejavu.JPG'); }}
    </li>
@stop

@section('landing-text-list')
    <span class="landing-right-list-item">Объемные буквы любой сложности</span>
    <span class="landing-right-list-item">Множество типов шрифтов для букв</span>
    <!--<span class="landing-right-list-item">Бла-бла-бла</span>-->
    <span class="landing-right-list-item">Не ломайте голову над выбором, просто оформите заказ, а мы все сделаем за вас!</span>
@stop