<!DOCTYPE html>
<html lang="ja">

<head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <meta name=”robots” content=”index”>
       <meta name="description" content="長野県出身、元美容師/イベントオーガナイザーのしらひゅー(白井　飛友馬)が、WEB制作・デザイン・開発などのプログラミング言語(PHP/Java/JSP/Servlet/HTML/CSS/JavaScriptなど)や英語(TOEIC・日常英会話)、アボカド成長日記などを学ぶために作成したページです。新型コロナ自粛期間にスタート。特に面白味はないです。" />
       <meta name="keywords" content="プログラミング,新型コロナ,投資,Java,php,英語">

       <title>しらひゅーのわくわくスタディ HOME</title>
       <link rel="shortcut icon" href="favicon.ico" />
       <link rel="stylesheet" href="mystyle.css">
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
       <div id="page_top">
              <a href="#"></a>
       </div>

       <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
       <script src="https://kit.fontawesome.com/6256a7882a.js" crossorigin="anonymous"></script>
       <script src="js/jquery-3.5.1.min.js"></script>
       <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
       <script type="text/javascript">
              $(document).ready(function() {
                     $('.slider').bxSlider({
                            randomStart: true,
                            auto: true,
                            pause: 6000,
                     });
              });
              $(function() {
                     $('a').each(function() {
                            if ($(this).prop('href') == window.location.href) {
                                   $(this).addClass('active');
                                   $(this).parents('li').addClass('active');
                            }
                     });
              });
       </script>

</head>

<body>
       <main>
              <?php include('parts/header.php'); ?>
              <?php include('parts/menuButton.php'); ?>


              <div id="top">
                     <a href="index.php"><img id="logo-img" src="gallery/しらひゅーのわくわくスタディロゴ.png" alt="しらひゅーのわくわくスタディタイトル"></a>

              </div>

              <?php include('parts/widget/widget_214.php'); ?>

              <div class="slide">
                     <div class="slider">
                            <img src="gallery/top/slider1.jpeg" alt="">
                            <img src="gallery/top/slider2.png" alt="">
                            <img src="gallery/top/slider3.png" alt="">
                            <img src="gallery/top/slider4.jpg" alt="">
                            <img src="gallery/top/slider5.png" alt="">
                            <img src="gallery/top/slider8.jpg" alt="">
                     </div>

                     <!-- <p class="slidetext">PHOTO:2013年 東京⇔青森 自転車旅<br>岩手県ゆっこ盛岡</p> -->
              </div>

              <header>
                     <h1 class="logo"><img src="gallery/ICONS/cow2l.png" alt=""></h1>
              </header>

              <?php include('parts/widget/widget_mujirushi.php'); ?>

              <?php include('parts/facebook_twitter_button.php'); ?>

              <ul class="studylist slide-in-animation">
                     <span><i class="fas fa-paw"></i><a href="jspractice/omikuji.php"> 今 日 の ね こ ち ゃ ん お み く じ
                            </a></span>
                     <br>
                     <span><i class="fas fa-headphones-alt"></i><a href="music.php"> 今 日 の 1 曲 </a></span>
                     <br>
                     <span><i class="far fa-edit"></i><a href="questionnaire.php"> ア ン ケ ー ト </a></span>

                     <br><br>
                     <em4>※現在、このWEBサイトは独学にて作成中のため、無意味・未完成箇所が複数あります。
                            <br>　急にデザインが変わることがあります。</em4>
                     <br><br>
                     <div class="line">STUDY LIST <i class="fas fa-pencil-alt"></i></div>
                     <div class="items"><span style="font-weight: normal;"><?php include('parts/weekly.php'); ?></span>

                            <div class="accbox2">
                                   <input type="checkbox" id="studylistopen" class="cssacc2">
                                   <label for="studylistopen"></label>

                                   <div class="accshow2">
                                          <li>PROGRAMMING</li>
                                          <div class="info-children"><span>WEBアプリケーション開発（PHP / AWS ）</span></div>
                                          <div class="info-children"><span>修学済：HTML / CSS / JavaScript / Java / JSP / Servlet / MySQL / Linux / Git</span></div>
                                          <li>ENGLISH</li>
                                          <div class="info-children"><span>Dictation ( スタディサプリ ) </span></div>
                                          <div class="info-children"><span>Word / Listening / Writing ( スタディサプリ ) / 
                                                        Listening ( NHK即レス英会話 , MOVIES ）</span></div>
                                          <div class="info-children"><span>Online Conversation ( Native Camp ）</span></div>
                                          <li>INVESTMENT</li>
                                          <div class="info-children"><span>LINE証券 / LINEスマート投資 / つみたてNISA</span>
                                          </div>
                                          <li>QUALIFICATION EXAM</li>
                                          <div class="info-children"><span>TOEIC / 応用情報技術者</span></div>
                                   </div>
                            </div>
                     </div>
              </ul>
              
              <div id="aside">
                     <?php include('parts/info.php'); ?>
                     <?php include('parts/menuList.php'); ?>
              </div>


              <div id="article">
                     <?php include('parts/news.php'); ?>



                     <!-- echoset -->
                     <div id="widget2" class="echo-set slide-in-animation">
                            <iframe src="https://rcm-fe.amazon-adsystem.com/e/cm?o=9&p=13&l=ur1&category=musicunlimited&banner=0W1M4BXB9SDGREJ2ZSR2&f=ifr&linkID=63415588d4d9bf58f87e490f57532ecd&t=hiyuma-22&tracking_id=hiyuma-22" width="468" height="60" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
                     </div>

                     <ul id="programming" class="htmlcss slide-in-animation">
                            <div class="line">PROGRAMMING<i class="fas fa-laptop-code"></i></div>
                            <br>
                            <!-- html -->
                            <div class="accbox2"><input type="checkbox" id="html" class="cssacc2">
                                   <label for="html"><i class="fab fa-html5"></i>HTML/CSS　</label>
                                   <div class="accshow2">
                                          <p>・HTML（HyperText Markup Language）
                                                 <br> ウェブページを作成するために開発された言語です。
                                                 現在、インターネット上で公開されてるウェブページのほとんどは、HTMLで作成されています。日本語では「ハイパーテキストに目印をつける言語」とも言えます。
                                          </p>
                                          <p>・CSS（Cascading Style Sheets）
                                                 <br>
                                                 CSSはスタイルシートの種類のうちの1つです。スタイルシートとは本来、ホームページにデザインを加える機能のすべてを指して使われます。現在多くのホームページで使われています。タグ表示を好きなデザインに変えられます。
                                          </p>
                                          <br>
                                          <div class="line" id="書き方">HTMLの書き方</div>
                                          <p>HTMLタグの使い方は、とても簡単です。&lt;開始タグ&gt;～&lt;/終了タグ&gt;で内容を囲めば、
                                                 要素（element）の種類を指定することができます。
                                                 ウェブページ内の各部分をどのような要素に割り当てるかによって、
                                                 タグの種類を使い分けます。テキストエディターを使って作成します。今回はteraPadを使用しました。
                                          </p>
                                          <img src="gallery/コメント 2020-03-28 055629.jpg" alt="taraPad">
                                          <p>※4月27日からテキストエディターをVisual Studio codeへ変更しました。Microsoftが無料で配布するものです。
                                                 <br><br>
                                                 2020年4月現在、動作が軽く、フロントエンド言語での開発がし易いソフトウェアだと思います。アップデートが多いので今後の進化が楽しみです。
                                          </p>
                                          <img src="gallery/visual studio code.jpg" alt="visual studio code">
                                          <br>
                                   </div>
                            </div>
                            <div id="menuJavascript"></div>
                            <hr style="width: 93%;">

                            <!-- javascript -->
                            <br>
                            <div class="accbox2">
                                   <input type="checkbox" id="javascript" class="cssacc2">

                                   <label for="javascript"><i class="fab fa-js-square"></i>JavaScript/jQuery　</label>

                                   <div class="accshow2">


                                          <p>
                                                 ”JavaScript”は、主にフロントエンド(WebサービスやWebアプリケーションで直接ユーザの目に触れる部分)のプログラミング言語の一つです。
                                                 <br><br>
                                                 ”JavaScript”が生まれたのは1995年頃です。
                                                 <br><br>
                                                 ”Java”という共通の用語が含まれているので、Javaと同じようなプログラミング言語だと思う方が多いかもしれませんが実際には、”JavaScript”と”Java”は別物です。
                                                 <br><br>
                                                 "Java"は、バックエンド(サーバ側やデータベースなど、ユーザの目に見えない部分)のプログラミング言語です。
                                                 <br><br>
                                                 ただ、バックエンドのプログラミング言語として”Node.js”など、”JavaScript”の技術を応用したものも出てきています。
                                                 <br><br>
                                                 ”jQuery”は、"JavaScript"でできることを、より簡単な記法で実現できように設計されたJavaScriptライブラリです。
                                                 <br><br>
                                                 本サイトも”jQuery”を利用しています。
                                                 <br><br>
                                                 といったように、”JavaScript”の可能性は幅広いです。
                                                 <br><br>
                                                 ”JavaScript”は、世界中のデベロッパー間で、最も人気のあるプログラミング言語の1つであると言えます。
                                                 <br><br>
                                                 記述方法は、HTML内であれば、”&lt;script&gt;から&lt;/script&gt;”に記述していきます。

                                          <p><img src="gallery/javascript.jpg" alt="JavaScript記述"> </p>

                                          上記の様に別でjsファイルを記述した場合は、head内や閉じBODYタグ上に”&lt;script　src="〇〇/cal.js"&gt;&lt;/script&gt;”といったように読み込ませることもできます。
                                          <br><br>
                                          クリックイベントとして、&lt;a href="javascript:alert('ドリルすんのかい！！....せんのかい！！')"&gt;Click&lt/a&gt;のような記述もできます。（下のボタンクリックしてみてください）
                                          <br><br>
                                          <i class="fas fa-pen-nib"></i><a href="javascript:alert('ドリルすんのかい！！....せんのかい！！')">ドリルボタン</a>
                                          <br><br>
                                          本サイトでは、ところどころにJavaScriptを利用しています。
                                          <br><br>
                                          興味がある方は、<a href="jspractice/work.php">WORK</a>からご覧ください。
                                          </p>


                                   </div>
                            </div>
                            <hr style="width: 93%;">

                            <!-- server/domain -->
                            <br>
                            <div class="accbox2">
                                   <input type="checkbox" id="server" class="cssacc2">

                                   <label for="server" id="準備"><i class="fas fa-server"></i>サーバ・ドメインの準備　</label>

                                   <div class="accshow2">


                                          <p>サーバを使うには、NASの様に自前で準備するか、ホームページサービスやレンタルサーバへの申し込みが必要です。
                                                 <br> 今回は、無料サービスのあるGMOが運営する<a href="https://px.a8.net/svt/ejp?a8mat=3BOCPF+G3ASDU+1JUK+ZS5GI" rel="nofollow" target="blank">XREA</a>

                                                 <img border="0" width="1" height="1" src="https://www17.a8.net/0.gif?a8mat=3BOCPF+G3ASDU+1JUK+ZS5GI" alt="">へ申し込みしました。
                                                 <br><br>
                                                 ドメインは<a href="https://px.a8.net/svt/ejp?a8mat=3BOCPF+G3W7ZM+1JUK+HXD0Y" rel="nofollow" target="blank">ドメイン総合サービス【VALUE-DOMAIN】</a>
                                                 <img border="0" width="1" height="1" src="https://www16.a8.net/0.gif?a8mat=3BOCPF+G3W7ZM+1JUK+HXD0Y" alt="">から、1年間無料(2020年3月22日現在)「.shop」を取得しました。
                                                 <br><br>
                                                 ※10月からドメインを「.shop」から「.com」へ変更、サーバを<a href="https://px.a8.net/svt/ejp?a8mat=3BOCPF+G3ASDU+1JUK+ZS5GI" rel="nofollow" target="blank">XREA</a>から<a href="https://px.a8.net/svt/ejp?a8mat=3BOFU5+7BR2JE+1JUK+639IQ" rel="nofollow" target="blank">CORESERVER</a>
                                                 <img border="0" width="1" height="1" src="https://www18.a8.net/0.gif?a8mat=3BOFU5+7BR2JE+1JUK+639IQ" alt="">へ移行しました。
                                                 <br>
                                          </p>


                                          <div class="line">サーバへ保存</div>
                                          <p>サーバへ作成したHTML／CSSなどのファイルをアップロードしインターネットへ公開します。
                                                 <br><br>
                                                 今回は<a href="http://www2.biglobe.ne.jp/sota/ffftp.html" target="blank" rel="noopener">FFFTP</a>を使用しました。
                                          </p>
                                          <img src="gallery/FTTTP 2020-03-28 055852.jpg" alt="FFFTP">

                                   </div>
                            </div>
                            <div id="menuJava"></div>
                            <hr style="width: 93%;">

                            <!-- java -->
                            <br>
                            <div class="accbox2">
                                   <input type="checkbox" id="ide" class="cssacc2"><label for="ide">
                                          <i class="fas fa-code"></i>Java/統合開発環境(IDE)　</label>
                                   <div class="accshow2">

                                          <p>Java,JSP/Servlet,Springなど、WEBアプリ開発において、今回は<a href="https://mergedoc.osdn.jp/" target="blank" rel="noopener">Eclipce</a>をIDE（Integrated Development
                                                 Environment／統合開発環境）として利用しています。
                                                 <br><br>
                                                 個人的にエディタのテキストカラーだいぶカスタムしています。
                                          <p>
                                                 <img src="gallery/eclipse.jpg" alt="統合開発環境IDE eclipse">
                                          </p>
                                          ”Java”とは、クラスベースのオブジェクト指向の、実装の依存関係をできるだけ少なくするように設計された汎用プログラミング言語で、一度書いたらどこでも実行できることを目的としています。
                                          <br><br>
                                          JSP/Servletは、どちらもサーバ側で動作するJavaアプリケーション作成に使います。
                                          <br><br>
                                          ”JSP(Java Server
                                          Page)”とは、HTMLファイルの中にJavaのプログラムを埋め込むことができるプログラムで、後でPHPを学ぶことでよく理解できましたが、PHPと似ています。
                                          <br><br>
                                          サーバ側で動くとは言え、Web表示部分に関わります。HTML(表方)やServlet(裏方)と連携してサーバ寄りの中間的な役割を果たす様なイメージです。
                                          <br><br>
                                          ”Servlet(Java
                                          Servlet)”は、Webサーバで動くJavaプログラムです。JSPとは役割が違い、HTMLに埋め込むような書き方で使用しません。
                                          <br><br>
                                          JSPやクライアントからリクエストを受け、初めて仕事ができます。厳密に言うと違うかもしれませんが、イメージで言うと完全な裏方受付係のような役割です。
                                          <br><br>
                                          データベースとの接続などバックエンドで動く部分はServletで作成するのが適しています。
                                          <br><br>
                                          他、PHP、Python、Go、Rubyなどのプログラミング言語がありますが、僕はまず、比較的習得が難しいと言われるJavaを学習しました。
                                          <br><br>
                                          最近(2020年6月現在)のIDEでは、<a href="https://www.jetbrains.com/ja-jp/idea/" target="blank" rel="noopener">IntelliJ
                                                 IDEA</a>の方が使いやすく、普及してきている印象です。
                                          <br><br>
                                          独学の中で、Javaでのアルゴリズム、要件定義などからアプリ開発（会員管理、備品管理システムなど）を学びました。
                                          </p>
                                   </div>
                            </div>
                            <div id="menuPhp"></div>
                            <hr style="width: 93%;">

                            <!-- PHP -->
                            <br>
                            <div class="accbox2">
                                   <input type="checkbox" id="php" class="cssacc2">

                                   <label for="php"><i class="fab fa-php"></i>PHP　</label>

                                   <div class="accshow2">


                                          <p>”PHP”とは、先にJavaで説明したJSP(Java Server
                                                 Page)と同じように動的にWebページを生成することができます。Webアプリ開発に特化されたサーバーサイドのスクリプト言語です。
                                                 <br><br>
                                                 JSPや他のプログラミング言語と比較すると、その仕様や文法が簡素なため、習得しやすいと言われています。
                                                 <br><br>
                                                 さらに、MySQLなどのデータベースとの連携も簡単なこと等、WordPressを含めたWebアプリケーションの開発にも使われることが多いです。
                                                 <br><br>

                                                 先にJava開発で利用している<a href="https://mergedoc.osdn.jp/" target="blank" rel="noopener">Eclipce</a>に、Windows
                                                 64bitのPHPのFull Editionをインストールし、開発環境を揃えることもできます。
                                          <p><img src="gallery/php.jpg" alt="php書き方"></p>
                                          <br><br>
                                          ですが、今回は個人規模開発のため、操作性や効率性から、<a href="https://azure.microsoft.com/ja-jp/products/visual-studio-code/">Visual
                                                 Studio code</a>を使用します。そのため、<a href="https://www.apachefriends.org/jp/index.html">XAMPP</a>のみインストールして利用することにしました。
                                          <br><br>
                                          "XAMPP"とは、WEBアプリケーションの開発環境となるソフトウェアをパッケージとしてまとめたものです。呼び方は「ザンプ」です。
                                          <br><br>
                                          X-クロスプラットフォーム：WindowsやMac、Linuxなど、さまざまなOSに対応しています。
                                          <br><br>
                                          A-Apache：世界中で広く使われているWEBサーバーです。Java開発でも利用しています。
                                          <br><br>
                                          M-MySQL：先にデータベースの中で説明していますが、データベースのソフトウェアです。こちらもJavaで利用してます。
                                          <br><br>
                                          P-PHP：こちらも先にPHPの説明してますが、WEBアプリケーションなどを作成する際に用いられるプログラミング言語のひとつです。
                                          <br><br>
                                          P-Perl：テキスト管理に適したプログラミング言語と言われており、比較的長い歴史があるようです。今回は利用していません。
                                          <br><br>
                                          開発環境導入方法などPHPに関しては、後日記載していく予定です。
                                          <br><br>
                                          PHPにてアンケート集計機能を作成しましたので、もしお時間よろしければ、回答のご協力をお願い致します。
                                          <br><br>
                                          <span><i class="far fa-edit"></i><a href="questionnaire.php">アンケートページ</a></span>
                                          </p>
                                   </div>
                            </div>
                            <hr style="width: 93%;">

                            <!-- データベース(MySQL) -->
                            <br>
                            <div class="accbox2">
                                   <input type="checkbox" id="sql" class="cssacc2">

                                   <label for="sql"><i class="fas fa-database"></i>データベース(MySQL)　</label>

                                   <div class="accshow2">

                                          業務系アプリ、会員管理システムや備品管理システムなどを作成する際に必要となるデータベース。
                                          <br><br>
                                          今回はSQLクエリの作成、実行、最適化をビジュアルに行えるツールを備えているORACLE公式の<a herf="https://www.mysql.com/jp/products/workbench/" target="blank" rel="noopener">workbench</a>を利用しています。
                                          <p><img src="gallery/mysql.jpg" alt="データベース管理システム MySQL Workbench">
                                          </p>
                                          <p>MySQLは、オープンソースのリレーショナルデータベース管理システムです。
                                                 <br><br>
                                                 共同設立者のMichael Wideniusのご息女の名である「My」と、Structured Query
                                                 Languageの略称「SQL」を組み合わせたものだそうです。
                                                 <br><br>
                                                 大容量のデータに対しても高速で動作し、便利で多機能であり、非常に実用性が高くなっています。
                                          </p>
                                   </div>
                            </div>
                            <hr style="width: 93%;">

                            <!-- 各ソフトウェア・サービス -->
                            <br>
                            <div class="accbox2">
                                   <input type="checkbox" id="soft" class="cssacc2">

                                   <label for="soft"><i class="fas fa-laptop"></i>各ソフトウェア・サービス　</label>

                                   <div class="accshow2">

                                          <li><a href="https://www.jetbrains.com/ja-jp/idea/" target="blank" rel="noopener">IntelliJ IDEA</a>
                                          </li>
                                          <li><a href="https://mergedoc.osdn.jp/" target="blank" rel="noopener">Eclipce</a></li>

                                          <li><a href="https://www.apachefriends.org/jp/index.html" target="blank" rel="noopener">XAMPP</a></li>

                                          <li><a href="https://px.a8.net/svt/ejp?a8mat=3BOCPF+G3ASDU+1JUK+ZS5GI" rel="nofollow" target="blank">XREA</a></li>
                                          <li><a href="https://px.a8.net/svt/ejp?a8mat=3BOCPF+G3W7ZM+1JUK+HXD0Y" rel="nofollow">VALUE-DOMAIN</a>
                                                 <img border="0" width="1" height="1" src="https://www16.a8.net/0.gif?a8mat=3BOCPF+G3W7ZM+1JUK+HXD0Y" alt="">
                                          </li>

                                          <li><a href="https://azure.microsoft.com/ja-jp/products/visual-studio-code/" target="blank" rel="noopener">Visual
                                                        Studio
                                                        code</a></li>
                                          <li>
                                                 <a href="https://www.mysql.com/jp/products/workbench/" target="blank" rel="noopener">MySQL Workbench</a>

                                          </li>
                                          <li><a href="http://www2.biglobe.ne.jp/sota/ffftp.html" target="blank" rel="noopener">FFFTP</a></li>
                                          <li><a href="https://tera-net.com/library/tpad.html" target="blank" rel="noopener">teraPad</a></li>
                                          <li><a href="https://www.getpaint.net/index.html" target="blank" rel="noopener">paint.net</a></li>
                                   </div>
                            </div>
                            <hr style="width: 93%;">



                     </ul>

                     <?php include('parts/contents.php'); ?>

              </div>


              <div id="aside">
                     <?php include('parts/prof.php'); ?>
                     <?php include('parts/widget/side_widget.php'); ?>
              </div>
       </main>

       <?php include('parts/footer.php'); ?>
       <?php include('parts/footerJs.php'); ?>
       
</body>

</html>