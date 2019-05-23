import './swiperWeWeb.scss';
import $ from 'jquery';
import Swiper from 'swiper';

new Swiper('.swiperWeWeb__container', {
    spaceBetween: 36,

    pagination: {
        el: '.swiperWeWeb__pagination',
        type: 'bullets',
        clickable: 'true',
        bulletActiveClass: 'swiperWeWeb__pagination_active',
    },
});


var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
    window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
window.requestAnimationFrame = requestAnimationFrame;
var canvas = document.getElementById('myCanvas2');
var context = canvas.getContext('2d');


var radius = 0;
var endPercent = 70;
var curPerc = 0;
var counterClockwise = false;
var circ = Math.PI * 2.385;
var quart = Math.PI * 0.8225;
if ($(window).width() < 768) {
    canvas.width = 260;
    canvas.height = 260;
    radius = 105;
} else {
    canvas.width = 700;
    canvas.height = 560;
    radius = 235;
}
var x = canvas.width / 2;
var y = canvas.height / 2;
context.lineWidth = 10;
context.strokeStyle = '#d0021b';


function animate(current) {
    context.clearRect(0, 0, canvas.width, canvas.height);
    context.beginPath();
    context.arc(x, y, radius, -(quart), ((circ) * current) - quart, false);
    context.stroke();
    curPerc++;
    if (curPerc < endPercent) {
        requestAnimationFrame(function () {
            animate(curPerc / 100)
        });
    }
}

let isFlag = false;
$(window).scroll(function () {
    let cardItem = $('#myCanvas2').offset().top;
    let scroll = $(window).scrollTop();
    let heightItem = $('#myCanvas2').height();

    if (scroll > cardItem - heightItem && !isFlag) {
        animate();
        isFlag = true;
    }
});