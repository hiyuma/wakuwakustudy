$(document).ready(function(){
	$.ajax({
		type: 'GET',
		dateType : 'json',
		url: 'http://api.open-notify.org/astros.json',
		success : function(data){
			//メンバーリスト作成
			for (let i = 0; i < data.number; i++){
				const member = data.people[i];
				const trs = $(
				"<tr><th>" + (i+1) + "</th><td>" + member.name + "</td></tr>"
				);
				// DOMツリーに追加
				$(".name-list").append(trs);
			}
		},
		error : function(){
			console.log("エラー");
		},
	});
});