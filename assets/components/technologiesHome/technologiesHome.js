import './technologiesHome.scss';
import $ from 'jquery';

let countItem = $(".technologiesHome__item").length;
let oneItem = $(".technologiesHome__list").width() / countItem;

if ($(window).width() > 767) {
    $(".technologiesHome__item").css("width", oneItem);
}
let startColor = $(".technologiesHome__list").data('color-start');
let endColor = $(".technologiesHome__list").data('color-end');

if ($(window).width() > 720) {
    $(".technologiesHome__list").addClass('technologiesHome__wrapper');
} else {
    $(".technologiesHome__list").append("<div class ='technologiesHome__wrapper'> </div>");
}

let wrapperColor = $(".technologiesHome__list").data("wrapper-color");
$(".technologiesHome__wrapper").css("background", wrapperColor);

var colorArray = interpolateColors(startColor, endColor, countItem);

for (let i = 0; i < countItem; i++) {

    let delta = -1 * Math.abs(i - (countItem - 1) / 2) / (countItem - 1) + 1;

    $($(".technologiesHome__addition")[i]).css({
        'background-color': `rgb(${colorArray[i][0]},${colorArray[i][1]},${colorArray[i][2]})`,
        'transform': 'scale(' + delta + ')'
    });
    $($(".technologiesHome__name")[i]).css({
        'color': `rgb(${colorArray[i][0]},${colorArray[i][1]},${colorArray[i][2]})`
    });
}

function interpolateColor(color1, color2, factor) {
    if (arguments.length < 3) {
        factor = 0.5;
    }
    var result = color1.slice();
    for (var i = 0; i < 3; i++) {
        result[i] = Math.round(result[i] + factor * (color2[i] - color1[i]));
    }
    return result;
};

function interpolateColors(color1, color2, steps) {
    var stepFactor = 1 / (steps - 1),
        interpolatedColorArray = [];

    color1 = color1.match(/\d+/g).map(Number);
    color2 = color2.match(/\d+/g).map(Number);

    for (var i = 0; i < steps; i++) {
        interpolatedColorArray.push(interpolateColor(color1, color2, stepFactor * i));
    }
    return interpolatedColorArray;
}

$(window).on("scroll", function () {

    let sizeTop = 0;
    if ($(window).width() >= 320) {
        sizeTop = 500;
    }

    if ($(window).width() >= 768) {
        sizeTop = 500;
    }

    let top = $(window).scrollTop();
    let technologiesTop = $(".technologiesHome").offset().top;

    if (top > (technologiesTop - sizeTop)) {
        $(".technologiesHome__list").addClass('technologiesHome__list_anim_list');
        $(".technologiesHome__item").addClass('technologiesHome__item_anim_item');
        $(".technologiesHome__item").removeClass('technologiesHome__item_anim_itemReverse');
        $(".technologiesHome__list").removeClass('technologiesHome__list_anim_listReverse');
    }
});



