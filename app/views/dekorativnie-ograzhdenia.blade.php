@extends('layouts.landing-layout')

@section('title')
    Декоративные ограждения для летних кафе
@stop

@section('page-title')
    Декоративные ограждения для летних кафе
@stop

@section('slides')
<li >
    {{ HTML::image('images/dekorativnie-ograzhdenia/heineken-ograzhdenia.jpg'); }}
</li>
<li >
    {{ HTML::image('images/dekorativnie-ograzhdenia/ograzhdenia-sbarro.png'); }}
</li>
@stop

@section('landing-text-list')
    <span class="landing-right-list-item">Декоративные ограждения любой сложности для Вашего летнего кафе</span>
    <span class="landing-right-list-item">Ограждения с уникальным дизайном</span>
    <!--<span class="landing-right-list-item"></span>-->
    <span class="landing-right-list-item">Не ломайте голову над выбором, просто оформите заказ, а мы все сделаем за вас!</span>
@stop