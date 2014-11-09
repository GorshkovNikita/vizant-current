@extends('layouts.landing-layout')

@section('title')
    Интерьерная реклама - Световые короба
@stop

@section('page-title')
    Интерьерная реклама -  Световые короба
@stop

@section('slides')
    <li>
        {{ HTML::image('images/interernaya-reklama/svetovie-koroba/start-master.jpg'); }}
    </li>
    <li>
        {{ HTML::image('images/interernaya-reklama/svetovie-koroba/shokoladnica-korob.jpg'); }}
    </li>
    <li>
        {{ HTML::image('images/interernaya-reklama/svetovie-koroba/whoolstreet-korob.jpg'); }}
    </li>
@stop

@section('landing-text-list')
    <span class="landing-right-list-item">Световые короба любой сложности</span>
    <span class="landing-right-list-item">Световой короб (Lightbox) - самый распространенный вид рекламы</span>
    <!--<span class="landing-right-list-item">Бла-бла-бла</span>-->
    <span class="landing-right-list-item">Не ломайте голову над выбором, просто оформите заказ, а мы все сделаем за вас!</span>
@stop