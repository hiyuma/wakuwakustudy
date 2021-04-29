<!DOCTYPE html>
<html>

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
        <h1 class="line">ねこちゃんジャンケン<i class="fas fa-cat"></i></h1>
        ねこちゃんに勝てると良いことがあります。
        <br><br>
        じゃんけんの出す手を選んで、「勝負する」ボタンを押してください。
        <br><br>
        <div class="form-box">
          <form action="jankenResult.php" method="post">
            <label>
              <input type="radio" title="Hand" name="Hand" value="グー" checked>グー<i class="far fa-hand-rock"></i>
            </label>

            <label>
              <input type="radio" title="Hand" name="Hand" value="チョキ">チョキ<i class="far fa-hand-peace"></i>
            </label>

            <label>
              <input type="radio" title="Hand" name="Hand" value="パー">パー<i class="far fa-hand-paper"></i>
            </label>

            <br><br>
            😺ねこちゃんに　<button id="jankenButton" type="submit" class="battle-button">勝負する<i class="fas fa-paw"></i></button>
          </form>
        </div>
      </section>
  <?php include('parts/contents.php'); ?>
    </div>
  </main>

    </div>



    <div id="aside">
      <?php include('parts/prof.php'); ?>
      <?php include('parts/widget/side_widget.php'); ?>
    </div>

  <?php include('parts/footer.php'); ?>
  <?php include('parts/footerJs.php'); ?>
</body>

</html>