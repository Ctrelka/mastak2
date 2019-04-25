import './portfolio.scss';
import $ from 'jquery';
import Swiper from 'swiper';
import mixitup from 'mixitup';


var swiper = new Swiper('.portfolio__portfolio-container', {
    pagination: '.swiper-pagination',
    slidesPerView: 'auto',
    spaceBetween: 0,
    direction: 'horizontal',
    forceToAxis: 'true',
    paginationClickable: true,
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
    $(".portfolio__portfolio-item").addClass("portfolio__portfolio-item_width");
    $(".portfolio__slide-menu-list-item").removeClass("portfolio__slide-menu-list-item_active-menu");
    $(".portfolio__slide-menu-list").removeClass("portfolio__slide-menu-list_active");
    $(".portfolio__slide-menu").removeClass("portfolio__slide-menu_click");
    $(".portfolio__title").removeClass("portfolio__title_active");

});


swiper.on('click', function () {
    $( ".portfolio__portfolio-item" ).click(function() {
        $(".portfolio__portfolio-item").addClass("portfolio__portfolio-item_close");
        $(this).removeClass("portfolio__portfolio-item_close");
        $(this).addClass("portfolio__portfolio-item_active");
        $(".portfolio__slide-menu").addClass("portfolio__slide-menu_active-open");
        $(".portfolio__portfolio-container").addClass("portfolio__portfolio-container_active");
        swiper.params.slidesOffsetBefore =  0;
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

