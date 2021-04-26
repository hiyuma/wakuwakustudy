<!DOCTYPE html>
<html lang="Ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name=”robots” content=”index”>
  <meta name="description" content="長野県出身、元美容師/イベントオーガナイザーのしらひゅー(白井　飛友馬)が、WEB制作・デザイン・開発などのプログラミング言語(PHP/Java/JSP/Servlet/HTML/CSS/JavaScriptなど)や英語(TOEIC・日常英会話)、投資、アボカド栽培などを学ぶために作成したWEBサイトです。ここは、Javaなどプログラミングを学ぶページです。特に面白味はないです。" />
  <meta name="keywords" content="プログラミング,Java,JavaScript,HTML,CSS">
  <title>しらひゅーのわくわくスタディ WORK JavaScript</title>
  <link rel="stylesheet" href="../mystyle.css">
  <link rel="shortcut icon" href="../favicon.ico" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <div id="page_top">
    <a href="#"></a>
  </div>

  <script src="https://kit.fontawesome.com/6256a7882a.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <div id="page_top"><a href="#"></a></div>
  <?php include('parts/mobileAmazon.php')?>

</head>
<?php include('../parts/header.php') ?>
<?php include('../parts/widget/widget_mujirushi.php') ?>


<header>
  <h1 class="logo">技</h1>
</header>

<body>
  <main>

    <?php include('../parts/menuButton.php'); ?>
    <?php include('../parts/facebook_twitter_button.php'); ?>

    <div id="article">

      <div id="work" class="slide-in-animation">
        <div id="section">
          <h1 class="line">WORK SPACE</h1>
          <p id="top-img-p">
            <img id="top-img" src="../gallery/top/work.png" alt="">
          </p>

          <p>ここは、独学中のプログラム言語(主にフロントエンド)を載せているページです。
            <br><br>
            このサイトの変更点や、パソコンなどのトラブルシューティング、プログラミング用メモなど、別途<a href="https://developershirai.com/technical-diary.php">テクニカル日記</a>を作成しました。
          </p>

          <br>
          <p>・お問い合わせフォーム(PHP)は<a href="https://developershirai.com/contact.php" target="blank">こちら</a><i class="fas fa-envelope"></i></p>
          
          <p>・アンケート(PHP)は<a href="https://developershirai.com/questionnaire.php" target="blank">こちら</a><i class="far fa-edit"></i></p>

          <p>・未完成「ねこちゃんSOS」は<a href="https://developershirai.com/jspractice/nekochan.php" target="blank">こちら</a><i class="fas fa-paw"></i></p>

          <p>・「ねこちゃんおみくじ」は<a href="https://developershirai.com/jspractice/omikuji.php" target="blank">こちら</a><i class="fas fa-paw"></i></p>

          <p>・おためしチャレンジページ（BootStrap / JavaScript）は<a href="https://developershirai.com/portfolio1/portfolio1.html">こちら</a><i class="fas fa-laptop-code"></i></p>

          <p>・JavaScript練習用ページ「ありあり」は<a href="../puyo2/www/puyoforlaptop.php" target="blank">こちら</a><i class="fas fa-gamepad"></i></p>
          <br>
          <em4>※現在、フリーランス活動、資格勉強、英語学習などの合間を使っているため、更新頻度が低くなっています。</em4>
          <br>
          <br>


          <p id="avocado"></p>
          <p>
            <em2>1:下の子たちを優しく押して走らせてください。(jQuery / easing)</em2>
          </p>
          <div class="animal">
            <div class="box2">🐈</div>
            <div class="box2">🐕</div>
            <div class="box2">🐥</div>
          </div>

          <p id="avocado"></p>
          <p>
            <em2>2:下の人たちを押してバネみたいな動きをさせてみましょう。(jQuery / easing)</em2>
          </p>
          <div class="animal">
            <div class="box4">🤸🏻‍♂️</div>
            <div class="box4">🧎🏻‍♂️</div>
            <div class="box4">🤷🏻‍♂️</div>
          </div>

          <p id="avocado"></p>
          <p>
            <em2>3:下の食べ物をクリックして回転させてください。(JavaScript)</em2>
          </p>
          <div class="food">
            <div class="box3" id="target1">🍚</div>
            <div class="box3" id="target2">🍜</div>
            <div class="box3" id="target3">🍔</div>
            <div class="box3" id="target4">🍖</div>
            <div class="box3" id="target5">🥗</div>
          </div>

          <div id="countdown"></div>
          <div class="pushbtn">
            <p id="avocado"></p>
            <p>
              <em2>4:下のPUSHボタンを0秒になるまで押してください。(JavaScript)</em2>
            </p>
            <p>
              <em4>※0秒になるとアラートが出ます。"OK"を押下してください。</em4>
            </p>
            <div class="btnArea">
              <a id="count" class="startbtn" onclick="setTimeout('countDown()',0.1);">PUSH</a>
            </div>
          </div>

          <div id="judgment"></div>
          <div id="number">
            <p id="avocado"></p>
            <p>
              <em2>5:下の入力欄に数字を入力し、判定を押してみてください。(PHP / jQuery)</em2>
            </p>
            <p>
              <em4>※正負/偶数奇数の判定です。</em4>
            </p>
            <form action="#judgment" method="post">
              <p><input type="number" name="num" placeholder="数字を入力してください" value="<?php if (!empty($_POST['num'])) {
              echo $_POST['num'];} ?>"></p>

              <div id="submitAria">
                <input type="submit" value="判定" class="submitButton">
              </div>
            </form>

            <button class="showResult">判定結果を表示する</button>
            <p id="results"><?php include('../parts/number.php'); ?></p>

            <div class="comment">5:Comment<i class="far fa-comment-dots"></i></div>
            <em2>
              今回、”判定結果を表示する”ボタンは、addClassとremoveClassを使っています。
              <br><br>
              PHPにて、変数のNULL判定する場合は、is_null, isset, emptyなどの関数を使うと思いますが、ここでは is_null で対応しています。
              <br><br>
              その過程で、NULL型をintにキャストすると”0”になることが分かりました。全く想定していなかったのでデバッグで発見時に驚きました。
              <br><br>
              if文を途中で抜けるために"goto"文を使っています。"goto"文は、一般的に可読性を損なうため、利用避けた方が良いと言われていますが、検証のために利用しました。
              <br>
            </em2>


            <!-- <div id="binaryNum">
            <p id="avocado"></p>
            <p>
            <em2>6:数字を入力してください。10進数を2進数に変換して表示します。(PHP)</em2>

            <form action="#binaryNum" method="post">
              <p><input type="number" name="binaryNum" placeholder="数字を入力してください" value="<?php if (!empty($_POST['binaryNum'])) {
                echo $_POST['binaryNum'];} ?>"></p>

              <div id="submitAria">
                <input type="submit" value="変換" class="submitButton">
              </div>
            </form>

           
            </p>
           </div> -->
          </div>


          <script>
            'use strict';

            const target1 = document.getElementById('target1');
            const target2 = document.getElementById('target2');
            const target3 = document.getElementById('target3');
            const target4 = document.getElementById('target4');
            const target5 = document.getElementById('target5');

            target1.addEventListener('click', () => {
              target1.classList.toggle('circle');
            });
            target2.addEventListener('click', () => {
              target2.classList.toggle('circle');
            });
            target3.addEventListener('click', () => {
              target3.classList.toggle('circle');
            });
            target4.addEventListener('click', () => {
              target4.classList.toggle('circle');
            });
            target5.addEventListener('click', () => {
              target5.classList.toggle('circle');
            });

            $(document).ready(function() {
              $('.box2').click(function() {
                $(this).animate({
                  marginRight: '+=100px'
                }, 1000);
              });
            });

            $(document).ready(function() {
              $('.box4').click(function() {
                $(this).animate({
                  marginLeft: '+=100px'
                }, 1000, "easeOutElastic");
              });
            });
          </script>
        </div>
      </div>
      <?php include('../parts/contents.php'); ?>
    </div>

    <div id="aside">
      <?php include('../parts/prof.php'); ?>
      

      <?php include('../parts/widget/side_widget.php'); ?>
    </div>
  </main>

  <?php include('../parts/footer.php'); ?>
  <?php include('../parts/footerJs.php'); ?>

  <script src="../js/href.js"></script>
  <script src="../js/numberResultShow.js"></script>
  <script src="js/count.js"></script>
  <script src="js/createString.js"></script>
  <script src="js/fadeinout.js"></script>

</body>

</html>