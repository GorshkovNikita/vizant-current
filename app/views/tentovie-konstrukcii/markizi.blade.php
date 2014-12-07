@extends('layouts.landing-layout')

@section('title')
    Тентовые конструкции - Маркизы
@stop

@section('page-title')
    Тентовые конструкции - Маркизы
@stop

@section('slides')
    <li>
        {{ HTML::image('images/tentovie-konstrukcii/markizi/modniy-doctor-markizi.jpg'); }}
    </li>
    <li>
        {{ HTML::image('images/tentovie-konstrukcii/markizi/dejavu-markiz.jpg'); }}
    </li>
    <li>
        {{ HTML::image('images/tentovie-konstrukcii/markizi/zen-kofe-markiz.jpg'); }}
    </li>
@stop

@section('landing-text-list')
    <span class="landing-right-list-item">Маркизы любой сложности</span>
    <span class="landing-right-list-item">Наши маркизы прочны, надежны, выдерживают существенные ветровые нагрузки</span>
    <!--<span class="landing-right-list-item">Бла-бла-бла</span>-->
    <span class="landing-right-list-item">Не ломайте голову над выбором, просто оформите заказ, а мы все сделаем за вас!</span>
@stop