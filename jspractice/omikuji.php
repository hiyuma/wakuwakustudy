<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name=”robots” content=”index”>
  <meta name="description" content="長野県出身、元美容師/イベントオーガナイザーのしらひゅー(白井　飛友馬)が、WEB制作・デザイン・開発などのプログラミング言語(PHP/Java/JSP/Servlet/HTML/CSS/JavaScriptなど)や英語(TOEIC・日常英会話)、投資、アボカド栽培などを学ぶために作成したWEBサイトです。ここは、Javaなどプログラミングをゲーム作成を通して学ぶページです。特に面白味はないです。" />
  <meta name="keywords" content="プログラミング,JavaScript,ゲーム,おみくじ,HTML/CSS">
  <title>しらひゅーのわくわくスタディ ねこちゃんおみくじ</title>
  <link rel="stylesheet" href="omikuji.css">
  <link rel="shortcut icon" href="favicon.ico" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <div id="page_top">
    <a href="#"></a>
  </div>
  <script src="https://kit.fontawesome.com/6256a7882a.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<?php include('../parts/header.php') ?>

<body>
  <main>
    <?php include('../parts/widget/widget_mujirushi.php') ?>

    <h1 class="text"><i class="fas fa-paw"></i>ねこちゃんおみくじ<i class="fas fa-paw"></i></h1>
    <div class="text">「ねこ」ちゃんが出たら最高に良いことあります。その確率はたったの3％。運試し。
      <br>
      <p>・<a href="https://developershirai.com/contact.php">お問い合わせフォーム(PHP)</a><i class="fas fa-envelope"></i></p>
          
          <p>・<a href="https://developershirai.com/questionnaire.php">アンケート(PHP)</a><i class="far fa-edit"></i></p>
          
          <p>・<a href="https://developershirai.com/janken.php">「ねこちゃんジャンケン」(PHP)</a><i class="far fa-hand-scissors"></i></p>

          <p>・<a href="https://developershirai.com/jspractice/nekochan.php">未完成「ねこちゃんSOS」</a><i class="fas fa-paw"></i></p>

          <p>・<a href="https://developershirai.com/jspractice/omikuji.php">「ねこちゃんおみくじ」</a><i class="fas fa-paw"></i></p>

          <p>・<a href="https://developershirai.com/portfolio1/portfolio1.html">おためしチャレンジページ</a><i class="fas fa-laptop-code"></i></p>

          <p>・<a href="../puyo2/www/puyoforlaptop.php">見たことあるゲーム「ありあり」</a><i class="fas fa-gamepad"></i></p>
          <br>
    </div>
    <div id="btn">引く</div>
  </main>
  <?php include('../parts/footer.php'); ?>
  <?php include('../parts/footerJs.php'); ?>
  <script src="js/omikuji.js"></script>
</body>

</html>