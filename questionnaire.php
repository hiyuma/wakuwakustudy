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
  <script src="js/jquery-3.5.1.min.js"></script>
  <style>
    p.error {
      margin: 0;
      color: red;
      font-weight: bold;
      margin-bottom: 1em;
    }

    #submitAria {
      text-align: center;
    }

    label {
      display: inline-block;
      margin: 5px 15px 5px 3px;

    }

    .submitButton {
      margin: 30px auto;
      display: inline-block;
      border-radius: 10%;
      font-size: 11pt;
      font-weight: bold;
      text-align: center;
      cursor: pointer;
      padding: 8px 11px;
      background: rgba(250, 230, 230, 0.62);
      color: #998d8d;
      line-height: 1em;
      transition: .3s;
      box-shadow: 1px 1px 9px #666666;
      border: none;
    }
    
    .submitButton:hover {
      box-shadow: none;
      color: rgba(250, 163, 110, 0.62);
      background: #ffffff;
    }

    .bold {
      font-weight: bold;
    }

    select {
      appearance: none;
      margin-bottom: 20px;
      padding: 7px 30px 7px 10px;
      font-size: 93%;
      line-height: 1.1em;
      border-radius: 5px;
      border: none;
      background-image: url(gallery/ICONS/angle-down-solid.svg);
      background-repeat: no-repeat;
      background-size: 12px 10px;
      background-position: right 10px center;
      background-color: #ffffff;
      outline-style: none;
    }

  </style>
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

        <p class="line">アンケート<i class="far fa-edit"></i></p>
        
          <p><img src="gallery/top/questionnaire2.jpg" alt="文房具"></p>
        <p>
        <i class="fab fa-php"></i>PHP独学の一環で、1から作成してみたアンケート・集計機能です。(データベースとの連携なし)
          <br><br>
          もしよろしければ、アンケート回答（4つの質問）のご協力をお願い致します。
          <br><br>
          アンケート内容に関しては、特に意味はありません。
          <br><br>
          PHPでの配列、ループ処理、ファイル読み書き、計算式が正常に機能するか確認するために作成しました。
          <br><br>
          最後のページで計算して結果を確認できるようにしました。
          <br><br>
          <em4>完全匿名性です。誰が、どう回答したかなどの確認はできません。</em4>
        </p>
        <hr>
        <br>
        <form action="qconfirm.php" method="post">

          <div class="gender">
            <p class="bold">① 性別 <i class="fas fa-male"></i><i class="fas fa-female"></i> </p>
            <input type="radio" name="gender" id="male" value="1" class="required">
            <label for="male"> 男性 </label>
            <input type="radio" name="gender" id="female" value="2">
            <label for="female"> 女性 </label>
            <input type="radio" name="gender" id="others" value="3">
            <label for="others"> 無回答 </label>
          </div>
          <br>

          <div>
            <p class="bold"><label for="age">② 年齢 <i class="fas fa-clock"></i></label></p>
            <select name="age" id="age">
              <option value="0" selected>選択してください。</option>
              <?php
              for ($num = 1; $num <= 7; $num++) {
                echo '<option value="' . $num . '">' . $num . '0代</option>' . "\n";
              }
              ?>
              <option value="8">80代以上</option>
            </select>
          </div>
          <br>
          <div class="lover">
            <p class="bold">③ 恋人いる・いない <i class="far fa-heart"></i> </p>
            <input type="radio" name="lover" id="marryed" value="1" class="required">
            <label for="marryed"> 既婚 </label>
            <br>
            <input type="radio" name="lover" id="exist1" value="2">
            <label for="exist1"> いる(お付き合い1年未満) </label>
            <br>
            <input type="radio" name="lover" id="exist2" value="3">
            <label for="exist2"> いる(お付き合い1年以上) </label>
            <br>
            <input type="radio" name="lover" id="exist3" value="4">
            <label for="exist3"> いる(お付き合い3年以上) </label>
            <br>
            <input type="radio" name="lover" id="notexist1" value="5">
            <label for="notexist1"> いない(1年未満) </label>
            <br>
            <input type="radio" name="lover" id="notexist2" value="6">
            <label for="notexist2"> いない(1年以上) </label>
            <br>
            <input type="radio" name="lover" id="notexist3" value="7">
            <label for="notexist3"> いない(3年以上) </label>
            <br>
            <input type="radio" name="lover" id="notexist4" value="8">
            <label for="notexist4"> いない(友達以上、恋人未満有) </label>
            <br>
            <input type="radio" name="lover" id="others" value="9">
            <label for="others"> その他 </label>

          </div>
          <br>
          <div>
            <p class="bold">④ 結婚相手に求めていること　(複数選択可) <i class="fas fa-laugh"></i></p>
            <?php
            $request = array(
              0 => "性格・雰囲気",
              1 => "誠実さ・思い遣り",
              2 => "容姿・身長",
              3 => "地位・経済力",
              4 => "常識・教養",
              5 => "家事・生活能力",
              6 => "価値観・金銭感覚の相性",
              7 => "子供好き・育児参加",
              8 => "家族関係良好",
              9 => "年齢",
              10 => "包容力",
              11 => "ユーモア・面白さ",
              12 => "センス",
              13 => "体の相性・体力",
              14 => "食事・趣味などの好き嫌いの相性",
              15 => "ギャンブル・酒癖・喫煙しない",
              16 => "その他"
            );
            $ids = array('personality', 'sincerity', 'appearance', 'economy', 'educated', 'housework', 'values', 'childcare', 'family', 'ages', 'tolerance', 'interesting', 'sense', 'compatibility', 'dislikes', 'gambling', 'requestother');

            foreach ($request as $key => $value) {
              if ($key == 0) {
                echo '<label for="personality"><input type="checkbox" name="request[]" value="0" id="personality" class="required">' . $value . '</label>' . "\n";
              } else {
                echo '<label for="' . $ids[$key] . '"><input type="checkbox" name="request[]" value="'
                  . $key . '" id="' . $ids[$key] . '">' . $value . '</label>' . "\n";
              }
            }

            ?>



            <div id="submitAria">
              <input type="submit" value="送信する" class="submitButton">
            </div>
        </form>

    </div>

    </section>
    </div>

    <div id="aside">
      <div id="section" class="prof">
        <div class="line">ADMINISTRATOR</div>

        <p><a href="about.html"><img src="gallery/nekotemari.gif" alt="猫カフェ"></a></p>

        <i class="fas fa-user-circle"></i>
        <em3 id="プロフィール"><a href="about.html">し ら ひ ゅ ー</a></em3>
        <br><br>
        <div id="prof">
          <a href="https://twitter.com/hiyuma?ref_src=twsrc%5Etfw"><i class="fab fa-twitter-square"></i></a>
          <a href="https://line.me/ti/p/MOJmLGebP8"><i class="fab fa-line"></i></a>
          <a href="https://github.com/hiyuma"><i class="fab fa-github"></i></a>
          <a href="https://iFLYER.tv/hiyuma"><i class="fas fa-headphones"></i></a>
          <a href="https://soundcloud.com/hiyuma-shirai"><i class="fab fa-soundcloud"></i></a>
          <a href="mailto:info@developershirai.com"><i class="fas fa-envelope"></i></a>
        </div>

        <p>
          <em5>※プログラミング・英語・投資勉強中※</em5>
        </p>

        <div class="studylist">
          <span><i class="fas fa-paw"></i><a href="jspractice/omikuji.html"><small>今日のねこちゃんおみくじ</small></a></span>
          <br>
          <span><i class="fas fa-compact-disc"></i><a href="personality.html"><small>今日の1曲</small></a></span>
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
        <iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="https://rcm-fe.amazon-adsystem.com/e/cm?ref=qf_sp_asin_til&t=hiyuma-22&m=amazon&o=9&p=8&l=as1&IS1=1&detail=1&asins=B0111105RE&linkId=512c6f0c12f94bb0f137592a10a7f286&bc1=ffdede&amp;lt1=_blank&fc1=ffffff&lc1=ffffff&bg1=ffdede&f=ifr">
        </iframe>

        <iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="https://rcm-fe.amazon-adsystem.com/e/cm?ref=qf_sp_asin_til&t=hiyuma-22&m=amazon&o=9&p=8&l=as1&IS1=1&detail=1&asins=B07TYHRWSD&linkId=2bed6eb6894ff64c8503d66ab11a2a6f&bc1=ffdede&amp;lt1=_blank&fc1=ffffff&lc1=ffffff&bg1=ffdede&f=ifr">
        </iframe>

        <iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="https://rcm-fe.amazon-adsystem.com/e/cm?ref=qf_sp_asin_til&t=hiyuma-22&m=amazon&o=9&p=8&l=as1&IS1=1&detail=1&asins=B08958F7SN&linkId=f3f4ba277c7d3a48bfabd859f650f77f&bc1=ffdede&amp;lt1=_blank&fc1=ffffff&lc1=ffffff&bg1=ffdede&f=ifr">
        </iframe>

        <iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="https://rcm-fe.amazon-adsystem.com/e/cm?ref=tf_til&t=hiyuma-22&m=amazon&o=9&p=8&l=as1&IS1=1&detail=1&asins=B087S27C9R&linkId=3bdaab26f501463c9acd3a29a5d62100&bc1=ffdede&amp;lt1=_blank&fc1=ffffff&lc1=ffffff&bg1=ffdede&f=ifr">
        </iframe>

        <iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="https://rcm-fe.amazon-adsystem.com/e/cm?ref=tf_til&t=hiyuma-22&m=amazon&o=9&p=8&l=as1&IS1=1&detail=1&asins=B01LYRR6ON&linkId=ee6892949d4f6788fa2a40f15fa226cf&bc1=ffdede&amp;lt1=_blank&fc1=ffffff&lc1=ffffff&bg1=ffdede&f=ifr">
        </iframe>

        <iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="https://rcm-fe.amazon-adsystem.com/e/cm?ref=tf_til&t=hiyuma-22&m=amazon&o=9&p=8&l=as1&IS1=1&detail=1&asins=B079QRQTCR&linkId=60aacc8ddec062cf19f685218fd04dbf&bc1=ffdede&amp;lt1=_blank&fc1=ffffff&lc1=ffffff&bg1=ffdede&f=ifr">
        </iframe>

        <iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="https://rcm-fe.amazon-adsystem.com/e/cm?ref=qf_sp_asin_til&t=hiyuma-22&m=amazon&o=9&p=8&l=as1&IS1=1&detail=1&asins=B07SHC76CH&linkId=68981efda4ec916a307145642e4da6a8&bc1=ffdede&amp;lt1=_blank&fc1=ffffff&lc1=ffffff&bg1=ffdede&f=ifr">
        </iframe>

        <iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="https://rcm-fe.amazon-adsystem.com/e/cm?ref=qf_sp_asin_til&t=hiyuma-22&m=amazon&o=9&p=8&l=as1&IS1=1&detail=1&asins=B07NQDQWW6&linkId=3a56d256cdb8c2ecce4ec7a25bf7e54e&bc1=ffdede&amp;lt1=_blank&fc1=ffffff&lc1=ffffff&bg1=ffdede&f=ifr">
        </iframe>
      </div>

      <div id="widget3" class="switch">
        <p>時間に限りがある為
          <br>買うのを我慢している
        </p>
        <hr>
        <iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="https://rcm-fe.amazon-adsystem.com/e/cm?ref=qf_sp_asin_til&t=hiyuma-22&m=amazon&o=9&p=8&l=as1&IS1=1&detail=1&asins=B07WS7BZYF&linkId=5a3115f776ed0f930bd304d1acc41982&bc1=ffdede&amp;lt1=_blank&fc1=9c9c9c&lc1=707070&bg1=ffdede&f=ifr">
        </iframe>
      </div>

      <div id="widget3" class="a8">

        <a href="https://px.a8.net/svt/ejp?a8mat=3BOCPF+9LBFN6+1WP2+674EP" rel="nofollow">
          <img border="0" width="120" height="60" alt="" src="https://www26.a8.net/svt/bgt?aid=201010515580&wid=001&eno=01&mid=s00000008903001041000&mc=1"></a>
        <img border="0" width="1" height="1" src="https://www14.a8.net/0.gif?a8mat=3BOCPF+9LBFN6+1WP2+674EP" alt="">

        <a href="https://px.a8.net/svt/ejp?a8mat=3BOCPF+G3ASDU+1JUK+ZRALD" rel="nofollow">
          <img border="0" width="120" height="60" alt="" src="https://www27.a8.net/svt/bgt?aid=201010515973&wid=001&eno=01&mid=s00000007238006006000&mc=1"></a>
        <img border="0" width="1" height="1" src="https://www18.a8.net/0.gif?a8mat=3BOCPF+G3ASDU+1JUK+ZRALD" alt="">


        <a href="https://px.a8.net/svt/ejp?a8mat=3BOCPF+G3W7ZM+1JUK+HXSGH" rel="nofollow">
          <img border="0" width="120" height="60" alt="" src="https://www29.a8.net/svt/bgt?aid=201010515974&wid=001&eno=01&mid=s00000007238003013000&mc=1"></a>
        <img border="0" width="1" height="1" src="https://www16.a8.net/0.gif?a8mat=3BOCPF+G3W7ZM+1JUK+HXSGH" alt="">

        <a href="https://px.a8.net/svt/ejp?a8mat=3BOCPF+A1ZKKY+3AQG+NUES1" rel="nofollow">
          <img border="0" width="120" height="60" alt="" src="https://www27.a8.net/svt/bgt?aid=201010515608&wid=001&eno=01&mid=s00000015388004005000&mc=1"></a>
        <img border="0" width="1" height="1" src="https://www12.a8.net/0.gif?a8mat=3BOCPF+A1ZKKY+3AQG+NUES1" alt="">

        <a href="https://px.a8.net/svt/ejp?a8mat=3BOFU5+7BR2JE+1JUK+61Z81" rel="nofollow">
          <img border="0" width="120" height="60" alt="" src="https://www26.a8.net/svt/bgt?aid=201014573443&wid=002&eno=01&mid=s00000007238001017000&mc=1"></a>
        <img border="0" width="1" height="1" src="https://www11.a8.net/0.gif?a8mat=3BOFU5+7BR2JE+1JUK+61Z81" alt="">
      </div>

      <div id="widget3" class="kaimin muji">
        <iframe src="https://rcm-fe.amazon-adsystem.com/e/cm?o=9&p=21&l=ur1&category=homekitchen&banner=1NB7AKK59M1WYQTVDHR2&f=ifr&linkID=451a6a0a66ce05df3e107787d100902d&t=hiyuma-22&tracking_id=hiyuma-22" width="125" height="125" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
        <iframe src="https://rcm-fe.amazon-adsystem.com/e/cm?o=9&p=21&l=ur1&category=homekitchen&banner=1118RRKGRGP6E53AWF02&f=ifr&linkID=4c1584b22751fff367dd07f4f2d15704&t=hiyuma-22&tracking_id=hiyuma-22" width="125" height="125" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
      </div>

      <div id="widget3" class="newlife 214">
        <iframe src="https://rcm-fe.amazon-adsystem.com/e/cm?o=9&p=21&l=ur1&category=seasons&banner=19V1W74AERWFQE61V102&f=ifr&linkID=343127fbf4d2f1596bee67918b29d55f&t=hiyuma-22&tracking_id=hiyuma-22" width="125" height="125" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
        <iframe src="https://rcm-fe.amazon-adsystem.com/e/cm?o=9&p=21&l=ur1&category=seasons&banner=1ND1EDK3G72PR8RM7582&f=ifr&linkID=cd5377118077b36de8010a41add4b796&t=hiyuma-22&tracking_id=hiyuma-22" width="125" height="125" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
      </div>

      <div id="widget3" class="pantri">
        <iframe src="https://rcm-fe.amazon-adsystem.com/e/cm?o=9&p=294&l=ur1&category=amazonrotate&f=ifr&linkID=6f54d9751c82c3788c8aca8f1c21db08&t=hiyuma-22&tracking_id=hiyuma-22" width="225" height="100" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
      </div>
    </div>
  </main>



  <footer>
    <div class="footer">
      Copyright © 2020 developershirai All Rights Reserved.
    </div>
  </footer>

  <script type="text/javascript">
    $(document).ready(function() {
      $('.slider').bxSlider({
        randomStart: true,
        auto: true,
        pause: 6000,
      });
    });
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
  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script type="text/javascript">
    jQuery(function($) {
      $("form").submit(function() {
        //エラー表示の初期化
        $("p.error").remove();
        $("div").removeClass("error");
        var text = "";

        //ラジオボタンの検証
        $(":radio").filter(".required").each(function() {
          if ($('input[name="' + $(this).attr("name") + '"]:checked').size() == 0) {
            text = $(this).parent().find('p').text();
            $(this).parent().prepend("<p class='error'>" + text + "を選択してください。</p>");
          }
        })

        //セレクトメニューの検証
        $("select").each(function() {
          if ($(this).val() == 0) {
            text = $(this).parent().find('label').text();
            $(this).parent().prepend("<p class='error'>" + text + "を選択してください。</p>");
          }
        });

        //チェックボックスの検証
        $(":checkbox").filter(".required").each(function() {
          if ($('input[name="' + $(this).attr("name") + '"]:checked').size() == 0) {
            text = $(this).closest('div').find('p').text();
            $(this).parent().prepend("<p class='error'>" + text + "を選択してください。</p>");
          }
        })

        //error クラスの追加の処理
        if ($("p.error").size() > 0) {
          $("p.error").parent().addClass("error");
          return false;
        }

      })

    });
  </script>


</body>

</html>