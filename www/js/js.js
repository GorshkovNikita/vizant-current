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
    //$(elem).addClass("left-menu-item-current");
    elem.style.height = "170px";
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

function anim_arrow_up(elem) {
    //$(elem).removeClass("left-menu-item-current");
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
    $('#popup-form-order').hide();
    $('#hide-layout').hide();
    $('#order-button, #order-text-button').click(function() {
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
    $('#popup-form-tel').hide();
    $('#hide-layout').hide();
    $('#mphone-text-button').click(function() {
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
    $('#popup-form-mail').hide();
    $('#hide-layout').hide();
    $('#mail-text-button').click(function() {
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

/* Форма консультации */

$(function() {
    $('#popup-form-tel').hide();
    $('#hide-layout').hide();
    $('#cons-button').click(function() {
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
    $('#popup-form-mail').hide();
    $('#hide-layout').hide();
    $('#napishite-nam').click(function() {
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