$(function(){
  var flg = "off";
  $('.closeButton').on('click', function(){
    if(flg == "off"){
      $(this).text("CLOSE");
      flg = "on";
    }else{
      $(this).text("READ MORE");
      flg = "off";
    }
  });
});