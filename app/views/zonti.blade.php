@extends('layouts.landing-layout')

@section('title')
    Зонты для летних кафе
@stop

@section('page-title')
    Зонты для летних кафе
@stop

@section('slides')
    <li>
        {{ HTML::image('images/tentovie-konstrukcii/zonti/praim-zonti.jpg'); }}
    </li>
    <li>
        {{ HTML::image('images/tentovie-konstrukcii/zonti-i-ograzhdenia-sbarro.png'); }}
    </li>
    <li>
        {{ HTML::image('images/tentovie-konstrukcii/zonti-elki-palki.png'); }}
    </li>
@stop

@section('landing-text-list')
    <span class="landing-right-list-item">Уличные зонты для летнего кафе любой сложности диаметром 3, 4, 5 метров</span>
    <span class="landing-right-list-item">Наши большие зонты прочны, надежны, выдерживают сильный ветер</span>
    <span class="landing-right-list-item">Не ломайте голову над выбором, просто оформите заказ, а мы все сделаем за вас!</span>
@stop

@section('landing-middle')
    <div class="landing-middle">
        <h2 class="landing-middle-title">Зонты + ограждения = летнее кафе</h2>
        <div class="landing-middle-left"></div>
        <p class="landing-middle-text">
            Только у нас Вы можете к большим уличным зонтам для летних кафе заказать
            <a class="landing-middle-text-href" href="/ograzhdenia-dlya-letnih-kafe">декоративные ограждения</a>
            с уникальным дизайном,  которые в совокупности являются современным, красивым летним кафе (верандой).
        </p>
        <div class="landing-middle-right"></div>
    </div>
@stop