$(function() {

  // 新規登録モーダル

  $('.signup-show').click(function() {
    $('#signup-modal').fadeIn();
  });

  $('#close-modal').click(function() {
    $('#signup-modal').fadeOut();
  });

  // 言語一覧

  $('.lesson').hover(
    function() {
      $(this).find('.text-contents').addClass('text-active');
    },
    function() {
      $(this).find('.text-contents').removeClass('text-active');
    }
  );
  
  $('.faq-list-item').click(function(){
    var answer = $(this).find('.answer');

    if(answer.hasClass('answer-open')){
      $(this).find('span').text('+');
      $(this).find('.answer').removeClass('answer-open');
        } else{
      $(this).find('span').text('-');
      $(this).find('.answer').addClass('answer-open');
    }
  });
  

});
