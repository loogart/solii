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
    });
    $("#hideSearch").click(function () {
        $(".search-box").removeClass("d-flex");
    });


});
