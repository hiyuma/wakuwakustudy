<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="Content-Security-Policy" content="default-src * data: gap: content: https://ssl.gstatic.com; style-src * 'unsafe-inline'; script-src * 'unsafe-inline' 'unsafe-eval'">
    <title>しらひゅーのわくわくスタディ　見たことあるゲーム「ありあり」</title>
    <meta name=”robots” content=”index”>
    <meta name="description" content="長野県出身、元美容師/イベントオーガナイザーのしらひゅー(白井　飛友馬)が、WEB制作・デザイン・開発などのプログラミング言語(PHP/Java/JSP/Servlet/HTML/CSS/JavaScriptなど)や英語(TOEIC・日常英会話)、投資、アボカド栽培などを学ぶために作成したWEBサイトです。ここは、Javaなどプログラミングを学ぶページです。特に面白味はないです。" />
    <meta name="keywords" content="プログラミング,JavaScript,ぷよぷよ,HTML/CSSHTML/CSS">
    <script src="components/loader.js"></script>
    <script src="src/config.js"></script>
    <script src="src/stage.js"></script>
    <script src="src/score.js"></script>
    <script src="src/puyoimage.js"></script>
    <script src="src/player.js"></script>
    <script src="src/game.js"></script>
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="stylesheet" href="components/loader.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6256a7882a.js" crossorigin="anonymous"></script>
    <style>
        nav.header {
	text-align: center;
	position: fixed;
	width: 100%;
	height: auto;
	top: 0;
	left: 0;
	z-index: 21
}

nav ul {
	margin: 0;
	padding: 0;
	box-shadow: 1px 1px 1px 0 #000;
}

nav ul li {
	list-style: none;
	float: left;
	width: 20%;
	text-align: center;
	text-shadow: 1px 1px 1px rgb(255, 190, 190);
}

nav ul li a {
	display: block;
	padding: 15px 0;
	border: 2px solid #e9e9e9;
	background: linear-gradient(-45deg, rgba(221, 220, 220, 0.6), rgba(255, 238, 235, 0.9), rgba(218, 251, 237, 0.8));
	text-decoration: none;
	border-radius: 3px;
}
    </style>
</head>

<body style="margin:0;">

    <!-- <div id="stage" style="position:absolute; left: 0; top: 0; overflow: hidden;"></div> -->
    <div id="stage" style="position:relative; margin: 0 auto; overflow: hidden;background: url(img/arimonbg.png)">
    <br><br><br><br>
    <div id="text-button">   
            <p id="button">START</p>
        </div>
        <?php include('../../parts/header.php') ?>

    </div>
    <!-- <div id="score" style="position:absolute; left: 0; top: 0; overflow: hidden; text-align: right;"></div> -->
    <div id="score" style="margin: 0 auto; overflow: hidden; text-align: right;"></div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../../js/menu.js"></script>
</body>

</html>