$(".home-navigation a").click(function (e) {
    if ('#' === $(this).attr('href')) {
        e.preventDefault();
    }
});

var $asCtrl = $(".home-navigation .menu-bg");
var $menuDesc = $(".home-header .menu-descriptions");
var $menuImg = $(".home-header .menu-images");
$('.home-navigation .menu').children().hover(
    function () {
        var idx = $(this).index();
        var $ctrl = $asCtrl.find(".menu > li").eq(idx);
        var hasVisible = false;
        $(this).parent().each(function () {
            if ($(this).hasClass('visible')) {
                hasVisible = true;
            }
        });
        clearTimeout($ctrl.data('menuId'));
        if (hasVisible) {
            hideMenu(idx, true);
            $menuDesc.children().not(':eq(' + idx + ')').fadeOut('fast');
            $menuImg.children().not(':eq(' + idx + ')').removeClass('visible');
        }
        showMenu(idx);
        $menuDesc.children().eq(idx).fadeIn();
        $menuImg.children().eq(idx).addClass('visible');
    },
    function () {
        var idx = $(this).index();
        var $ctrl = $asCtrl.find(".menu > li").eq(idx),
            menuId = setTimeout(function () {
                hideMenu(idx);
                $menuDesc.children().eq(idx).fadeOut('fast');
                $menuImg.children().eq(idx).removeClass('visible');
            }, 100);
        $ctrl.data('menuId', menuId);
    }
);
function showMenu(idx) {
    $(".home-navigation .menu").each(function () {
        $(this).children().eq(idx).addClass("visible");
    });
}
function hideMenu(idx, reverse = false) {
    if (!reverse) {
        $(".home-navigation .menu").each(function () {
            $(this).children().eq(idx).removeClass("visible");
        });
    } else {
        $(".home-navigation .menu").each(function () {
            $(this).children().not(':eq(' + idx + ')').removeClass("visible");
        });
    }
}

$(document).ready(function () {
    var index = 0;
    setInterval(replaceArticle, 5000);
    function replaceArticle() {
        $menuImg.children().eq(index).addClass('slide-visible');
        $menuImg.children().not(':eq(' + index + ')').removeClass('slide-visible');
        index++;
        if (index > $menuImg.children().length) {
            index = 0;
        }
    }
});