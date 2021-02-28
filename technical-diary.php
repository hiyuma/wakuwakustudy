<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name=”robots” content=”index”>
  <meta name="description" content="長野県出身、元美容師/イベントオーガナイザーのしらひゅー(白井　飛友馬)が、WEB制作・デザイン・開発などのプログラミング言語(PHP/Java/JSP/Servlet/HTML/CSS/JavaScriptなど)や英語(TOEIC・日常英会話)、アボカド栽培などを学ぶために作成したページです。不定期にプログラミングやIT系の日記を掲載していきます。特に面白味はないです。" />
  <meta name="keywords" content="日記,白井　飛友馬,プログラミング,HTML/CSS,PHP,JavaScript">
  <title>しらひゅーのわくわくスタディ TECHNICAL DIARY</title>
  <link rel="shortcut icon" href="favicon.ico" />

  <link rel="stylesheet" href="mystyle.css">
  <link rel="stylesheet" href="cal.css">


  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <div id="page_top">
    <a href="#"></a>
  </div>
  <script src="https://kit.fontawesome.com/6256a7882a.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>
  <link rel="stylesheet" href="pre.css">
</head>

<body>
  <?php include('parts/header.php') ?>


  <?php include('parts/widget/widget_214.php') ?>


  <header>
    <h1 class="logo">録</h1>
  </header>

  <?php include('parts/menuButton.php'); ?>
  <?php include('parts/facebook_twitter_button.php'); ?>


  <main>
    <div id="article">
      <section id="techsection">
        <div class="line">TECHNICAL DIARY</div>
        <p>
          <img id="top-img" src="gallery/top/techtop.jpg" alt="">
        </p>
        <br>
        <p>IT関連の技術的な日記を書くかもしれないし、書かないかもしれないです。
          <br><br>
          <em2>※2021年2月現在、フリーランス活動と資格試験勉強中のため、更新頻度が低くなっています。</em2>
        </p>
        <br>
        <div class="schedule_wrapper">
          <h3><i class="far fa-list-alt"></i>Technical diary list</h3>
          <!-- list -->
          <div id="schedule0" class="schedule_list">
            <ol reversed>
              <li><a href="#20210228"> 2021年02月28日 JavaScript/jQuery ②「スクロールトップ/アニメーション」</a></li>
              <li><a href="#20210221"> 2021年02月21日 JavaScript/jQuery ①「lightGalleryの使い方」</a></li>
              <li><a href="#20210218"> 2021年02月18日 PHP ③「繰り返し処理(while文)」</a></li>
              <li><a href="#20210214"> 2021年02月14日 SEO ①「サイトマップの作成と追加」</a></li>
              <li><a href="#20210210"> 2021年02月10日 HTML/CSS ①「ソースコードの埋め込み」</a></li>
              <li><a href="#20210209"> 2021年02月09日 PHP ②「現在日時の所得」</a></li>
              <li><a href="#20210208"> 2021年02月08日 PHP ①「入力値の継承」</a></li>
              <li><a href="#20210206"> 2021年02月06日 CSS ②「リストデザイン変更」</a></li>
              <li><a href="#20210205"> 2021年02月05日 CSS ①「スクロールバーデザイン変更」</a></li>
              <li> <a href="#recommend"> <i class="fab fa-amazon"></i> しらひゅー推し</a></li>
              <!-- <li> <a href="#amazon"> <i class="fab fa-amazon"></i>　RELATIONS</a></li> -->
            </ol>
          </div>
        </div>

        <!--テンプレート id=00XX -->
        <!-- <div id="202103XX"></div>
        <br>
        <p id="avocado">2021年03月XX日 <i class="fas fa-laptop-code"></i>XML</p>
        <h2 id="title">「」</h2>
        

        <div class="accbox">

          <p><img src="gallery/techimg" alt=""></p>

          <input type="checkbox" id="00XX" class="cssacc" />

          <label for="00XX"><span><i class="fas fa-book"></i>READ</span></label>
          <div class="accshow">
            <h3></h3>
            <p>
            <br><br>
            <br><br>
            <br><br>
            <br><br>
            </p>
          </div>
        </div>
        <br> -->



        <!-- id=0009 -->
        <div id="20210228"></div>
        <br>
        <p id="avocado">2021年02月28日 <i class="fas fa-laptop-code"></i>jQuery</p>
        <h2 id="title">「スクロールトップ/アニメーション」</h2>

        <div class="accbox">

          <p><img src="gallery/techimg/20210228/TOPbutton.jpg" alt="TOPへ戻るボタン"></p>

          <input type="checkbox" id="0009" class="cssacc" />

          <label for="0009"><span><i class="fas fa-book"></i>READ</span></label>
          <div class="accshow">
            <h3>jQuery"scrollTop"とは？</h3>
            <p>”jQuery”は、JavaScriptを簡易な記述で利用できる多機能なライブラリです。
              <br><br>
              その機能の1つに”scrollTop”があります。
              <br><br>
              <strong><mark>”scrollTop”は、WEBサイトの座標を取得することやイベント設定などができます。</strong></mark>
              <br><br>
              さらに、アニメーション処理も追加できます。
              <br><br>
              今では、ほとんどのWEBサイトには、「Topへ戻る」や「▲」のようなページ一番上まで戻るボタンが設置されています。
              <br><br>
              その一番上に戻るまでに、アニメーションを加えているWEBサイトも多いです。
              <br><br>
              また、一番上では、「Topへ戻る」ボタンが消えて、少ししたにスクロールすると現れるようにすることもできます。
              <br><br>
              本サイトは、独学始めてから、すぐ右下にTOPへ戻る「▲」ボタンを設置していましたが、アニメーション効果は付けていませんでした。
              <br><br>
              一応、付けておいた方がユーザビリティ向上するかなと思い、今更ながらプログラムしてみました。
            </p>

            <h3>jQuery"scrollTop"の使い方は？</h3>

            <p><strong><mark>"scrollTop"の基本的な使い方は、スクロール座標を、”HTML要素”を対象に取得し、引数の「値」を指定します。</strong></mark>
            <pre class="prettyprint linenums">HTML要素.scrollTop( 値 )</pre>
            この引数は、省略可能です。
            <br><br>
            省略した場合は、HTML要素の位置を取得することになります。
            <br><br>
            "scrollTop"記述方法は、様々あります。
            <br><br>
            まず、プログラムされていない場合を確認しておきます。
            <br><br>
            例で記述したHTMLの「For example」や「一番上へスクロール」を押すと、下の”Result”のように動作します。
            <br>
            <p class="codepen" data-height="303" data-theme-id="dark" data-default-tab="html,result" data-user="hiyuma" data-slug-hash="ExNEgeb" style="height: 303px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="ExNEgeb">
              <span>See the Pen <a href="https://codepen.io/hiyuma/pen/ExNEgeb">
                  ExNEgeb</a> by MARC JACOBS (<a href="https://codepen.io/hiyuma">@hiyuma</a>)
                on <a href="https://codepen.io">CodePen</a>.</span>
            </p>
            <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
            <br>
            瞬間移動です。これは、これですごいことだと思っています。
            <br><br>
            では次に、jQueryを記述して、スクロール移動を見えるようにします。
            <br><br>
            ”Result”で動作確認をしてみるとスクロールにアニメーションが付いているのが分かります。
            <br>

            <p class="codepen" data-height="265" data-theme-id="dark" data-default-tab="html,result" data-user="hiyuma" data-slug-hash="dyOmOaP" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Scroll Top / Animation Example">
              <span>See the Pen <a href="https://codepen.io/hiyuma/pen/dyOmOaP">
                  Scroll Top / Animation Example</a> by MARC JACOBS (<a href="https://codepen.io/hiyuma">@hiyuma</a>)
                on <a href="https://codepen.io">CodePen</a>.</span>
            </p>
            <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
            <br>
            アニメーション効果があった方が、”今”を生きている感じがします。(?)
            <br><br>
            そして、本サイトのTOPへ戻る「▲」ボタンを座標150以上(一番上から座標150まで表示させない)例を記述してみました。
            <br>
            <p class="codepen" data-height="265" data-theme-id="dark" data-default-tab="html,result" data-user="hiyuma" data-slug-hash="eYBMgva" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="scrollTop() example">
              <span>See the Pen <a href="https://codepen.io/hiyuma/pen/eYBMgva">
                  scrollTop() example</a> by MARC JACOBS (<a href="https://codepen.io/hiyuma">@hiyuma</a>)
                on <a href="https://codepen.io">CodePen</a>.</span>
            </p>
            <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
            <br>
            "scrollTop"でWEBサイトの座標を取得し、if文で条件分岐し「”座標 > 150"なら▲ボタンをフェイドインする。そうでないならフェイドアウトする」命令をしていることになります。
            </p>
            <h3>jQuery"scrollTop"の使い方は？</h3>
            <p>他にもCSSで簡単にアニメーションさせられる”ScrollTrigger”や、横スクロールでイベント発生させる方法など、スクロール関連の記述は多いです。
            <br><br>
            ユーザビリティ向上のためにも、スクロールイベント、アニメーションを使えるようになっておきます。
            <br><br>
            </p>
          </div>
        </div>
        <br>


        <!-- id=0008 -->
        <div id="20210221"></div>
        <br>
        <p id="avocado">2021年02月21日 <i class="fas fa-laptop-code"></i>JavaScript/jQuery</p>
        <h2 id="title">「lightGalleryの使い方」</h2>

        <div class="accbox">

          <p><img src="gallery/techimg/20210220/LightGalleryScreenFuji.jpg" alt="lightGallery設置後"></p>

          <input type="checkbox" id="0008" class="cssacc" />

          <label for="0008"><span><i class="fas fa-book"></i>READ</span></label>
          <div class="accshow">
            <h3>”jQuery”とは？</h3>
            <p><mark><strong>フロントエンド言語の”JavaScript”で記述できる内容をより短く簡単な記法で実現できる、”JavaScript”で作成されたライブラリです。</strong></mark>
              <br><br>
              本サイトでも、かなり利用しているライブラリで、”JavaScript”だと記述が長くなって複雑になることがある部分を、短く読みやすい記述で実行できます。
              <br><br>
              例えば、”JavaScript”で、コンソールに出力をしたい場合で考えます。
            <pre class="prettyprint linenums">console.log(document.getElementByID(‘example’).getAttribute(‘class’));</pre>
            ”jQuery”で記述すると、
            <pre class="prettyprint linenums">console.log($(‘#example’).attr(‘class’));</pre>
            これだけでも、実行結果も同じで記述量がだいぶ減ったことが分かります。
            <br><br>
            全て"JavaScript"で記述していたら、時間がもったいないので、ライブラリで使える部分は、jQueryで記述していきたいですね。

            <h3>”lightGallery”とは？</h3>
            <mark><strong>”lightGallery”とは、lightbox系（サムネイル画像をクリックしてモーダルウィンドウを開き、拡大して表示）のjQueryプラグインです。</strong></mark>
            <br><br>
            レスポンシブ対応で、画像や動画、iframe要素なども利用できる、高機能な画像ギャラリーを簡単に実装できます。
            <br><br>
            本サイトでは、<a href="https://developershirai.com/gallery.php">PHOTO</a>のページの写真それぞれに、この”lightGallery”を実行させるようにプログラム組んでいます。
            <br><br>
            例として、”lightGallery”を使わず、通常のの写真表示は、
            <p><img src="gallery/techimg/20210220/NoneLightGallery.jpg" alt="lightGallery設置前"></p>
            のように、表示する以外の機能はありません。
            <br><br>
            ”lightGallery”を使った場合の写真
            <p><img src="gallery/techimg/20210220/LightGalleryScreenFuji.jpg" alt="lightGallery設置後"></p>
            のように、表示する以外に、スマートフォンでのスワイプ操作対応、写真を下に並べる、拡大縮小、次や前の写真へ移動など、様々な機能が使えます。
            <h3>”lightGallery”の設置方法は？</h3>
            ”lightGallery”は、個人利用の範囲であれば、オープンソースとして利用できます。
            <br><br>
            ”lightGallery”の設置方法では、ローカルファイルか、CDNどちらでも可能ですが、今回は、
            ローカルファイルで画像ギャラリーに対して設置する方法を紹介します。
            <ul id="while">
              <li>①GitHubから「lightgallery」をダウンロード</li>
              <li>②lightGallery-master > dist フォルダ(css、fonts、img、js)を配置</li>
              <li>③HTMLマークアップ</li>
              <li>④JavaScript(jQuery)の記述</li>
            </ul>
            <h3>①GitHubから「lightgallery」をダウンロード</h3>
            <a href="https://github.com/sachinchoolur/lightgallery.js/">公式サイト(GitHub)</a>からZIPファイルをダウンロードします。
            <p><img src="gallery/techimg/20210220/lightgalleryGitHub.jpg" alt="lightGalleryGitHub"></p>
            <h3>②lightGallery-master > dist フォルダ(css、fonts、img、js)を配置</h3>
            ZIP解凍後、「lightGallery-masterdist」フォルダの中にcss、fonts、img、jsの4つのフォルダがあるので、4つとも任意の場所へ移動します。
            <br><br>
            僕は、新規で"lightgallery"フォルダを作成して、その中に配置しています。
            <h3>③HTMLマークアップ(CSS)</h3>
            "lightGallery"は、ファイルを追加して、拡張することが出来ます。
            <br><br>
            今回は、機能を指定せずに、全ての機能を利用する簡単な方法で進めていきます。
            <br><br>
            まずは、CSSをHTMLの&lt;head>内に記述します。
            <pre class="prettyprint linenums">&lt;head>
 .....          
&lt;link rel="stylesheet" href="path/lightGallery/lightgallery.css" />
 .....
&lt;/head>
</pre>
            また、画像は基本的に以下のよう記述します。
            <pre class="prettyprint linenums">&lt;div id="lightgallery">
  &lt;a href="img/img1.jpg">
      &lt;img src="img/thumb1.jpg" />
  &lt;/a>
  &lt;a href="img/img2.jpg">
      &lt;img src="img/thumb2.jpg" />
  &lt;/a>
.....
&lt;/div></pre>

            <h3>④JavaScript(jQuery)の記述</h3>
            次は、&lt;body>の閉じタグ手前で、&lt;script>&lt;/script>を記述して読み込ませます。
            <br><br>
            head内に記述しても利用できますが、ユーザのHTML表示に遅延が起こる可能性があるので、最後に読み込ませた方が良い場合もあります。
            <br><br>
            jQueryを先に読み込ませないと、lightGalleryは利用できないので、順番に注意しましょう。

            <pre class="prettyprint linenums">&lt;body>
  .....
    &lt;!-- 必ずjQuery を最初に読み込みます -->
    &lt;script src="http://code.jquery.com/jquery-3.5.1.min.js">&lt;/script> 
    &lt;!-- lightGalleryを読み込みます -->
    &lt;script src="js/lightgallery.min.js">&lt;/script>
    &lt;!-- HTMLのid "lightGallery"を指定して実行します -->
    &lt;script>$("#lightgallery").lightGallery();&lt;/script>
&lt;/body>  
</pre>
            以上で、”lightGallery”の基本的な設置が完了です。
            <br><br>
            多少、カスタムや”lightGallery”複数設置などもできますので、試してみるときっと楽しめるでしょう。
            </p>
          </div>
        </div>
        <br>


        <!-- id=0007 -->
        <div id="20210218"></div>
        <br>
        <p id="avocado">2021年02月18日 <i class="fas fa-laptop-code"></i>PHP</p>
        <h2 id="title">「繰り返し処理(while文)」</h2>

        <div class="accbox">

          <p><img src="gallery/techimg/20210218/galleryphotoimg1.jpg" alt="写真を順番に並べる"></p>

          <input type="checkbox" id="0007" class="cssacc" />

          <label for="0007"><span><i class="fas fa-book"></i>READ</span></label>
          <div class="accshow">
            <h3>while文とは？</h3>
            <p><mark><strong>while文とは、JavaやPHPなどのプログラミングで、繰り返し処理をする時に使う方法の一つです。</strong></mark>
              <br><br>
              英語の”while”は、「～する間」、「～と同時に」、「ところが一方」のように訳します。
              <br><br>
              繰り返し処理としては、”while文”よりも"for文"の方が有名ですが、今回は敢えて”while”をご紹介します。
              <br><br>
              プログラミングでは、「～する間」の意味で、必ず条件を提示して利用します。
              <br><br>
              今回、例として<a href="https://developershirai.com/gallery.php">PHOTO</a>ページの写真掲載を挙げます。
              <br><br>
              多数掲載していますが、手動でHTMLを書いていくのは大変です。
            <p><img src="gallery/techimg/20210218/galleryphotoNaganoPartyImg.jpg" alt="HTMLでimgを並べる"></p>
            写真のように、枚数分(写真の場合は73枚分)のファイル名を順番に記述することになります。
            <br><br>
            これが、かなり辛い作業になっていました。
            <br><br>
            手間を省くため、事前に数字部分のみ異なるようにファイル名を変更しています。
            <br><br>
            その方が数字を書き換えるだけで良いので、HTML/CSSの独学を始めた頃の僕の中では、Visual Studio Codeの助けもあり、とても効率的でした。
            <br><br>
            しかし、最近、本サイトをHTMLからPHPへ移行しましたので、PHPを生かした処理に記述を変更することにしました。

            <h3>while文の書き方は？</h3>
            <p><strong><mark>PHPにおいてのwhile文の書き方は、他のプログラミング言語のそれと流れは同じです。</strong></mark></p>
            <p><img src="gallery/techimg/20210218/phpwhileDone.jpg" alt="HTMLでimgを並べる"></p>
            <ul id="while">
              <h4>while文の処理流れ(上写真の場合)</h4>
              <li>① 変数に写真１枚目の数字を代入</li>
              <li>② while(条件式)でいつまで繰り返し処理を行うか条件を指定する</li>
              <li>③ while(条件式)がTRUEであれば(x&lt;87であれば)、処理を実行</li>
              <li>④ echoの''を出力する</li>
              <li>⑤ 変数に1をプラスする</li>
              <li>⑥ while(条件式)がFALSEにならない限り(x>=87になるまで)繰り返し処理を行う</li>
              <li>⑦ while(条件式)がFALSEになった場合は処理を終了する</li>
            </ul>
            という、流れになります。
            <br><br>
            それでは、先ほど、手動で記述していた<a href="https://developershirai.com/gallery.php#2013%E9%95%B7%E9%87%8E">長野県パーティ</a>をPHPのwhile文に変更しました。

            <pre class="prettyprint linenums">$x = 1;
              while ($x < 73) {
                echo '&lt;a href="gallery2/2013年2月 NagaNo@中目黒solfa/2013年NAGANO@solfa (' . $x . ').jpg" target="blank">&lt;img id="photoGallery" src="gallery2/2013年2月 NagaNo@中目黒solfa/resize/2013年NAGANO@solfa (' . $x . ')small.jpg" alt="">&lt;/a>';
                $x++;
              }</pre>

            スッキリしました。
            <br><br>
            ちなみに、"for文"だともう少しスッキリするので、記述方法を簡単に紹介しておきます。
            <pre class="prettyprint linenums">
            for ($x = 1;$x < 108;$x++) {
                echo '&lt;a href="gallery2/2011年 12月17日～24日福島/2020-10-18(' . $x . ').jpg" target="blank">&lt;img id="photoGallery" src="gallery2/2011年 12月17日～24日福島/resize/2020-10-18(' . $x . ')small.jpg" alt="">&lt;/a>';
              }</pre>
            しかも、先にJavaを勉強したので、PHPの記述が簡単すぎてダブルで感動しました。
            <br><br>
            まだまだ、大量に写真をストックしているけれど、これで写真を掲載する時間がないなんて、言いたくならなくなるかもしれません。
            </p>
          </div>
        </div>
        <br>

        <!-- id=0006 -->
        <div id="20210214"></div>
        <br>
        <p id="avocado">2021年02月14日 <i class="fas fa-laptop-code"></i>SEO施策</p>
        <h2 id="title">「サイトマップの作成と追加」</h2>

        <div class="accbox">

          <p><img src="gallery/techimg/20210214/AddSitemap.jpg" alt="sitemap.xml Editor1"></p>

          <input type="checkbox" id="0006" class="cssacc" />

          <label for="0006"><span><i class="fas fa-book"></i>READ</span></label>
          <div class="accshow">
            <h3>1.サイトマップとは？</h3>
            <p><mark><strong>サイトマップとは、Webサイト（ドメイン内）のページリンクをまとめたリストのことです。</mark></strong>
              <br><br>
              そのWebサイトには、どのようなページがあるのか、ファイル情報など、Webサイトの内容をわかりやすく伝える役割をしています。
              <br><br>
              本Webサイトは、僕が独学で1から作成したため、まとまりのない内容になっていますが、通常は、このサイトマップを考えた構成で設計し作成していくのが良いでしょう。
              <br><br>
              特に、SEO施策を気にするのであれば、検索エンジンに正しく認識されることが重要です。
              <br><br>
              Googleが"サイトマップが必要かどうか"について、以下の様に説明しています。
              <br><br>
            <ul>
              <h4>サイトマップが必要かどうか</h4>
              <p>サイトの各ページが適切にリンクされていれば、Google は通常、サイトのほとんどのページを検出できます。
                <br><br>
                その場合でも、大規模なサイト、複雑なサイト、専門性の高いファイルのクロールを改善する手段としてサイトマップが役立ちます。
              </p>
              <h4>次の場合にサイトマップが必要になることがあります。</h4>

              <li>サイトのサイズが非常に大きい。</li>
              <li>サイトにどこからもリンクされていない、または適切にリンクされていないコンテンツ ページのアーカイブが大量にある。</li>
              <li>サイトが新しく、外部からのリンクが少ない。</li>
              <li>サイトに動画や画像などのリッチメディア コンテンツが多数含まれている、またはサイトが Google ニュースに表示されている。</li>
              <br>
              <em3>出典：<a href="https://developers.google.com/search/docs/advanced/sitemaps/overview?hl=ja&visit_id=637488909103191118-449890832&rd=1">上級者向け SEO施策/サイトマップについて | google検索セントラル</a></em3>
            </ul>
            ちなみに、本サイトはサイズが小さいですし、SEO施策を気にして作成していないので、必要ないでしょう。
            <br><br>
            とはいえ、Webサイト構築受注でもSEO施策は重要なので、作成してみました。
            <br><br>
            サイトマップには、”XMLサイトマップ”と”HTMLサイトマップ”の2種類のファイル形式があります。
            <br><br>
            ”XMLサイトマップ”とは、Googleなどの検索エンジンにWebサイトの各ページ情報を認識してもらうリストです。
            <br><br>
            ”HTMLサイトマップ”とは、ユーザが目にして、どのようなページがあるのか情報を伝えたり、ユーザの利便性を向上させるリストです。
            <br><br>
            Googleのいう、ユーザビリティとクローラビリティを向上するためには、どちらも作成した方が良いということです。


            <h3>2.サイトマップを作成する方法は？</h3>
            ”XMLサイトマップ”と”HTMLサイトマップ”どちらも作成することは難しくないです。
            <br><br>
            まず、”XMLサイトマップ”の作成方法から説明します。
            <br><br>
            「Google XML Sitemaps」や、フリーのWebアプリで作成できます。

            <h4>”XMLサイトマップ”の作成方法</h4>

            今回は、サイトマップを作成してくれる自動生成ツール<a href="http://www.sitemapxml.jp/" target="_blank">sitemap.xml Editor</a>を使いました。
            <p><img src="gallery/techimg/20210214/sitemapCreate.jpg" alt="sitemap.xml Editor2"></p>
            特に理由がなければ、写真のように選択肢を変えずにサイトマップを作成します。
            <br><br>
            サイトマップから除外したいページがある場合は、指定しておいた方が良いです。
            <p><img src="gallery/techimg/20210214/sitemapDone.jpg" alt="sitemap.xml Editor3"></p>
            作成開始して、しばらくすると完了します。完了した"sitemap.xml"ファイルをクリックしてダウンロードします。
            <br><br>
            ダウンロードした"sitemap.xml"ファイルをFTPなどでルート配下になるように配置します。
            <br><br>
            以下の写真のように、Googleへ教えてあげるために<a href="https://search.google.com/search-console/">Google Search Console</a>の左項目から、サイトマップを選択し、URLに"sitemap.xml"を入力し送信します。
            <p><img src="gallery/techimg/20210214/AddSitemap (2).jpg" alt="Google Search Console"></p>
            写真のようにステータス「成功しました」と表示されたら完了です。
            <br><br>
            もし、「取得できませんでした」などのエラーが出た場合は、ファイル名やディレクトリを再度確認して送信しなおしてみましょう。

            <h4>”HTMLサイトマップ”の作成方法</h4>
            手動で作成する方法と、自動で作成する方法があります。
            <br><br>
            本サイトには、”HTMLサイトマップ”は設置していません。
            <br><br>
            サイト規模が小さいのもありますが、Webサイト自体作成中なので、設置するとしたら、まだ先になるでしょう。
            <br><br>
            また、依然は、必要とされていた大規模Webサイトでも、”HTMLサイトマップ”を設置しないサイトが増えてきています。
            <br><br>
            <a href="https://www.amazon.co.jp/">Amazon</a>のサイトでも、現在では、カスタマー向けのサイトマップは設置されていないようです。数年前までは、”HTMLサイトマップ”が設置されていた記憶があります。
            <br><br>
            ユーザビリティの向上からも、SEO施策からも設置した方が良いと言われてきました。
            <br><br>
            しかし、現在(2021年2月14日)では、Googleは”XMLサイトマップ”を参考にしているため、”HTMLサイトマップ”は、SEO施策としての効果はないと言われているのです。
            <br><br>
            ただ、もし、WordPressを利用している場合は、”HTMLサイトマップ”を簡単に自動生成してくれるプラグインがありますので、紹介しておきます。
            <br><br>
            WordPressの場合は、「<a href="https://ja.wordpress.org/plugins/ps-auto-sitemap/">PS Auto Sitemap</a>」と「<a href="https://ja.wordpress.org/plugins/simple-sitemap/">Simple Sitemap</a>」があります。
            <br><br>
            現段階では、僕がWordPressを利用していないため、「PS Auto Sitemap」で作成が必要な場合は、恐れ入りますが検索して見つけていただきたいです。
            <br><br>
            ちなみに、”HTMLサイトマップ”を手動で作成する場合は、リンク切れなどのミスが起きやすく管理する必要が出てくるのであまりオススメしません。
            <h3>3.サイトマップを作成し、SEO施策しましょう</h3>
            サイトマップには、クローラビリティを向上する”XMLサイトマップ”と、ユーザビリティを向上する”HTMLサイトマップ”の2種類があり、
            <br><br>
            現在のSEO施策では、”XMLサイトマップ”を設置しておいた方が良いでしょう。また、”HTMLサイトマップ”は、SEO施策との関連性が薄いか全く無いため、必要に応じて設置するべきか判断しましょう。
            </p>
          </div>
        </div>
        <br>

        <!-- id=0004 -->
        <div id="20210210"></div>
        <br>
        <p id="avocado">2021年02月10日 <i class="fas fa-laptop-code"></i>HTML</p>
        <h2 id="title">「ソースコードの埋め込み」</h2>

        <div class="accbox">

          <p><img src="gallery/techimg/sourcecodeimg.jpg" alt="ソースコードの埋め込みTOP"></p>

          <input type="checkbox" id="0004" class="cssacc" />

          <label for="0004"><span><i class="fas fa-book"></i>READ</span></label>

          <div class="accshow">
            <p>プログラミングを学んでいる人は皆さん、インターネット検索で情報を得ようとしたことがあると思います。
              <br><br>
              企業サイトや個人サイトなど、ソースコードが埋め込まれた記事を読んだことがあると思います。
              <br><br>
              今回は、３つの方法を紹介します。
              <br><br>
            <h3>1．Code Pen</a></h3>
            よく見かけるのは、ソースコードと実行結果を表示してくれるWEBアプリ<a href="https://codepen.io/pen/">「Code Pen」</a>です。
            <br><br>
            たとえば、下に掲載した埋め込みです。
            <br><br>
            ちなみに、Result(実行結果)の「ソースコードの埋め込み」をクリックするとカウントダウンされ、0になった時にアラートが表示されるプログラミングを記述しています。
            <br>
            <p class="codepen" data-height="265" data-theme-id="light" data-default-tab="html,result" data-user="hiyuma" data-slug-hash="rNWMmOQ" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="rNWMmOQ">
              <span>See the Pen <a href="https://codepen.io/hiyuma/pen/rNWMmOQ">
                  rNWMmOQ</a> by MARC JACOBS (<a href="https://codepen.io/hiyuma">@hiyuma</a>)
                on <a href="https://codepen.io">CodePen</a>.</span>
            </p><br>
            <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
            タブ選択で、HTML、CSS、JSと実行結果、それぞれ、この画面内ですべて確認できるツールです。
            <br><br>
            Pen設定から、CSSをSaasやSCCS、JS(JavaScript)をTypeScriptやLiveScriptに変更して記述することもできます。
            <br><br>
            <a href="https://codepen.io/pen/">「Code Pen」</a>は、コードを記述し終わったら、①右下の[Embed]をクリックして表示される②下枠にあるHTMLのコードをコピーして、表示したい部分にペーストすると完了です。
            <br><br>

            <h3>2．Gist</h3>
            次に紹介するのは、"GitHub"で利用できる<a href="https://gist.github.com/">「Gist」</a>です。
            <br><br>
            "GitHub"は、開発者のためにあるプラットフォームで、バージョン管理できたり、共有開発したりと何かとお世話になります。
            <br><br>
            「Gist」を使うには"GitHub"のアカウントが必要なので、アカウントなくとも無料ですぐ作成できますし、シンプルで使いやすいです。
            <br><br>
            記述したコードはそのまま、GitHub(Gist)に公開、非公開を選択して保存することもできます。
            <br><br>
            <p><img src="gallery/techimg/GithubGistsave.jpg" alt="ソースコードの埋め込みGist1"></p>
            保存後、右上のEmbedに&lt;script&gt;があるのでコードをコピーして、表示したい部分にペーストすると完了です。
            <p><img src="gallery/techimg/GithubGistpaste.jpg" alt="ソースコードの埋め込みGist2"></p>
            作成してコピーしたものを下にペーストしました。
            <script src="https://gist.github.com/hiyuma/99e11c7b90ed74d8939fa4a2fd628f1e.js"></script>
            シンプルです。
            <br><br>
            Gistから作成したファイルを消すと、上のコードも消えるので削除する場合は、謎の空白ができるので注意です。
            <br><br>

            <h3>3．Google code-prettify</h3>
            <a href="https://github.com/googlearchive/code-prettify">Google code-prettify</a>とは、Googleが提供するHTML ページに含まれるソースコードのキーワードなどに色を付けて見やすくできる"JavaScriptライブラリ"です。
            <br><br>
            HTMLには、コードをタグ「&lt;pre&gt;&lt;code&gt;&lt;/code&gt;&lt;/pre&gt;」で囲って表示することができるようになっています。
            <br><br>
            ですが、”&lt;”や”&gt;”などの文字は、エスケープ処理しないとコードとして認識されて上手く表示されなず、また、コードの色分けやフォント調整などで、CSSが必要になるため、とても大変です。
            <br><br>
            例えば、下のよう記述した場合です。
            <p><img src="gallery/techimg/PreCodeTagEscape.jpg" alt="ソースコードの埋め込みpre"></p>
            <pre><code>
            &lt;h1 id="count" 
            onclick="setTimeout('countDown()',0.1);"&gt;
            ソースコードの埋め込み&lt;/h1&gt;
            &lt;p&gt;エスケープ処理で&lt;/p&gt;
            &lt;span&gt;下の写真のような処理をしています。&lt;/span&gt;
            　　当然ですが、"h1"や"span"や"p"がコードとして
            　　認識されないのが分かります。
            &lt;pre&gt;&lt;code&gt;&lt;/code&gt;&lt;/pre&gt;
            で囲うとフォントが変わり、インデントが入り、
            スペースや改行がそのまま反映されるなど、
            コードを表記しやすい表記に変わります。
            </code></pre>

            <br><br>
            プログラミングコードらしいフォントというかなんというか、良く見たことある感じになりました。
            <br><br>
            ということで、前置き長くなりました。
            <br><br>
            やはり見にくいので、より見やすく、より簡単に記載するため<a href="https://github.com/googlearchive/code-prettify">Google code-prettify</a>をCDNで利用する方法を紹介します。
            <br><br>
            ダウンロードし、ローカルファイルとして利用する方法もありますが、今回は省略します。
            <br><br>
            以下のscriptを使うことで、CDNをスクリプトとスタイルシートの読み込みを共に一括して行えます。

            <pre class="prettyprint linenums">&lt;script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"&gt;&lt;/script&gt;</pre>

            <br><br>
            あとは、bodyの表示したい場所にタグ&lt;pre class="prettyprint linenums">&lt;/pre>を入れて、コードで記述します。
            <br><br>
            CDN読み込みしているので、preにprettyprintクラスとlinenumsクラスを付けるだけで、良いのです。
            <br><br>
            また、個人的に別途CSSファイルを作成して、さらに変更している部分があります。
            <br><br>
            長いコードを折り返さずに、一行で表示したい場合は、スクロールバーを使って表示することもできます。
            <br><br>
            あとは、&lt;pre class="prettyprint linenums">&lt;/pre>の間にコードを入れて、以下のように表記できます。

            <pre class="prettyprint linenums">var count = 10;
function countDown() {
  console.log('count');
  if (count !== 0) {
    document.getElementById('count').innerHTML = count + " 秒";
    count--;
  } else {
    document.getElementById('count').innerHTML = count + " 秒";
    clearTimeout();
    alert("0秒になりました。OKを押してください。");
    count = 10;
  }
}</pre>
            この方法だと、テキストエディターが少し散らかりやすいので、あまりオススメはできないです。
            <br><br>
            1番目に紹介した「Code Pen」が一番コードと結果がわかりやすく表記できそうです。
            <br><br>
            今後のソースコードの埋め込みは「Code Pen」使っていきます。
            </p>
          </div>
        </div>
        <br>

        <!-- id=0005 -->
        <div id="20210209"></div>
        <br>
        <p id="avocado">2021年02月09日 <i class="fas fa-laptop-code"></i>PHP</p>
        <h2 id="title">「現在日時の取得」</h2>

        <div class="accbox">
          <p><img src="gallery/techimg/PHP現在日時取得前HTML.jpg" alt="PHP現在時刻取得前表示1"></p>

          <input type="checkbox" id="0005" class="cssacc" />
          <label for="0005"><span><i class="fas fa-book"></i>READ</span></label>
          <div class="accshow">
            <p>このWEBサイトでは、HOMEページのSTUDY LISTの日時を毎回更新しています。
            <p><img src="gallery/techimg/PHP現在nichiji .jpg" alt="PHP現在時刻取得前code1"></p>
            直接、数字を変更し保存することで反映させていました。
            <br><br>
            ただ、毎回変更するのは手間がかかります。
            <br><br>
            せっかく、最近PHPへ移行したので、現在日時の自動取得、表示をしてくれるようプログラミングしておきます。
            <br><br>
            Javaでも、date()関数は使いましたが、PHPでも”date()関数”が使え、さらに記述が簡単です。
            <p><img src="gallery/techimg/PHP現在時刻取得後code.jpg" alt="PHP現在時刻取得code1"></p>
            <p><img src="gallery/techimg/PHP現在日時取得後HTML1.jpg" alt="PHP現在時刻取得後表示1"></p>

            上の写真の様に、簡単なコードで現在日時を取得し、さらにフォーマットされ表示してくれます。
            <br><br>
            <table id="techdiary">
              <tr>
                <th>フォーマット</th>
                <th>詳細</th>
                <th>出力</th>
              </tr>
              <tr>
                <td>Y / y</td>
                <td>西暦(4桁) / 西暦(2桁)</td>
                <td>2021 / 21</td>
              </tr>
              <tr>
                <td>m / n</td>
                <td>月(2桁) / 月(0埋めなし)</td>
                <td>02 / 2</td>
              </tr>
              <tr>
                <td>M / F</td>
                <td>月(英語) / 月(英語(略))</td>
                <td>February / Feb</td>
              </tr>
              <tr>
                <td>d / j</td>
                <td>日(2桁) / 日(0埋めなし)</td>
                <td>08 / 8</td>
              </tr>
              <tr>
                <td>I / D</td>
                <td>曜日(英語) / 曜日(英語(略))</td>
                <td>Monday / Mon</td>
              </tr>
              <tr>
                <td>w / N</td>
                <td>曜日(0(日曜)-6(土曜)) / 曜日(1(月曜)-7(日曜))</td>
                <td>1 / 1</td>
              </tr>
              <tr>
                <td>H / G</td>
                <td>時(2桁) / 時(0埋めなし)※24時間</td>
                <td>16 / 16</td>
              </tr>
              <tr>
                <td>h / g</td>
                <td>時(2桁) / 時(0埋めなし)※12時間</td>
                <td>04 / 4</td>
              </tr>
              <tr>
                <td>i / s</td>
                <td>分 / 秒</td>
                <td>43 / 38</td>
              </tr>
            </table>
            <br><br>
            また、date()関数の場合は、上の表のように、ローマ字に対応してフォーマットされます。
            <br><br>
            他にも、うるう年”L”など、フォーマット例がたくさんありますので、気になる方は検索してみてください。
            <br><br>
            日本語の曜日で出力させたい場合は、"w"、"N"が数字での表記になってしまうので、少し工夫しないといけません。
            <p><img src="gallery/techimg/PHP現在日時取得後曜日Weekcode.jpg" alt="PHP現在曜日取得code1"></p>
            <p><img src="gallery/techimg/PHP現在時刻取得日時曜日include.jpg" alt="PHP現在曜日取得code2"></p>
            日本語の曜日表記させる配列を別途phpファイルで作成し、includeで読み込ませる手法にしました。
            <br><br>
            すると...
            <p><img src="gallery/techimg/InkedPHP現在時刻取得後曜日HTML2_LI.jpg" alt="PHP現在時刻取得後表示1"></p>
            日本語の曜日表示（1→月）で正確に表示されました。
            <br><br>
            これで、毎日行う作業が一つ減りました。
            <br><br>
            ただ、date関数は、32bitで日時を扱うため、2038年問題（オーバーフローで誤作動する問題）があり、今のところ、2038年1月19日までしか使えないと思われるので、使用はしない方が良いです。
            <br><br>
            ここまで、Date()関数を紹介しておいてなんだよっ！と思ったと思います。
            <br><br>
            僕は、敢えて、誤作動させてみたいと思っています。忘れてそうですが。
            <br><br>
            結論、日時関数を使う際は、"Date()"ではなく、"DateTime()"や、他関数で現在時刻を取得しましょう。
            </p>
          </div>
        </div>
        <br>


        <!-- id=0003 -->
        <div id="20210208"></div>
        <br>
        <p id="avocado">2021年02月08日 <i class="fas fa-laptop-code"></i>PHP</p>
        <h2 id="title">「入力値の継承」</h2>

        <div class="accbox">
          <p><img src="gallery/techimg/InkedPHPFormDoneNone_LI.jpg" alt="PHP入力値の継承前"></p>

          <input type="checkbox" id="0003" class="cssacc" />
          <label for="0003"><span><i class="fas fa-book"></i>READ</span></label>
          <div class="accshow">

            <p>先日、<a href="https://developershirai.com/jspractice/work.php#judgment">WORK</a>ページにて更新した数字判定でのフォーム入力。
              <br><br>
              上の写真の通り、数字を入力して判定ボタンを押すと結果は表示されますが、入力値が消えています。
              <br><br>
              今回は、入力値を判定ボタンを押した後でも残すプログラミングをしてみます。
              <br><br>
              僕が作成したこのフォームは、別のPHPファイルを読み込んでいます。
              <br><br>
              POSTされた値を変数に格納し、if文でチェックし、表示される結果を変える処理をしています。
              <br><br>
              その変数を入力フォームに残す処理をします。
              <br><br>
              PHPは、以下の写真の様に、
              <br>「value="&lt;?php if( !empty($_POST['送信された値を持った変数名']) ){ echo $_POST['送信された値を持った変数名']; } ?&gt;”」<br>でコーディングしてみました。
            <p><img src="gallery/techimg/phpFormValueRemaine2021-02-08.jpg" alt="PHPフォーム入力値継承"></p>
            <br><br>
            表示もif文"!empty()"で空チェックをしています。
            <br><br>
            これで、数字を入力して判定をボタンを押下すると...
            <p><img src="gallery/techimg/PHPformValueRemainDone.jpg" alt="PHPフォーム入力値継承"></p>
            今度は、値が継承されています。
            <br><br>
            値の継承方法は多々あるので、他も色々試してみます。
            <br><br>
            例えば、会員情報（名前やメールアドレス、住所など）を入力するサイトで、入力内容を一度確認させたい場合や、別の画面へ移動してから、入力画面へ戻った場合に入力値を残してあげておきたい場合などにこういった処理を使います。
            <br><br>
            会員登録のようなフォームでは、一度入力したものが消えると、再入力の手間をかけてくれず、登録を辞める人もいるでしょう。
            <br><br>
            といった様に、大切な処理になるので、忘れずにコーディングしておきたいものです。
            <br><br>
            PHPで別に<a href="https://developershirai.com/questionnaire.php">アンケート集計</a>機能ページを作成した時にも、入力値（選択項目）の確認処理をしてありますので、よかったら確認してみてください。
            </p>
          </div>
        </div>
        <br>


        <!-- id=0002 -->
        <div id="20210206"></div>
        <br>
        <p id="avocado">2021年02月06日 <i class="fas fa-laptop-code"></i>CSS</p>
        <h2 id="title">「リスト(li)デザイン変更」</h2>

        <div class="accbox">
          <p><img src="gallery/techimg/Inkedリスト変更前スクリーンショット LI.jpg" alt="スクロールバー変更CSS"></p>

          <input type="checkbox" id="0002" class="cssacc" />
          <label for="0002"><span><i class="fas fa-book"></i>READ</span></label>
          <div class="accshow">
            <p>後回しにしていたリストのデザインの変更しました。
              <br><br>
              大したものではないですが、ポイントは、border-left、background、list-style-typeです。
            <p><img src="gallery/techimg/list-left-bar-css.jpg" alt="リストデザイン変更CSS"></p>
            変更後のリストはこちらです。
            <p><img src="gallery/techimg/change-list-design-done.jpg" alt="リストデザイン変更後"></p>
            ひとまず、見やすくなったような気がします。
            </p>
          </div>
        </div>
        <br>

        <div id="20210205"></div>
        <br>
        <p id="avocado">2021年02月05日 <i class="fas fa-laptop-code"></i>CSS</p>
        <h2 id="title">「スクロールバー(scrollbar)デザイン変更」</h2>
        <div class="accbox">
          <p><img src="gallery/techimg/Inkedスクロールバー変更前スクリーンショット 2021-02-05 183925_LI.jpg" alt="スクロールバー変更前"></p>
          <input type="checkbox" id="0001" class="cssacc" />

          <label for="0001"><span><i class="fas fa-book"></i>READ</span></label>
          <div class="accshow">
            <p>ふと、スクロールバーを見ていたら、どこのサイトでもだいたいデザイン一緒だよなと思い始めました。
              <br><br>
              そして、変えることが出来るのか調べるところから始めてみました。
              <br><br>
              変更する方法は複数見つかりました。
              <br><br>
              僕が主に利用しているブラウザはChromeだったため、CSS追加しても効果がないパターンもありましたが、今回はwebkitをつかって変更しました。
              <br><br>
              ::-webkit-scrollbar(全体)、::-webkit-scrollbar-track(バーの可動域部)、::-webkit-scrollbar-thumb(バー本体)
            <p><img src="gallery/techimg/スクロールバー変更CSS (2).jpg" alt="スクロールバー変更CSS"></p>
            変更後のスクロールバーはこちらです。
            <p><img src="gallery/techimg/Inkedスクロールバー変更後スクリーンショット 2021-02-05 183730_LI.jpg" alt="スクロールバー変更後"></p>
            様々な配色や変形を試してみたのですが、結局行きついたのはこんなものでした。
            <br><br>
            納得できたデザインではないので、また気になった時に変更するかもしれません。
            </p>
            <br>
          </div>
        </div>
        <br>
        <hr>
        <em2><i class="fas fa-arrow-circle-right"></i>今後は、大きく変更したものは出来る限り記録していきます。</em2>
        <br>
      </section>

      <?php include('parts/contents.php'); ?>

    </div>


    <div id="aside">
      <?php include('parts/prof.php'); ?>

      <!-- <div id="widget3" class="diary-relations">
        <p>
          <em4><i class="fab fa-amazon"></i>　RELATIONS</em4>
        </p>

        <hr>
        <p>01月13日</p>
        <iframe style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="https://rcm-fe.amazon-adsystem.com/e/cm?ref=tf_til&t=hiyuma-22&m=amazon&o=9&p=8&l=as1&IS1=1&detail=1&asins=B00J7C1YE8&linkId=9658cc30ae1e607a362b9671d5dbfadf&bc1=ffdede&amp;lt1=_blank&fc1=ffffff&lc1=ffffff&bg1=ffdede&f=ifr">
        </iframe>

      </div> -->

      <?php include('parts/widget/side_widget.php'); ?>

    </div>

  </main>
  
  <?php include('parts/footer.php'); ?>
  
  <script src="js/myscript.js"></script>
  <script src="js/jquery-3.5.1.min.js"></script>
  <?php include('parts/footerJs.php'); ?>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/href.js"></script>
  <script src="js/ReadAndClose.js"></script>
  <script src="js/cal.js"></script>
</body>

</html>