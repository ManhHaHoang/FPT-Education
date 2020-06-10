jQuery(document).ready(function() {
    $(document).scroll(function () {
        var y = $(this).scrollTop();
        var h = $(window).height();
        if (y > h) {
            $('.backtopbox').fadeIn();
        } else {
            $('.backtopbox').fadeOut();
        }
    });

    $('.backtopbox').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $('#header').offset().top
        }, 500);
    });

    $('.nav-link').on('click', function(e) {
        var currentAttrValue = $(this).attr('href');
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $(currentAttrValue).offset().top
        }, 500);
    });

    $('#open-menu, .background-emty ').on('click', function(e) {
        $('body').toggleClass('open-menu');
    });

    if (screen.width < 990) {
        $('.nav-link').on('click', function(e) {
            $('body').toggleClass('open-menu');
        });

    }

});
