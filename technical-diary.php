<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name=”robots” content=”index”>
  <meta name="description" content="長野県出身、元美容師/イベントオーガナイザーのしらひゅー(白井　飛友馬)が、WEB制作・デザイン・開発などのプログラミング言語(PHP/Java/JSP/Servlet/HTML/CSS/JavaScriptなど)や英語(TOEIC・日常英会話)、アボカド栽培などを学ぶために作成したページです。不定期にプログラミングやIT系の日記を掲載していきます。特に面白味はないです。" />
  <meta name="keywords" content="日記,しらい　ひゆま,白井　飛友馬,プログラミング">
  <title>しらひゅーのわくわくスタディ TECHNICAL DIARY</title>
  <link rel="shortcut icon" href="favicon.ico" />

  <link rel="stylesheet" href="mystyle.css">
  <link rel="stylesheet" href="cal.css">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <div id="page_top">
    <a href="#"></a>
  </div>
  <script src="https://kit.fontawesome.com/6256a7882a.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>

<body>
  <?php include('parts/header.php') ?>


  <?php include('parts/widget/widget_214.php') ?>


  <header>
    <h1 class="logo">録</h1>
  </header>

  <?php include('parts/menuButton.php'); ?>
  <?php include('parts/facebook_twitter_button.php'); ?>


  <main>
    <div id="article">
      <section>
        <div class="line">TECHNICAL DIARY</div>
        <p>
          <img id="top-img" src="gallery/top/techtop.png" alt="">
        </p>
        <br>
        <p>IT関連の技術的な日記を書くかもしれないし、書かないかもしれないです。</p>
        <br>
        <div class="schedule_wrapper">
          <h3><i class="far fa-list-alt"></i>　Technical diary list</h3>
          <!-- list -->
          <div id="schedule0" class="schedule_list">
            <ol reversed>
              <!-- <li><a href="#20210207"> 2021年02月07日 AWS「AWS導入」</a></li> -->
              <li><a href="#20210206"> 2021年02月06日 CSS「リストデザイン変更」</a></li>
              <li><a href="#20210205"> 2021年02月05日 CSS「スクロールバーデザイン変更」</a></li>
              <li> <a href="#recommend"> <i class="fab fa-amazon"></i> しらひゅー推し</a></li>
              <!-- <li> <a href="#amazon"> <i class="fab fa-amazon"></i>　RELATIONS</a></li> -->
            </ol>
          </div>
        </div>

        <!-- id=0003 -->
        <!-- <div id="20210206"></div>
        <br>
        <p id="avocado">2021年02月06日 <i class="fas fa-laptop-code"></i>AWS</p>
        <p id="title">「AWS」</p>

        <div class="accbox">
          <p><img src="gallery/techimg" alt=""></p>
   
          <input type="checkbox" id="0003" class="cssacc" />
          <label for="0003"><span><i class="fas fa-book"></i>READ</span></label>
          <div class="accshow">
            <p>
            <br><br>
            <br><br>
            <br><br>
            <br><br>  
            </p>
          </div>
        </div>
        <br> -->
        
        
        <!-- id=0002 -->
        <div id="20210206"></div>
        <br>
        <p id="avocado">2021年02月06日 <i class="fas fa-laptop-code"></i>CSS</p>
        <p id="title">「リスト(li)デザイン変更」</p>

        <div class="accbox">
          <p><img src="gallery/techimg/スクロールバー変更後スクリーンショット 2021-02-05 183730.jpg" alt="スクロールバー変更CSS"></p>
   
          <input type="checkbox" id="0002" class="cssacc" />
          <label for="0002"><span><i class="fas fa-book"></i>READ</span></label>
          <div class="accshow">
            <p>後回しにしていたリストのデザインの変更しました。
              <br><br>
              大したものではないですが、ポイントは、border-left、background、list-style-typeです。
              <p><img src="gallery/techimg/list-left-bar-css.jpg" alt="リストデザイン変更CSS"></p>
              変更後のリストはこちらです。
              <p><img src="gallery/techimg/change-list-design-done.jpg" alt="リストデザイン変更後"></p>
              ひとまず、見やすくなったような気がします。
            </p>
          </div>
        </div>
        <br>

        <div id="20210205"></div>
        <br>
        <p id="avocado">2021年02月05日 <i class="fas fa-laptop-code"></i>CSS</p>
        <p id="title">「スクロールバー(scrollbar)デザイン変更」</p>
        <div class="accbox">
              <p><img src="gallery/techimg/Inkedスクロールバー変更前スクリーンショット 2021-02-05 183925_LI.jpg" alt="スクロールバー変更前"></p>
          <input type="checkbox" id="0001" class="cssacc" />

          <label for="0001"><span><i class="fas fa-book"></i>READ</span></label>
          <div class="accshow">
            <p>ふと、スクロールバーを見ていたら、どこのサイトでもだいたいデザイン一緒だよなと思い始めました。
              <br><br>
              そして、変えることが出来るのか調べるところから始めてみました。
              <br><br>
              変更する方法は複数見つかりました。
              <br><br>
              僕が主に利用しているブラウザはChromeだったため、CSS追加しても効果がないパターンもありましたが、今回はwebkitをつかって変更しました。
              <br><br>
              ::-webkit-scrollbar(全体)、::-webkit-scrollbar-track(バーの可動域部)、::-webkit-scrollbar-thumb(バー本体) 
              <p><img src="gallery/techimg/スクロールバー変更CSS (2).jpg" alt="スクロールバー変更CSS"></p>
              変更後のスクロールバーはこちらです。
              <p><img src="gallery/techimg/Inkedスクロールバー変更後スクリーンショット 2021-02-05 183730_LI.jpg" alt="スクロールバー変更後"></p>
              様々な配色や変形を試してみたのですが、結局行きついたのはこんなものでした。
              <br><br>
              納得できたデザインではないので、また気になった時に変更するかもしれません。
            </p>
            <hr>
            <br>
          </div>
        </div>
        <em2><i class="fas fa-arrow-circle-right"></i>今後は、大きく変更したものは出来る限り記録していきます。</em2>
        <br>
      </section>

      <?php include('parts/contents.php'); ?>

    </div>


    <div id="aside">
      <?php include('parts/prof.php'); ?>

      <!-- <div id="widget3" class="diary-relations">
        <p>
          <em4><i class="fab fa-amazon"></i>　RELATIONS</em4>
        </p>

        <hr>
        <p>01月13日</p>
        <iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="https://rcm-fe.amazon-adsystem.com/e/cm?ref=tf_til&t=hiyuma-22&m=amazon&o=9&p=8&l=as1&IS1=1&detail=1&asins=B00J7C1YE8&linkId=9658cc30ae1e607a362b9671d5dbfadf&bc1=ffdede&amp;lt1=_blank&fc1=ffffff&lc1=ffffff&bg1=ffdede&f=ifr">
        </iframe>

      </div> -->

      <?php include('parts/widget/side_widget.php'); ?>

    </div>

  </main>

  <?php include('parts/footer.php'); ?>


  <script src="js/myscript.js"></script>
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/menu.js"></script>
  <script src="js/href.js"></script>
  <script src="js/ReadAndClose.js"></script>
  <script src="js/cal.js"></script>
</body>

</html>