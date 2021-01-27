


// $('.hide')
// .toggle("fast", changeText);

// function changeText() {
//   if ($(this).css('display') == 'block') {
//     $('.hide').addClass('close').removeClass('opne');
//     $("#btn-inner").text("CLOSE");

//   } else {
//     $('.hide').addClass('open').removeClass('close');
//     $("#btn-inner").text("OPEN");
//   }
// };
$(function () {
  $('#open-item').click(function () {
    var $opentext = $(this).find('.hide');
    if ($opentext.hasClass('open')) {
      $opentext.removeClass('open').slideUp('slow');
      $(this).find('#btn-inner').text('OPEN');

    } else {
      $opentext.addClass('open').slideDown('slow');
      $(this).find('#btn-inner').text('CLOSE');

    }
    $(this)
      .find('i.fa')
      .toggleClass('fa-angle-double-down')
      .toggleClass('fa-angle-double-right');
  });

});

