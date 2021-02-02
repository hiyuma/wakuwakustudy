$(function(){
  $('.closeButton').on('click', function(){
    if($(this).text() === 'READ MORE'){
      $(this).text("CLOSE");
    }else{
      $(this).text("READ MORE");
    }
  });
});