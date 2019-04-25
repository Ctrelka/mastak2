import './cookie.scss';
import $ from 'jquery';

$(window).on('resize load', paddingResize);

function paddingResize() {
    let pt = $('.header').outerHeight();
    console.log(pt);
    $('.cookie').css({
        'padding-top': pt
    });
}

// var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
// var canvas = document.getElementById('cas');
// var context = canvas.getContext('2d');
//
//
// canvas.width = 510;
// canvas.height = 1000;
//
//
// var circleDefaults = {
//     circlePos: {
//         x: 380,
//         y: 130
//     },
//     radius: 120,
//     counterClockwise: false,
//     startAngle: Math.PI / 2,
//     endAngle: Math.PI * 2,
//     currentPercent: 0,
//     endPercent: 50
//
// }
//
//
// var circleDefaults2 = {
//     circlePos: {
//         x: 135,
//         y: 369
//     },
//     radius: 120,
//     counterClockwise: true,
//     startAngle: Math.PI * 0.5,
//     endAngle: Math.PI * 2,
//     currentPercent: 0,
//     endPercent: 50
//
// }
//
// var lineDefaults = {
//     movePos: {
//         x: 130,
//         y: 10
//     },
//     linePos: {
//         x: 130,
//         y: 10
//     }
// }
//
// var lineDefaults2 = {
//     movePos: {
//         x: 393,
//         y: 249
//     },
//     linePos: {
//         x: 393,
//         y: 249
//     }
// }
//
//
//
// function AnimateCircle(current) {
//
//     context.beginPath();
//     context.arc(circleDefaults.circlePos.x, circleDefaults.circlePos.y, circleDefaults.radius, -(circleDefaults.startAngle), ((circleDefaults.endAngle) * current) - circleDefaults.startAngle, circleDefaults.counterClockwise);
//     context.lineWidth = 1;
//     context.strokeStyle = "#000"
//     context.stroke();
//     context.closePath();
//
//     circleDefaults.currentPercent++;
//     if (circleDefaults.currentPercent < circleDefaults.endPercent) {
//         requestAnimationFrame(function () {
//             AnimateCircle(circleDefaults.currentPercent / 100);
//         });
//
//
//     }
//
//     else {
//         AnimateLine2();
//     }
// }
//
// function AnimateCircle2(current) {
//
//     context.beginPath();
//     context.arc(circleDefaults2.circlePos.x, circleDefaults2.circlePos.y, circleDefaults2.radius, -(circleDefaults2.startAngle), -((circleDefaults2.endAngle) * current) - circleDefaults2.startAngle, circleDefaults2.counterClockwise);
//     context.lineWidth = 0.5;
//
//     context.strokeStyle = "#000"
//     context.stroke();
//     context.closePath();
//
//
//     circleDefaults2.currentPercent++;
//     if (circleDefaults2.currentPercent < circleDefaults2.endPercent) {
//         requestAnimationFrame(function () {
//             AnimateCircle2(circleDefaults2.currentPercent / 100);
//         });
//
//
//     }
//
// }
//
// function AnimateLine() {
//
//
//     context.beginPath();
//     context.moveTo(lineDefaults.movePos.x, lineDefaults.movePos.y);
//     context.lineTo(lineDefaults.linePos.x, lineDefaults.linePos.y);
//     context.stroke();
//     context.closePath();
//
//
//     lineDefaults.linePos.x++;
//
//     var end_of_line = 382;
//     if (lineDefaults.linePos.x < end_of_line) {
//
//         requestAnimationFrame(function () {
//             AnimateLine();
//         });
//     }
//
//     else {
//         AnimateCircle();
//     }
//
//
//
// }
//
// function AnimateLine2() {
//
//
//     context.beginPath();
//     context.moveTo(lineDefaults2.movePos.x, lineDefaults2.movePos.y);
//     context.lineTo(lineDefaults2.linePos.x, lineDefaults2.linePos.y);
//     context.stroke();
//     context.closePath();
//
//
//     lineDefaults2.linePos.x--;
//
//     var end_of_line = 130;
//     if (lineDefaults2.linePos.x > end_of_line) {
//         requestAnimationFrame(function () {
//             AnimateLine2();
//         });
//     }
//
//     else {
//         AnimateCircle2();
//     }
//
//
//
// }
//
//
//
// AnimateLine();