import './welcome.scss';
import $ from 'jquery';

$(window).on('resize load', paddingResize);

function paddingResize() {
    let pt = $('.header').outerHeight();
    console.log(pt);
    $('.welcome').css({
        'padding-top': pt
    });
}

$('.welcome__item').click(function () {
        $(this)
            .addClass('welcome__item_active')
            .siblings()
            .removeClass('welcome__item_active')
            .closest('.welcome')
            .find('.welcome__tab')
            .removeClass('welcome__tab_active')
            .eq($(this).index())
            .addClass('welcome__tab_active');
        clearInterval(intervalSecond);
        clearInterval(intervalFirst);
    }
)

// $('.welcome__item_first').click(function () {
//     $('.welcome__line').addClass('welcome__line_reverse');
//     $('.welcome__line').removeClass('welcome__line_active');
// })
//
// $('.welcome__item_second').click(function () {
//     $('.welcome__line').addClass('welcome__line_active');
//     $('.welcome__line').removeClass('welcome__line_reverse');
// })
//


function AnimItemFirst() {
    setInterval(function () {
        $('.welcome__item_second')
            .addClass('welcome__item_active').siblings().removeClass('welcome__item_active')
            .closest('.welcome').find('.welcome__tab').removeClass('welcome__tab_active').eq($(this).index()).addClass('welcome__tab_active');
    }, 6700);

    $('.welcome__line')
        .addClass('welcome__line_active')
        .removeClass('welcome__line_reverse');
}

AnimItemFirst();

function AnimItemSecond() {
    setInterval(function () {
        $('.welcome__item_first')
            .addClass('welcome__item_active').siblings().removeClass('welcome__item_active')
            .closest('.welcome').find('.welcome__tab').removeClass('welcome__tab_active').eq($(this).index()).addClass('welcome__tab_active');
    }, 6700);


    $('.welcome__line')
        .addClass('welcome__line_reverse')
        .removeClass('welcome__line_active');
}

let intervalSecond = setInterval(AnimItemSecond, 7000);
let intervalFirst = setInterval(AnimItemFirst, 14000);