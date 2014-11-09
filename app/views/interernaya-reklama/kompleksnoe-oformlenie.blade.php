@extends('layouts.landing-layout')

@section('title')
    Интерьерная реклама - Комплексное оформление
@stop

@section('page-title')
    Интерьерная реклама - Комплексное оформление
@stop

@section('slides')
    <li>
        {{ HTML::image('images/interernaya-reklama/kompleksnoe-oformlenie/svyaznoy-interier-oformlenie.jpg'); }}
    </li>
    <li>
        {{ HTML::image('images/interernaya-reklama/kompleksnoe-oformlenie/kafe-pit-stop.jpg'); }}
    </li>
    <li>
        {{ HTML::image('images/interernaya-reklama/kompleksnoe-oformlenie/comstar.jpg'); }}
    </li>
@stop

@section('landing-text-list')
    <span class="landing-right-list-item">Оформление интерьеров любой сложности</span>
    <span class="landing-right-list-item">Разработка единого стиля интерьера</span>
    <!--<span class="landing-right-list-item">Бла-бла-бла</span>-->
    <span class="landing-right-list-item">Не ломайте голову над выбором, просто оформите заказ, а мы все сделаем за вас!</span>
@stop