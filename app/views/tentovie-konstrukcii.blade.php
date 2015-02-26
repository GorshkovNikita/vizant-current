@extends('layouts.layout')

@section('title')
    Тентовые конструкции
@stop

@section('page-title')
    Тентовые конструкции
@stop

@section('content')
    <p class="description">
        <strong>Тентовые конструкции</strong> - вид быстровозводимых зданий, основой которых является металлический
        каркас, который обтянут прочным тентом. Тентовые конструкции удобны в эксплуатации, имеют эстетичный
        внешний вид, прочны, надежны, защищают от ветра и непогоды.<br><br>
        Рекламно-производственная компания Vizant производит множество видов тентовых быстровозводимых конструкций.
        У нас Вы можете заказать дизайн, изготовление, монтаж, демонтаж, ремонт любых видов тентовых быстровозводимых
        конструкций.
    </p>
    <div class="products-list">
        <a href="/tentovie-konstrukcii/letnie-kafe" class="products-list-item-href">
            <div class="products-list-item">
                <div class="products-list-item-content products-list-item-content-kafe">
                    <div class="products-list-item-content-text">
                        <h3 class="products-list-item-content-text-header">Летние кафе</h3>
                        <p>
                            Наша компания может изготовить летние кафе любой сложности.
                        </p>
                    </div>
                    <div class="products-list-item-content-arrow">
                        <img src="../images/arrow-28-48.png">
                    </div>
                </div>
            </div>
        </a>
        <a href="/tentovie-konstrukcii/markizi" class="products-list-item-href">
            <div class="products-list-item">
                <div class="products-list-item-content products-list-item-content-markizi">
                    <div class="products-list-item-content-text">
                        <h3 class="products-list-item-content-text-header">Маркизы</h3>
                        <p>
                            Наша компания может изготовить маркизы любой сложности.
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