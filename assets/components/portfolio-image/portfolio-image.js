import './portfolio-image.scss';
import $ from "jquery";



$(window).on("scroll", function () {

    let top = $(window).scrollTop();
    let technologiesTop = null;
    let technologiesHeight = null;
    let sizeTop = 0;
    let technologies = $(".technologies").offset().top;
    let technologiesH = $(window).scrollTop();
    let technologiesHe = $(".technologies").outerHeight();
    console.log("Size: " + technologies);
    console.log("Height: " + technologiesH);
    console.log("Height2: " + technologiesHe);

     if ($(window).width() >= 320) {
        sizeTop = 0;
        technologiesTop = $(".technologies").offset().top;
        technologiesHeight = $(".technologies").outerHeight();
        console.log("Size: " + sizeTop);
         console.log("technologiesTop: " + technologiesTop);
        console.log("technologiesHeight: " + technologiesHeight);
     }

    if ($(window).width() >= 768) {
        sizeTop = 500;
        technologiesTop = $(".portfolio-image").offset().top;
        technologiesHeight = $(".portfolio-image").outerHeight();
    }

    // if ($(window).width() >= 1280) {
    //     sizeTop = 8;
    //     technologiesTop = $(".portfolio-image").offset().top;
    //     technologiesHeight = $(".portfolio-image").outerHeight();
    //     console.log("Size: " + sizeTop);
    //     console.log("technologiesTop: " + technologiesTop);
    //     console.log("technologiesHeight: " + technologiesHeight);
    // }

    if (top > (technologiesTop - sizeTop) && (top < (technologiesTop + 1 * technologiesHeight))) {
        $(".portfolio-image__notebook").addClass("portfolio-image__notebook_active");
        $(".portfolio-image__notebook-image").addClass("portfolio-image__notebook-image_active");
        $(".portfolio-image__addition-image").addClass("portfolio-image__addition-image_active");
        $(".portfolio-image__main-notebook").addClass("portfolio-image__main-notebook_active");
        $(".portfolio-image__main-notebook-image").addClass("portfolio-image__main-notebook-image_active");
        $(".portfolio-image__phone-image").addClass("portfolio-image__phone-image_active");
        $(".portfolio-image__shadow").addClass("portfolio-image__shadow_active");
        $(".portfolio-image__phone").addClass("portfolio-image__phone_active");
        $(".portfolio-image__main-iphone-image").addClass("portfolio-image__main-iphone-image_active");
    }
});