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
    $('.types__item').each(function () {
        let heightItem = $(this).height();
        let cardItem = $(this).offset().top;
        let scroll = $(window).scrollTop();

        if (scroll > (cardItem - heightItem)) {
            $(this).children('.types__item-title').addClass('types__item-title_active');
            $(this).children('.types__item-description').animate({
                opacity: 1
            }, 1000);
            $(this).children('.types__list').addClass('types__list_active');
        }
    })
});















