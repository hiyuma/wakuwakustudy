$(function() {
	$("#weather")
			.submit(
					function(e) {
						// フォーム送信キャンセル
						e.preventDefault();
						// 前回のデータを削除
						$('.row').empty();
						// フォームでの送信値を取得
						const area = $('#area').val();

						// 天気予報
						$
								.ajax({
									url : 'http://zdis55.sim.zdrv.com/json2jsonp.php?url=http://weather.livedoor.com/forecast/webservice/json/v1?city='
											+ area,
									type : 'GET',
									dataType : 'jsonp',
									success : function(data) {
										// 見出し
										$('.weather-title').text(
												data.location.city + 'の天気');
										// 天気予報
										for (let i = 0; i < data.forecasts.length; i++) {
											const forecast = data.forecasts[i];
											const col = $('<div class="col-sm-4">');
											// 天気画像
											col
													.append(
															$('<img src = " '
																	+ forecast.image.url
																	+ '"alt ="'
																	+ forecast.image.title
																	+ '">'))
													// 今日明日明後日
													.append(
															$('<h3>'
																	+ forecast.dateLabel
																	+ '</h3>'))
													// 天気文字
													.append(
															$('<p>'
																	+ forecast.telop
																	+ '</p>'));
											// DOMツリーに追加
											$('.row').append(col);
										}
									},
									error : function() {
										console.log('エラー');
									}

								});
					});

});
