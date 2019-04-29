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




if ( $(window).width() <= 3000 &&  $(window).width() > 1400) {

    var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
    var canvas = document.getElementById('cas');
    var context = canvas.getContext('2d');

    canvas.width = 1510;
    canvas.height = 1200;


    var circleDefaults = {
        circlePos: {
            x: 1255,
            y: 260
        },
        radius: 250,
        counterClockwise: false,
        startAngle: Math.PI / 2,
        endAngle: Math.PI * 2,
        currentPercent: 0,
        endPercent: 50

    }


    var circleDefaults2 = {
        circlePos: {
            x: 261,
            y: 759
        },
        radius: 250,
        counterClockwise: true,
        startAngle: Math.PI * 0.5,
        endAngle: Math.PI * 2,
        currentPercent: 0,
        endPercent: 50

    }

    var lineDefaults = {
        movePos: {
            x: 128,
            y: 10
        },
        linePos: {
            x: 128,
            y: 10
        }
    }

    var lineDefaults2 = {
        movePos: {
            x: 1275,
            y: 509
        },
        linePos: {
            x: 1275,
            y: 509
        }
    }


    var lineDefaults3 = {
        movePos: {
            x: 240,
            y: 1008
        },
        linePos: {
            x: 240,
            y: 1008
        }
    }



    function AnimateCircle(current) {

        context.beginPath();
        context.arc(circleDefaults.circlePos.x, circleDefaults.circlePos.y, circleDefaults.radius, -(circleDefaults.startAngle), ((circleDefaults.endAngle) * current) - circleDefaults.startAngle, circleDefaults.counterClockwise);
        context.lineWidth = 1;
        context.strokeStyle = "#000"
        context.stroke();
        context.closePath();

        circleDefaults.currentPercent++;
        if (circleDefaults.currentPercent < circleDefaults.endPercent) {
            requestAnimationFrame(function () {
                AnimateCircle(circleDefaults.currentPercent / 100);
            });


        }

        else {
            AnimateLine2();
        }
    }

    function AnimateCircle2(current) {

        context.beginPath();
        context.arc(circleDefaults2.circlePos.x, circleDefaults2.circlePos.y, circleDefaults2.radius, -(circleDefaults2.startAngle), -((circleDefaults2.endAngle) * current) - circleDefaults2.startAngle, circleDefaults2.counterClockwise);
        context.lineWidth = 1;

        context.strokeStyle = "#000"
        context.stroke();
        context.closePath();


        circleDefaults2.currentPercent++;
        if (circleDefaults2.currentPercent < circleDefaults2.endPercent) {
            requestAnimationFrame(function () {
                AnimateCircle2(circleDefaults2.currentPercent / 100);
            });


        }

        else{
            AnimateLine3()
        }

    }

    function AnimateLine() {


        context.beginPath();
        context.moveTo(lineDefaults.movePos.x, lineDefaults.movePos.y);
        context.lineTo(lineDefaults.linePos.x, lineDefaults.linePos.y);
        context.stroke();
        context.closePath();


        lineDefaults.linePos.x++;

        var end_of_line = 1256;
        if (lineDefaults.linePos.x < end_of_line) {

            requestAnimationFrame(function () {
                AnimateLine();
            });
        }

        else {
            AnimateCircle();
        }



    }

    function AnimateLine2() {


        context.beginPath();
        context.moveTo(lineDefaults2.movePos.x, lineDefaults2.movePos.y);
        context.lineTo(lineDefaults2.linePos.x, lineDefaults2.linePos.y);
        context.stroke();
        context.closePath();


        lineDefaults2.linePos.x--;

        var end_of_line = 260;
        if (lineDefaults2.linePos.x > end_of_line) {
            requestAnimationFrame(function () {
                AnimateLine2();
            });
        }

        else {
            AnimateCircle2();
        }



    }



    function AnimateLine3() {


        context.beginPath();
        context.moveTo(lineDefaults3.movePos.x, lineDefaults3.movePos.y);
        context.lineTo(lineDefaults3.linePos.x, lineDefaults3.linePos.y);
        context.stroke();
        context.closePath();


        lineDefaults3.linePos.x++;

        var end_of_line = 1256;
        if (lineDefaults3.linePos.x < end_of_line) {

            requestAnimationFrame(function () {
                AnimateLine3();
            });
        }



    }

    AnimateLine();
}







if ($(window).width() <= 1400  && $(window).width() > 1200) {

    var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
    var canvas = document.getElementById('cas');
    var context = canvas.getContext('2d');

    canvas.width = 1200;
    canvas.height = 1200;


    var circleDefaults = {
        circlePos: {
            x: 960,
            y: 225
        },
        radius: 215,
        counterClockwise: false,
        startAngle: Math.PI / 2,
        endAngle: Math.PI * 2,
        currentPercent: 0,
        endPercent: 50

    }


    var circleDefaults2 = {
        circlePos: {
            x: 261,
            y: 655
        },
        radius: 215,
        counterClockwise: true,
        startAngle: Math.PI * 0.5,
        endAngle: Math.PI * 2,
        currentPercent: 0,
        endPercent: 50

    }

    var lineDefaults = {
        movePos: {
            x: 0,
            y: 10
        },
        linePos: {
            x: 0,
            y: 10
        }
    }

    var lineDefaults2 = {
        movePos: {
            x: 974,
            y: 440
        },
        linePos: {
            x: 974,
            y: 440
        }
    }


    var lineDefaults3 = {
        movePos: {
            x: 240,
            y: 869
        },
        linePos: {
            x: 240,
            y: 869
        }
    }



    function AnimateCircle(current) {

        context.beginPath();
        context.arc(circleDefaults.circlePos.x, circleDefaults.circlePos.y, circleDefaults.radius, -(circleDefaults.startAngle), ((circleDefaults.endAngle) * current) - circleDefaults.startAngle, circleDefaults.counterClockwise);
        context.lineWidth = 1;
        context.strokeStyle = "#000"
        context.stroke();
        context.closePath();

        circleDefaults.currentPercent++;
        if (circleDefaults.currentPercent < circleDefaults.endPercent) {
            requestAnimationFrame(function () {
                AnimateCircle(circleDefaults.currentPercent / 100);
            });


        }

        else {
            AnimateLine2();
        }
    }

    function AnimateCircle2(current) {

        context.beginPath();
        context.arc(circleDefaults2.circlePos.x, circleDefaults2.circlePos.y, circleDefaults2.radius, -(circleDefaults2.startAngle), -((circleDefaults2.endAngle) * current) - circleDefaults2.startAngle, circleDefaults2.counterClockwise);
        context.lineWidth = 1;

        context.strokeStyle = "#000"
        context.stroke();
        context.closePath();


        circleDefaults2.currentPercent++;
        if (circleDefaults2.currentPercent < circleDefaults2.endPercent) {
            requestAnimationFrame(function () {
                AnimateCircle2(circleDefaults2.currentPercent / 100);
            });


        }

        else{
            AnimateLine3()
        }

    }

    function AnimateLine() {


        context.beginPath();
        context.moveTo(lineDefaults.movePos.x, lineDefaults.movePos.y);
        context.lineTo(lineDefaults.linePos.x, lineDefaults.linePos.y);
        context.stroke();
        context.closePath();


        lineDefaults.linePos.x++;

        var end_of_line = 962;
        if (lineDefaults.linePos.x < end_of_line) {

            requestAnimationFrame(function () {
                AnimateLine();
            });
        }

        else {
            AnimateCircle();
        }



    }

    function AnimateLine2() {


        context.beginPath();
        context.moveTo(lineDefaults2.movePos.x, lineDefaults2.movePos.y);
        context.lineTo(lineDefaults2.linePos.x, lineDefaults2.linePos.y);
        context.stroke();
        context.closePath();


        lineDefaults2.linePos.x--;

        var end_of_line = 260;
        if (lineDefaults2.linePos.x > end_of_line) {
            requestAnimationFrame(function () {
                AnimateLine2();
            });
        }

        else {
            AnimateCircle2();
        }



    }



    function AnimateLine3() {


        context.beginPath();
        context.moveTo(lineDefaults3.movePos.x, lineDefaults3.movePos.y);
        context.lineTo(lineDefaults3.linePos.x, lineDefaults3.linePos.y);
        context.stroke();
        context.closePath();


        lineDefaults3.linePos.x++;

        var end_of_line = 962;
        if (lineDefaults3.linePos.x < end_of_line) {

            requestAnimationFrame(function () {
                AnimateLine3();
            });
        }



    }

    AnimateLine();
}



if ($(window).width() <= 1024  && $(window).width() > 976) {

    var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
    var canvas = document.getElementById('cas');
    var context = canvas.getContext('2d');

    canvas.width = 976;
    canvas.height = 2000;


    var circleDefaults = {
        circlePos: {
            x: 800,
            y: 160
        },
        radius: 150,
        counterClockwise: false,
        startAngle: Math.PI / 2,
        endAngle: Math.PI * 2,
        currentPercent: 0,
        endPercent: 50

    }


    var circleDefaults2 = {
        circlePos: {
            x: 152,
            y: 460
        },
        radius: 150,
        counterClockwise: true,
        startAngle: Math.PI * 0.5,
        endAngle: Math.PI * 2,
        currentPercent: 0,
        endPercent: 50

    }


    var circleDefaults3 = {
        circlePos: {
            x: 800,
            y: 759
        },
        radius: 150,
        counterClockwise: false,
        startAngle: Math.PI / 2,
        endAngle: Math.PI * 2,
        currentPercent: 0,
        endPercent: 50

    }

    var lineDefaults = {
        movePos: {
            x: 136,
            y: 10
        },
        linePos: {
            x: 136,
            y: 10
        }
    }

    var lineDefaults2 = {
        movePos: {
            x: 810,
            y: 310
        },
        linePos: {
            x: 810,
            y: 310
        }
    }


    var lineDefaults3 = {
        movePos: {
            x: 136,
            y: 609
        },
        linePos: {
            x: 136,
            y: 609
        }
    }


    var lineDefaults4 = {
        movePos: {
            x: 810,
            y: 909
        },
        linePos: {
            x: 810,
            y: 909
        }
    }



    function AnimateCircle(current) {

        context.beginPath();
        context.arc(circleDefaults.circlePos.x, circleDefaults.circlePos.y, circleDefaults.radius, -(circleDefaults.startAngle), ((circleDefaults.endAngle) * current) - circleDefaults.startAngle, circleDefaults.counterClockwise);
        context.lineWidth = 1;
        context.strokeStyle = "#000"
        context.stroke();
        context.closePath();

        circleDefaults.currentPercent++;
        if (circleDefaults.currentPercent < circleDefaults.endPercent) {
            requestAnimationFrame(function () {
                AnimateCircle(circleDefaults.currentPercent / 100);
            });


        }

        else {
            AnimateLine2();
        }
    }

    function AnimateCircle2(current) {

        context.beginPath();
        context.arc(circleDefaults2.circlePos.x, circleDefaults2.circlePos.y, circleDefaults2.radius, -(circleDefaults2.startAngle), -((circleDefaults2.endAngle) * current) - circleDefaults2.startAngle, circleDefaults2.counterClockwise);
        context.lineWidth = 1;

        context.strokeStyle = "#000"
        context.stroke();
        context.closePath();


        circleDefaults2.currentPercent++;
        if (circleDefaults2.currentPercent < circleDefaults2.endPercent) {
            requestAnimationFrame(function () {
                AnimateCircle2(circleDefaults2.currentPercent / 100);
            });


        }

        else{
            AnimateLine3()
        }

    }


    function AnimateCircle3(current) {

        context.beginPath();
        context.arc(circleDefaults3.circlePos.x, circleDefaults3.circlePos.y, circleDefaults3.radius, -(circleDefaults3.startAngle), ((circleDefaults3.endAngle) * current) - circleDefaults3.startAngle, circleDefaults3.counterClockwise);
        context.lineWidth = 1;
        context.strokeStyle = "#000"
        context.stroke();
        context.closePath();

        circleDefaults3.currentPercent++;
        if (circleDefaults3.currentPercent < circleDefaults3.endPercent) {
            requestAnimationFrame(function () {
                AnimateCircle3(circleDefaults3.currentPercent / 100);
            });


        }
        else {
            AnimateLine4();
        }
    }

    function AnimateLine() {


        context.beginPath();
        context.moveTo(lineDefaults.movePos.x, lineDefaults.movePos.y);
        context.lineTo(lineDefaults.linePos.x, lineDefaults.linePos.y);
        context.stroke();
        context.closePath();


        lineDefaults.linePos.x++;

        var end_of_line = 804;
        if (lineDefaults.linePos.x < end_of_line) {

            requestAnimationFrame(function () {
                AnimateLine();
            });
        }

        else {
            AnimateCircle();
        }



    }

    function AnimateLine2() {


        context.beginPath();
        context.moveTo(lineDefaults2.movePos.x, lineDefaults2.movePos.y);
        context.lineTo(lineDefaults2.linePos.x, lineDefaults2.linePos.y);
        context.stroke();
        context.closePath();


        lineDefaults2.linePos.x--;

        var end_of_line = 150;
        if (lineDefaults2.linePos.x > end_of_line) {
            requestAnimationFrame(function () {
                AnimateLine2();
            });
        }

        else {
            AnimateCircle2();
        }



    }



    function AnimateLine3() {


        context.beginPath();
        context.moveTo(lineDefaults3.movePos.x, lineDefaults3.movePos.y);
        context.lineTo(lineDefaults3.linePos.x, lineDefaults3.linePos.y);
        context.stroke();
        context.closePath();


        lineDefaults3.linePos.x++;

        var end_of_line = 804;
        if (lineDefaults3.linePos.x < end_of_line) {

            requestAnimationFrame(function () {
                AnimateLine3();
            });
        }

        else {
            AnimateCircle3();
        }



    }


    function AnimateLine4() {


        context.beginPath();
        context.moveTo(lineDefaults4.movePos.x, lineDefaults4.movePos.y);
        context.lineTo(lineDefaults4.linePos.x, lineDefaults4.linePos.y);
        context.stroke();
        context.closePath();


        lineDefaults4.linePos.x--;

        var end_of_line = 150;
        if (lineDefaults4.linePos.x > end_of_line) {
            requestAnimationFrame(function () {
                AnimateLine4();
            });
        }



    }

    AnimateLine();
}



if ($(window).width() <= 976  && $(window).width() > 740) {

    var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
    var canvas = document.getElementById('cas');
    var context = canvas.getContext('2d');

    canvas.width = 736;
    canvas.height = 2000;


    var circleDefaults = {
        circlePos: {
            x: 580,
            y: 160
        },
        radius: 150,
        counterClockwise: false,
        startAngle: Math.PI / 2,
        endAngle: Math.PI * 2,
        currentPercent: 0,
        endPercent: 50

    }


    var circleDefaults2 = {
        circlePos: {
            x: 152,
            y: 460
        },
        radius: 150,
        counterClockwise: true,
        startAngle: Math.PI * 0.5,
        endAngle: Math.PI * 2,
        currentPercent: 0,
        endPercent: 50

    }


    var circleDefaults3 = {
        circlePos: {
            x: 580,
            y: 759
        },
        radius: 150,
        counterClockwise: false,
        startAngle: Math.PI / 2,
        endAngle: Math.PI * 2,
        currentPercent: 0,
        endPercent: 50

    }

    var lineDefaults = {
        movePos: {
            x: 184,
            y: 10
        },
        linePos: {
            x: 184,
            y: 10
        }
    }

    var lineDefaults2 = {
        movePos: {
            x: 590,
            y: 310
        },
        linePos: {
            x: 590,
            y: 310
        }
    }


    var lineDefaults3 = {
        movePos: {
            x: 136,
            y: 609
        },
        linePos: {
            x: 136,
            y: 609
        }
    }


    var lineDefaults4 = {
        movePos: {
            x: 589,
            y: 909
        },
        linePos: {
            x: 589,
            y: 909
        }
    }



    function AnimateCircle(current) {

        context.beginPath();
        context.arc(circleDefaults.circlePos.x, circleDefaults.circlePos.y, circleDefaults.radius, -(circleDefaults.startAngle), ((circleDefaults.endAngle) * current) - circleDefaults.startAngle, circleDefaults.counterClockwise);
        context.lineWidth = 1;
        context.strokeStyle = "#000"
        context.stroke();
        context.closePath();

        circleDefaults.currentPercent++;
        if (circleDefaults.currentPercent < circleDefaults.endPercent) {
            requestAnimationFrame(function () {
                AnimateCircle(circleDefaults.currentPercent / 100);
            });


        }

        else {
            AnimateLine2();
        }
    }

    function AnimateCircle2(current) {

        context.beginPath();
        context.arc(circleDefaults2.circlePos.x, circleDefaults2.circlePos.y, circleDefaults2.radius, -(circleDefaults2.startAngle), -((circleDefaults2.endAngle) * current) - circleDefaults2.startAngle, circleDefaults2.counterClockwise);
        context.lineWidth = 1;

        context.strokeStyle = "#000"
        context.stroke();
        context.closePath();


        circleDefaults2.currentPercent++;
        if (circleDefaults2.currentPercent < circleDefaults2.endPercent) {
            requestAnimationFrame(function () {
                AnimateCircle2(circleDefaults2.currentPercent / 100);
            });


        }

        else{
            AnimateLine3()
        }

    }


    function AnimateCircle3(current) {

        context.beginPath();
        context.arc(circleDefaults3.circlePos.x, circleDefaults3.circlePos.y, circleDefaults3.radius, -(circleDefaults3.startAngle), ((circleDefaults3.endAngle) * current) - circleDefaults3.startAngle, circleDefaults3.counterClockwise);
        context.lineWidth = 1;
        context.strokeStyle = "#000"
        context.stroke();
        context.closePath();

        circleDefaults3.currentPercent++;
        if (circleDefaults3.currentPercent < circleDefaults3.endPercent) {
            requestAnimationFrame(function () {
                AnimateCircle3(circleDefaults3.currentPercent / 100);
            });


        }
        else {
            AnimateLine4();
        }
    }

    function AnimateLine() {


        context.beginPath();
        context.moveTo(lineDefaults.movePos.x, lineDefaults.movePos.y);
        context.lineTo(lineDefaults.linePos.x, lineDefaults.linePos.y);
        context.stroke();
        context.closePath();


        lineDefaults.linePos.x++;

        var end_of_line = 582;
        if (lineDefaults.linePos.x < end_of_line) {

            requestAnimationFrame(function () {
                AnimateLine();
            });
        }

        else {
            AnimateCircle();
        }



    }

    function AnimateLine2() {


        context.beginPath();
        context.moveTo(lineDefaults2.movePos.x, lineDefaults2.movePos.y);
        context.lineTo(lineDefaults2.linePos.x, lineDefaults2.linePos.y);
        context.stroke();
        context.closePath();


        lineDefaults2.linePos.x--;

        var end_of_line = 150;
        if (lineDefaults2.linePos.x > end_of_line) {
            requestAnimationFrame(function () {
                AnimateLine2();
            });
        }

        else {
            AnimateCircle2();
        }



    }



    function AnimateLine3() {


        context.beginPath();
        context.moveTo(lineDefaults3.movePos.x, lineDefaults3.movePos.y);
        context.lineTo(lineDefaults3.linePos.x, lineDefaults3.linePos.y);
        context.stroke();
        context.closePath();


        lineDefaults3.linePos.x++;

        var end_of_line = 582;
        if (lineDefaults3.linePos.x < end_of_line) {

            requestAnimationFrame(function () {
                AnimateLine3();
            });
        }

        else {
            AnimateCircle3();
        }



    }


    function AnimateLine4() {


        context.beginPath();
        context.moveTo(lineDefaults4.movePos.x, lineDefaults4.movePos.y);
        context.lineTo(lineDefaults4.linePos.x, lineDefaults4.linePos.y);
        context.stroke();
        context.closePath();


        lineDefaults4.linePos.x--;

        var end_of_line = 150;
        if (lineDefaults4.linePos.x > end_of_line) {
            requestAnimationFrame(function () {
                AnimateLine4();
            });
        }



    }

    AnimateLine();
}








if ($(window).width() <= 740 ) {

    var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
    var canvas = document.getElementById('cas');
    var context = canvas.getContext('2d');

    canvas.width = 304;
    canvas.height = 2000;


    var circleDefaults = {
        circlePos: {
            x: 150,
            y: 160
        },
        radius: 150,
        counterClockwise: false,
        startAngle: Math.PI / 2,
        endAngle: Math.PI * 2,
        currentPercent: 0,
        endPercent: 50

    }


    var circleDefaults2 = {
        circlePos: {
            x: 155,
            y: 460
        },
        radius: 150,
        counterClockwise: true,
        startAngle: Math.PI * 0.5,
        endAngle: Math.PI * 2,
        currentPercent: 0,
        endPercent: 50

    }


    var circleDefaults3 = {
        circlePos: {
            x: 150,
            y: 759
        },
        radius: 150,
        counterClockwise: false,
        startAngle: Math.PI / 2,
        endAngle: Math.PI * 2,
        currentPercent: 0,
        endPercent: 50

    }


    var circleDefaults4 = {
        circlePos: {
            x: 152,
            y: 1058
        },
        radius: 150,
        counterClockwise: true,
        startAngle: Math.PI * 0.5,
        endAngle: Math.PI * 2,
        currentPercent: 0,
        endPercent: 50

    }


    var circleDefaults5 = {
        circlePos: {
            x: 150,
            y: 1359
        },
        radius: 150,
        counterClockwise: false,
        startAngle: Math.PI / 2,
        endAngle: Math.PI * 2,
        currentPercent: 0,
        endPercent: 50

    }


    var circleDefaults6 = {
        circlePos: {
            x: 152,
            y: 1660
        },
        radius: 150,
        counterClockwise: true,
        startAngle: Math.PI * 0.5,
        endAngle: Math.PI * 2,
        currentPercent: 0,
        endPercent: 50

    }


    var lineDefaults = {
        movePos: {
            x: 0,
            y: 10
        },
        linePos: {
            x: 0,
            y: 10
        }
    }


    function AnimateCircle(current) {

        context.beginPath();
        context.arc(circleDefaults.circlePos.x, circleDefaults.circlePos.y, circleDefaults.radius, -(circleDefaults.startAngle), ((circleDefaults.endAngle) * current) - circleDefaults.startAngle, circleDefaults.counterClockwise);
        context.lineWidth = 1;
        context.strokeStyle = "#000"
        context.stroke();
        context.closePath();

        circleDefaults.currentPercent++;
        if (circleDefaults.currentPercent < circleDefaults.endPercent) {
            requestAnimationFrame(function () {
                AnimateCircle(circleDefaults.currentPercent / 100);
            });


        }

        else {
            AnimateCircle2();
        }
    }

    function AnimateCircle2(current) {

        context.beginPath();
        context.arc(circleDefaults2.circlePos.x, circleDefaults2.circlePos.y, circleDefaults2.radius, -(circleDefaults2.startAngle), -((circleDefaults2.endAngle) * current) - circleDefaults2.startAngle, circleDefaults2.counterClockwise);
        context.lineWidth = 1;

        context.strokeStyle = "#000"
        context.stroke();
        context.closePath();


        circleDefaults2.currentPercent++;
        if (circleDefaults2.currentPercent < circleDefaults2.endPercent) {
            requestAnimationFrame(function () {
                AnimateCircle2(circleDefaults2.currentPercent / 100);
            });


        }

        else{
            AnimateCircle3()
        }

    }


    function AnimateCircle3(current) {

        context.beginPath();
        context.arc(circleDefaults3.circlePos.x, circleDefaults3.circlePos.y, circleDefaults3.radius, -(circleDefaults3.startAngle), ((circleDefaults3.endAngle) * current) - circleDefaults3.startAngle, circleDefaults3.counterClockwise);
        context.lineWidth = 1;
        context.strokeStyle = "#000"
        context.stroke();
        context.closePath();

        circleDefaults3.currentPercent++;
        if (circleDefaults3.currentPercent < circleDefaults3.endPercent) {
            requestAnimationFrame(function () {
                AnimateCircle3(circleDefaults3.currentPercent / 100);
            });


        }
        else {
            AnimateCircle4();
        }
    }

    function AnimateCircle4(current) {

        context.beginPath();
        context.arc(circleDefaults4.circlePos.x, circleDefaults4.circlePos.y, circleDefaults4.radius, -(circleDefaults4.startAngle), -((circleDefaults4.endAngle) * current) - circleDefaults4.startAngle, circleDefaults4.counterClockwise);
        context.lineWidth = 1;

        context.strokeStyle = "#000"
        context.stroke();
        context.closePath();


        circleDefaults4.currentPercent++;
        if (circleDefaults4.currentPercent < circleDefaults4.endPercent) {
            requestAnimationFrame(function () {
                AnimateCircle4(circleDefaults4.currentPercent / 100);
            });


        }

        else{
            AnimateCircle5()
        }

    }




    function AnimateCircle5(current) {

        context.beginPath();
        context.arc(circleDefaults5.circlePos.x, circleDefaults5.circlePos.y, circleDefaults5.radius, -(circleDefaults5.startAngle), ((circleDefaults5.endAngle) * current) - circleDefaults5.startAngle, circleDefaults5.counterClockwise);
        context.lineWidth = 1;
        context.strokeStyle = "#000"
        context.stroke();
        context.closePath();

        circleDefaults5.currentPercent++;
        if (circleDefaults5.currentPercent < circleDefaults5.endPercent) {
            requestAnimationFrame(function () {
                AnimateCircle5(circleDefaults5.currentPercent / 100);
            });


        }
        else {
            AnimateCircle6();
        }
    }

    function AnimateCircle6(current) {

        context.beginPath();
        context.arc(circleDefaults6.circlePos.x, circleDefaults6.circlePos.y, circleDefaults6.radius, -(circleDefaults6.startAngle), -((circleDefaults6.endAngle) * current) - circleDefaults6.startAngle, circleDefaults6.counterClockwise);
        context.lineWidth = 1;

        context.strokeStyle = "#000"
        context.stroke();
        context.closePath();


        circleDefaults6.currentPercent++;
        if (circleDefaults6.currentPercent < circleDefaults6.endPercent) {
            requestAnimationFrame(function () {
                AnimateCircle6(circleDefaults6.currentPercent / 100);
            });


        }

    }


    function AnimateLine() {


        context.beginPath();
        context.moveTo(lineDefaults.movePos.x, lineDefaults.movePos.y);
        context.lineTo(lineDefaults.linePos.x, lineDefaults.linePos.y);
        context.stroke();
        context.closePath();


        lineDefaults.linePos.x++;

        var end_of_line = 164;
        if (lineDefaults.linePos.x < end_of_line) {

            requestAnimationFrame(function () {
                AnimateLine();
            });
        }

        else {
            AnimateCircle();
        }



    }

    AnimateLine();
}
