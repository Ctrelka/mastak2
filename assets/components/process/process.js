import './process.scss';
import $ from 'jquery';

$(window).on('resize load', paddingResize);

// $('.process__item').each(function (index) {
//
//     setTimeout(function(){
//         console.log('da');
//         $(this).addClass('process__item_active')
//     }, index * 1000);
// })

$(window).scroll(function () {
    $('.process__item').each(function () {
        let heightItem = $(this).height();
        let cardItem = $(this).offset().top;
        let heightCard = cardItem - heightItem;
        let scroll = $(window).scrollTop();

            //
            //
            // $(this).children('.process__item-title').addClass('process__item-title_active');
            // $(this).children('.process__list').addClass('process__list_active')
            // $(this).children('.process__image-wrapper').addClass('process__image-wrapper_active')
            //


        if (scroll > (cardItem - heightItem)) {

            $(this).children('.process__item-title').addClass('process__item-title_active');
            $(this).children('.process__list').addClass('process__list_active')
            $(this).children('.process__image-wrapper').addClass('process__image-wrapper_active')

        }


        // console.log("heaightcard " + heightCard);
        // console.log("pos item: " + cardItem + "index: " + $(this).index());
        // console.log("scroll " + scroll);
    })
});

