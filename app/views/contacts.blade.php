@extends('layouts.layout')

@section('title')
    Контакты
@stop

@section('page-title')
    Контакты
@stop

@section('content')
    <div class="contacts">
        Мы будем рады, если, посетив наш сайт, Вам захочется задать нам вопросы или просто написать отзыв.
        Если у Вас есть предложения по сотрудничеству, Вы хотите разместить у нас свой заказ или получить
        информацию о нашей продукции - пишите, а еще лучше - звоните, постараемся Вам помочь.<br><br>
        С нами вы можете связаться одним из перечисленных способов:
        <ul class="contacts-methods">
            <li class="contacts-methods-item">
                <span class="contacts-methods-item-tel">
                    По телефону: <strong>8 (495) 585-37-22</strong> или <strong>8 (495) 922-00-45</strong>
                </span>
            </li>
            <li class="contacts-methods-item">
                <span class="contacts-methods-item-mail">По e-mail:
                    <span class="napishite-nam" id="napishite-nam"><strong>rk@vizant.ru</a></strong></span>
                </span>
            </li>
        </ul>
    </div>
@stop