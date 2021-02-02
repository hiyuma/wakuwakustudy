<!DOCTYPE html>
<html lang="ja" class="js">

<head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <meta name=”robots” content=”index”>
       <meta name="description" content="長野県出身、元美容師/イベントオーガナイザーのしらひゅー(白井　飛友馬)が、WEB制作・デザイン・開発などのプログラミング言語(PHP/PHP/Java/JSP/Servlet/HTML/CSS/JavaScriptなど)や英語(TOEIC・日常英会話)、アボカド栽培などを学ぶために作成したサイトです。このページは、PHPを独学するために作成しました。現在は作成したアンケート集計機能を公開しています。特に面白味はないです。" />
       <meta name="keywords" content="プログラミング,PHP,アンケート">

       <title>しらひゅーのわくわくスタディ アンケート</title>
       <link rel="shortcut icon" href="favicon.ico" />
       <link rel="stylesheet" href="mystyle.css">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
       <div id="page_top">
              <a href="#"></a>
       </div>

       <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
       <script src="js/jquery-3.5.1.min.js"></script>
       <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
       <style>
              table {
                     border-collapse: separate;
                     border-spacing: 5px;
                     margin: 0 auto;
                     color:dimgray;
              }

              td,
              th {
                     border: none;
                     padding: 10px;
                     text-align: center;
                     border-radius: 7px;
                     background: linear-gradient(-45deg, rgba(221, 220, 220, 0.6), rgba(255, 236, 234, 0.9), rgba(218, 251, 237, 0.8));
              }

              th:first-child {
                     width: 6%;
              }
              td:first-child{
                     font-weight: bold;
              }

              td:nth-child(2),td:nth-child(3) {
                     width: 47%;
                     font-size: smaller;
                     font-weight: lighter;
                     line-height: 3.2;
              }

        
       </style>
</head>

<body>
       <main>
       <?php include('parts/header.php') ?>

              <?php include('parts/menuButton.php'); ?>
              <?php include('parts/widget/widget_214.php'); ?>


              <header>
                     <h1 class="logo">集</h1>
              </header>

              <?php include('parts/facebook_twitter_button.php'); ?>

              <div id="article">
                     <section>
                            <?php
                            //アンケート結果が保存するたテキストファイルを指定
                            $textfile = '../log/log.txt';
                            //ファイルを開く
                            $fp = fopen($textfile, 'rb');   //rで読み込みモード、bで互換性維持 

                            if (!$fp) {  //fopen()関数の戻り値を検証
                                   exit('ファイルがないか異常があります。');
                            }

                            //テキストを排他的にロックし、その戻り値を検証
                            if (!flock($fp, LOCK_EX)) {
                                   exit('ファイルをロックできませんでした。');
                            }

                            //ファイルポインタが EOF（最後）に達するまで、テキストの各行を読み出し、trim()関数で文字列の先頭および末尾にあるホワイトスペースを取り除き配列に格納
                            while (!feof($fp)) {
                                   $results[] = trim(fgets($fp));
                            }

                            if ($results[38] != 0) {  //アンケート結果が0でなければ集計
                                   echo '<p>アンケートの集計結果：総数 ' . $results[38] . ' 件</p>';

                            ?>

                                   <table>
                                          <thead>
                                                 <tr>
                                                        <th>質問</th>
                                                        <th>人数</th>
                                                        <th>比率</th>
                                                 </tr>
                                          </thead>
                                          <tbody>
                                                 <tr>
                                                        <td>性別</td>
                                                        <?php
                                                        // 男女の比率計算
                                                        $male_rate   = round($results[0] / $results[38] * 100);
                                                        $female_rate = round($results[1] / $results[38] * 100);
                                                        $others_rate = round($results[2] / $results[38] * 100);

                                                        echo '  <td>男性 ： ' . $results[0] . '人
                                                        <br> 女性 ： ' . $results[1] . '人
                                                        <br> その他 ： ' . $results[2] . '人</td>';
                                                        
                                                        echo '  <td>男性 ： ' . $male_rate . '%<br> 女性 ： ' . $female_rate . '%<br>その他 ： ' . $others_rate . '%</td>';
                                                        ?>
                                                 </tr>
                                                 <tr>
                                                        <td>年齢</td>
                                                        <?php
                                                        $age10_rate = round($results[3] / $results[38] * 100);
                                                        $age20_rate = round($results[4] / $results[38] * 100);
                                                        $age30_rate = round($results[5] / $results[38] * 100);
                                                        $age40_rate = round($results[6] / $results[38] * 100);
                                                        $age50_rate = round($results[7] / $results[38] * 100);
                                                        $age60_rate = round($results[8] / $results[38] * 100);
                                                        $age70_rate = round($results[9] / $results[38] * 100);
                                                        $age80_rate = round($results[10] / $results[38] * 100);

                                                        echo '  <td>10代 ： ' . $results[3] . '人<br>' .
                                                               '20代 ： ' . $results[4] . '人<br>' .
                                                               '30代 ： ' . $results[5] . '人<br>' .
                                                               '40代 ： ' . $results[6] . '人<br>' .
                                                               '50代 ： ' . $results[7] . '人<br>' .
                                                               '60代 ： ' . $results[8] . '人<br>' .
                                                               '70代 ： ' . $results[9] . '人<br>' .
                                                               '80代以上 ： ' . $results[10] . '人</td>';
                                                        echo '  <td>10代 ： ' . $age10_rate . '%<br>' .
                                                               '20代 ： ' . $age20_rate . '%<br>' .
                                                               '30代 ： ' . $age30_rate . '%<br>' .
                                                               '40代 ： ' . $age40_rate . '%<br>' .
                                                               '50代 ： ' . $age50_rate . '%<br>' .
                                                               '60代 ： ' . $age60_rate . '%<br>' .
                                                               '70代 ： ' . $age70_rate . '%<br>' .
                                                               '80代以上 ： ' . $age80_rate . '%</td>';
                                                        ?>
                                                 </tr>
                                                 <tr>
                                                        <td>恋人いるいない</td>
                                                        <?php
                                                        $lover1m_rate = round($results[11] / $results[38] * 100);
                                                        $lover1e_rate = round($results[12] / $results[38] * 100);
                                                        $lover2e_rate = round($results[13] / $results[38] * 100);
                                                        $lover3e_rate = round($results[14] / $results[38] * 100);
                                                        $lover1n_rate = round($results[15] / $results[38] * 100);
                                                        $lover2n_rate = round($results[16] / $results[38] * 100);
                                                        $lover3n_rate = round($results[17] / $results[38] * 100);
                                                        $lover4n_rate = round($results[18] / $results[38] * 100);
                                                        $lover0others_rate = round($results[19] / $results[38] * 100);

                                                        echo '  <td>既婚 ： ' . $results[11] . '人<br>' .
                                                               'いる(お付き合い1年未満) ： ' . $results[12] . '人<br>' .
                                                               'いる(お付き合い1年以上) ： ' . $results[13] . '人<br>' .
                                                               'いる(お付き合い3年以上) ： ' . $results[14] . '人<br>' .
                                                               'いない(1年未満) ： ' . $results[15] . '人<br>' .
                                                               'いない(1年以上) ： ' . $results[16] . '人<br>' .
                                                               'いない(3年以上) ： ' . $results[17] . '人<br>' .
                                                               'いない(友達以上、恋人未満有) ： ' . $results[18] . '人<br>'.
                                                               'その他 ： ' . $results[19] . '人</td>';

                                                        echo '  <td>既婚 ： ' . $lover1m_rate . '%<br>' .
                                                               'いる(お付き合い1年未満) ： ' . $lover1e_rate . '%<br>' .
                                                               'いる(お付き合い1年以上) ： ' . $lover2e_rate . '%<br>' .
                                                               'いる(お付き合い3年以上) ： ' . $lover3e_rate . '%<br>' .
                                                               'いない(1年未満) ： ' . $lover1n_rate . '%<br>' .
                                                               'いない(1年以上) ： ' . $lover2n_rate . '%<br>' .
                                                               'いない(3年以上) ： ' . $lover3n_rate . '%<br>' .
                                                               'いない(友達以上、恋人未満有) ： ' . $lover4n_rate . '%<br>' .
                                                               'その他 ： ' . $lover0others_rate . '%</td>';
                                                        ?>
                                                 </tr>
                                                 <tr>
                                                        <td>結婚相手に求めていること</td>

                                                        <?php
                                                        $request1_rate = round($results[20] / $results[38] * 100);
                                                        $request2_rate = round($results[21] / $results[38] * 100);
                                                        $request3_rate = round($results[22] / $results[38] * 100);
                                                        $request4_rate = round($results[23] / $results[38] * 100);
                                                        $request5_rate = round($results[24] / $results[38] * 100);
                                                        $request6_rate = round($results[25] / $results[38] * 100);
                                                        $request7_rate = round($results[26] / $results[38] * 100);
                                                        $request8_rate = round($results[27] / $results[38] * 100);
                                                        $request9_rate = round($results[28] / $results[38] * 100);
                                                        $request10_rate = round($results[29] / $results[38] * 100);
                                                        $request11_rate = round($results[30] / $results[38] * 100);
                                                        $request12_rate = round($results[31] / $results[38] * 100);
                                                        $request13_rate = round($results[32] / $results[38] * 100);
                                                        $request14_rate = round($results[33] / $results[38] * 100);
                                                        $request15_rate = round($results[34] / $results[38] * 100);
                                                        $request16_rate = round($results[35] / $results[38] * 100);
                                                        $request17_rate = round($results[36] / $results[38] * 100);

                                                        echo '  <td>性格・雰囲気 ： ' . $results[20] . '人<br>' .
                                                               '誠実さ・思い遣り ： ' . $results[21] . '人<br>' .
                                                               '容姿・身長 ： ' . $results[22] . '人<br>' .
                                                               '地位・経済力 ： ' . $results[23] . '人<br>' .
                                                               '常識・教養 ： ' . $results[24] . '人<br>' .
                                                               '家事・生活能力 ： ' . $results[25] . '人<br>' .
                                                               '価値観・金銭感覚の相性 ： ' . $results[26] . '人<br>'.
                                                               '子供好き・育児参加 ： ' . $results[27] . '人<br>'.
                                                               '家族関係良好 ： ' . $results[28] . '人<br>'.
                                                               '年齢 ： ' . $results[29] . '人<br>'.
                                                               '包容力 ： ' . $results[30] . '人<br>'.
                                                               'ユーモア・面白さ ： ' . $results[31] . '人<br>'.
                                                               'センス ： ' . $results[32] . '人<br>'.
                                                               '体の相性・体力 ： ' . $results[33] . '人<br>'.
                                                               '食事・趣味などの好き嫌いの相性 ： ' . $results[34] . '人<br>'.
                                                               'ギャンブル・酒癖・喫煙しない ： ' . $results[35] . '人<br>'.
                                                               'その他 ： ' . $results[36] . '人</td>';

                                                        echo '  <td>性格・雰囲気 ： ' . $request1_rate . '%<br>' .
                                                               '誠実さ・思い遣り ： ' . $request2_rate . '%<br>' .
                                                               '容姿・身長 ： ' . $request3_rate . '%<br>' .
                                                               '地位・経済力 ： ' . $request4_rate . '%<br>' .
                                                               '常識・教養 ： ' . $request5_rate . '%<br>' .
                                                               '家事・生活能力 ： ' . $request6_rate . '%<br>' .
                                                               '価値観・金銭感覚の相性 ： ' . $request7_rate . '%<br>'.
                                                               '子供好き・育児参加 ： ' . $request8_rate . '%<br>'.
                                                               '家族関係良好 ： ' . $request9_rate . '%<br>'.
                                                               '年齢 ： ' . $request10_rate . '%<br>'.
                                                               '包容力 ： ' . $request11_rate . '%<br>'.
                                                               'ユーモア・面白さ ： ' . $request12_rate . '%<br>'.
                                                               'センス ： ' . $request13_rate . '%<br>'.
                                                               '体の相性・体力 ： ' . $request14_rate . '%<br>'.
                                                               '食事・趣味などの好き嫌いの相性 ： ' . $request15_rate . '%<br>'.
                                                               'ギャンブル・酒癖・喫煙しない ： ' . $request16_rate . '%<br>'.
                                                               'その他 ： ' . $request17_rate . '%</td>';
                                                        ?>
                                                 </tr>
                                          </tbody>
                                   </table>
                            <?php
                            } else {
                                   // アンケートデータがない場合
                                   echo '  <p class="msg">表示できるようなアンケートデータがありません。</p>';
                            }
                            fclose($fp);
                            echo '<p class="link"><i class="far fa-edit"></i><a href="questionnaire.php">アンケートページへ戻る</a></p>';
                            ?>
                     </section>
                     <?php include('parts/contents.php'); ?>
              </div>

              <div id="aside">
              <?php include('parts/prof.php'); ?>

                     <div id="recommend"></div>

                     <?php include('parts/widget/side_widget.php'); ?>
              </div>
       </main>



       <?php include('parts/footer.php'); ?>

       <script type="text/javascript">
              $(function() {
                     $('a').each(function() {
                            if ($(this).prop('href') == window.location.href) {
                                   $(this).addClass('active');
                                   $(this).parents('li').addClass('active');
                            }
                     });
              });
       </script>
       <script src="js/menu.js"></script>


</body>

</html>