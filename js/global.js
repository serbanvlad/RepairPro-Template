$(document).ready(function () {

    //    Sticky nav
    var stickyNavTop = $('.sticky_nav').offset().top;

    var stickyNav = function () {
        var scrollTop = $(window).scrollTop();
        if (scrollTop > stickyNavTop) {
            $('.sticky_nav').addClass('sticky');
        } else {
            $('.sticky_nav').removeClass('sticky');
        }
    };
    stickyNav();
    $(window).scroll(function () {
        stickyNav();
    });

    // Slider carousel
    $('.carousel').carousel({
        interval: 9000,
        keyboard: true,
    })

    //    Modal video
    $('.modal_toggle').on('click', function () {
        $('.modal').fadeIn('.is-visible');
        // $('.modal_overlay').addClass('.is-visible');
    });

    $('.modal_overlay').on('click', function () {
        $('.modal').fadeOut('.is-visible');
    });

    //    Contact form
    //       $('.button_cta').click(function () {
    //           var name = $('.name').val();
    //           var email = $('.email').val();
    //           var phone = $('.phone').val();
    //           var subject = $('.subject').val();
    //
    //           alert('name:' + name + '\n email:' + email + '\n phone' + phone + '\n subject' + subject);
    //
    ////           if (name != '' && email != '' && phone != '' && subject != '') {
    ////               alert('Campurile sunt valide!');
    ////               $('.popup_ok').fadeIn(600);
    ////           } else {
    ////               $('.popup_error').fadeIn(600);
    ////           }
    //       });
    //
    ////       $('.exit_popup').click(function () {
    ////           $('.popup_general').fadeOut(600);
    ////       });

    //    Mobile menu
    $('.burger_menu').hide();
    
    $('.burger_icon').click(function () {
        $('.burger_menu').slideToggle();
    });
    
    $('.dropdown_burger').click(function () {
        $(this).next('.dropdown_content_burger').slideToggle()
            .siblings('.dropdown_content_burger:visible').slideUp();
        $(this).toggleClass("active");
        $(this).siblings('.dropdown_burger').removeClass("active");
    });


    //    Second slider
    $('.owl-carousel').owlCarousel({
        loop: true,
        smartSpeed: 1500,
        margin: 55,
        navClass: ["owl-prev", "owl-next"],
        nav: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
        }
    })

    //    Number counter
    $('.count').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
    
    
});