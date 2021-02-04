$(function(){
  $('button.showResult').on('click', function(){
    if($(this).text() === '判定結果を表示する'){
      $(this).text("判定結果を非表示にする");
      $("p#results").addClass('show');
    }else{
      $(this).text("判定結果を表示する");
      $("p#results").removeClass('show');
    }
  });
});