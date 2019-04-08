import './contact.scss';
import $ from 'jquery';

$(window).on('resize load', paddingResize);

function paddingResize() {
    let pt = $('.header').outerHeight();
    console.log(pt);
    $('.contactPage').css({
        'padding-top': pt
    });
}

$(document).ready(function() {
    $('.contactPage__info-adrress-tabs-item:first-child').addClass("contactPage__info-adrress-tabs-item_active");
    $('.contactPage__info-adrress-content:nth-child(1)').addClass("contactPage__info-adrress-content_active");
});



$('.contactPage__info-adrress-tabs-item').click(function () {
    $(this)
        .addClass('contactPage__info-adrress-tabs-item_active').siblings().removeClass('contactPage__info-adrress-tabs-item_active')
        .closest('.contactPage__info').find('.contactPage__info-adrress-content').removeClass('contactPage__info-adrress-content_active').eq($(this).index()).addClass('contactPage__info-adrress-content_active');
});
