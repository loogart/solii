$(document).ready(function () {
    //parallax
    var rellax = new Rellax('.rellax');
    //navbar active states
    var loc = window.location.href; // returns the full URL
    if (/about/.test(loc)) {
        $("#aboutPage").addClass("active");
    } else if (/contact/.test(loc)) {
        $("#contactPage").addClass("active");
    }
    //sub navbar
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
        link: "./inswing-windows.php"
        },
    {
        name: "Outswing Windows",
        link: "./outswing-windows.php"
        },
    {
        name: "Push-Out Windows",
        link: "./pushout-windows.php"
        },
    {
        name: "Hung Windows",
        link: "./hung-windows.php"
        },
    {
        name: "Fixed Windows",
        link: "./fixed-windows.php"
    },
    {
        name: "Specialty Windows",
        link: "./specialty-windows.php"
    },
    {
        name: "Tilt-Turn Windows",
        link: "./tilt-turn-windows.php"
    },
    {
        name: "Wood Tilt-Turn Windows",
        link: "./wood-tilt-turn-windows.php"
    },
    {
        name: "Single Doors",
        link: "./single-doors.php"
        },
    {
        name: "French Doors",
        link: "./french-doors.php"
        },
    {
        name: "Lift & Slide",
        link: "./lift-and-slide-doors.php"
        },
    {
        name: "Screens",
        link: "./screens.php    "
        },
    {
        name: "Specialty Doors",
        link: "./specialty-doors.php"
    },
    {
        name: "Garage Doors",
        link: "./garage-doors.php"
    },
    {
        name: "Contemporary Doors",
        link: "./contemporary-doors.php"
    },
    {
        name: "Tilt-Turn Doors",
        link: "./tilt-and-turn-doors.php"
    },
    {
        name: "Steel Doors",
        link: "./steel-doors.php"
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
    limit: '12',
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
