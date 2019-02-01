
//-- header fixed JavaScript --> 
/**************************************************Header**********************************/

if ($(window).width() >= 580) {
    window.onscroll = function () {
        myFunction();
    };
    var header = document.getElementById("myHeader");
    var sticky = 460;
    function myFunction() {
        if (window.pageYOffset >= sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
}

/**************************************************Header_END**********************************/

//< !------scrollup---- - >
$(document).ready(function () {

    $(window).scroll(function () {

        if ($(this).scrollTop() > 100) {

            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });
    $('.scrollup').click(function () {
        $("html, body").animate({scrollTop: 0}, 1000);
        return false;
    });
});
$(".carousel").swipe({
    swipe: function (event, direction, distance, duration, fingerCount, fingerData) {

        if (direction == 'left')
            $(this).carousel('next');
        if (direction == 'right')
            $(this).carousel('prev');
    },
    allowPageScroll: "vertical"
});
/*************************PRO_SLIDER******************************/
$('#slider-pro').sliderPro();
if ($('#slider-pro').length > 0) {
    $('#slider-pro').sliderPro({
        width: 960,
        height: 950,
        fade: true,
        arrows: true,
        buttons: false,
        fullScreen: false,
        shuffle: false,
        smallSize: 500,
        mediumSize: 768,
        largeSize: 1024,
        thumbnailArrows: false,
        autoplay: true,
        thumbnailWidth: 148,
        thumbnailHeight: 120,

        breakpoints: {
            500: {
                thumbnailWidth: 60,
                thumbnailHeight: 30
            }
        }
    });
}
/*************************PRO_SLIDER******************************/
/*************************SLICK******************************/

$(document).ready(function () {
    $(".clients-carousel").slick({
        infinite: true,
        autoplay: true,
        arrows: true,
        dots: false,
        slidesToShow: 4,
        prevArrow: $(".clients-carousel-controls .prev"),
        nextArrow: $(".clients-carousel-controls .next"),
        responsive: [{
                breakpoint: 992,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 4
                }
            }, {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 4
                }
            }, {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 2
                }
            }]
    });
});

$(document).ready(function () {
    $(".clients-carousel2").slick({
        infinite: true,
        autoplay: true,
        arrows: true,
        dots: false,
        slidesToShow: 4,
        prevArrow: $(".clients-carousel-controls2 .prev"),
        nextArrow: $(".clients-carousel-controls2 .next"),
        responsive: [{
                breakpoint: 992,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 4
                }
            }, {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 4
                }
            }, {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 2
                }
            }]
    });
});

$(document).ready(function () {
    $(".clients-carousel3").slick({
        infinite: true,
        autoplay: true,
        arrows: true,
        dots: false,
        slidesToShow: 4,
        prevArrow: $(".clients-carousel-controls3 .prev"),
        nextArrow: $(".clients-carousel-controls3 .next"),
        responsive: [{
                breakpoint: 992,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 4
                }
            }, {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 4
                }
            }, {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 2
                }
            }]
    });
});


$(document).ready(function () {
    $(".we-accept-carousel").slick({
        infinite: true,
        autoplay: true,
        arrows: true,
        dots: false,
        slidesToShow: 5,
        prevArrow: $(".we-accept-carousel-controls .prev"),
        nextArrow: $(".we-accept-carousel-controls .next"),
        responsive: [{
                breakpoint: 992,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 5
                }
            }, {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 4
                }
            }, {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 3
                }
            }]
    });
});

$(document).ready(function () {
    $(".news-carousel").slick({
        infinite: true,
        autoplay: true,
        arrows: true,
        dots: false,
        slidesToShow: 4,
        prevArrow: $(".news-carousel-controls .prev"),
        nextArrow: $(".news-carousel-controls .next"),
        responsive: [{
                breakpoint: 992,
                settings: {
                    arrows: false,
                    slidesToShow: 3
                }
            }, {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 2
                }
            }, {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    slidesToShow: 1
                }
            }]
    });
});


$(".dropdown").hover(
        function () {
            $(this).addClass('show');
        }, function () {
    $(this).removeClass('show');
}
);

$(function () {
    $('.marquee').marquee({
        duration: 5000,
        steps: -2,
        duplicated: false,
        gap: 00,
        direction: 'left',
        pauseOnHover: true
    });
});


/*******************Price_Switcher********************/
//Pricing Table Script
jQuery(document).ready(function ($) {
    function pricingSwitcher(elementCheck, elementParent, elementPricing) {
        elementParent.find('.pts-left,.pts-right').removeClass('pts-switch-active');
        elementPricing.find('.pts-switch-content-left,.pts-switch-content-right').addClass('hidden');

        if (elementCheck.filter(':checked').length > 0) {
            elementParent.find('.pts-right').addClass('pts-switch-active');
            elementPricing.find('.pts-switch-content-right').removeClass('hidden');
        } else {
            elementParent.find('.pts-left').addClass('pts-switch-active');
            elementPricing.find('.pts-switch-content-left').removeClass('hidden');
        }
    }

    $('.pts-switcher').each(function () {
        var element = $(this),
                elementCheck = element.find(':checkbox'),
                elementParent = $(this).parents('.pricing-tenure-switcher'),
                elementPricing = $(elementParent.attr('data-container'));

        pricingSwitcher(elementCheck, elementParent, elementPricing);

        elementCheck.on('change', function () {
            pricingSwitcher(elementCheck, elementParent, elementPricing);
        });
    });
});
