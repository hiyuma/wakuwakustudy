$(function(){
  var flg = "off";
  $('.accbox label').on('click', function(e){
    if(flg == "off"){
      $(this).text("CLOSE");
      flg = "on";
    }else{
      $(this).text("READ");
      flg = "off";
    }
  });
});