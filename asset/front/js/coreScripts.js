$(document).ready(function () {
    $(".sfHover").hover(function () {
        $(this).find(".sub-menu").css("display", "block");
    }, function () {
        $(this).find(".sub-menu").css("display", "none");
    });

    /************** FlexSlider *********************/
    $('.flexslider').flexslider({
        animation: "fade",
        touch: true,
        controlNav: false,
        prevText: "&nbsp;",
        nextText: "&nbsp;"
    });

    $('.carousel').carousel({
        interval: 300
    });
});
(function ($) {
    $.fn.loadILEle = function (params, func) {
        var _this = this;
        $[typeof params.method == 'string' ? params.method : 'get'](params.link, $.inArray(typeof params.query, ['string', 'object']) > -1 ? params.query : {}).always(function (response) {
            var data = {};
            try {
                data = JSON.parse(response.responseText.substring(9))[0];
            } catch (e) {
                alert("AJAX ERROR ===> " + e.toLocaleString());
            }
            if (typeof history.pushState == "function") {
                window.history.pushState({}, null, typeof params.query == "string" && params.method == "get" ? params.link + "?" + params.query : params.link);
            }
            func.call(_this, data);
        });
    };
})($, jQuery);