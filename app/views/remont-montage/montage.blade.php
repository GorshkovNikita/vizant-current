@extends('layouts.landing-layout')

@section('title')
    Монтаж рекламных конструкций
@stop

@section('page-title')
    Монтаж рекламных конструкций
@stop

@section('slides')
    <li>
        {{ HTML::image('images/uslugi/montage/sbarro-montage.jpg'); }}
    </li>
@stop

@section('landing-text-list')
    <span class="landing-right-list-item">Монтируем все от вывесок до объемных букв, от зонтов до летних кафе</span>
    <span class="landing-right-list-item">Сделаем качественно и быстро</span>
    <!--<span class="landing-right-list-item">Бла-бла-бла</span>-->
    <span class="landing-right-list-item">Не ломайте голову над выбором, просто оформите заказ, а мы все сделаем за вас!</span>
@stop