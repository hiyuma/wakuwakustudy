$(function () {
  var topBtn = $("#page_top");
  topBtn.hide();

  $(window).scroll(function () {
    if ($(this).scrollTop() > 150) {
      topBtn.fadeIn();
    } else {
      topBtn.fadeOut();
    }
  });
});
