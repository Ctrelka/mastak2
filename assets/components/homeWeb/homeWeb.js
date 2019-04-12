import './homeWeb.scss';
import $ from 'jquery';

$(window).on('resize load', paddingResize);

function paddingResize() {
    let pt = $('.header').outerHeight();
    console.log(pt);
    $('.homeWeb').css({
        'padding-top': pt
    });
}

$( document ).ready(function() {

   
});


