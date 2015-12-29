@extends('layouts.landing-layout')

@section('title')
    Декоративные ограждения для летних кафе
@stop

@section('page-title')
    Декоративные ограждения для летних кафе
@stop

@section('slides')
    <li>
        {{ HTML::image('images/tentovie-konstrukcii/zonti-i-ograzhdenia-sbarro.png'); }}
    </li>
    <li >
        {{ HTML::image('images/tentovie-konstrukcii/zonti-i-ograzhdenia-easy-pub.png'); }}
    </li>
@stop

@section('landing-text-list')
    <span class="landing-right-list-item">Декоративные ограждения любой сложности для Вашего летнего кафе</span>
    <span class="landing-right-list-item">Ограждения с уникальным дизайном</span>
    <!--<span class="landing-right-list-item"></span>-->
    <span class="landing-right-list-item">Не ломайте голову над выбором, просто оформите заказ, а мы все сделаем за вас!</span>
@stop

@section('landing-middle')
    <div class="landing-middle">
        <h2 class="landing-middle-title">Зонты + ограждения = летнее кафе</h2>
        <div class="landing-middle-left"></div>
        <p class="landing-middle-text">
            Только у нас Вы можете к декоративным ограждениям для летних кафе заказать большие
            <a class="landing-middle-text-href" href="/zonti-dlya-letnih-kafe">зонты</a> с
            уникальным дизайном, которые в совокупности являются современным, красивым летним кафе (верандой).
        </p>
        <div class="landing-middle-right"></div>
    </div>
@stop