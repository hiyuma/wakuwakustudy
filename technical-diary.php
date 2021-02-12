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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
          <img id="top-img" src="gallery/top/techtop.png" alt="">
        </p>
        <br>
        <p>IT関連の技術的な日記を書くかもしれないし、書かないかもしれないです。</p>
        <br>
        <div class="schedule_wrapper">
          <h3><i class="far fa-list-alt"></i>　Technical diary list</h3>
          <!-- list -->
          <div id="schedule0" class="schedule_list">
            <ol reversed>
              <!-- <li><a href="#20210207"> 2021年02月10日 AWS「AWS導入」</a></li> -->
              <li><a href="#20210210"> 2021年02月10日 HTML/CSS「ソースコードの埋め込み」</a></li>
              <li><a href="#20210209"> 2021年02月09日 PHP「現在日時の所得」</a></li>
              <li><a href="#20210208"> 2021年02月08日 PHP「入力値の継承」</a></li>
              <li><a href="#20210206"> 2021年02月06日 CSS「リストデザイン変更」</a></li>
              <li><a href="#20210205"> 2021年02月05日 CSS「スクロールバーデザイン変更」</a></li>
              <li> <a href="#recommend"> <i class="fab fa-amazon"></i> しらひゅー推し</a></li>
              <!-- <li> <a href="#amazon"> <i class="fab fa-amazon"></i>　RELATIONS</a></li> -->
            </ol>
          </div>
        </div>

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
            あとは、&lt;pre class="prettyprint linenums">&lt;/pre>の間にコードを入れて、以下のように表記できます。

              <pre class="prettyprint linenums">
var count = 10;

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
}
            </pre>
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
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/menu.js"></script>
  <script src="js/href.js"></script>
  <script src="js/ReadAndClose.js"></script>
  <script src="js/cal.js"></script>
</body>

</html>