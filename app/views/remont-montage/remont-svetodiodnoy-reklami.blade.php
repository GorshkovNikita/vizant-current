@extends('layouts.landing-layout')

@section('title')
    Ремонт светодиодной рекламы
@stop

@section('page-title')
    Ремонт светодиодной рекламы
@stop

@section('slides')
<li>
    {{ HTML::image('images/uslugi/remont/elki-palki-remont.jpg'); }}
</li>
<li>
    {{ HTML::image('images/uslugi/remont/vostochniy-bazar-remont.jpg'); }}
</li>
@stop

@section('landing-text-list')
<span class="landing-right-list-item">Ремонтируем любые виды светодиодной рекламы</span>
<span class="landing-right-list-item">Сделаем качественно и быстро</span>
<!--<span class="landing-right-list-item">Бла-бла-бла</span>-->
<span class="landing-right-list-item">Не ломайте голову над выбором, просто оформите заказ, а мы все сделаем за вас!</span>
@stop