import './footer-line.scss';
import $ from 'jquery';

$(window).scroll(function() {
    if($(window).scrollTop() + $(window).height() > ($(document).height() - 100) ) {
        $(".footer-line__inner_stroke").addClass("footer-line__inner_stroke_active");
    }
});