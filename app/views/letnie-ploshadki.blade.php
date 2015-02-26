@extends('layouts.landing-layout')

@section('title')
    Зонты и ограждения для летних кафе. Летние веранды.
@stop

@section('page-title')
    Летние площадки на сезон 2015 года
@stop

@section('slides')
<li>
    {{ HTML::image('images/tentovie-konstrukcii/zonti/heineken-zonti.jpg'); }}
</li>
<li>
    {{ HTML::image('images/tentovie-konstrukcii/zonti/praim-zonti.jpg'); }}
</li>
<li>
    {{ HTML::image('images/tentovie-konstrukcii/letnie-kafe/sbarro-kafe.jpg'); }}
</li>
<li>
    {{ HTML::image('images/tentovie-konstrukcii/letnie-kafe/heineken-kafe.jpg'); }}
</li>
@stop

@section('landing-text-list')
    <span class="landing-right-list-item">Уличные зонты для летнего кафе любой сложности диаметром 3, 4, 5 метров</span>
    <span class="landing-right-list-item">Декоративные ограждения для летнего кафе с уникальным дизайном</span>
    <span class="landing-right-list-item">Тентовые или светопропускающие летние веранды (кафе) любой сложности</span>
@stop

@section('landing-middle')
<div class="landing-middle new-landing-middle">
    <h2 class="landing-middle-title">Летнее кафе</h2>
    <div class="new-landing-middle-left">
        <div class="landing-middle-arrow-left">
            {{ HTML::image('images/arrow-247-32.png', '', [ 'class' => 'landing-middle-arrow-left-img']); }}
        </div>
        <div class="landing-middle-left-content">
            <h3 class="landing-middle-left-title">Зонты + ограждения</h3>
            <div class="landing-middle-left-icons">
                <div class="landing-middle-left-icons-umbrella">

                </div>
                <div class="landing-middle-left-icons-fence">

                </div>
            </div>
            <p class="landing-middle-right-text">
                Только у нас Вы можете заказать декоративные ограждения и большие уличные зонты,
                которые в совокупности являются современным летним кафе (верандой).
            </p>
            <span class="landing-middle-left-gallery" onclick="RedirectZonti(this)">Посмотрите наши работы по зонтам и ограждениям!</span>
        </div>
    </div>
    <div class="new-landing-middle-right">
        <div class="landing-middle-arrow-right">
            {{ HTML::image('images/arrow-247-32.png', '', [ 'class' => 'landing-middle-arrow-right-img']); }}
        </div>
        <div class="landing-middle-right-content">
            <h3 class="landing-middle-right-title">Летние веранды</h3>
            <div class="landing-middle-right-icons">

            </div>
            <p class="landing-middle-right-text">
                Наша компания предлагает быстровозводимые тентовые летние кафе
                любой сложности с уникальным дизайном. Такие летние веранды имеют эстетический
                внешний вид.
            </p>
            <span class="landing-middle-right-gallery" onclick="RedirectKafe(this)">Посмотрите наши работы по летним верандам!</span>
        </div>

    </div>
</div>
@stop