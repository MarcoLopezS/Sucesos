(function($) {
    "use strict"; // Start of use strict

    var $post_carousel = $(".post-carousel");
    var $post_carousel2 = $(".post-carousel2");
    var $post_carousel3 = $(".post-carousel3");
    var $post_carousel4 = $(".post-carousel4");
    var $post_carousel5 = $(".post-carousel5");
    var $post_carousel6 = $(".post-carousel6");

    var $single_carousel = $(".single-carousel");
    var $news_carousel = $(".news-carousel");
    var $menu_carousel = $(".menu-carousel");
    var $menu_carousel2 = $(".menu-carousel2");
    var $product_slider = $(".product-slider");

    // POST CAROUSEL
    if ($post_carousel.length && $.fn.slick) {
        $post_carousel.slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
            prevArrow: $('.prev'),
            nextArrow: $('.next')
        });
    }

    // POST CAROUSEL
    if ($post_carousel3.length && $.fn.slick) {
        $post_carousel3.slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: true,
            prevArrow: $('.prev4'),
            nextArrow: $('.next4')
        });
    }

    // POST CAROUSEL
    if ($product_slider.length && $.fn.slick) {
        $product_slider.slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
            prevArrow: $('.prev3'),
            nextArrow: $('.next3')
        });
    }

    // POST CAROUSEL
    if ($post_carousel2.length && $.fn.slick) {
        $post_carousel2.slick({
            dots: true,
            infinite: true,
            arrows: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            }, {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    }

    // POST CAROUSEL
    if ($post_carousel4.length && $.fn.slick) {
        $post_carousel4.slick({
            dots: true,
            infinite: true,
            arrows: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            }, {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    }

    new WOW().init();
    //$('.wrapper div').addClass('wow fadeIn');
    $('header div').removeClass('wow fadeIn');

    // POST CAROUSEL
    if ($post_carousel5.length && $.fn.slick) {
        $post_carousel5.slick({
            dots: true,
            infinite: true,
            arrows: false,
            speed: 300,
            centerMode: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            }, {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    }

    // POST CAROUSEL
    if ($post_carousel6.length && $.fn.slick) {
        $post_carousel6.slick({
            dots: true,
            infinite: true,
            arrows: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            }, {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    }

    // POST CAROUSEL
    if ($menu_carousel.length && $.fn.slick) {
        $menu_carousel.slick({
            dots: false,
            infinite: true,
            arrows: true,
            speed: 300,
            slidesToShow: 5,
            slidesToScroll: 1,
            prevArrow: $('.prev2'),
            nextArrow: $('.next2'),
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            }, {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    }

    // POST CAROUSEL
    if ($menu_carousel2.length && $.fn.slick) {
        $menu_carousel2.slick({
            dots: false,
            infinite: true,
            arrows: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            prevArrow: $('.prev5'),
            nextArrow: $('.next5'),
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            }, {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    }

    // POST SINGLE CAROUSEL
    if ($single_carousel.length && $.fn.slick) {
        $single_carousel.slick({

            autoplay: false,
            dots: true,
            prevArrow: $('.prev1'),
            nextArrow: $('.next1'),
            customPaging: function(slider, i) {
                var thumb = $(slider.$slides[i]).data('thumb');
                return '<a><img src="' + thumb + '"></a>';
            },

            responsive: [{
                breakpoint: 500,
                settings: {
                    dots: false,
                    arrows: false,
                    infinite: false,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    }

    // SLIDER CAROUSEL
    if ($news_carousel.length && $.fn.slick) {
        $news_carousel.slick({
            infinite: true,
            slidesToShow: 1,
            vertical: true,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToScroll: 1,
            dots: false,
            arrows: false
        });
    }

    $('ul.tabs li').on('click', function() {
        var tab_id = $(this).attr('data-tab');

        $('ul.tabs li').removeClass('current');
        $('.tab-content').removeClass('current');

        $(this).addClass('current');
        $("#" + tab_id).addClass('current');
    })

    $(".search-trigger1 i").on('click', function() {
        $(".search-wrap1").toggleClass("active");
        $(".search-trigger1").toggleClass("active");
    });

    $(".search-trigger2").on('click', function() {
        $(".search-wrap2").addClass("active");
    });

    $(".sw2-close").on('click', function() {
        $(".search-wrap2").removeClass("active");
    });

    $(".offset-trigger").on('click', function() {
        $(this).toggleClass("active");
        $("#sidebar-wrapper").toggleClass("active");
        $(".wrapper").toggleClass("active");
    });

    $('.counter').ShareCounter({
        url: 'http://portalperu.pe/',
        increment: true
    });

})(jQuery); // End of use strict

$(".blog-prev").prepend($("#rel-1"));
$(".blog-next").prepend($("#rel-2"));

//AGREGANDO NOTICIAS EN CONTENEDORES DE DESTACADOS
$("#destacado-izq").prepend($("#destacado-1"));
$("#destacado-der").prepend($("#destacado-3"));
$("#destacado-der").prepend($("#destacado-2"));

//DESTACADO 2
var texto2 = $("#destacado-2 h4").text();
$("#destacado-2 .layout-detail").removeClass('padding-25');
$("#destacado-2 .layout-detail").addClass('padding-20');
$("#destacado-2 .layout-detail h4").remove();
$("#destacado-2 .layout-detail").prepend('<h5>'+texto2+'</h5>');

//DESTACADO 3
var texto3 = $("#destacado-3 h4").text();
$("#destacado-3 .layout-detail").removeClass('padding-25');
$("#destacado-3 .layout-detail").addClass('padding-20');
$("#destacado-3 .layout-detail h4").remove();
$("#destacado-3 .layout-detail").prepend('<h5>'+texto3+'</h5>');

//AGREGANDO NOTICIAS EN CONTENEDORES DE NORMAL
$("#normal-sup").prepend($("#normal-3"));
$("#normal-sup").prepend($("#normal-2"));
$("#normal-sup").prepend($("#normal-1"));
$("#normal-inf").prepend($("#normal-6"));
$("#normal-inf").prepend($("#normal-5"));
$("#normal-inf").prepend($("#normal-4"));