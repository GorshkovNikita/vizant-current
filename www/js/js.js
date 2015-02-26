$(function() {
    $('nav.menu1 ul li').each(function () {
        if (this.getElementsByTagName("a")[0].href == document.location.href) {
            $(this).addClass("menu1-item-current").siblings().removeClass("menu1-item-current");
            $(this).removeClass("menu1-item");
            /*event.preventDefault();*/
        }
    });
})

function anim_arrow_down(elem) {
    if ((elem.children[0].children[0].getAttribute('src') != 'http://vizant.ru/images/arrow-down.png') && (elem.children[0].children[0].getAttribute('src') != 'http://www.vizant.ru/images/arrow-down.png')) {
        if ($(elem).attr('id') == "remont-item")
            elem.style.height = "220px";
        else if ($(elem).attr('id') == "disayn-item")
            elem.style.height = "140px";
        else if ($(elem).attr('id') == "tent-item")
            elem.style.height = "90px";
        else if ($(elem).attr('id') == "ograzhdenia-item")
            elem.style.height = "55px";
        else if ($(elem).attr('id') == "zonti-item")
            elem.style.height = "40px";
        else if ($(elem).attr('id') == "ploshadki-item")
            elem.style.height = "40px";
        else
            elem.style.height = "160px";
        elem.style.webkitTransition = "500ms";
        elem.style.oTransition = "500ms";
        elem.style.mozTransition = "500ms";
        elem.style.msTransition = "500ms";
        elem.style.khtmlTransition = "500ms";
        elem.style.Transition = "500ms";
        $(elem.children[0].children[0]).attr('src', $(elem.children[0].children[0]).attr('src').replace('arrow-right.png', 'arrow-down.png'));
        elem.children[0].children[0].style.webkitTransition = "500ms";
        elem.children[0].children[0].style.webkitTransform = "rotate(90deg)";
        elem.children[0].children[0].style.oTransition = "500ms";
        elem.children[0].children[0].style.oTransform = "rotate(90deg)";
        elem.children[0].children[0].style.mozTransition = "500ms";
        elem.children[0].children[0].style.mozTransform = "rotate(90deg)";
        elem.children[0].children[0].style.msTransition = "500ms";
        elem.children[0].children[0].style.msTransform = "rotate(90deg)";
        elem.children[0].children[0].style.khtmlTransition = "500ms";
        elem.children[0].children[0].style.khtmlTransform = "rotate(90deg)";
        elem.children[0].children[0].style.Transition = "500ms";
        elem.children[0].children[0].style.Transform = "rotate(90deg)";
        if ($(elem.children[1]).css('display') == "none") {
            $(elem.children[1]).slideDown(500);
        }
        menuUp();
    }
}

function anim_arrow_up(elem) {
    if ((elem.children[0].children[0].getAttribute('src') != 'http://vizant.ru/images/arrow-right.png') && (elem.children[0].children[0].getAttribute('src') != 'http://www.vizant.ru/images/arrow-right.png')) {
        if ($(elem).attr('id') == "ograzhdenia-item")
            elem.style.height = "55px";
        else
            elem.style.height = "40px";
        elem.style.webkitTransition = "500ms";
        elem.style.oTransition = "500ms";
        elem.style.mozTransition = "500ms";
        elem.style.msTransition = "500ms";
        elem.style.khtmlTransition = "500ms";
        elem.style.appleTransition = "500ms";
        elem.style.Transition = "500ms";
        $(elem.children[0].children[0]).attr('src', $(elem.children[0].children[0]).attr('src').replace('arrow-down.png', 'arrow-right.png'));
        elem.children[0].children[0].style.webkitTransition = "500ms";
        elem.children[0].children[0].style.webkitTransform = "rotate(0deg)";
        elem.children[0].children[0].style.oTransition = "500ms";
        elem.children[0].children[0].style.oTransform = "rotate(0deg)";
        elem.children[0].children[0].style.mozTransition = "500ms";
        elem.children[0].children[0].style.mozTransform = "rotate(0deg)";
        elem.children[0].children[0].style.msTransition = "500ms";
        elem.children[0].children[0].style.msTransform = "rotate(0deg)";
        elem.children[0].children[0].style.khtmlTransition = "500ms";
        elem.children[0].children[0].style.khtmlTransform = "rotate(0deg)";
        elem.children[0].children[0].style.Transition = "500ms";
        elem.children[0].children[0].style.Transform = "rotate(0deg)";
        if (!($(elem).hasClass('left-menu-item-current'))) {
            if ($(elem.children[1]).css('display') != "none") {
                $(elem.children[1]).hide();
            }
        }
        menuDown();
    }
}

function RedirectKafe(elem) {
    document.location.href = "http://vizant.ru/galereya?type=kafe";
}

function RedirectZonti(elem) {
    document.location.href = "http://vizant.ru/galereya?type=zonti";
}

function param(Name)
{
    var Params = location.search.substring(1).split("&");
    var variable = "";
    for (var i = 0; i < Params.length; i++)
    {
        if(Params[i].split("=")[0] == Name)
        {
            if (Params[i].split("=").length > 1)
                variable = Params[i].split("=")[1];
            return variable;
        }
    }
    return "";
}

function ShowOutdoor(elem) {
    $('.image-set-outdoor').css('display', 'block');
    $('.image-set-umbrellafence').css('display', 'none');
    $('.image-set-tent').css('display', 'none');
    $('.image-set-design').css('display', 'none');
    $('.gallery-control-outdoor').css('color', 'orange');
    $('.gallery-control-umbrellafence').css('color', '#422E18');
    $('.gallery-control-tent').css('color', '#422E18');
    $('.gallery-control-design').css('color', '#422E18');
}

/*function ShowInterior(elem) {
    $('.image-set-outdoor').css('display', 'none');
    $('.image-set-interior').css('display', 'block');
    $('.image-set-tent').css('display', 'none');
    $('.image-set-design').css('display', 'none');
    $('.gallery-control-outdoor').css('color', '#422E18');
    $('.gallery-control-interior').css('color', 'orange');
    $('.gallery-control-tent').css('color', '#422E18');
    $('.gallery-control-design').css('color', '#422E18');
}*/

function ShowTent(elem) {
    $('.image-set-outdoor').css('display', 'none');
    $('.image-set-umbrellafence').css('display', 'none');
    $('.image-set-tent').css('display', 'block');
    $('.image-set-design').css('display', 'none');
    $('.gallery-control-outdoor').css('color', '#422E18');
    $('.gallery-control-umbrellafence').css('color', '#422E18');
    $('.gallery-control-tent').css('color', 'orange');
    $('.gallery-control-design').css('color', '#422E18');
}

function ShowUmbrellaFence(elem) {
    $('.image-set-outdoor').css('display', 'none');
    $('.image-set-umbrellafence').css('display', 'block');
    $('.image-set-tent').css('display', 'none');
    $('.image-set-design').css('display', 'none');
    $('.gallery-control-outdoor').css('color', '#422E18');
    $('.gallery-control-umbrellafence').css('color', 'orange');
    $('.gallery-control-tent').css('color', '#422E18');
    $('.gallery-control-design').css('color', '#422E18');
}

function ShowDesign(elem) {
    $('.image-set-outdoor').css('display', 'none');
    $('.image-set-umbrellafence').css('display', 'none');
    $('.image-set-tent').css('display', 'none');
    $('.image-set-design').css('display', 'block');
    $('.gallery-control-outdoor').css('color', '#422E18');
    $('.gallery-control-umbrellafence').css('color', '#422E18');
    $('.gallery-control-tent').css('color', '#422E18');
    $('.gallery-control-design').css('color', 'orange');
}

/**
 * Возвращает обработчик,
 * который вызывает handler при реальном уходе с элемента
 * использование: elem.onmouseout = handleMouseLeave(function(e) { .. })
 */
function handleMouseLeave(handler) {

    return function(e) {
        e = e || event; // IE
        var toElement = e.relatedTarget || e.toElement; // IE

        // проверяем, мышь ушла на элемент внутри текущего?
        while (toElement && toElement !== this) {
            toElement = toElement.parentNode;
        }

        if (toElement == this) { // да, мы всё еще внутри родителя
            return; // мы перешли с родителя на потомка, лишнее событие
        }

        return handler.call(this, e);
    };
}

function handleMouseEnter(handler) {

    return function(e) {
        e = e || event; // IE
        var toElement = e.relatedTarget || e.srcElement; // IE

        // проверяем, мышь пришла с элемента внутри текущего?
        while (toElement && toElement !== this) {
            toElement = toElement.parentNode;
        }

        if (toElement == this) { // да, мышь перешла изнутри родителя
            return; // мы перешли на родителя из потомка, лишнее событие
        }

        return handler.call(this, e);
    };
}

/* Форма заказа */
$(function() {
    $('.order-form-open').click(function() {
        $('#hide-layout, #popup-form-order').fadeIn(300);
    })
    $('.form-order-close, #hide-layout').click(function() {
        $('#hide-layout, #popup-form-order').fadeOut(300);
    })
    $('#popup-form-order').css({
        left: ($(window).width() - $('#popup-form-order').width()) / 2 + 'px',
        top: ($(window).height() - $('#popup-form-order').height()) / 2 + 'px'
    })
    $('.form-order-close').css({
        left: ($(window).width() - $('#popup-form-order').width()) / 2 + 765 + 'px',
        top: ($(window).height() - $('#popup-form-order').height()) / 2 - 15 + 'px'
    })
})

/* Форма заказа обратного звонка */
$(function() {
    $('.callback-form-open').click(function() {
        $('#hide-layout, #popup-form-tel').fadeIn(300);
    })
    $('.form-tel-close, #hide-layout').click(function() {
        $('#hide-layout, #popup-form-tel').fadeOut(300);
    })
    $('#popup-form-tel').css({
        left: ($(window).width() - $('#popup-form-tel').width()) / 2 + 'px',
        top: ($(window).height() - $('#popup-form-tel').height()) / 2 + 'px'
    })
    $('.form-tel-close').css({
        left: ($(window).width() - $('#popup-form-tel').width()) / 2 + 521 + 'px',
        top: ($(window).height() - $('#popup-form-tel').height()) / 2 - 15 + 'px'
    })
})

/* Форма отправки сообщения */
$(function() {
    $('.mail-form-open').click(function() {
        $('#hide-layout, #popup-form-mail').fadeIn(300);
    })
    $('.form-mail-close, #hide-layout').click(function() {
        $('#hide-layout, #popup-form-mail').fadeOut(300);
    })
    $('#popup-form-mail').css({
        left: ($(window).width() - $('#popup-form-mail').width()) / 2 + 'px',
        top: ($(window).height() - $('#popup-form-mail').height()) / 2 + 'px'
    })
    $('.form-mail-close').css({
        left: ($(window).width() - $('#popup-form-mail').width()) / 2 + 765 + 'px',
        top: ($(window).height() - $('#popup-form-mail').height()) / 2 - 15 + 'px'
    })
})

/* Открытие пунктов меню */
$(function() {
    var currentLoacation = document.location.href;
    menuDown();
    if (currentLoacation.indexOf('zonti') != -1) {
        $('#zonti-item').addClass("left-menu-item-current").siblings().removeClass("left-menu-item-current");
    }
    else if (currentLoacation.indexOf('ograzhdenia') != -1) {
        $('#ograzhdenia-item').addClass("left-menu-item-current").siblings().removeClass("left-menu-item-current");
    }
    else if (currentLoacation.indexOf('disayna') != -1) {
        $('#disayn-item').addClass("left-menu-item-current").siblings().removeClass("left-menu-item-current");
    }
    else if (currentLoacation.indexOf('naruzhnaya') != -1) {
        $('#naruzh-item').addClass("left-menu-item-current").siblings().removeClass("left-menu-item-current");
    }
    else if (currentLoacation.indexOf('interernaya') != -1) {
        $('#interior-item').addClass("left-menu-item-current").siblings().removeClass("left-menu-item-current");
    }
    else if (currentLoacation.indexOf('tentovie') != -1) {
        $('#tent-item').addClass("left-menu-item-current").siblings().removeClass("left-menu-item-current");
    }
    else if (currentLoacation.indexOf('remont-montage') != -1) {
        $('#remont-item').addClass("left-menu-item-current").siblings().removeClass("left-menu-item-current");
    }
    else if (currentLoacation.indexOf('ploshadki') != -1) {
        $('#ploshadki-item').addClass("left-menu-item-current").siblings().removeClass("left-menu-item-current");
    }
})

function menuDown() {
    var currentLoacation = document.location.href;
    if (currentLoacation.indexOf('zonti') != -1) {
        Down(document.getElementById('zonti-item'));
        $('#zonti-item').css('background-color', '#313638');
        $('#zonti-item a span').css('color', 'white');
    }
    else if (currentLoacation.indexOf('ograzhdenia') != -1) {
        Down(document.getElementById('ograzhdenia-item'));
        $('#ograzhdenia-item').css('background-color', '#313638');
        $('#ograzhdenia-item a span').css('color', 'white');
    }
    else if (currentLoacation.indexOf('disayna') != -1) {
        Down(document.getElementById('disayn-item'));
        $('#disayn-item').css('background-color', '#313638');
        $('#disayn-item a span').css('color', 'white');
    }
    else if (currentLoacation.indexOf('naruzhnaya') != -1) {
        Down(document.getElementById('naruzh-item'));
        $('#naruzh-item').css('background-color', '#313638');
        $('#naruzh-item a span').css('color', 'white');
    }
    else if (currentLoacation.indexOf('interernaya') != -1) {
        Down(document.getElementById('interior-item'));
        $('#interior-item').css('background-color', '#313638');
        $('#interior-item a span').css('color', 'white');
    }
    else if (currentLoacation.indexOf('tentovie') != -1) {
        Down(document.getElementById('tent-item'));
        $('#tent-item').css('background-color', '#313638');
        $('#tent-item a span').css('color', 'white');
    }
    else if (currentLoacation.indexOf('remont-montage') != -1) {
        Down(document.getElementById('remont-item'));
        $('#remont-item').css('background-color', '#313638');
        $('#remont-item a span').css('color', 'white');
    }
    else if (currentLoacation.indexOf('ploshadki') != -1) {
        Down(document.getElementById('ploshadki-item'));
        $('#ploshadki-item').css('background-color', '#313638');
        $('#ploshadki-item a span').css('color', 'white');
    }
}

function menuUp() {
    var currentLoacation = document.location.href;
    if (currentLoacation.indexOf('zonti') != -1) {
        Up(document.getElementById('zonti-item'));
        $('#zonti-item').css('background-color', '');
        $('#zonti-item a span').css('color', '');
    }
    else if (currentLoacation.indexOf('ograzhdenia') != -1) {
        Up(document.getElementById('ograzhdenia-item'));
        $('#ograzhdenia-item').css('background-color', '');
        $('#ograzhdenia-item a span').css('color', '');
    }
    else if (currentLoacation.indexOf('disayna') != -1) {
        Up(document.getElementById('disayn-item'));
        $('#disayn-item').css('background-color', '');
        $('#disayn-item a span').css('color', '');
    }
    else if (currentLoacation.indexOf('naruzhnaya') != -1) {
        Up(document.getElementById('naruzh-item'));
        $('#naruzh-item').css('background-color', '');
        $('#naruzh-item a span').css('color', '');
    }
    else if (currentLoacation.indexOf('interernaya') != -1) {
        Up(document.getElementById('interior-item'));
        $('#interior-item').css('background-color', '');
        $('#interior-item a span').css('color', '');
    }
    else if (currentLoacation.indexOf('tentovie') != -1) {
        Up(document.getElementById('tent-item'));
        $('#tent-item').css('background-color', '');
        $('#tent-item a span').css('color', '');
    }
    else if (currentLoacation.indexOf('remont-montage') != -1) {
        Up(document.getElementById('remont-item'));
        $('#remont-item').css('background-color', '');
        $('#remont-item a span').css('color', '');
    }
    else if (currentLoacation.indexOf('ploshadki') != -1) {
        Up(document.getElementById('ploshadki-item'));
        $('#ploshadki-item').css('background-color', '');
        $('#ploshadki-item a span').css('color', '');
    }
}

function Up(elem) {
    if ($(elem).attr('id') == "ograzhdenia-item")
        elem.style.height = "55px";
    else
        elem.style.height = "40px";
    elem.style.webkitTransition = "500ms";
    elem.style.oTransition = "500ms";
    elem.style.mozTransition = "500ms";
    elem.style.msTransition = "500ms";
    elem.style.khtmlTransition = "500ms";
    elem.style.appleTransition = "500ms";
    elem.style.Transition = "500ms";
    $(elem.children[0].children[0]).attr('src', $(elem.children[0].children[0]).attr('src').replace('arrow-down.png', 'arrow-right.png'));
    elem.children[0].children[0].style.webkitTransition = "500ms";
    elem.children[0].children[0].style.webkitTransform = "rotate(0deg)";
    elem.children[0].children[0].style.oTransition = "500ms";
    elem.children[0].children[0].style.oTransform = "rotate(0deg)";
    elem.children[0].children[0].style.mozTransition = "500ms";
    elem.children[0].children[0].style.mozTransform = "rotate(0deg)";
    elem.children[0].children[0].style.msTransition = "500ms";
    elem.children[0].children[0].style.msTransform = "rotate(0deg)";
    elem.children[0].children[0].style.khtmlTransition = "500ms";
    elem.children[0].children[0].style.khtmlTransform = "rotate(0deg)";
    elem.children[0].children[0].style.Transition = "500ms";
    elem.children[0].children[0].style.Transform = "rotate(0deg)";
    if ($(elem.children[1]).css('display') != "none") {
        $(elem.children[1]).hide();
    }
}

function Down(elem) {
    if ($(elem).attr('id') == "remont-item")
        elem.style.height = "220px";
    else if ($(elem).attr('id') == "disayn-item")
        elem.style.height = "140px";
    else if ($(elem).attr('id') == "tent-item")
        elem.style.height = "90px";
    else if ($(elem).attr('id') == "ograzhdenia-item")
        elem.style.height = "55px";
    else if ($(elem).attr('id') == "zonti-item")
        elem.style.height = "40px";
    else if ($(elem).attr('id') == "ploshadki-item")
        elem.style.height = "40px";
    else
        elem.style.height = "160px";
    elem.style.webkitTransition = "500ms";
    elem.style.oTransition = "500ms";
    elem.style.mozTransition = "500ms";
    elem.style.msTransition = "500ms";
    elem.style.khtmlTransition = "500ms";
    elem.style.Transition = "500ms";
    $(elem.children[0].children[0]).attr('src', $(elem.children[0].children[0]).attr('src').replace('arrow-right.png', 'arrow-down.png'));
    elem.children[0].children[0].style.webkitTransition = "500ms";
    elem.children[0].children[0].style.webkitTransform = "rotate(90deg)";
    elem.children[0].children[0].style.oTransition = "500ms";
    elem.children[0].children[0].style.oTransform = "rotate(90deg)";
    elem.children[0].children[0].style.mozTransition = "500ms";
    elem.children[0].children[0].style.mozTransform = "rotate(90deg)";
    elem.children[0].children[0].style.msTransition = "500ms";
    elem.children[0].children[0].style.msTransform = "rotate(90deg)";
    elem.children[0].children[0].style.khtmlTransition = "500ms";
    elem.children[0].children[0].style.khtmlTransform = "rotate(90deg)";
    elem.children[0].children[0].style.Transition = "500ms";
    elem.children[0].children[0].style.Transform = "rotate(90deg)";
    if ($(elem.children[1]).css('display') == "none") {
        $(elem.children[1]).slideDown(500);
    }
}