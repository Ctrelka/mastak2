import './team.scss';
import $ from 'jquery';
import sticky from "jquery-sticky";

$(window).on('resize load', paddingResize);

function paddingResize() {
    let pt = $('.header').outerHeight();
    console.log(pt);
    $('.team').css({
        'padding-top': pt
    });
}

var allGood = true;


$( document ).ready(function() {
    $('.button__color_white').click(function () {
        // $(".welcome-dev").addClass("welcome-dev_active").removeClass("close-item");

        $(".team__inner").addClass("team__inner_active");
        $(".team-add").addClass("team-add_active").removeClass("close-item");
        // $('.team__image-container').addClass('team__image-container_active');
        // $(".team").addClass("team_active");

        $(".header__burger").addClass("header__burger_close");
        $(".header__close").addClass("header__close_active");
        let pt = $('.header').outerHeight();
        // $(".team__inner").sticky({topSpacing:pt,getWidthFrom: '.team__inner'});
        allGood = false;
    });
});



$('.header__close').click(function () {
    $(".header__burger").removeClass("header__burger_close");
    $(".header__close").removeClass("header__close_active");
    $(".team-add").addClass("close-item").removeClass("team-add_active");
    $('.team__image-container').removeClass('team__image-container_active');

    allGood = true;
});





