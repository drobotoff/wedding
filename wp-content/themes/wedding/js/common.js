/**
 * Wedding
 */

(function($) {

    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav: true,
        // autoplay:true,
        // autoplayTimeout:5000,
        // autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });

    // Home carousel items

    // $('.home-slider-top .items').owlCarousel({
    //     loop:true,
    //     margin:10,
    //     nav:true,
    //     autoplay:true,
    //     autoplayTimeout:5000,
    //     autoplayHoverPause:true,
    // });

    // Faq

    $('.question-item').removeClass('selected');
    $('.question-item').first().addClass('selected');
    $('.answer-item').hide();
    $('#answer-1').show();

    $('.questions-container .item').on('click', function() {

        let id = $(this).data('id');

        $('.question-item').removeClass('selected');
        $(this).addClass('selected');

        $('.answer-item').hide();
        $('#answer-' + id).show();
    });

    $('#send-question-button').on('click', function() {
        $('.send-question-from-bg').show();
        $('.send-question-from').show();
    });

    $('#send-question-form-close').on('click', function() {
        $('.send-question-from-bg').hide();
        $('.send-question-from').hide();
    });

    $('#send-question-button2').on('click', function() {
        $('.send-question-from-bg').show();
        $('.send-question-from').hide();
        $('.send-question-success').show();
    });

    $('#send-question-success-close').on('click', function() {
        $('.send-question-from-bg').hide();
        $('.send-question-from').hide();
        $('.send-question-success').hide();
    });

    // Menu course

    $('#menu-item-193 a').click(function(e) {

        e.preventDefault();
        e.stopPropagation();
        e.stopImmediatePropagation();

        console.log('clist menu item');

        $('.top-menu-bg').show();
        $('.top-menu').show();

    });

    $('.close-menu').click(function(e) {
        $('.top-menu-bg').hide();
        $('.top-menu').hide();
    });

    $('.top-menu-bg').click(function(e) {
        $('.top-menu-bg').hide();
        $('.top-menu').hide();
    });


})( jQuery );
