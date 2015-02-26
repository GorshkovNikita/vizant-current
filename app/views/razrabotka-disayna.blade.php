@extends('layouts.layout')

@section('title')
    Разработка дизайна
@stop

@section('page-title')
    Разработка дизайна
@stop

@section('content')
    <p class="description">
        <strong>Разработка дизайна</strong> - важная часть создания любого вида рекламы, так как именно дизайн
        привлекает посетителей, и чем он ярче, интереснее и информативнее, тем больше клиентов он может заинтересовать.
        Без грамотного дизайна процесс привлечения клиентов с помощью рекламы может быть заторможен в несколько раз.
        <br><br>
        Рекламно-производственная компания Vizant разрабатывает дизайн наружной, интерьерной рекламы и тентовых
        конструкций. У нас Вы можете заказать дизайн своей рекламы и уже в короткие сроки получите несколько эскизов.
    </p>
    <div class="products-list">
        <a href="/razrabotka-disayna/naruzhnaya-reklama" class="products-list-item-href">
            <div class="products-list-item">
                <div class="products-list-item-content products-list-item-content-deisgn-naruzh">
                    <div class="products-list-item-content-text">
                        <h3 class="products-list-item-content-text-header">Дизайн наружной рекламы</h3>
                        <p>
                            Наша компания может разработать дизайн наружной рекламы любой сложности.
                        </p>
                    </div>
                    <div class="products-list-item-content-arrow">
                        <img src="../images/arrow-28-48.png">
                    </div>
                </div>
            </div>
        </a>
        <a href="/razrabotka-disayna/interernaya-reklama" class="products-list-item-href">
            <div class="products-list-item">
                <div class="products-list-item-content products-list-item-content-deisgn-inter">
                    <div class="products-list-item-content-text">
                        <h3 class="products-list-item-content-text-header">Дизайн интерьерной рекламы</h3>
                        <p>
                            Наша компания может разработать дизайн интерьерной рекламы любой сложности.
                        </p>
                    </div>
                    <div class="products-list-item-content-arrow">
                        <img src="../images/arrow-28-48.png">
                    </div>
                </div>
            </div>
        </a>
        <a href="/razrabotka-disayna/tentovie-konstrukcii" class="products-list-item-href">
            <div class="products-list-item">
                <div class="products-list-item-content products-list-item-content-deisgn-tent">
                    <div class="products-list-item-content-text">
                        <h3 class="products-list-item-content-text-header">Дизайн тентовых конструкций</h3>
                        <p>
                            Наша компания может разработать дизайн тентовых конструкций любой сложности.
                        </p>
                    </div>
                    <div class="products-list-item-content-arrow">
                        <img src="../images/arrow-28-48.png">
                    </div>
                </div>
            </div>
        </a>
    </div>
@stop