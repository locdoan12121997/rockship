jQuery(window).on("load", function() {
    "use strict";
    
    if (jQuery('body').css('direction') == 'rtl') {
        jQuery('[data-vc-full-width="true"]').each(function(i, v) {
            jQuery(this).css('right', jQuery(this).css('left')).css('left', 'auto');
        });
    }
    
    jQuery("#pre-loader").fadeOut(), jQuery(".video-popup").magnificPopup({
        type: "iframe",
        iframe: {
            markup: '<div class="mfp-iframe-scaler"><div class="mfp-close"></div><iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe></div>',
            patterns: {
                youtube: {
                    index: "youtube.com/",
                    id: "v=",
                    src: "//www.youtube.com/embed/%id%?autoplay=1"
                },
                vimeo: {
                    index: "vimeo.com/",
                    id: "/",
                    src: "//player.vimeo.com/video/%id%?autoplay=1"
                },
                gmaps: {
                    index: "//maps.google.",
                    src: "%id%&output=embed"
                }
            },
            srcAction: "iframe_src"
        }
    })
});

jQuery(document).ready(function() {
    "use strict";
    
    jQuery('.search-item > a').click(function(){
        jQuery('.search-for').slideToggle();
    });

    jQuery(".top-arrow").on("click", function() {
        return jQuery("html, body").animate({
            scrollTop: 0
        }, 700), !1
    });

    jQuery(".carousel-box .carousel").each(function() {
        jQuery(this).closest(".carousel-box");
        jQuery(this).owlCarousel({
            autoPlay: jQuery(this).data("carousel-autoplay"),
            items: jQuery(this).data("carousel-items"),
            navigation: jQuery(this).data("carousel-nav"),
            pagination: jQuery(this).data("carousel-pagination"),
            singleItem: jQuery(this).data("carousel-single"),
            transitionStyle: jQuery(this).data("carousel-transition"),
            slideSpeed: jQuery(this).data("carousel-speed"),
            navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            lazyLoad: !0,
            autoHeight: !0,
            margin: 30
        })
    });

    jQuery("header nav").meanmenu(), jQuery("#testimonial_carosule").owlCarousel({
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: !0,
        autoPlay: !0,
        transitionStyle: "backSlide"
    });

    jQuery(".project-count").on("inview", function(a, b) {
        return b && (jQuery(this).find(".timer").each(function() {
            var a = jQuery(this);
            jQuery({
                Counter: 0
            }).animate({
                Counter: a.text()
            }, {
                duration: 2e3,
                easing: "swing",
                step: function() {
                    a.text(Math.ceil(this.Counter))
                }
            })
        }), jQuery(this).unbind("inview")), !1
    });

    var a = jQuery(".verticall-middle").height(),
        b = jQuery(".verticall-middle-inner").height();

    jQuery(".verticall-middle-inner").css("margin-top", (a - b) / 2), jQuery(".accordion_head").click(function() {
        jQuery(".accordion_body").is(":visible") && (jQuery(".accordion_body").slideUp(300), jQuery(".plusminus").text("+")), jQuery(this).next(".accordion_body").is(":visible") ? (jQuery(this).next(".accordion_body").slideUp(300), jQuery(this).children(".plusminus").text("+")) : (jQuery(this).next(".accordion_body").slideDown(300), jQuery(this).children(".plusminus").text("-"))
    });

    jQuery(".popup").magnificPopup({
        type: "image"
    });

    jQuery('.make-bg').each(function () {
        var background = jQuery(this).data('background');
        jQuery(this).css('background-image', 'url("' + background + '")');
    });
});

jQuery(window).load(function() {
    "use strict";
    
    var a = jQuery(".portfolioContainer");
    
    a.isotope({
        filter: "*",
        animationOptions: {
            duration: 750,
            easing: "linear",
            queue: !1
        }
    });

    jQuery(".portfolioFilter a").click(function() {
        jQuery(".portfolioFilter .current").removeClass("current"), jQuery(this).addClass("current");
        var b = jQuery(this).attr("data-filter");
        return a.isotope({
            filter: b,
            animationOptions: {
                duration: 750,
                easing: "linear",
                queue: !1
            }
        }), !1
    })
});

jQuery(document).ready(function() {
    "use strict";

    function c() {
        var b = this.currentItem;
        jQuery("#thumb-sync").find(".owl-item").removeClass("synced").eq(b).addClass("synced"), void 0 !== jQuery("#thumb-sync").data("owlCarousel") && d(b)
    }

    function d(a) {
        var c = b.data("owlCarousel").owl.visibleItems,
            d = a,
            e = !1;
        for (var f in c)
            if (d === c[f]) var e = !0;
        e === !1 ? d > c[c.length - 1] ? b.trigger("owl.goTo", d - c.length + 2) : (d - 1 === -1 && (d = 0), b.trigger("owl.goTo", d)) : d === c[c.length - 1] ? b.trigger("owl.goTo", c[1]) : d === c[0] && b.trigger("owl.goTo", d - 1)
    }

    var a = jQuery("#full-sync"),
        b = jQuery("#thumb-sync");

    a.owlCarousel({
        singleItem: !0,
        slideSpeed: 1e3,
        navigation: !1,
        pagination: !1,
        transitionStyle: "fade",
        afterAction: c,
        responsiveRefreshRate: 200
    });

    b.owlCarousel({
        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [991, 2],
        itemsTablet: [768, 2],
        itemsTabletSmall: !1,
        itemsMobile: [600, 1],
        pagination: !1,
        responsiveRefreshRate: 100,
        afterInit: function(a) {
            a.find(".owl-item").eq(0).addClass("synced")
        }
    });

    jQuery("#thumb-sync").on("click", ".owl-item", function(b) {
        b.preventDefault();
        var c = jQuery(this).data("owlItem");
        a.trigger("owl.goTo", c)
    });

    /* Masonry call here... */

    var $grid = jQuery('.project-packery .packery-inside').isotope({
        itemSelector: '.pckItem',
        layoutMode: 'packery',
        packery: { fitWidth: true }
    });

    var $grid = jQuery('.project-packery-old .packery-inside-old').isotope({
        itemSelector: '.pckItem-old',
        layoutMode: 'packery',
        packery: { fitWidth: true }
    });

    jQuery(".portfolioFilter a").on("click",function(){
        $grid.isotope({ filter: jQuery(this).data('filter') });
    });
});

equalheight = function(a) {
    "use strict";
    var e, b = 0,
        c = 0,
        d = new Array;
    jQuery(a).each(function() {
        e = jQuery(this), jQuery(e).height("auto");
        var f, a = e.position().top;
        if (c != a) {
            for (f = 0; f < d.length; f++) d[f].height(b);
            d.length = 0, c = a, b = e.height(), d.push(e)
        } else d.push(e), b = b < e.height() ? e.height() : b;
        for (f = 0; f < d.length; f++) d[f].height(b)
    })
}

jQuery(window).load(function() {
    "use strict";
    equalheight(".eq-blog-main .eq-blog-list")
});

jQuery(window).resize(function() {
    "use strict";
    equalheight(".eq-blog-main .eq-blog-list")
});

jQuery(window).bind("load resize scroll", function() {
    "use strict";
    var b = jQuery(window).scrollTop();
    jQuery(".title-bread-main").filter(function() {
        return jQuery(this).offset().top < b + jQuery(window).height() && jQuery(this).offset().top + jQuery(this).height() > b
    }).css("background-position", "0px " + parseInt(-b / 4) + "px")
});

jQuery(window).on("scroll", function() {
    "use strict";
    
    jQuery(this).scrollTop() > 500 ? jQuery(".top-arrow").fadeIn() : jQuery(".top-arrow").fadeOut();
    
    var a = jQuery(window).scrollTop();
    
    if (a > 30) {
        jQuery(".sticky .header-menu").addClass("fixed"); {
            jQuery(".sticky").outerHeight()
        }
    } else {
        jQuery(".sticky .header-menu").removeClass("fixed"); {
            jQuery(".sticky").outerHeight()
        }
    }
    
    var c = jQuery(window).height();
    
    if (jQuery(window).scrollTop() > c) {
        jQuery(".header-base .header-menu").addClass("fixed"); {
            jQuery(".header-base").outerHeight()
        }
    } else {
        jQuery(".header-base .header-menu").removeClass("fixed"); {
            jQuery(".header-base").outerHeight()
        }
    }
});

jQuery(document).ready(function() {
    jQuery('.error-outer').css('height', jQuery(window).height() - 115);
});

jQuery(window).resize(function() {
    jQuery('.error-outer').css('height', jQuery(window).height() - 115);
});