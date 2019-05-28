import './process.scss';
import $ from 'jquery';

$(window).scroll(function () {
    $('.process__item').each(function (i, el) {
        let cardItem = $(this).offset().top;
        let cardItem2 = $(".process__item:nth-child(4)").offset().top;
        let cardItem3 = $(".process__item:nth-child(5)").offset().top;
        let cardItem4 = $(".process__item:nth-child(1)").offset().top;
        let cardItem5 = $(".process__item:nth-child(2)").offset().top;
        let cardItem6 = $(".process__item:nth-child(3)").offset().top;
        let cardItem7 = $(".process__item:nth-child(6)").offset().top;
        let scroll = $(window).scrollTop();
        let sizeTop = 0;
        let sizeTop2 = 0;

        if ($(window).width() >= 300) {
            sizeTop = 400;
        }

        if ($(window).width() >= 750) {
            sizeTop = 750;
        }

        if ($(window).width() >= 1000) {
            sizeTop = 600;
        }

        if ($(window).width() >= 1200) {
            sizeTop = 550;
        }

        if ($(window).width() >= 1400) {
            sizeTop = 650;
        }

        if ($(window).width() > 1900) {
            sizeTop = 750;
            sizeTop2 = 500;
        }

        if ($(window).width() >= 2500) {
            sizeTop = 950;
        }




        let sizeTopCard = cardItem - sizeTop;
        let sizeTopCard2 = cardItem2 - sizeTop2;
        console.log("scroll " + scroll);
        console.log("sizeTopCard " + sizeTopCard2);

        if (scroll > (cardItem - sizeTop)) {
            setTimeout(function(){
                $(".line1").addClass("line1_active");
            }, 500);

            setTimeout(function(){
                $(".b-circle-arc-path").addClass("b-circle-arc-path_active");
            }, 2000);


            if ($(window).width() > 540) {

                setTimeout(function () {
                    $(el).children('.process__item-title').addClass('process__item-title_active');
                    $(el).children('.process__list').addClass('process__list_active')
                    $(el).children('.process__image-wrapper').addClass('process__image-wrapper_active')
                    $(el).children('.process__image').addClass('process__image_active')
                }, 500 + (i * 500));

            }

            if ($(window).width() <= 540) {

                setTimeout(function () {
                    $(el).children('.process__item-title').addClass('process__item-title_active');
                    $(el).children('.process__list').addClass('process__list_active')
                    $(el).children('.process__image-wrapper').addClass('process__image-wrapper_active')
                    $(el).children('.process__image').addClass('process__image_active')
                }, 0);

            }
        }


        if ($(window).width() > 1024) {
            if (scroll > (cardItem2 - sizeTop)) {
                setTimeout(function(){
                    $(".line2").addClass("line2_active");
                }, 1600);


                setTimeout(function(){
                    $(".b-circle-arc-path2").addClass("b-circle-arc-path2_active");
                }, 3100);

                setTimeout(function(){
                    $(".line3").addClass("line3_active");
                }, 3400);
            }
        }


        if ($(window).width() <= 1024) {
            if (scroll > (cardItem2 - sizeTop)) {
                setTimeout(function(){
                    $(".line2").addClass("line2_active");
                }, 1600);


                setTimeout(function(){
                    $(".b-circle-arc-path2").addClass("b-circle-arc-path2_active");
                }, 3100);

            }


            if (scroll > (cardItem3 - sizeTop)) {

                setTimeout(function(){
                    $(".line3").addClass("line3_active");
                }, 1600);


                setTimeout(function(){
                    $(".b-circle-arc-path3").addClass("b-circle-arc-path3_active");
                }, 3100);


                setTimeout(function(){
                    $(".line4").addClass("line4_active");
                }, 3600);
            }
        }

        if ($(window).width() <= 540) {
            if (scroll > (cardItem4 - sizeTop)) {
                setTimeout(function(){
                    $(".b-circle-arc-path").addClass("b-circle-arc-path_active");
                }, 0);

            }

            if (scroll > (cardItem5 - sizeTop)) {
                setTimeout(function(){
                    $(".b-circle-arc-path2").addClass("b-circle-arc-path2_active");
                }, 0);

            }


            if (scroll > (cardItem6 - sizeTop)) {
                setTimeout(function(){
                    $(".b-circle-arc-path3").addClass("b-circle-arc-path3_active");
                }, 0);

            }


            if (scroll > (cardItem2 - sizeTop)) {
                setTimeout(function(){
                    $(".b-circle-arc-path4").addClass("b-circle-arc-path4_active");
                }, 0);

            }

            if (scroll > (cardItem3 - sizeTop)) {
                setTimeout(function(){
                    $(".b-circle-arc-path5").addClass("b-circle-arc-path5_active");
                }, 0);

            }

            if (scroll > (cardItem7 - sizeTop)) {
                setTimeout(function(){
                    $(".b-circle-arc-path6").addClass("b-circle-arc-path6_active");
                }, 0);

            }




        }




    })
});

