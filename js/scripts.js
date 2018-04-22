$(document).ready(function () {
    $("#showWindows").click(function () {
        $("nav.sub-menu__1").toggleClass("d-flex");
        $("nav.sub-menu__2").removeClass("d-flex");
    });
    $("#showDoors").click(function () {
        $("nav.sub-menu__2").toggleClass("d-flex");
        $("nav.sub-menu__1").removeClass("d-flex");
    });
    $("#showSearch").click(function () {
        $(".search-box").toggleClass("d-flex");
        $(".search-box input").focus();
        $(".scrim").toggleClass("d-flex");

    });
    $("#hideSearch").click(function () {
        $(".search-box").removeClass("d-flex");
        $(".scrim").toggleClass("d-flex");
    });

    $(".scrim").click(function () {
        $(".search-box").removeClass("d-flex");
        $(".scrim").toggleClass("d-flex");
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
