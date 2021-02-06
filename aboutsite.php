<!DOCTYPE html>
<html lang="ja">

   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description"
      content="長野県出身、元美容師/イベントオーガナイザーのしらひゅー(白井　飛友馬)が、WEB制作・デザイン・開発などのプログラミング言語(PHP/Java/JSP/Servlet/HTML/CSS/JavaScriptなど)や英語(TOEIC・日常英会話)、投資、アボカド栽培などを学ぶために作成したWEBサイトです。ここは、しらひゅーのわくわくスタディを紹介するページです。特に面白味はないです。" />
   <meta name="keywords" content="プログラミング,しらひゅー,しらい　ひゆま,Java,独学">
      <title>しらひゅーのわくわくスタディ ABOUT THIS WEBSITE</title>
      <link  rel = "shortcut icon"  href = "favicon.ico" />
      <link rel="stylesheet" href="mystyle.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <div id="page_top">
         <a href="#"></a>
      </div>
      <script src="https://kit.fontawesome.com/6256a7882a.js" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   </head>

   <body>
   <?php include('parts/header.php') ?>

      
   <?php include('parts/widget/widget_mujirushi.php') ?>


      <header>
         <h1 class="logo">著</h1>
      </header>

      <?php include('parts/menuButton.php'); ?>
  <?php include('parts/facebook_twitter_button.php'); ?>

      <main>
         <div id="article">
            <section>
               <div class="line">しらひゅーのわくわくスタディ</div>
               <p>
                  <image id="top-img" src="gallery/top/aboutsite.png" alt="">
               </p>
               <p>このサイトは、リモートワーク中の <a href="about.php"
                     target="blank">し ら ひ ゅ ー</a> が1から制作、日々更新中。
                     <br><br>
                     2020年3月22日から独学と同時にこのサイトを制作開始。
                     <br><br>
                     WEBサイト制作・デザイン・アプリ開発などプログラミングの知識・技術をメインに習得していきます。
                  <br><br>
                  また、TOIEC試験560点(2019年11月時点)からTOIEC800点以上を目指すため、英語も継続して修学中。
                  <br><br>
                  他、アボカド成長日記、株式投資レポート(一部)、好きな音楽、映画レビュー等の発信もしていきます。
                  <br><br>
                  加え、新型コロナウイルスとの闘いでももがく孤独な自粛生活の日々。
                  <br><br>
                  ほぼ毎日、このサイトのどこかしらを更新しながら学ぶ。
                  <br><br>
                  そんな様子が少しだけ見えるサイト。そうです、ただの自己満サイトなんです。
                  <br><br>
                  終活も兼ねることにしました。
                  <br><br>
                  <hr>
                  <div><em2>
                     ※注：このサイトは、独学しながらプログラミングコードを追加していくため、未完成・無意味な箇所複数有り。恥ずかしいので、そのうち閉鎖する予定。
                     <br><br>
                     <i class="fas fa-arrow-circle-right"></i> 勉強やアウトプットに効果的になってきたので、しばらく閉鎖しなさそうです。
                  </em2></div>
               </p>
            </section>
            <?php include('parts/contents.php'); ?>

         </div>

         <div id="aside">
         <?php include('parts/prof.php'); ?>

         <?php include('parts/widget/side_widget.php'); ?>

         </div>
      </main>
      <?php include('parts/footer.php'); ?>

      <script src="js/menu.js"></script>
      <script src="js/href.js"></script>

   </body>

</html>