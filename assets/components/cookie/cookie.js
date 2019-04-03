import './cookie.scss';
import $ from 'jquery';

$(window).on('resize load', paddingResize);

function paddingResize() {
    let pt = $('.header').outerHeight();
    console.log(pt);
    $('.cookie').css({
        'padding-top': pt
    });
}