$(document).ready(function () {
    var stickyY = 500;
    var stickyNav = function () {
        var scrollTop = $(window).scrollTop();

        if (scrollTop > stickyY) {
            $('.sticky').addClass('top-nav-fixed');
        } else {
            $('.sticky').removeClass('top-nav-fixed');
        }
    };

    //Check to see if the window is top if not then display button
    function jumpToTop() {
        if ($(this).scrollTop() > 100) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    }

    //Click event to scroll to top
    $('.scrollToTop').click(function () {
        $('html, body').animate({scrollTop: 0}, 800);
        return false;
    });

    $(window).scroll(function () {
        stickyNav();
        jumpToTop();
    });

});