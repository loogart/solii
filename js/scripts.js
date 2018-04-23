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

});
//Hit escape to exit
$(document).on('keydown', function (e) {
    if (e.keyCode === 27) {
        $(".search-box").removeClass("d-flex");
        $(".scrim").removeClass("d-flex");
        $("nav.sub-menu__1").removeClass("d-flex");
        $("nav.sub-menu__2").removeClass("d-flex");
    }
});

// typeahead
var links = [{
        name: "Inswing Windows",
        link: "http://loogart.com"
        },
    {
        name: "Outswing Windows",
        link: "http://loogart.com"
        },
    {
        name: "Loogart",
        link: "http://loogart.com"
        },
    {
        name: "Loogart Design",
        link: "http://loogart.com"
        },
    {
        name: "Doors",
        link: "#!"
}];

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
