(function ($) {
    "use strict";
    
    jQuery(document).ready(function($){
        //switch event
        $(document).on("change",'#switch-price',function(){
            $('#monthly').addClass('monthly-value');
            $('#annually').addClass('anually-value');
            $(this).attr('id','switch-price-open');
        })
        //switch event
        $(document).on("change",'#switch-price-open',function(){
            $('#monthly').removeClass('monthly-value');
            $('#annually').removeClass('anually-value');
            $(this).attr('id','switch-price');
        })
        
        //magnific popup
        var $videoPopup = $('.video-play-btn');
         $videoPopup.magnificPopup({
             type: 'video'
         });
        //smoth achor effect
        $('#primary-menu li a,#header-btn a').on('click', function (e) {
            e.preventDefault();
            var anchor = $(this).attr('href');
            var top = $(anchor).offset().top;
            $('html, body').animate({
                scrollTop: $(anchor).offset().top
            }, 1000);
            $(this).parent().addClass('active').siblings().removeClass('active');
        });
         //activate clients carousel 
        var $clientsLogoCarousel = $('#clients_carousel');
        $clientsLogoCarousel.owlCarousel({
                loop: true,
                dots: false,
                nav: true,
                navText: ['<i class="fas fa-caret-left"></i>','<i class="fas fa-caret-right"></i>'],
                margin:20,
                autoplay: true,
                autoPlayTimeout: 1000,
                responsive: {
                    0: {
                        items: 2,
                        nav: false
                    },
                    600: {
                        items: 3,
                        nav: false
                    },
                    767: {
                        items: 4,
                        nav: false
                    },
                    960: {
                        items: 5
                    },
                    1200: {
                        items: 5
                    },
                    1920: {
                        items: 6
                    }
                }
            });
            //responsive menu activation
            var $slickNav = $('#primary-menu');
            $slickNav.slicknav({
                prependTo: '.responsive-menu',
                label: ''
            });
            //back to top 
            $(document).on('click', '.back-to-top', function () {
                $("html,body").animate({
                    scrollTop: 0
                }, 2000);
            });
    });
    //define variable for store last scrolltop
    var lastScrollTop = '';
    $(window).on('scroll', function (e) {
        //back to top show/hide
        var ScrollTop = $('.back-to-top');
        if ($(window).scrollTop() > 1000) {
            ScrollTop.fadeIn(1000);
        } else {
            ScrollTop.fadeOut(1000);
        }
        /*--sticky menu activation--*/
        var st = $(this).scrollTop();
        var mainMenuTop = $('.navbar-area');
        if ($(window).scrollTop() > 1000) {
            if (st > lastScrollTop) {
                // hide sticky menu on scrolldown 
                mainMenuTop.removeClass('nav-fixed');
            } else {
                // active sticky menu on scrollup 
                mainMenuTop.addClass('nav-fixed');
            }
            
        } else {
            mainMenuTop.removeClass('nav-fixed');
        }
        lastScrollTop = st;

    });

    $(window).on('load', function () {
        //preloader
        var preLoder = $("#preloader");
        preLoder.fadeOut(500);
        //back to top hide
        var backtoTop = $('.back-to-top')
        backtoTop.fadeOut(100);
    });

}(jQuery));	