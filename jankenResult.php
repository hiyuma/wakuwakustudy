<?php

$hands = ['グー', 'チョキ', 'パー'];

if (isset($_POST['Hand'])) {
  $Hand = $_POST['Hand'];

  $key = array_rand($hands);
  $programHand = $hands[$key];

  if ($Hand == $programHand) {
    $result = 'あいこ🐈';
  } elseif ($Hand == 'グー' && $programHand == 'チョキ') {
    $result = '勝ち😸<br><br>今日、良いことあるかも。';
  } elseif ($Hand == 'チョキ' && $programHand == 'パー') {
    $result = '勝ち😸<br><br>良いことあるよ。';
  } elseif ($Hand == 'パー' && $programHand == 'グー') {
    $result = '勝ち😸<br><br>明日、良いことあるかも。';
  } else {
    $result = '負け😿<br><br>今日はおとなしくしておこう。';
  }

  switch ($programHand) {
    case 'グー':
      $programHand = 'グー<i class="far fa-hand-rock"></i>';
      break;
    case 'パー':
      $programHand = 'パー<i class="far fa-hand-paper"></i>';
      break;
    case 'チョキ':
      $programHand = 'チョキ<i class="far fa-hand-peace"></i>';
      break;
  }

  switch ($Hand) {
    case 'グー':
      $Hand = 'グー<i class="far fa-hand-rock"></i>';
      break;
    case 'パー':
      $Hand = 'パー<i class="far fa-hand-paper"></i>';
      break;
    case 'チョキ':
      $Hand = 'チョキ<i class="far fa-hand-peace"></i>';
      break;
  }
  
}
?>

<!DOCTYPE html>
<html>

<head>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name=”robots” content=”index”>
    <meta name="description" content="長野県出身で、元美容師のしらひゅー(白井 飛友馬)が、新型コロナWEB制作・デザイン・開発などのプログラミング言語(PHP/Java/HTML/CSS/JavaScript等)やTOEIC・日常英会話、株投資、アボカド栽培などを学ぶために作成したWEBサイトです。" />
    <meta name="keywords" content="プログラミング,php,html/css">

    <title>しらひゅーのわくわくスタディ ねこちゃんジャンケンポン</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="stylesheet" href="mystyle.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <div id="page_top">
      <a href="#"></a>
    </div>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://kit.fontawesome.com/6256a7882a.js" crossorigin="anonymous"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
  </head>




<body>
  <?php include('parts/menuButton.php'); ?>

  <?php include('parts/header.php') ?>
  <?php include('parts/widget/widget_mujirushi.php') ?>


  <header>
    <h1 class="logo">手</h1>
  </header>

  <?php include('parts/facebook_twitter_button.php'); ?>
  <main>
    <div id="article">
      <section class="slide-in-animation">
        <h1 class="line">ねこちゃんジャンケン 結果<i class="fas fa-cat"></i></h1>
        <h1>結果は…</h1>
        <div class="result-box">
          <br><br>
          👩あなた ： <?= $Hand ?>
          <br><br>
          😺ねこちゃん ： <?= $programHand ?>
          <br><br>
          <p class="result-word"><?= $result ?></p>
          <br><br>
          <p><a href="janken.php"><i class="far fa-hand-point-right"></i>もう一回勝負する<i class="fas fa-paw"></i></a></p>
        </div>
      </section>
      <?php include('parts/contents.php'); ?>
    </div>

  </main>


  <div id="aside">
    <?php include('parts/prof.php'); ?>
    <?php include('parts/widget/side_widget.php'); ?>
  </div>

  <?php include('parts/footer.php'); ?>
  <?php include('parts/footerJs.php'); ?>
</body>

</html>