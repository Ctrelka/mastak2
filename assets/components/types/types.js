import './types.scss';
import $ from 'jquery';

$(window).on('resize load', paddingResize);

function paddingResize() {
    let pt = $('.header').outerHeight();
    $('.types').css({
        'padding-top': pt
    });
}

$(window).scroll(function () {
    $('.types__item').each(function (i, el) {
        let cardItem = $(this).offset().top;
        let scroll = $(window).scrollTop();
        let sizeTop = 0;

        if ($(window).width() >= 300) {
            sizeTop = 400;
        }

        if ($(window).width() >= 750) {
            sizeTop = 750;
        }

        if ($(window).width() >= 1000) {
            sizeTop = 600;
        }

        if ($(window).width() >= 1200) {
            sizeTop = 550;
        }

        if ($(window).width() >= 1400) {
            sizeTop = 650;
        }

        if ($(window).width() > 1900) {
            sizeTop = 750;
        }

        if ($(window).width() >= 2500) {
            sizeTop = 950;
        }

        if (scroll > (cardItem - sizeTop)) {
            setTimeout(function () {
                $(el).children('.types__item-title').addClass("types__item-title_active");
                $(el).children('.types__item-description').animate({
                    opacity: 1
                }, 1000);
                $(el).children('.types__list').addClass('types__list_active');
            }, 500 + (i * 500));
        }
    })
});

















