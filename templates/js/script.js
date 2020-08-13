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

    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
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
