<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>しらひゅーのわくわくスタディ　見たことあるゲーム「ありあり」</title>
    <meta name=”robots” content=”index”>
    <meta name="description" content="長野県出身、元美容師/イベントオーガナイザーのしらひゅー(白井　飛友馬)が、WEB制作・デザイン・開発などのプログラミング言語(PHP/Java/JSP/Servlet/HTML/CSS/JavaScriptなど)や英語(TOEIC・日常英会話)、投資、アボカド栽培などを学ぶために作成したWEBサイトです。ここは、Javaなどプログラミングを学ぶページです。特に面白味はないです。" />
    <meta name="keywords" content="プログラミング,JavaScript,ぷよぷよ,HTML/CSS">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="components/loader.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../../mystyle.css">
    <link rel="shortcut icon" href="favicon.ico" />
    <script src="https://kit.fontawesome.com/6256a7882a.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include('../../parts/header.php') ?>
    <?php include('../../parts/widget/widget_214.php'); ?>
    <?php include('../../parts/facebook_twitter_button.php'); ?>





    <div id="puyo-section">

        <div id="puyo-text">
            <h2 class="title">見たことあるゲーム
            <br>「ありあり」</h2>
            <p class="sentence">JavaScript学習の為に作成しました。</p>
            <p class="sentence">デザインに使ったのは、私が描いたキャラクター「ありもん」ですが、プログラミングは、ぷよ〇〇を参考に作成しています。
            <br>
            <br>
            スコア加算もされますので遊んでみてください。STARTボタンで開始します。</p>
            <br>
            <p>
            ※PCの場合は十字（矢印）キーを使用してください。
            <br>スマホ・iPhoneの方は<a href="puyoformobile.php">こちら</a>へ。</p>
            <br>

            <em4>
            ※1: もしプレイ途中で動きが止まった場合は、STARTボタンを再度クリックしてみてください。
            <br><br>
            ※2: STARTボタンを押す度に”ありもん”の落ちるスピードが速くなるようプログラミングしています。
            </em4>
            </p>
            <br><br>

        </div>
        

        <div id="stage">
        <br><br><br>
            <div id="text-button">
                <p id="button">START</p>
            </div>
        </div>

        <div id="score"></div>

        <div style="display:none">
            <img src="img/arimon1.png" id="puyo_1">
            <img src="img/arimon2.png" id="puyo_2">
            <img src="img/arimon3.png" id="puyo_3">
            <img src="img/arimon4.png" id="puyo_4">
            <img src="img/arimon5.png" id="puyo_5">
            <img src="img/batankyu.png" id="batankyu">
            <img src="img/zenkeshi.png" id="zenkeshi">
            <img src="img/0.png" id="font0">
            <img src="img/1.png" id="font1">
            <img src="img/2.png" id="font2">
            <img src="img/3.png" id="font3">
            <img src="img/4.png" id="font4">
            <img src="img/5.png" id="font5">
            <img src="img/6.png" id="font6">
            <img src="img/7.png" id="font7">
            <img src="img/8.png" id="font8">
            <img src="img/9.png" id="font9">
        </div>
    </div>
    <script src="components/loader.js"></script>
    <script src="src/config.js"></script>
    <script src="src/stage.js"></script>
    <script src="src/score.js"></script>
    <script src="src/puyoimage.js"></script>
    <script src="src/player.js"></script>
    <script src="src/game.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../../js/menu.js"></script>

</body>

</html>