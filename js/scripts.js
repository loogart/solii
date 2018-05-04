$(document).ready(function () {
    $("#showWindows").click(function () {
        $("nav.sub-menu__1").toggleClass("d-flex");
        $("nav.sub-menu__2").removeClass("d-flex");
        $(this).toggleClass("active");
        $("#showDoors").removeClass("active");
    });
    $("#showDoors").click(function () {
        $("nav.sub-menu__2").toggleClass("d-flex");
        $("nav.sub-menu__1").removeClass("d-flex");
        $(this).toggleClass("active");
        $("#showWindows").removeClass("active");
    });
    
    // Search UI
    $("#showSearch").click(function () {
        $(".search-box").toggleClass("d-flex");
        $(".search-box input").focus();
        $("nav.sub-menu__1").removeClass("d-flex");
        $("nav.sub-menu__2").removeClass("d-flex");
        $("#showDoors").removeClass("active");
        $("#showWindows").removeClass("active");
        $(".scrim").toggleClass("d-flex");
    });
    $("#hideSearch").click(function () {
        $(".search-box").removeClass("d-flex");
        $(".scrim").toggleClass("d-flex");
        $(".search-box input").blur();
    });
    $(".scrim").click(function () {
        $(".search-box").removeClass("d-flex");
        $("nav.sub-menu__1").removeClass("d-flex");
        $("nav.sub-menu__2").removeClass("d-flex");
        $("#showWindows").removeClass("active");
        $("#showDoors").removeClass("active");
        $(this).toggleClass("d-flex");
        $(".search-box input").blur();
    });
    
    // Product page CTA UI visibility
    $(window).scroll(function () {
        if ($(window).scrollTop() + $(window).height() == $(document).height()) {
            $(".get-a-quote").addClass("d-none")
        } else {
            $(".get-a-quote").removeClass("d-none")
        }
    });
    $(document).on('keydown', function (e) {
        if (e.keyCode === 27) {
            $(".search-box").removeClass("d-flex");
            $(".scrim").removeClass("d-flex");
            $("nav.sub-menu__1").removeClass("d-flex");
            $("nav.sub-menu__2").removeClass("d-flex");
        }
    });
    //on scroll remove sub nav
    $(document).scroll(function () {
        $("nav.sub-menu__1").removeClass("d-flex");
        $("nav.sub-menu__2").removeClass("d-flex");
        $("#showWindows").removeClass("active");
        $("#showDoors").removeClass("active");
    });
    
    //lightbox for products
    $(".product-images").magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'image',
        // other options
        gallery: {
            enabled: true
        },
        mainClass: 'mfp-with-zoom', // this class is for CSS animation below
        zoom: {
            enabled: true, // By default it's false, so don't forget to enable it

            duration: 250, // duration of the effect, in milliseconds
            easing: 'ease-in-out', // CSS transition easing function

            // The "opener" function should return the element from which popup will be zoomed in
            // and to which popup will be scaled down
            // By default it looks for an image tag:
            opener: function (openerElement) {
                // openerElement is the element on which popup was initialized, in this case its <a> tag
                // you don't need to add "opener" option if this code matches your needs, it's defailt one.
                return openerElement.is('img') ? openerElement : openerElement.find('img');
            }
        }
    });
    
});


// typeahead
var links = [
    {
        name: "Inswing Windows",
        link: "./product.html"
        },
    {
        name: "Outswing Windows",
        link: "./product.html"
        },
    {
        name: "Push-Out Windows",
        link: "./product.html"
        },
    {
        name: "Hung Windows",
        link: "./product.html"
        },
    {
        name: "Single Windows",
        link: "./product.html"
    },
    {
        name: "Specialty Windows",
        link: "./product.html"
    },
    {
        name: "Single Doors",
        link: "./product.html"
        },
    {
        name: "French Doors",
        link: "./product.html"
        },
    {
        name: "Contemporary Doors",
        link: "./product.html"
        },
    {
        name: "Lift and Slide Doors",
        link: "./product.html"
        },
    {
        name: "Garage Doors",
        link: "./product.html"
    },
    {
        name: "Specialty Doors",
        link: "./product.html"
    }
];

var source = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    local: links
});

source.initialize();

$('#searchStuff .typeahead').typeahead(null, {
    name: 'matched-links',
    displayKey: 'name',
    source: source.ttAdapter(),
    templates: {
        empty: [
      '<div class="empty-message">',
      '<p class="h5">Sorry :(</p><hr>',
      '<p>No results for this search.</p>',
      '</div>'
    ].join('\n'),
        suggestion: Handlebars.compile('<a href="{{link}}">{{name}}</a>')
    }
});