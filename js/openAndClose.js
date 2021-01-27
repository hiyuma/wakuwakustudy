$(function(){
  var flg = "off";
  $('.accbox label').on('click', function(){
    if(flg == "off"){
      $(this).text("CLOSE");
      flg = "on";
    }else{
      $(this).text("OPEN");
      flg = "off";
    }
  });
});