import './page404.scss';
import $ from 'jquery';

$(window).on('resize', paddingResize);

function paddingResize() {
    let pt = $('.header').outerHeight();
    console.log(pt);
    $('.page404').css({
        'padding-top': pt
    });
}