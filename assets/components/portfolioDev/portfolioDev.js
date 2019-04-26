import './portfolioDev.scss';
import $ from 'jquery';
import mixitup from 'mixitup';

$(window).on('resize load', paddingResize);

function paddingResize() {
    let pt = $('.header').outerHeight();
    console.log(pt);
    $('.portfolioDev').css({
        'padding-top': pt
    });
}

$( document ).ready(function() {
    setTimeout(function () {
        $(".portfolioDev__image").addClass("portfolioDev__image_active");
        $(".portfolioDev__content").addClass("portfolioDev__content_active");
        $(".header__burger").addClass("header__burger_close");
        $(".header__close").addClass("header__close_active");
        $(".portfolioDev").addClass("portfolioDev_active");

    }, 1000);
});

