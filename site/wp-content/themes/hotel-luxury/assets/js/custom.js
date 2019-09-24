(function($) {
    "use strict";

    $('#primary-nav-mobile-a').click(function (e) {
       e.preventDefault();
       $(this).toggleClass('primary-nav-opened');
       $('#primary-nav-id').toggleClass('primary-nav-mobile');
    });

    $('.thumb-wrapper').each(function() { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled:true
            }
        });
    });

    $('#main_slider').owlCarousel({
        smartSpeed: 1000,
        animateOut: 'fadeOut',
        loop: true,
        items: 1,
        margin: 0,
        nav: true,
        navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        dots: true,
        rtl: hotel_luxury.rtl
    });

    // back to top button
    if ( $('#to-top').length) {
        var scrollTrigger = 100, // px
            backToTop = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('#to-top').addClass('show');
                } else {
                    $('#to-top').removeClass('show');
                }
            };
        backToTop();
        $(window).on('scroll', function () {
            backToTop();
        });
        $('#to-top').on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }

})(jQuery);