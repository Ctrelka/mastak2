import './portfolioDev.scss';
import $ from 'jquery';

$(window).on('resize load', paddingResize);

function paddingResize() {
    let pt = $('.header').outerHeight();
    console.log(pt);
    $('.portfolioDev').css({
        'padding-top': pt
    });
}