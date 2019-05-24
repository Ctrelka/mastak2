import './portfolioDesign.scss';
import $ from 'jquery';
import mixitup from 'mixitup';

$(window).on('resize load', paddingResize);

function paddingResize() {
    let pt = $('.header').outerHeight();
    console.log(pt);
    $('.portfolioDesign').css({
        'padding-top': pt
    });
}

$(document).ready(function () {
    setTimeout(function () {
        $(".portfolioDesign__image").addClass("portfolioDesign__image_active");
        $(".portfolioDesign__content").addClass("portfolioDesign__content_active");
        $(".header__burger").addClass("header__burger_close");
        $(".header__close").addClass("header__close_active");
        $(".portfolioDesign").addClass("portfolioDesign_active");

    }, 2000);
});

var allGood = true;


$('.button__color_grey').click(function () {
    $(".portfolioDesign__image").addClass("portfolioDesign__image_active");
    $(".portfolioDesign__content").addClass("portfolioDesign__content_active");
    $(".header__burger").addClass("header__burger_close");
    $(".header__close").addClass("header__close_active");
    $(".portfolioDesign").addClass("portfolioDesign_active");
    allGood = false;
});


$('.header__close').click(function () {
    $(".header__burger").removeClass("header__burger_close");
    $(".header__close").removeClass("header__close_active");
    $(".portfolioDesign__image").removeClass("portfolioDesign__image_active");
    $(".portfolioDesign__content").removeClass("portfolioDesign__content_active");
    $(".portfolioDesign").removeClass("portfolioDesign_active");


    allGood = true;
});