<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name=”robots” content=”index”>
		<meta name="description"
			content="長野県出身、元美容師/イベントオーガナイザーのしらひゅー(白井　飛友馬)が、WEB制作・デザイン・開発などのプログラミング言語(PHP/Java/JSP/Servlet/HTML/CSS/JavaScriptなど)や英語(TOEIC・日常英会話)、投資、アボカド栽培などを学ぶために作成したWEBサイトです。ここは、Javaなどプログラミングをゲーム作成を通して学ぶページです。特に面白味はないです。" />
		<meta name="keywords" content="プログラミング,HTML/CSS,フレームワーク,Bootstrap">

    <title>しらひゅーのわくわくスタディ For TEST</title>
    <link  rel = "shortcut icon"  href = "favicon.ico" />

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://kit.fontawesome.com/6256a7882a.js" crossorigin="anonymous"></script>
    <style>
      body {
        text-align: center;
        padding-top: 4.5rem;
        margin:0 auto;
        height: 3000px;
      }
      </style>
  </head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-sm">
        <a class="navbar-brand" href="#">しらひゅーのわくわくスタディ</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navber"
          aria-controls="Navber" aria-expanded="false" aria-label="ナビゲーションの切替">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="Navber">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">HOME <span class="sr-only">(現位置)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutsite.php">ABOUT</a>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                MENU
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="jspractice/nekochan.php">ねこちゃんSOS</a>
                <a class="dropdown-item" href="jspractice/omikuji.php">ねこちゃんおみくじ</a>
                <a class="dropdown-item" href="puyo2/www/puyoforlaptop.php">ぷよぷよ(TEST)</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="mailto:info@developershirai.com">CONTACT</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">DISABLED</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input type="search" class="form-control form-control-sm mr-sm-2" placeholder="search..."
              aria-label="seach...">
            <button type="submit" class="btn btn-outline-info btn-sm my-2 my-sm-0">SEARCH</button>
          </form>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
  </header>

  <h1>ボタンを押しました(TEST)</h1>
  <a href="test.php">もどる</a>

  <footer>
    <div class="container-fluid bg-dark fixed-bottom">
      <div class="row justify-content-center">
        <div class="col-sm">
          <small>Copyright © 2020 developershirai All Rights Reserved.</small>
        </div>
      </div>
    </div>
  </footer>

  <script src="js/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
  
</body>
</html>