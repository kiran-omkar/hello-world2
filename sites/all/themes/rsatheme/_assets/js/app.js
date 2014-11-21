$(document).ready(function () {

    //Box Carousel
    if ($('#slider1').length > 0){
        $('#slider1').tinycarousel({ marginSet: 162 });
    }

    //Change Menu
    $("div[class$='navbar-collapse collapse'] > ul.menu").removeClass("menu").addClass("nav navbar-nav");
    $("div[class$='navbar-collapse collapse']").find(".leaf").removeClass("leaf");
    //For Sub-Menu - Level 1
    if ($("div[class$='navbar-collapse collapse'] > ul > li > ul.menu").length > 0) {
        $("div[class$='navbar-collapse collapse'] > ul > li:eq(0)").addClass("dropdown");
        $("div[class$='navbar-collapse collapse'] > ul > li a:eq(0)").addClass("dropdown-toggle").attr("data-toggle","dropdown").append(" <span class='caret'></span>").css("background-color","transparent!important");
        $("div[class$='navbar-collapse collapse'] > ul > li > ul.menu").removeClass("menu").addClass("dropdown-menu").attr("role", "menu").css("margin-left","14px");
    }

    //iPad / Mobile View

    $("div.res-main-menu").find(".menu").removeClass("menu");
    $("div.res-main-menu").find(".leaf").removeClass("leaf");

});