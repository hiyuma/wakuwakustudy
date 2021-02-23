<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name=”robots” content=”index”>
  <meta name="description" content="長野県出身、元美容師/イベントオーガナイザーのしらひゅー(白井　飛友馬)が、WEB制作・デザイン・開発などのプログラミング言語(PHP/Java/JSP/Servlet/HTML/CSS/JavaScriptなど)や英語(TOEIC・日常英会話)、投資、アボカド栽培などを学ぶために作成したWEBサイトです。ここは、Javaなどプログラミングをゲーム作成を通して学ぶページです。特に面白味はないです。" />
  <meta name="keywords" content="プログラミング,JavaScript,ゲーム,HTML/CSS">
  <title>しらひゅーのわくわくスタディ ねこちゃんSOS</title>
  <link rel="shortcut icon" href="favicon.ico" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <div id="page_top">
    <a href="#"></a>
  </div>
  <script src="https://kit.fontawesome.com/6256a7882a.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <style>
    body {
      font-family: "Helvetica Neue", Arial, "Hiragino Kaku Gothic ProN", "Hiragino Sans", "BIZ UDPGothic", Meiryo, sans-serif;
      background: linear-gradient(45deg, rgba(253, 206, 255, 0.6), rgba(170, 183, 255, 0.6)), url(catsos.png);
      color: #383838;
      padding: 70px 10px 30px;
      margin: 80px 10px 30px;
    }

    body:before {
      min-width: 320px;
      content: "";
      display: block;
      position: fixed;
      top: 0;
      left: 0;
      z-index: -1;
      width: 100%;
      height: 100vh;
      background: linear-gradient(45deg, rgba(255, 255, 255, 0.4), rgba(152, 188, 255, 0.4), rgba(255, 157, 157, 0.4));
      line-height: 1.8em;
      color: #383838;
      background-size: cover;
    }


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

    #menu ul li a {
      color: #5a5a5a;
    }

    #menu ul li a.active {
      border: 1px solid #ffe4e4;
      color: rgb(189, 189, 189);
      background: linear-gradient(-45deg, rgba(221, 220, 220, 0.6), rgba(255, 238, 235, 0.7), rgba(218, 251, 237, 0.6));
      animation: activeAnime 2s linear infinite alternate;
    }

    @keyframes activeAnime {
      0% {
        text-shadow: 1px 1px 5px rgb(185, 185, 185), -1px 1px 5px rgb(185, 185, 185), 1px -1px 5px rgb(185, 185, 185), -1px -1px 5px rgb(185, 185, 185);
      }

      100% {
        text-shadow: 1 px 1 px 5 px rgb (255, 203, 190), -1 px 1 px 5 px rgb (255, 203, 190), 1 px -1 px 5 px rgb (255, 203, 190), -1 px -1 px 5 px rgb (255, 203, 190);
      }
    }

    #widget {
      display: block;
      margin: 10px auto;
      border-radius: 10px;
      background: linear-gradient(-45deg, rgba(255, 247, 247, 0.6), rgba(255, 244, 241, 0.6));
      justify-content: center;
      padding: 0;
      text-align: center;
    }

    #widget hr {
      width: 80%;
    }

    #widget iframe {
      margin: 0;
      padding: 0;
      outline-style: none;
      opacity: 0.8;
      border-radius: 10px;
      vertical-align: middle;
    }

    .text {
      margin: 10px auto;
      height: auto;
      text-align: center;
      line-height: 1.8;
      background-color: rgba(250, 242, 242, 0.8);
      padding: 15px;
      border-radius: 15px;
      color: #535353;
    }

    .box {
      float: left;
      width: 50px;
      height: 50px;
      background: rgba(212, 233, 253, 0.7);
      cursor: pointer;
      transition: 4s;
      margin: 0 5px 5px 5px;
      text-align: center;
      line-height: 50px;
      user-select: none;
      border-radius: 5px;
      border: solid 1px rgba(159, 203, 245, 0.8);
    }

    .box:last-of-type {
      margin-bottom: 70px;
    }

    .box:hover {
      opacity: 1;
    }

    .win {
      background: rgba(245, 255, 211, 0.8);
      border-radius: 50%;
      transform: rotate(3600deg) scale(2.0);
    }

    .lose {
      background: rgba(90, 90, 89, 0.8);
      transform: scale(0.8);
    }

    .btn {
      width: 100px;
      height: 50px;
      margin: 0 auto;
      padding-bottom: 30px;
      text-align: center;
      line-height: 50px;
      color: #fff;
      animation: Anime 1s linear infinite alternate;
    }


    #startbtn {
      padding: 10px 23px;
      background: #fbabab;
      display: inlineblock;
      opacity: 0.9;
      text-decoration: none;
      box-shadow: 0 10px #fd6565;
      color: #fff;
      border-radius: 8px;
      user-select: none;
    }

    @keyframes Anime {
      0% {
        text-shadow: 2px 2px 10px rgb(255, 36, 36),
          -2px 2px 10px rgb(255, 36, 36),
          2px -2px 10px rgb(255, 36, 36),
          -2px -2px 10px rgb(255, 36, 36),
      }

      100% {
        text-shadow: 2px 2px 10px rgb(246, 0, 0),
          -2px 2px 10px rgb(246, 0, 0),
          2px -2px 10px rgb(246, 0, 0),
          -2px -2px 10px rgb(246, 0, 0);
      }
    }

    #startbtn:hover {
      opacity: 1;
      color: #ff8686;
      cursor: pointer;
    }

    #startbtn:active {
      position: relative;
      top: 10px;
      box-shadow: none;
    }

    .footer {
      margin-top: 500px;
      position: fixed;
      width: 100vw;
      height: 20px;
      line-height: 20px;
      font-size: 12px;
      color: #212121;
      left: 0;
      bottom: 0;
      text-align: center;
      background: linear-gradient(-45deg, rgba(255, 247, 247, 0.4), rgba(255, 242, 239, 0.4));
    }

    @media screen and (min-width: 768px) {
      body {
        width: 720px;
        margin: 50px auto;
      }

      #aside {
        float: right;
        width: 240px;
      }

      #article {
        float: left;
        width: 450px;
      }

      .footer {
        font-size: 15px;
        margin-top: 50px;
      }
    }

    @media screen and (min-width: 1024px) {
      body {
        width: 850px;
        margin: 60px auto;
      }

      #aside {
        float: right;
        width: 260px;
        min-height: 500px;
      }

      #article {
        float: left;
        width: 560px;
      }
    }
  </style>
</head>
<?php include('../parts/header.php') ?>

<body>
  <main>
    <div id="nekochan-section">
      <h1 class="text"><i class="fas fa-cat"></i> ねこちゃんSOS <i class="fas fa-cat"></i>
        <br>(未完成)
      </h1>

      <div class="text">
        下の箱を開けて「おじさん」達から逃げ隠れている「ねこ」ちゃんを早く助けてあげましょう。
        <br>30秒以内にねこちゃんを助けられなかったらあなたの負けです。
        <br><br>...なにこれ。
        <br><br>
        <p>・アンケート(PHP)は<a href="https://developershirai.com/questionnaire.php" target="blank">こちら</a> <i class="far fa-edit"></i></p>

        <p>・「ねこちゃんおみくじ」は<a href="https://developershirai.com/jspractice/omikuji.php" target="blank">こちら</a> <i class="fas fa-paw"></i></p>

        <p>・おためしチャレンジページは<a href="../test.php" target="blank">こちら</a> <i class="fas fa-laptop-code"></i></p>

        <p>・JavaScript練習用ページ「ありあり」は<a href="../puyo2/www/puyoforlaptop.php" target="blank">こちら</a> <i class="fas fa-gamepad"></i></p>

      </div>

      <br>
      <div class="btn" id="count"><a id="startbtn" onclick="setInterval('countDown()',1000);">START</a></div>

      <script>
        'use strict';
        var count = 30;
        const num = 100;
        const winner = Math.floor(Math.random() * num); // 0~numの数値の中のどれか

        for (let i = 0; i < num; i++) {
          const div = document.createElement('div');
          div.classList.add('box');
          div.textContent = '箱';
          document.body.appendChild(div);

          div.addEventListener('click', () => {

            if (i === winner) {
              div.textContent = '😹';
              div.classList.add('win');
              clearInterval(countDown(), 1000);
              alert("おめでとう🎊 ねこちゃん救出成功しました🐈");
              document.getElementById('count').innerHTML = "やったね😸";
            } else {
              div.textContent = '👤';
              div.classList.add('lose');
            }
          });
        }
      </script>

      <script>
        function countDown() {
          console.log('count');
          if (count > -1) {
            document.getElementById('count').innerHTML = count + " 秒";
            count--;
          } else {
            count = 0;
            document.getElementById('count').innerHTML = count + " 秒";
            document.getElementById('count').innerHTML = "救出失敗😿 ";
          }
        }
      </script>



    </div>
  </main>
  <?php include('../parts/footer.php'); ?>
  <script src="../js/menu.js"></script>
</body>

</html>