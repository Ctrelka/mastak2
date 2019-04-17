import './technology.scss';
import $ from 'jquery';

let countItem = $(".technologies__item").length;
let oneItem = $(".technologies__list").width() / countItem;

if ($(window).width() > 767) {
    $(".technologies__item").css("width", oneItem);
}
let startColor = $(".technologies__list").data('color-start');
let endColor = $(".technologies__list").data('color-end');

if ($(window).width() > 720) {
    $(".technologies__list").addClass('technologies__wrapper');
} else {
    $(".technologies__list").append("<div class ='technologies__wrapper'> </div>");
}

let wrapperColor = $(".technologies__list").data("wrapper-color");
$(".technologies__wrapper").css("background", wrapperColor);

var colorArray = interpolateColors(startColor, endColor, countItem);

for (let i = 0; i < countItem; i++) {

    let delta = -1 * Math.abs(i - (countItem - 1) / 2) / (countItem - 1) + 1;

    $($(".technologies__addition")[i]).css({
        'background-color': `rgb(${colorArray[i][0]},${colorArray[i][1]},${colorArray[i][2]})`,
        'transform': 'scale(' + delta + ')'
    });
    $($(".technologies__name")[i]).css({
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
    let technologies = $(".technologies").offset().top;
    let technologiesH = $(window).scrollTop();
    let technologiesHe = $(".technologies").outerHeight();
    console.log("Size: " + technologies);
    console.log("Height: " + technologiesH);
    console.log("Height2: " + technologiesHe);

    if ($(window).width() >= 320) {
        sizeTop = 500;
    }

    if ($(window).width() >= 768) {
        sizeTop = 800;
    }

    let top = $(window).scrollTop();
    let technologiesTop = $(".technologies").offset().top;
    let technologiesHeight = $(".technologies").outerHeight();
    if (top > (technologiesTop - sizeTop)) {
        $(".technologies__list").addClass('technologies__list_anim_list');
        $(".technologies__item").addClass('technologies__item_anim_item');
        $(".technologies__item").removeClass('technologies__item_anim_itemReverse');
        $(".technologies__list").removeClass('technologies__list_anim_listReverse');
    }

    else {
        $(".technologies__item").addClass('technologies__item_anim_itemReverse');
        $(".technologies__list").addClass('technologies__list_anim_listReverse');
        $(".technologies__list").removeClass('technologies__list_anim_list');
        $(".technologies__item").removeClass('technologies__item_anim_item');
    }

});



