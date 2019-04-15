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

// $(document).ready(function(){
//     $.each($('.homeWeb__inner-items-content'), function(i, el) {
//         setTimeout(function() {
//             $(el).addClass("homeWeb__inner-items-content_down");
//         }, 500 + (i * 500));
//
//     });
// });


if ($(window).width() > 768) {
    window.setTimeout(function(){$('.homeWeb__inner-items-content:eq( 0 )').addClass("homeWeb__inner-items-content_down");}, 500);
    window.setTimeout(function(){$('.homeWeb__inner-items-content:eq( 1 )').addClass("homeWeb__inner-items-content_down");}, 1000);
    window.setTimeout(function(){$('.homeWeb__inner-items-content:eq( 2 )').addClass("homeWeb__inner-items-content_down");}, 1500);
} else {
    $('.homeWeb__inner-items-content:eq( 0 )').addClass('homeWeb__inner-items-content_down');
}

if ($(window).width() > 1980) {
    window.setTimeout(function(){$('.homeWeb__inner-items-content:eq( 0 )').addClass("homeWeb__inner-items-content_down");}, 500);
    window.setTimeout(function(){$('.homeWeb__inner-items-content:eq( 1 )').addClass("homeWeb__inner-items-content_down");}, 1000);
    window.setTimeout(function(){$('.homeWeb__inner-items-content:eq( 2 )').addClass("homeWeb__inner-items-content_down");}, 1500);
    window.setTimeout(function(){$('.homeWeb__inner-items-content:eq( 3 )').addClass("homeWeb__inner-items-content_down");}, 2000);
    window.setTimeout(function(){$('.homeWeb__inner-items-content:eq( 4 )').addClass("homeWeb__inner-items-content_down");}, 2500);
    window.setTimeout(function(){$('.homeWeb__inner-items-content:eq( 5 )').addClass("homeWeb__inner-items-content_down");}, 3000);
} else {
    $('.homeWeb__inner-items-content:eq( 0 )').addClass('homeWeb__inner-items-content_down');
}

$(window).scroll(function () {
    $('.homeWeb__inner-items-content').each(function(i, el) {
        let cardItem = $(this).position().top - $('.header').height()*10;
        let scroll = $(window).scrollTop();
        if (scroll > cardItem) {
            setTimeout(function() {
             $(el).addClass("homeWeb__inner-items-content_down");
         }, 500 + (i * 500));
        }

        if ($(window).scrollTop() + $(window).height() === $(document).height()) {
            setTimeout(function() {
                $(el).addClass("homeWeb__inner-items-content_down");
            }, 500 + (i * 500));
        }
    })
});