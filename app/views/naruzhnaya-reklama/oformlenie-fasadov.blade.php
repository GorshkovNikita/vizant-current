@extends('layouts.landing-layout')

@section('title')
    Наружная реклама - Оформление фасадов
@stop

@section('page-title')
    Наружная реклама - Оформление фасадов
@stop

@section('slides')
    <li>
        {{ HTML::image('images/naruzhnaya-reklama/oformlenie-fasadov/svyaznoy-fasad.jpg'); }}
    </li>
    <li>
        {{ HTML::image('images/naruzhnaya-reklama/oformlenie-fasadov/schwein.jpg'); }}
    </li>
@stop

@section('landing-text-list')
    <span class="landing-right-list-item">Оформление фасадов любой сложности</span>
    <span class="landing-right-list-item">Разработка единого стиля фасада</span>
    <span class="landing-right-list-item">Огромный спектр дизайнерских и технологических решений</span>
    <span class="landing-right-list-item">Не ломайте голову над выбором, просто оформите заказ, а мы все сделаем за вас!</span>
@stop