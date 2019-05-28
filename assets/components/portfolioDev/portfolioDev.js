import './portfolioDev.scss';
import $ from 'jquery';
import mixitup from 'mixitup';

$(window).on('resize load', paddingResize);

function paddingResize() {
    let pt = $('.header').outerHeight();
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

    }, 2000);
});

var allGood = true;

$('.button__color_red').click(function () {
    $(".portfolioDev__image").addClass("portfolioDev__image_active");
    $(".portfolioDev__content").addClass("portfolioDev__content_active");
    $(".header__burger").addClass("header__burger_close");
    $(".header__close").addClass("header__close_active");
    $(".portfolioDev").addClass("portfolioDev_active");
    allGood = false;
});

$('.header__close').click(function () {
    $(".header__burger").removeClass("header__burger_close");
    $(".header__close").removeClass("header__close_active");
    $(".portfolioDev__image").removeClass("portfolioDev__image_active");
    $(".portfolioDev__content").removeClass("portfolioDev__content_active");
    $(".portfolioDev").removeClass("portfolioDev_active");
    allGood = true;
});
