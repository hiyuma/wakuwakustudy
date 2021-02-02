$(function(){
  $('.accbox label').on('click', function(){
    if($(this).text() === 'OPEN'){
      $(this).text("CLOSE");
    }else{
      $(this).text("OPEN");
    }
  });
});