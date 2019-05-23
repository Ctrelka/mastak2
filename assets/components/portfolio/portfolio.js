import './portfolio.scss';
import $ from 'jquery';
import Swiper from 'swiper';
import mixitup from 'mixitup';


var swiper = new Swiper('.portfolio__portfolio-container', {
    slidesPerView: 'auto',
    spaceBetween: 0,
    direction: 'horizontal',
    forceToAxis: 'true',
    // centerInsufficientSlides: true,
    slidesOffsetAfter: 800,
    preventClicksPropagation: true,
    // freeModeSticky: true,
    slideToClickedSlide: true,
    mousewheel: {
        invert: true,
    },
    keyboard: {
        enabled: true,
        onlyInViewport: false,
    },
    parallax: true,
    speed: 600
});


swiper.on('slideChange', function () {
    $(".portfolio__slide-menu").addClass("portfolio__slide-menu_active");
    // $(".portfolio__portfolio-item").addClass("portfolio__portfolio-item_width");
    $(".portfolio__slide-menu-list-item").removeClass("portfolio__slide-menu-list-item_active-menu");
    $(".portfolio__slide-menu-list").removeClass("portfolio__slide-menu-list_active");
    $(".portfolio__slide-menu").removeClass("portfolio__slide-menu_click");
    $(".portfolio__title").removeClass("portfolio__title_active");

});


// swiper.on('tap', function () {
//     $(".portfolio__portfolio-item").click(function (e) {
//         e.preventDefault();
//         let portfolioId = $(this).data("id");
//         console.log(portfolioId);
//
//         $(".portfolio__slide-menu-list-item").removeClass("portfolio__slide-menu-list-item_active-menu");
//         $(".portfolio__slide-menu-list").removeClass("portfolio__slide-menu-list_active");
//         $(".portfolio__slide-menu").removeClass("portfolio__slide-menu_click");
//         $(".portfolio__title").removeClass("portfolio__title_active");
//
//         $(this)
//             .addClass('portfolio__portfolio-item_activated')
//             .removeClass('portfolio__portfolio-item_deactivated');
//
//         $(".portfolio__slide-menu").addClass("portfolio__slide-menu_deactive");
//         $(".portfolio__slide-menu").removeClass("portfolio__slide-menu_active");
//         $(".portfolio__slide-menu").removeClass("portfolio__slide-menu_active-open");
//         $(".portfolio__slide-menu-list-item").removeClass("portfolio__slide-menu-list-item_active");
//         $(".portfolio__slide-menu-list-item").removeClass("portfolio__slide-menu-list-item_active-menu_active");
//
//         $(".portfolio__portfolio-container").addClass("portfolio__portfolio-container_active");
//         $(".header__burger").addClass("header__burger_close");
//         $(".header__close").addClass("header__close_active");
//         swiper.params.slidesOffsetBefore = 0;
//         swiper.update();
//     });
// });
$(".header__close").click( function () {
    $(".header__close").removeClass("header__close_active");
    $(".header__burger").removeClass("header__burger_close");
    $(".portfolio__slide-menu").removeClass("portfolio__slide-menu_deactive");
    $(".portfolio__slide-menu-list-item").removeClass("portfolio__slide-menu-list-item_deactive");
    $(".testDiva").removeClass("testDiva_active");

    $(".portfolio__slide-menu").addClass("portfolio__slide-menu_active");
    $(".portfolio__slide-menu").addClass("portfolio__slide-menu_active-open");

    $(".portfolio__portfolio-item")
        .addClass('portfolio__portfolio-item_deactivated')
        .removeClass('portfolio__portfolio-item_activated');
})



let timeoutItem;

swiper.on('tap', function () {
    $( ".portfolio__portfolio-item" ).click(function(e) {
        e.preventDefault();

        let portfolioId  = $(this).data("id");
        console.log(portfolioId);

        let data = {
            'action': 'singlePortfolio',
            'portfolioId': portfolioId,
        };

        $.ajax({
            type: 'POST',
            url: mastakSendMail.url,
            data: data,
            success: function (response) {
                $(".testDiva").html(response);
                timeoutItem = setTimeout(function () {
                    console.log(response);
                    $(".testDiva").addClass("testDiva_active");
                },1500);
            },
            error: function (x, y, z) {
                console.log(x);
                $('.testDiva').text('ОШИБКА!');
            }
        });

        $(".portfolio__slide-menu-list-item").removeClass("portfolio__slide-menu-list-item_active-menu");
        $(".portfolio__slide-menu-list").removeClass("portfolio__slide-menu-list_active");
        $(".portfolio__slide-menu").removeClass("portfolio__slide-menu_click");
        $(".portfolio__title").removeClass("portfolio__title_active");

        $(this)
            .addClass('portfolio__portfolio-item_activated')
            .removeClass('portfolio__portfolio-item_deactivated');

        $(".portfolio__slide-menu").addClass("portfolio__slide-menu_deactive");
        $(".portfolio__slide-menu").removeClass("portfolio__slide-menu_active");
        $(".portfolio__slide-menu").removeClass("portfolio__slide-menu_active-open");
        $(".portfolio__slide-menu-list-item").removeClass("portfolio__slide-menu-list-item_active");
        $(".portfolio__slide-menu-list-item").addClass("portfolio__slide-menu-list-item_deactive");
        $(".portfolio__slide-menu-list-item").removeClass("portfolio__slide-menu-list-item_active-menu_active");

        // $(".portfolio__portfolio-container").addClass("portfolio__portfolio-container_active");

        $(".header__burger").addClass("header__burger_close");
        $(".header__close").addClass("header__close_active");
        swiper.params.slidesOffsetBefore = 0;
        swiper.update();
    });
});




var containerEl = document.querySelector('.portfolio-wrapper');
var mixer = mixitup(containerEl);

if ($(window).width() >= 1024) {
    $(".portfolio__slide-menu-list-item").addClass("portfolio__slide-menu-list-item_active-menu");
    $(".portfolio__slide-menu-list").addClass("portfolio__slide-menu-list_active");
    $(".portfolio__slide-menu").addClass("portfolio__slide-menu_click");
    $(".portfolio__title").addClass("portfolio__title_active");
}

$(window).on('resize load', paddingResize);

function paddingResize() {
    let pt = $('.header').outerHeight();
    console.log(pt);
    $('.portfolioDev').css({
        'padding-top': pt
    });
    $('.portfolioDesign').css({
        'padding-top': pt
    });
}

$(document).ready(function () {
    setTimeout(function () {
        $(".portfolioDev__image").addClass("portfolioDev__image_active");
        $(".portfolioDev__content").addClass("portfolioDev__content_active");
        $(".portfolioDev").addClass("portfolioDev_active");

    }, 1000);
});

$(document).ready(function () {
    setTimeout(function () {
        $(".portfolioDesign__image").addClass("portfolioDesign__image_active");
        $(".portfolioDesign__content").addClass("portfolioDesign__content_active");
        $(".portfolioDesign").addClass("portfolioDesign_active");

    }, 1000);
});