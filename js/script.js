$(window).scroll(function() {
    var top_of_element = $("#experience").offset().top;
    var bottom_of_element = $("#experience").offset().top + $("#experience").outerHeight();
    var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
    var top_of_screen = $(window).scrollTop();
    if ((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element)){
        $(".exp1").addClass("animationExp1");
        $(".exp2").addClass("animationExp2");
        $(".exp3").addClass("animationExp3");
    }
});  

$(window).scroll(function() {
    var top_of_element = $("#education").offset().top;
    var bottom_of_element = $("#education").offset().top + $("#education").outerHeight();
    var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
    var top_of_screen = $(window).scrollTop();
    if ((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element)){
        $(".educ1").addClass("animationEduc1");
        $(".educ2").addClass("animationEduc2");
    }
});  