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

</head>

<body>
  <main>
    <header>
      <nav class="header" id="menu">
        <ul>
          <li><a class="active" href="index.html"><span class="material-icons">home</span>HOME</a></li>
          <li><a href="aboutsite.html"><span class="material-icons">assignment_ind</span>ABOUT</a>
          </li>
          <li><a href="gallery.html"><span class="material-icons">photo_camera</span>PHOTO</a></li>
          <li><a href="diary.html"><span class="material-icons">text_snippet</span>DIARY</a></li>
          <li><a href="jspractice/index.html"><span class="material-icons">laptop_mac</span>WORK</a></li>
        </ul>
      </nav>
    </header>

    <div id="puyo-menu">

      <button id="menuButton" class="button"><i class="fa fa-bars flip" aria-hidden="true"></i></button>

      <button id="home" class="otherButton1 hidden openMenu"><a class="link" href="smt.html">
          <i class="fas fa-money-check-alt" aria-hidden="true"></i></a></button>

      <button id="about" class="otherButton2 hidden openMenu"><a class="link" href="about.html">
          <i class="fa fa-user" aria-hidden="true"></i></a></button>

      <button id="work" class="otherButton3 hidden openMenu"><a class="link" href="avocado.html">
          <i class="fab fa-pagelines" aria-hidden="true"></i></a></button>

      <button id="contact" class="otherButton4 hidden openMenu"><a class="link" href="movie.html">
          <i class="fas fa-film" aria-hidden="true"></i></a></button>

      <button id="contact" class="otherButton5 hidden openMenu"><a class="link" href="english.html">
          <i class="fas fa-font" aria-hidden="true"></i></a></button>

      <button id="contact" class="otherButton6 hidden openMenu"><a class="link" href="https://twitter.com/hiyuma" target="blank" rel="noopener">
          <i class="fab fa-twitter" aria-hidden="true"></i></a></button>

      <button id="contact" class="otherButton7 hidden openMenu"><a class="link" href="mailto:info@developershirai.com">
          <i class="fas fa-envelope" aria-hidden="true"></i></a></button>

    </div>

    <div id="widget" class="mujirushi2">
			<iframe src="https://rcm-fe.amazon-adsystem.com/e/cm?o=9&p=48&l=ur1&category=homekitchen&banner=1HY8QMW19KZAFF39AA02&f=ifr&linkID=290c135104bd6ccfad58ccfd2cad7e3b&t=hiyuma-22&tracking_id=hiyuma-22" width="728" height="90" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
		</div>   
    

    <header>
      <h1 class="logo">集</h1>
    </header>

    <div class="btn-facebook"><iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopershirai.shop%2F&width=136&layout=button&action=like&size=small&share=true&height=65&appId" width="136" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a>
      <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
    
    <div id="article">
      <section>
    <?php
//アンケート結果が保存するたテキストファイルを指定
$textfile = 'log/log.txt';
//ファイルを開く
$fp = fopen($textfile, 'rb');   //rで読み込みモード、bで互換性維持 
 
if(!$fp){  //fopen()関数の戻り値を検証
  exit('ファイルがないか異常があります。');
}
 
//テキストを排他的にロックし、その戻り値を検証
if(!flock($fp, LOCK_EX)){
  exit('ファイルをロックできませんでした。');
}
 
//ファイルポインタが EOF（最後）に達するまで、テキストの各行を読み出し、trim()関数で文字列の先頭および末尾にあるホワイトスペースを取り除き配列に格納
while(!feof($fp)){
  $results[] = trim(fgets($fp));
}
 
if($results[18] != 0){  //アンケート結果が0でなければ集計
  echo '<p>アンケートの集計結果：総数 ' . $results[18] . ' 件</p>';
 
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
  $male_rate   = round($results[0] / $results[18] * 100);
  $female_rate = round($results[1] / $results[18] * 100);
 
  echo '  <td>男性：' . $results[0] . '人 女性：' . $results[1] . '人</td>';
  echo '  <td>男性：' . $male_rate . '% 女性：' . $female_rate . '%</td>';
?>
  </tr>
  <tr>
  <td>年齢</td>
<?php
  $age10_rate = round($results[2] / $results[18] * 100);
  $age20_rate = round($results[3] / $results[18] * 100);
  $age30_rate = round($results[4] / $results[18] * 100);
  $age40_rate = round($results[5] / $results[18] * 100);
  $age50_rate = round($results[6] / $results[18] * 100);
  $age60_rate = round($results[7] / $results[18] * 100);
  $age70_rate = round($results[8] / $results[18] * 100);
  $age80_rate = round($results[9] / $results[18] * 100);
 
  echo '  <td>10代：' . $results[2] . '人<br>' .
             '20代：' . $results[3] . '人<br>' .
             '30代：' . $results[4] . '人<br>' .
             '40代：' . $results[5] . '人<br>' .
             '50代：' . $results[6] . '人<br>' .
             '60代：' . $results[7] . '人<br>' .
             '70代：' . $results[8] . '人<br>' .
         '80代以上：' . $results[9] . '人</td>';
  echo '  <td>10代：' . $age10_rate . '%<br>' .
             '20代：' . $age20_rate . '%<br>' .
             '30代：' . $age30_rate . '%<br>' .
             '40代：' . $age40_rate . '%<br>' .
             '50代：' . $age50_rate . '%<br>' .
             '60代：' . $age60_rate . '%<br>' .
             '70代：' . $age70_rate . '%<br>' .
         '80代以上：' . $age80_rate . '%</td>';
?>
  </tr>
  <tr>
  <td>趣味</td> 
  
<?php
  $hobby1_rate = round($results[10] / $results[18] * 100);
  $hobby2_rate = round($results[11] / $results[18] * 100);
  $hobby3_rate = round($results[12] / $results[18] * 100);
  $hobby4_rate = round($results[13] / $results[18] * 100);
  $hobby5_rate = round($results[14] / $results[18] * 100);
  $hobby6_rate = round($results[15] / $results[18] * 100);
  $hobby7_rate = round($results[16] / $results[18] * 100);
  $hobby8_rate = round($results[17] / $results[18] * 100);
 
  echo '  <td>音楽：' . $results[10] . '人<br>' .
         'スポーツ：' . $results[11] . '人<br>' .
               '車：' . $results[12] . '人<br>' .
           'アート：' . $results[13] . '人<br>' .
             '旅行：' . $results[14] . '人<br>' .
           'カメラ：' . $results[15] . '人<br>' .
             '読書：' . $results[16] . '人<br>' .
           'その他：' . $results[17] . '人</td>';
  echo '  <td>音楽：' . $hobby1_rate . '%<br>' .
         'スポーツ：' . $hobby2_rate . '%<br>' .
               '車：' . $hobby3_rate . '%<br>' .
           'アート：' . $hobby4_rate . '%<br>' .
             '旅行：' . $hobby5_rate . '%<br>' .
           'カメラ：' . $hobby6_rate . '%<br>' .
             '読書：' . $hobby7_rate . '%<br>' .
           'その他：' . $hobby8_rate . '%</td>';
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
echo '<p class="link"><a href="questionnaire1.php">アンケートページへ戻る</a></p>';
?>
      </section></div>

      <div id="aside">
                            <div id="section" class="prof">
                                   <div class="line">ADMINISTRATOR</div>

                                   <p><a href="about.html"><img src="gallery/nekotemari.gif" alt="猫カフェ"></a></p>

                                   <i class="fas fa-user-circle"></i>
                                   <em3 id="プロフィール"><a href="about.html">し ら ひ ゅ ー</a></em3>
                                   <br><br>
                                   <div id="prof">
                                          <a href="https://twitter.com/hiyuma?ref_src=twsrc%5Etfw"><i
                                                        class="fab fa-twitter-square"></i></a>
                                          <a href="https://line.me/ti/p/MOJmLGebP8"><i class="fab fa-line"></i></a>
                                          <a href="https://github.com/hiyuma"><i class="fab fa-github"></i></a>
                                          <a href="https://iFLYER.tv/hiyuma"><i class="fas fa-headphones"></i></a>
                                          <a href="https://soundcloud.com/hiyuma-shirai"><i
                                                        class="fab fa-soundcloud"></i></a>
                                          <a href="mailto:info@developershirai.com"><i class="fas fa-envelope"></i></a>
                                   </div>

                                   <p>
                                          <em5>※プログラミング・英語・投資勉強中※</em5>
                                   </p>

                                   <div class="studylist">
                                          <span><i class="fas fa-paw"></i><a
                                                        href="jspractice/omikuji.html"><small>今日のねこちゃんおみくじ</small></a></span>
                                          <br>
                                          <span><i class="fas fa-compact-disc"></i><a
                                                        href="music.html"><small>今日の1曲</small></a></span>
                                   </div>


                                   <p>※お問い合わせは<span class="material-icons">
                                                 email</span><a href="mailto:info@developershirai.com">こちら</a>からお願い致します。
                                   </p>

                                   <div class="dog">
                                          <i class="fas fa-dog fa-spin fa-fw"></i>
                                          <i class="fas fa-dog fa-fw"></i>
                                          <i class="fas fa-dog fa-fw"></i>
                                          <i class="fas fa-dog fa-fw"></i>
                                          <i class="fas fa-dog fa-fw"></i>
                                          <i class="fas fa-dog fa-fw"></i>
                                          <i class="fas fa-dog fa-fw"></i>
                                   </div>
                            </div>

                            <div id="recommend"></div>

                            <div id="widget3" class="recommended">
                                   <p> しらひゅー今季オススメ商品 </p>
                                   <hr>
                                   <iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0"
                                          scrolling="no" frameborder="0"
                                          src="https://rcm-fe.amazon-adsystem.com/e/cm?ref=qf_sp_asin_til&t=hiyuma-22&m=amazon&o=9&p=8&l=as1&IS1=1&detail=1&asins=B0111105RE&linkId=512c6f0c12f94bb0f137592a10a7f286&bc1=ffdede&amp;lt1=_blank&fc1=ffffff&lc1=ffffff&bg1=ffdede&f=ifr">
                                   </iframe>

                                   <iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0"
                                          scrolling="no" frameborder="0"
                                          src="https://rcm-fe.amazon-adsystem.com/e/cm?ref=qf_sp_asin_til&t=hiyuma-22&m=amazon&o=9&p=8&l=as1&IS1=1&detail=1&asins=B07TYHRWSD&linkId=2bed6eb6894ff64c8503d66ab11a2a6f&bc1=ffdede&amp;lt1=_blank&fc1=ffffff&lc1=ffffff&bg1=ffdede&f=ifr">
                                   </iframe>

                                   <iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0"
                                          scrolling="no" frameborder="0"
                                          src="https://rcm-fe.amazon-adsystem.com/e/cm?ref=qf_sp_asin_til&t=hiyuma-22&m=amazon&o=9&p=8&l=as1&IS1=1&detail=1&asins=B08958F7SN&linkId=f3f4ba277c7d3a48bfabd859f650f77f&bc1=ffdede&amp;lt1=_blank&fc1=ffffff&lc1=ffffff&bg1=ffdede&f=ifr">
                                   </iframe>

                                   <iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0"
                                          scrolling="no" frameborder="0"
                                          src="https://rcm-fe.amazon-adsystem.com/e/cm?ref=tf_til&t=hiyuma-22&m=amazon&o=9&p=8&l=as1&IS1=1&detail=1&asins=B087S27C9R&linkId=3bdaab26f501463c9acd3a29a5d62100&bc1=ffdede&amp;lt1=_blank&fc1=ffffff&lc1=ffffff&bg1=ffdede&f=ifr">
                                   </iframe>

                                   <iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0"
                                          scrolling="no" frameborder="0"
                                          src="https://rcm-fe.amazon-adsystem.com/e/cm?ref=tf_til&t=hiyuma-22&m=amazon&o=9&p=8&l=as1&IS1=1&detail=1&asins=B01LYRR6ON&linkId=ee6892949d4f6788fa2a40f15fa226cf&bc1=ffdede&amp;lt1=_blank&fc1=ffffff&lc1=ffffff&bg1=ffdede&f=ifr">
                                   </iframe>

                                   <iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0"
                                          scrolling="no" frameborder="0"
                                          src="https://rcm-fe.amazon-adsystem.com/e/cm?ref=tf_til&t=hiyuma-22&m=amazon&o=9&p=8&l=as1&IS1=1&detail=1&asins=B079QRQTCR&linkId=60aacc8ddec062cf19f685218fd04dbf&bc1=ffdede&amp;lt1=_blank&fc1=ffffff&lc1=ffffff&bg1=ffdede&f=ifr">
                                   </iframe>

                                   <iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0"
                                          scrolling="no" frameborder="0"
                                          src="https://rcm-fe.amazon-adsystem.com/e/cm?ref=qf_sp_asin_til&t=hiyuma-22&m=amazon&o=9&p=8&l=as1&IS1=1&detail=1&asins=B07SHC76CH&linkId=68981efda4ec916a307145642e4da6a8&bc1=ffdede&amp;lt1=_blank&fc1=ffffff&lc1=ffffff&bg1=ffdede&f=ifr">
                                   </iframe>

                                   <iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0"
                                          scrolling="no" frameborder="0"
                                          src="https://rcm-fe.amazon-adsystem.com/e/cm?ref=qf_sp_asin_til&t=hiyuma-22&m=amazon&o=9&p=8&l=as1&IS1=1&detail=1&asins=B07NQDQWW6&linkId=3a56d256cdb8c2ecce4ec7a25bf7e54e&bc1=ffdede&amp;lt1=_blank&fc1=ffffff&lc1=ffffff&bg1=ffdede&f=ifr">
                                   </iframe>
                            </div>

                            <div id="widget3" class="switch">
                                   <p>時間に限りがある為
                                          <br>買うのを我慢している
                                   </p>
                                   <hr>
                                   <iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0"
                                          scrolling="no" frameborder="0"
                                          src="https://rcm-fe.amazon-adsystem.com/e/cm?ref=qf_sp_asin_til&t=hiyuma-22&m=amazon&o=9&p=8&l=as1&IS1=1&detail=1&asins=B07WS7BZYF&linkId=5a3115f776ed0f930bd304d1acc41982&bc1=ffdede&amp;lt1=_blank&fc1=9c9c9c&lc1=707070&bg1=ffdede&f=ifr">
                                   </iframe>
                            </div>

                            <div id="widget3" class="a8">

                                   <a href="https://px.a8.net/svt/ejp?a8mat=3BOCPF+9LBFN6+1WP2+674EP" rel="nofollow">
                                          <img border="0" width="120" height="60" alt=""
                                                 src="https://www26.a8.net/svt/bgt?aid=201010515580&wid=001&eno=01&mid=s00000008903001041000&mc=1"></a>
                                   <img border="0" width="1" height="1"
                                          src="https://www14.a8.net/0.gif?a8mat=3BOCPF+9LBFN6+1WP2+674EP" alt="">

                                   <a href="https://px.a8.net/svt/ejp?a8mat=3BOCPF+G3ASDU+1JUK+ZRALD" rel="nofollow">
                                          <img border="0" width="120" height="60" alt=""
                                                 src="https://www27.a8.net/svt/bgt?aid=201010515973&wid=001&eno=01&mid=s00000007238006006000&mc=1"></a>
                                   <img border="0" width="1" height="1"
                                          src="https://www18.a8.net/0.gif?a8mat=3BOCPF+G3ASDU+1JUK+ZRALD" alt="">


                                   <a href="https://px.a8.net/svt/ejp?a8mat=3BOCPF+G3W7ZM+1JUK+HXSGH" rel="nofollow">
                                          <img border="0" width="120" height="60" alt=""
                                                 src="https://www29.a8.net/svt/bgt?aid=201010515974&wid=001&eno=01&mid=s00000007238003013000&mc=1"></a>
                                   <img border="0" width="1" height="1"
                                          src="https://www16.a8.net/0.gif?a8mat=3BOCPF+G3W7ZM+1JUK+HXSGH" alt="">

                                   <a href="https://px.a8.net/svt/ejp?a8mat=3BOCPF+A1ZKKY+3AQG+NUES1" rel="nofollow">
                                          <img border="0" width="120" height="60" alt=""
                                                 src="https://www27.a8.net/svt/bgt?aid=201010515608&wid=001&eno=01&mid=s00000015388004005000&mc=1"></a>
                                   <img border="0" width="1" height="1"
                                          src="https://www12.a8.net/0.gif?a8mat=3BOCPF+A1ZKKY+3AQG+NUES1" alt="">

                                   <a href="https://px.a8.net/svt/ejp?a8mat=3BOFU5+7BR2JE+1JUK+61Z81" rel="nofollow">
                                          <img border="0" width="120" height="60" alt=""
                                                 src="https://www26.a8.net/svt/bgt?aid=201014573443&wid=002&eno=01&mid=s00000007238001017000&mc=1"></a>
                                   <img border="0" width="1" height="1"
                                          src="https://www11.a8.net/0.gif?a8mat=3BOFU5+7BR2JE+1JUK+61Z81" alt="">
                            </div>

                            <div id="widget3" class="kaimin muji">
                                   <iframe src="https://rcm-fe.amazon-adsystem.com/e/cm?o=9&p=21&l=ur1&category=homekitchen&banner=1NB7AKK59M1WYQTVDHR2&f=ifr&linkID=451a6a0a66ce05df3e107787d100902d&t=hiyuma-22&tracking_id=hiyuma-22"
                                          width="125" height="125" scrolling="no" border="0" marginwidth="0"
                                          style="border:none;" frameborder="0"></iframe>
                                   <iframe src="https://rcm-fe.amazon-adsystem.com/e/cm?o=9&p=21&l=ur1&category=homekitchen&banner=1118RRKGRGP6E53AWF02&f=ifr&linkID=4c1584b22751fff367dd07f4f2d15704&t=hiyuma-22&tracking_id=hiyuma-22"
                                          width="125" height="125" scrolling="no" border="0" marginwidth="0"
                                          style="border:none;" frameborder="0"></iframe>
                            </div>

                            <div id="widget3" class="newlife 214">
                                   <iframe src="https://rcm-fe.amazon-adsystem.com/e/cm?o=9&p=21&l=ur1&category=seasons&banner=19V1W74AERWFQE61V102&f=ifr&linkID=343127fbf4d2f1596bee67918b29d55f&t=hiyuma-22&tracking_id=hiyuma-22"
                                          width="125" height="125" scrolling="no" border="0" marginwidth="0"
                                          style="border:none;" frameborder="0"></iframe>
                                   <iframe src="https://rcm-fe.amazon-adsystem.com/e/cm?o=9&p=21&l=ur1&category=seasons&banner=1ND1EDK3G72PR8RM7582&f=ifr&linkID=cd5377118077b36de8010a41add4b796&t=hiyuma-22&tracking_id=hiyuma-22"
                                          width="125" height="125" scrolling="no" border="0" marginwidth="0"
                                          style="border:none;" frameborder="0"></iframe>
                            </div>

                            <div id="widget3" class="pantri">
                                   <iframe src="https://rcm-fe.amazon-adsystem.com/e/cm?o=9&p=294&l=ur1&category=amazonrotate&f=ifr&linkID=6f54d9751c82c3788c8aca8f1c21db08&t=hiyuma-22&tracking_id=hiyuma-22"
                                          width="225" height="100" scrolling="no" border="0" marginwidth="0"
                                          style="border:none;" frameborder="0"></iframe>
                            </div>
                     </div>
              </main>



              <footer>
                     <div class="footer">
                            Copyright © 2020 developershirai All Rights Reserved.
                     </div>
              </footer>

              <script type="text/javascript">
                     $(function () {
                            $('a').each(function () {
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