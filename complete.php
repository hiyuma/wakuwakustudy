<?php
//セッションを開始
session_start();
//エスケープ処理やデータをチェックする関数を記述したファイルの読み込み
require 'libs/functions.php';
//メールアドレス等を記述したファイルの読み込み
require 'libs/mailvars.php';

//お問い合わせ日時を日本時間に
date_default_timezone_set('Asia/Tokyo');

//POSTされたデータをチェック
$_POST = checkInput($_POST);
//固定トークンを確認（CSRF対策）
if (isset($_POST['ticket'], $_SESSION['ticket'])) {
  $ticket = $_POST['ticket'];
  if ($ticket !== $_SESSION['ticket']) {
    //トークンが一致しない場合は処理を中止
    die('Access denied');
  }
} else {
  //トークンが存在しない場合（入力ページにリダイレクト）
  //die( 'Access Denied（直接このページにはアクセスできません）' );  //処理を中止する場合
  $dirname = dirname($_SERVER['SCRIPT_NAME']);
  $dirname = $dirname == DIRECTORY_SEPARATOR ? '' : $dirname;
  $url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['SERVER_NAME'] . $dirname . '/contact.php';
  header('HTTP/1.1 303 See Other');
  header('location: ' . $url);
  exit; //忘れないように
}

//変数にエスケープ処理したセッション変数の値を代入
$name = h($_SESSION['name']);
$email = h($_SESSION['email']);
$tel =  h($_SESSION['tel']);
$subject = h($_SESSION['subject']);
$body = h($_SESSION['body']);

//メール本文の組み立て
$mail_body = 'コンタクトページからのお問い合わせ' . "\n\n";
$mail_body .=  date("Y年m月d日 H時i分") . "\n\n";
$mail_body .=  "お名前： " . $name . "\n";
$mail_body .=  "Email： " . $email . "\n";
$mail_body .=  "お電話番号： " . $tel . "\n\n";
$mail_body .=  "＜お問い合わせ内容＞" . "\n" . $body;

//-------- sendmail（mb_send_mail）を使ったメールの送信処理------------

//メールの宛先（名前<メールアドレス> の形式）。値は mailvars.php に記載
$mailTo = mb_encode_mimeheader(MAIL_TO_NAME) . "<" . MAIL_TO . ">";

//Return-Pathに指定するメールアドレス
$returnMail = MAIL_RETURN_PATH; //
//mbstringの日本語設定
mb_language('ja');
mb_internal_encoding('UTF-8');

// 送信者情報（From ヘッダー）の設定
$header = "From: " . mb_encode_mimeheader($name) . "<" . $email . ">\n";
$header .= "Cc: " . mb_encode_mimeheader(MAIL_CC_NAME) . "<" . MAIL_CC . ">\n";
$header .= "Bcc: <" . MAIL_BCC . ">";

//メールの送信（結果を変数 $result に格納）
if (ini_get('safe_mode')) {
  //セーフモードがOnの場合は第5引数が使えない
  $result = mb_send_mail($mailTo, $subject, $mail_body, $header);
} else {
  $result = mb_send_mail($mailTo, $subject, $mail_body, $header, '-f' . $returnMail);
}

//メール送信の結果判定
if ($result) {
  //成功した場合はセッションを破棄
  $_SESSION = array(); //空の配列を代入し、すべてのセッション変数を消去 
  session_destroy(); //セッションを破棄
} else {
  //送信失敗時（もしあれば）
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>しらひゅーのわくわくスタディ　お問い合わせ完了</title>
  <link href="mystyle.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="contactStyle.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <div id="page_top">
    <a href="#"></a>
  </div>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://kit.fontawesome.com/6256a7882a.js" crossorigin="anonymous"></script>
  <script src="js/jquery-3.5.1.min.js"></script>
  <style>
    body{
      text-align: center;
      margin: 0 auto;
    }
  </style>
</head>

<body>
  <?php include('parts/header.php'); ?>
  <?php include('parts/menuButton.php'); ?>
  <div class="container">
    <h2>お問い合わせフォーム</h2>
    <?php if ($result) : ?>
      <h3>送信完了</h3>
      <p>お問い合わせいただき、ありがとうございます。</p>
      <p>返信まで3.4日かかる場合がありますので、予めご了承ください。</p>
    <?php else : ?>
      <p>恐れ入りますが、送信に失敗しました。</p>
      <p>しばらくして、もう一度お試しになるか、<span class="material-icons">
          email</span><a href="mailto:info@developershirai.com">メールアドレス</a>からのお問い合わせをご検討下さい。</p>
      <p>ご迷惑をおかけして誠に申し訳ございません。</p>
    <?php endif; ?>
  </div>
  <?php include('parts/footer.php'); ?>
       <?php include('parts/footerJs.php'); ?>
</body>

</html>