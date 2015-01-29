@extends('layouts.layout')

@section('title')
    Галерея
@stop

@section('page-title')
    Галерея
@stop

@section('content')
    <div class="image-row">
        <div class="gallery-control">
            <span class="gallery-control-outdoor" onclick="ShowOutdoor(this)">Наружная реклама</span>
            <span class="gallery-control-interior" onclick="ShowInterior(this)">Интерьерная реклама</span>
            <span class="gallery-control-tent" onclick="ShowTent(this)">Тентовые конструкции</span>
            <span class="gallery-control-design" onclick="ShowDesign(this)">Дизайн</span>
        </div>
        <div class="image-set">
            <div class="image-set-outdoor">
                <a class="example-image-link" href="images/gallery/naruzhnaya-reklama/swiss-korob.jpg" data-lightbox="outdoor-set" data-title="Световой короб &quot;SWISS&quot;">
                    <img class="example-image" src="images/gallery/naruzhnaya-reklama/previews/preview-swiss-korob.png" alt=""/>
                </a>
                <a class="example-image-link" href="images/gallery/naruzhnaya-reklama/dejavu-bukvi.jpg" data-lightbox="outdoor-set" data-title="Объемные буквы &quot;Дежавю&quot;">
                    <img class="example-image" src="images/gallery/naruzhnaya-reklama/previews/preview-dejavu-bukvi.png" alt=""/>
                </a>
                <a class="example-image-link" href="images/gallery/naruzhnaya-reklama/luberci-bukvi.jpg" data-lightbox="outdoor-set" data-title="Объемные буквы &quot;Люберцы&quot;">
                    <img class="example-image" src="images/gallery/naruzhnaya-reklama/previews/preview-luberci-bukvi.png" alt=""/>
                </a>
                <a class="example-image-link" href="images/gallery/naruzhnaya-reklama/raiffaisen-bank-fasad.jpg" data-lightbox="outdoor-set" data-title="Оформление фасада &quot;Райффайзен банк&quot;">
                    <img class="example-image" src="images/gallery/naruzhnaya-reklama/previews/preview-raiffaisen-bank-fasad.png" alt=""/>
                </a>
                <a class="example-image-link" href="images/gallery/naruzhnaya-reklama/svyaznoy-noch-korob.jpg" data-lightbox="outdoor-set" data-title="Световой короб &quot;Связной&quot;">
                    <img class="example-image" src="images/gallery/naruzhnaya-reklama/previews/preview-svyaznoy-noch-korob.png" alt=""/>
                </a>
                <a class="example-image-link" href="images/gallery/naruzhnaya-reklama/advokati-bukvi.jpg" data-lightbox="outdoor-set" data-title="Объемные буквы &quot;Московская коллегия адвокатов&quot;">
                    <img class="example-image" src="images/gallery/naruzhnaya-reklama/previews/preview-advokati-bukvi.png" alt=""/>
                </a>
                <a class="example-image-link" href="images/gallery/naruzhnaya-reklama/lukoil-bukvi.jpg" data-lightbox="outdoor-set" data-title="Объемные буквы &quot;Лукойл&quot;">
                    <img class="example-image" src="images/gallery/naruzhnaya-reklama/previews/preview-lukoil-bukvi.png" alt=""/>
                </a>
                <a class="example-image-link" href="images/gallery/naruzhnaya-reklama/mdm-bank-viveska.jpg" data-lightbox="outdoor-set" data-title="Вывеска &quot;МДМ Банк&quot;">
                    <img class="example-image" src="images/gallery/naruzhnaya-reklama/previews/preview-mdm-bank-viveska.png" alt=""/>
                </a>
                <a class="example-image-link" href="images/gallery/naruzhnaya-reklama/muller-viveska.jpg" data-lightbox="outdoor-set" data-title="Сложная вывеска &quot;Старина Мюллер&quot;">
                    <img class="example-image" src="images/gallery/naruzhnaya-reklama/previews/preview-muller-viveska.png" alt=""/>
                </a>
                <a class="example-image-link" href="images/gallery/naruzhnaya-reklama/schwein-fasad.jpg" data-lightbox="outdoor-set" data-title="Оформление фасада &quot;Швайн&quot;">
                    <img class="example-image" src="images/gallery/naruzhnaya-reklama/previews/preview-schwein-fasad.png" alt=""/>
                </a>
                <a class="example-image-link" href="images/gallery/naruzhnaya-reklama/shokoladnica-viveska.jpg" data-lightbox="outdoor-set" data-title="Вывеска &quot;Шоколадница&quot;">
                    <img class="example-image" src="images/gallery/naruzhnaya-reklama/previews/preview-shokoladnica-viveska.png" alt=""/>
                </a>
                <a class="example-image-link" href="images/gallery/naruzhnaya-reklama/svyaznoy-viveska.jpg" data-lightbox="outdoor-set" data-title="Вывеска &quot;Связной&quot;">
                    <img class="example-image" src="images/gallery/naruzhnaya-reklama/previews/preview-svyaznoy-viveska.png" alt=""/>
                </a>
                <a class="example-image-link" href="images/gallery/naruzhnaya-reklama/voyazh-viveska.jpg" data-lightbox="outdoor-set" data-title="Сложная вывеска и козырек &quot;Вояж&quot;">
                    <img class="example-image" src="images/gallery/naruzhnaya-reklama/previews/preview-voyazh-viveska.png" alt=""/>
                </a>
            </div>
            <div class="image-set-interior">
                <a class="example-image-link" href="images/gallery/interernaya-reklama/alrosa-stend.jpg" data-lightbox="interior-set" data-title="Стенд &quot;АЛРОСА&quot;">
                    <img class="example-image" src="images/gallery/interernaya-reklama/previews/preview-alrosa-stend.png" alt="" />
                </a>
                <a class="example-image-link" href="images/gallery/interernaya-reklama/svyaznoy-oformlenie.jpg" data-lightbox="interior-set" data-title="Комплексное оформление &quot;Связной&quot;">
                    <img class="example-image" src="images/gallery/interernaya-reklama/previews/preview-svyaznoy-oformlenie.png" alt="" />
                </a>
                <a class="example-image-link" href="images/gallery/interernaya-reklama/woolstreet-korob.jpg" data-lightbox="interior-set" data-title="Световой короб &quot;WoolStreet&quot;">
                    <img class="example-image" src="images/gallery/interernaya-reklama/previews/preview-woolstreet-korob.png" alt="" />
                </a>
                <a class="example-image-link" href="images/gallery/interernaya-reklama/start-master-korob.jpg" data-lightbox="interior-set" data-title="Световой короб &quot;Старт Мастер&quot;">
                    <img class="example-image" src="images/gallery/interernaya-reklama/previews/preview-start-master-korob.png" alt="" />
                </a>
                <a class="example-image-link" href="images/gallery/interernaya-reklama/shokoladnica-viveska.jpg" data-lightbox="interior-set" data-title="Вывеска &quot;Шоколадница&quot;">
                    <img class="example-image" src="images/gallery/interernaya-reklama/previews/preview-shokoladnica-viveska.png" alt="" />
                </a>
            </div>
            <div class="image-set-tent">
                <a class="example-image-link" href="images/gallery/tentovie-konstrukcii/venecia-kafe.jpg" data-lightbox="tent-set" data-title="Летнее кафе &quot;Венеция&quot;">
                    <img class="example-image" src="images/gallery/tentovie-konstrukcii/previews/preview-venecia-kafe.png" alt="" />
                </a>
                <a class="example-image-link" href="images/gallery/tentovie-konstrukcii/heineken-kafe.jpg" data-lightbox="tent-set" data-title="Летнее кафе &quot;Heineken&quot;">
                    <img class="example-image" src="images/gallery/tentovie-konstrukcii/previews/preview-heineken-kafe.png" alt="" />
                </a>
                <a class="example-image-link" href="images/gallery/tentovie-konstrukcii/il-patio-kafe.jpg" data-lightbox="tent-set" data-title="Летнее кафе &quot;IL-ПАТИО&quot;">
                    <img class="example-image" src="images/gallery/tentovie-konstrukcii/previews/preview-il-patio-kafe.png" alt="" />
                </a>
                <a class="example-image-link" href="images/gallery/tentovie-konstrukcii/shokoladnica-kafe.jpg" data-lightbox="tent-set" data-title="Летнее кафе &quot;Шоколадница&quot;">
                    <img class="example-image" src="images/gallery/tentovie-konstrukcii/previews/preview-shokoladnica-kafe.png" alt="" />
                </a>
                <a class="example-image-link" href="images/gallery/tentovie-konstrukcii/americanskiy-kafe.jpg" data-lightbox="tent-set" data-title="Летнее кафе &quot;АмериКанский бар и гриль&quot;">
                    <img class="example-image" src="images/gallery/tentovie-konstrukcii/previews/preview-americanskiy-kafe.png" alt="" />
                </a>
                <a class="example-image-link" href="images/gallery/tentovie-konstrukcii/bochkarev-kafe.jpg" data-lightbox="tent-set" data-title="Летнее кафе &quot;Бочкарёв&quot;">
                    <img class="example-image" src="images/gallery/tentovie-konstrukcii/previews/preview-bochkarev-kafe.png" alt="" />
                </a>
                <a class="example-image-link" href="images/gallery/tentovie-konstrukcii/dejavu-markizi.jpg" data-lightbox="tent-set" data-title="Маркизы для кафе &quot;Дежавю&quot;">
                    <img class="example-image" src="images/gallery/tentovie-konstrukcii/previews/preview-dejavu-markizi.png" alt="" />
                </a>
                <a class="example-image-link" href="images/gallery/tentovie-konstrukcii/fridays-kafe.jpg" data-lightbox="tent-set" data-title="Летнее кафе &quot;Fridays&quot;">
                    <img class="example-image" src="images/gallery/tentovie-konstrukcii/previews/preview-fridays-kafe.png" alt="" />
                </a>
                <a class="example-image-link" href="images/gallery/tentovie-konstrukcii/gulyaka-kafe.jpg" data-lightbox="tent-set" data-title="Летнее кафе &quot;Гуляка&quot;">
                    <img class="example-image" src="images/gallery/tentovie-konstrukcii/previews/preview-gulyaka-kafe.png" alt="" />
                </a>
                <a class="example-image-link" href="images/gallery/tentovie-konstrukcii/kofe-tun-zonti.jpg" data-lightbox="tent-set" data-title="Зонты для кафе &quot;КофеТун СушиТун&quot;">
                    <img class="example-image" src="images/gallery/tentovie-konstrukcii/previews/preview-kofe-tun-zonti.png" alt="" />
                </a>
                <a class="example-image-link" href="images/gallery/tentovie-konstrukcii/planeta-sushi-kafe.jpg" data-lightbox="tent-set" data-title="Летнее кафе &quot;Планета Суши&quot;">
                    <img class="example-image" src="images/gallery/tentovie-konstrukcii/previews/preview-planeta-sushi-kafe.png" alt="" />
                </a>
                <a class="example-image-link" href="images/gallery/tentovie-konstrukcii/prime-kafe.jpg" data-lightbox="tent-set" data-title="Летнее кафе &quot;Прайм&quot;">
                    <img class="example-image" src="images/gallery/tentovie-konstrukcii/previews/preview-prime-kafe.png" alt="" />
                </a>
                <a class="example-image-link" href="images/gallery/tentovie-konstrukcii/sbarro2-kafe.jpg" data-lightbox="tent-set" data-title="Летнее кафе &quot;Сбарро&quot;">
                    <img class="example-image" src="images/gallery/tentovie-konstrukcii/previews/preview-sbarro2-kafe.png" alt="" />
                </a>
                <a class="example-image-link" href="images/gallery/tentovie-konstrukcii/sbarro-kafe.jpg" data-lightbox="tent-set" data-title="Летнее кафе &quot;Сбарро&quot;">
                    <img class="example-image" src="images/gallery/tentovie-konstrukcii/previews/preview-sbarro-kafe.png" alt="" />
                </a>
                <a class="example-image-link" href="images/gallery/tentovie-konstrukcii/vabi-sabi-kafe.jpg" data-lightbox="tent-set" data-title="Летнее кафе &quot;Ваби-Саби&quot;">
                    <img class="example-image" src="images/gallery/tentovie-konstrukcii/previews/preview-vabi-sabi-kafe.png" alt="" />
                </a>
                <a class="example-image-link" href="images/gallery/tentovie-konstrukcii/venecia2-kafe.jpg" data-lightbox="tent-set" data-title="Летнее кафе &quot;Венеция&quot;">
                    <img class="example-image" src="images/gallery/tentovie-konstrukcii/previews/preview-venecia2-kafe.png" alt="" />
                </a>
                <a class="example-image-link" href="images/gallery/tentovie-konstrukcii/viaggo-kafe.jpg" data-lightbox="tent-set" data-title="Летнее кафе &quot;Viaggio&quot;">
                    <img class="example-image" src="images/gallery/tentovie-konstrukcii/previews/preview-viaggo-kafe.png" alt="" />
                </a>
                <a class="example-image-link" href="images/gallery/tentovie-konstrukcii/zen-kofe-markizi.jpg" data-lightbox="tent-set" data-title="Летнее кафе &quot;Зен Кофе&quot;">
                    <img class="example-image" src="images/gallery/tentovie-konstrukcii/previews/preview-zen-kofe-markizi.png" alt="" />
                </a>
                <a class="example-image-link" href="images/gallery/tentovie-konstrukcii/zhitnaya-10-kafe.jpg" data-lightbox="tent-set" data-title="Летнее кафе &quot;Житная 10&quot;">
                    <img class="example-image" src="images/gallery/tentovie-konstrukcii/previews/preview-zhitnaya-10-kafe.png" alt="" />
                </a>
            </div>
            <div class="image-set-design">
                <a class="example-image-link" href="images/gallery/design/reception-interior-disayn.jpg" data-lightbox="design-set" data-title="">
                    <img class="example-image" src="images/gallery/design/previews/preview-reception-interior.png" alt="" />
                </a>
                <a class="example-image-link" href="images/gallery/design/shokoladnica-disayn.jpg" data-lightbox="design-set" data-title="">
                    <img class="example-image" src="images/gallery/design/previews/preview-shokoladnica-desain.png" alt="" />
                </a>
            </div>
        </div>
    </div>
@stop