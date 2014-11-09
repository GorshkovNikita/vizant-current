@extends('layouts.landing-layout')

@section('title')
    Наружная реклама - Вывески
@stop

@section('page-title')
    Наружная реклама - Вывески
@stop

@section('slides')
    <li >
        {{ HTML::image('images/naruzhnaya-reklama/viveski/svayznoy.jpg'); }}
    </li>
    <li >
        {{ HTML::image('images/naruzhnaya-reklama/viveski/mdm-bank.jpg'); }}
    </li>
    <li >
        {{ HTML::image('images/naruzhnaya-reklama/viveski/yaponskiy-dvorik.jpg'); }}
    </li>
@stop

@section('landing-text-list')
    <span class="landing-right-list-item">Вывески любой сложности</span>
    <span class="landing-right-list-item">Световые и несветовые вывески</span>
    <!--<span class="landing-right-list-item"></span>-->
    <span class="landing-right-list-item">Не ломайте голову над выбором, просто оформите заказ, а мы все сделаем за вас!</span>
@stop