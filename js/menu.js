
$(document).ready(function () {
    $("#menuButton").click(function () {
        $(".otherButton1").toggle(500);
        $(".otherButton2").toggle(700);
        $(".otherButton3").toggle(900);
        $(".otherButton4").toggle(1000);
        $(".otherButton5").toggle(1100);
        $(".otherButton6").toggle(1200);
        $(".otherButton7").toggle(1250);
    });
    $("#menuButton").click(function () {
        $('.flip').toggleClass('flip-active');
        if ($('.flip').hasClass('flip-active')) {
            $('.flip').addClass('fa-times');
            $('.flip').removeClass('fa-bars');
        } else {
            $('.flip').addClass('fa-bars');
            $('.flip').removeClass('fa-times');
        }
    });
});
