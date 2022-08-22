; (function ($) {
    "use strict";

    $("[class*='cushycms']").each(function () {
        $(this).attr({ 'title': '' });
    });

    $(document).ready(function () {
        var current = this.location.href;
        $("#access .menu > li").each(function () {
            var $this = $(this);
            $('a', this).each(function () {
                if (current == this.href) {
                    $this.addClass('current')
                }
            });
        });
    });

    scrollButton();

    $(".mobile-menu-button").click(function (e) {
        e.preventDefault();
        $(".mobile-menu-button").parent().find('.menu-wrapper').slideToggle();
    });

    $(".main-menu a").click(function (e) {
        if ('#' === $(this).attr('href')) {
            e.preventDefault();
        }
    });

    function openTab(selector) {
        $('.tab-content').removeClass('active');
        $(selector).addClass('active');
    }

    if (window.location.hash) {
        if ($(window.location.hash).hasClass('tab-content')) {
            setTimeout(function () {
                window.scrollTo(0);
                openTab(window.location.hash);
            }, 1);
        }
    }

    $(document).on('click', 'a', function (event) {
        if (this.hash) {
            if (this.origin + this.pathname === window.location.origin + window.location.pathname) {
                if ($(this.hash).hasClass('tab-content')) {
                    event.preventDefault();
                    if ($(event.target).parents('.tab-navigation').length) {
                        openTab(this.hash);
                        history.pushState(null, "", this.hash);
                    } else {
                        window.location = this.href;
                        location.reload();
                    }
                }
            }
        }
    });

    $(window).on('popstate', function () {
        if ($(this.location.hash).hasClass('tab-content')) {
            openTab(this.location.hash);
        }
    });

})(jQuery);


function scrollButton() {
    var $target = $('.sticky-header'),
        offset = $('.site-header').height(),
        wScrollCurrent, wScrollBefore, wScrollDiff, didScroll;

    $(window).on('scroll', function () {
        didScroll = true;
    });

    var hasScrolled = function () {
        wScrollCurrent = $(window).scrollTop();
        wScrollDiff = wScrollBefore - wScrollCurrent;
        if (wScrollCurrent <= offset) {
            $target.removeClass('visible');
        } else if (wScrollDiff < offset) {
            $target.addClass('visible');
        }
        wScrollBefore = wScrollCurrent;
    }
    hasScrolled();

    setInterval(function () {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 0);
}