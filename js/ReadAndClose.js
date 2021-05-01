$(function(){
  $('.accbox label').on('click', function(e){
    if($(this).text() === 'READ'){
      $(this).text("CLOSE");
    }else{
      $(this).text("READ");
    }
  });
});
