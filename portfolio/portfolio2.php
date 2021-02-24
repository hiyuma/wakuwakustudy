<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <title>ポートフォリオ 2 by Hiyuma Shirai</title>

</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">ポートフォリオ 2 by Hiyuma Shirai</a>
  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navber" aria-controls="Navber" aria-expanded="false" aria-label="ナビゲーションの切替">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="Navber">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">ホーム(本サイト)<span class="sr-only">(現位置)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">リンク</a>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          メニュー
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../portfolio1/portfolio1.html">ポートフォリオ 1</a>
          <a class="dropdown-item" href="">ポートフォリオ 2</a>
          <a class="dropdown-item" href="../portfolio2/skytravel.html">ポートフォリオ 3</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">その他</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">無効</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input type="search" class="form-control mr-sm-2" placeholder="検索..." aria-label="検索...">
      <button type="submit" class="btn btn-outline-success my-2 my-sm-0">検索</button>
    </form>
  </div><!-- /.navbar-collapse -->
</nav>
</header>

<!-- コンテンツ -->
  <div class="container" style="padding-top: 80px;">
    <div class="row text-center">
      <div class="col-lg-4">
        <img class="img-thumbnail " src="images/photo03.jpg" alt="">
        <h2>Heading</h2>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        <p><a class="btn btn-dark" href="#" role="button">View details &raquo;</a></p>
      </div>
      <div class="col-lg-4">
        <img class="img-thumbnail" src="images/photo04.jpg" alt="">
        <h2>Heading</h2>
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
        <p><a class="btn btn-dark" href="#" role="button">View details &raquo;</a></p>
      </div>
      <div class="col-lg-4">
        <img class="img-thumbnail" src="images/photo05.jpg" alt="">
        <h2>Heading</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-dark" href="#" role="button">View details &raquo;</a></p>
      </div>
    </div>
    <hr>

    <div class="row">
      <div class="col-lg-7">
        <h2>First featurette heading. It'll blow your mind.</h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-lg-5">
        <img class="img-thumbnail" src="images/photo07.jpg" alt="">
      </div>
    </div>
    <hr>

    <div class="row">
      <div class="col-lg-7 order-lg-2">
        <h2>And lastly, this one. Checkmate.</h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-lg-5 order-lg-1">
        <img class="img-thumbnail" src="images/photo08.jpg" alt="">
      </div>
    </div>
    <hr>
    <footer>
      <p class="text-right"><a href="#">Back to top</a></p>
    </footer>
  </div>
  <script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
