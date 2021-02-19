<!DOCTYPE html>
<html lang="Ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name=”robots” content=”index”>
  <meta name="description" content="長野県出身、元美容師/イベントオーガナイザーのしらひゅー(白井　飛友馬)が、WEB制作・デザイン・開発などのプログラミング言語(PHP/Java/JSP/Servlet/HTML/CSS/JavaScriptなど)や英語(TOEIC・日常英会話)、投資、アボカド栽培などを学ぶために作成したWEBサイトです。ここは、Javaなどプログラミングを学ぶページです。特に面白味はないです。" />
  <meta name="keywords" content="プログラミング,Java,JavaScript,HTML,CSS">
  <title>しらひゅーのわくわくスタディ WORK JavaScript</title>
  <link rel="stylesheet" href="../mystyle.css">
  <link rel="shortcut icon" href="../favicon.ico" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <div id="page_top">
    <a href="#"></a>
  </div>

  <script src="https://kit.fontawesome.com/6256a7882a.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <div id="page_top"><a href="#"></a></div>

</head>
<?php include('../parts/header.php') ?>
<?php include('../parts/widget/widget_mujirushi.php') ?>


<header>
  <h1 class="logo">技</h1>
</header>

<body>
  <main>

    <?php include('../parts/menuButton.php'); ?>
    <?php include('../parts/facebook_twitter_button.php'); ?>

    <div id="article">

      <div id="work">
        <div id="section">
          <h1 class="line">WORK SPACE</h1>
          <p id="top-img-p">
            <img id="top-img" src="../gallery/top/work.png" alt="">
          </p>

          <p>ここは、独学中のプログラム言語(主にフロントエンド)を載せているページです。
            <br><br>
            このサイトの変更点や、パソコンなどのトラブルシューティング、プログラミング用メモなど、別途<a href="https://developershirai.com/technical-diary.php">テクニカル日記</a>を作成しました。
          </p>

          <br>
          <p>・アンケート(PHP)は<a href="https://developershirai.com/questionnaire.php" target="blank">こちら</a><i class="far fa-edit"></i></p>

          <p>・未完成「ねこちゃんSOS」は<a href="https://developershirai.com/jspractice/nekochan.php" target="blank">こちら</a><i class="fas fa-paw"></i></p>

          <p>・「ねこちゃんおみくじ」は<a href="https://developershirai.com/jspractice/omikuji.php" target="blank">こちら</a><i class="fas fa-paw"></i></p>

          <p>・おためしチャレンジページは<a href="../test.php" target="blank">こちら</a><i class="fas fa-laptop-code"></i></p>

          <p>・JavaScript練習用ページ「ありあり」は<a href="../puyo2/www/puyoforlaptop.php" target="blank">こちら</a><i class="fas fa-gamepad"></i></p>
          <br>
          <em4>※現在、会社員とフリーランス活動、英語学習などの合間を使っているため、このページの更新頻度が低くなっています。</em4>
          <br>
          <br>

          <ul class="info">
            <div class="info-section">
              <div>WORK INFO <i class="fas fa-info-circle"></i></div>
              <br>

              <li>2021年02月18日</li>
              <div class="info-children">
                <span>・<a href="gallery.php">PHOTO</a> lightGallery更新</span>
                  <div class="info-children">jQuery/CSS利用、lightGallery-all.js/CSS追加。
                  </div>
                </span>
              </div>

              <li>2021年02月17日</li>
              <div class="info-children">
                <span>・<a href="gallery.php">PHOTO</a> 更新</span>
                  <div class="info-children">PHP(while文)/CSS(flex/flex-wrap/justify-content)利用。
                  </div>
                </span>
              </div>

              <li>2021年02月04日</li>
              <div class="info-children">
                <span>・<a href="#judgment">数字判定入力フォーム</a>作成
                  <div class="info-children">PHP/jQuery利用。
                  </div>
                </span>
              </div>

              <li>2021年02月04日</li>
              <div class="info-children">
                <span>・<a href="#countdown">カウントダウンボタン</a>作成
                  <div class="info-children">JavaScript/jQuery利用。setTimeout使用。
                  </div>
                </span>
              </div>

              <li>2021年01月30日</li>
              <div class="info-children">
                <span>・<a href="index.php">HTML→PHP</a> 全移行
                  <div class="info-children">PHP include等利用。WEBアプリ制作テスト、サイト管理効率高める為。
                  </div>
                </span>
              </div>

              <li>2021年01月28日</li>
              <div class="info-children">
                <span>・<a href="quetionnaire.php">アンケート</a>機能追加
                  <div class="info-children">PHP/jQuery使用。入力チェック、配列、ファイル読み書きメソッド利用。データベース連携なし。
                  </div>
                </span>
              </div>

              <li>2021年01月24日</li>
              <div class="info-children">
                <span>・jQuery追加(.text())
                  <div class="info-children">(<a href="avocado.php"> AVOCADO</a>、<a href="smt.php"> スマート投資</a>、<a href="movie.php">MOVIE</a>、<a href="diary.php">DIARY</a>、<a href="video.php"> VIDEO</a>、<a href="gallery.php"> PHOTO</a>)
                  </div>
                </span>
              </div>

              <li>2021年01月23日</li>
              <div class="info-children"><span>
                  ・AVOCADOアイコン作成/折りたたみBOX追加(<a href="../avocado.php">AVOCADO</a>)
                  <div class="info-children">
                    MediBang(ペンタブ)/CSSのみ利用(JavaScript不使用)
                  </div>
                </span>
              </div>

              <li>2021年01月16日</li>
              <div class="info-children"><span>
                  ・AVOCADOアイコン作成/折りたたみBOX追加(<a href="../avocado.php">AVOCADO</a>)
                  <div class="info-children">
                    MediBang(ペンタブ)/CSSのみ利用(JavaScript不使用)
                  </div>
                </span>
              </div>

              <li>2021年01月10日</li>
              <div class="info-children"><span>
                  ・折りたたみBOX追加(<a href="../index.php">HOME</a>/<a href="../diary.php">DIARY</a>/<a href="../gallery.php">PHOTO</a>)
                  <div class="info-children">
                    CSSのみ利用(JavaScript不使用)
                  </div>
                </span>
              </div>

              <li>2020年12月18日</li>
              <div class="info-children"><span>・PHP修学開始</span></div>

              <li>2020年12月10日</li>
              <div class="info-children">
                <span>・エラーページ作成(404/403/500)
                  <div class="info-children">
                    403.php, 404.php, 500.php の3ページを作成、errorディレクトリの中へ格納。.htaccessファイルをpublic_html ディレクトリの下に配置。
                  </div>
                </span>
              </div>

              <li>2020年11月24日</li>
              <div class="info-children"><span>
                  ・lightgalleryバグ修正(PHOTO　Gallery)
                  <div class="info-children">
                    JavaScript(軽量のjQuery非依存のlightbox系のプラグイン)コード修正
                  </div>
                </span>
              </div>

              <li>2020年10月19日</li>
              <div class="info-children"><span>
                  ・ねこちゃんSOS カウントダウン追加</span></div>

              <li>2020年10月19日</li>
              <div class="info-children"><span>
                  ・lightgallery追加(PHOTO　Gallery)
                  <div class="info-children">
                    JavaScript(軽量のjQuery非依存のlightbox系のプラグイン)利用
                  </div>
                </span>
              </div>

              <li>2020年10月18日</li>
              <div class="info-children"><span>
                  ・ねこちゃんおみくじ修正
                  <div class="info-children">
                    CSS修正、JavaScript修正
                  </div>
                </span>
              </div>

              <li>2020年10月17日</li>
              <div class="info-children"><span>
                  ・折りたたみBOX追加(MOVIE　Summary)
                  <div class="info-children">
                    CSSのみ利用(JavaScript不使用)
                  </div>
                </span>
              </div>

              <li>2020年10月15日</li>
              <div class="info-children"><span>
                  ・favicon(favorite(お気に入り)＋icon(アイコン))追加
                  <div class="info-children">
                    <a href="http://www.xiconeditor.com/">X-Icon Editor利用</a>
                  </div>
                </span>
              </div>

              <li>2020年10月08日</li>
              <div class="info-children"><span>
                  ・DIARY Calendar追加
                  <div class="info-children">
                    JavaScript利用
                  </div>
                </span>
              </div>

              <li>2020年10月06日</li>
              <div class="info-children"><span>
                  ・ENGLISH英単語tableメディアクエリ追加
                  <div class="info-children">CSS利用
                  </div>
                </span>
              </div>

              <li>2020年10月02日</li>
              <div class="info-children"><span>
                  ・ぷよぷよスマホ用ページ追加
                  <div class="info-children">
                    CSS,viewport利用
                  </div>
                </span>
              </div>

              <li>2020年10月01日</li>
              <div class="info-children"><span>
                  ・JavaフレームワークSpring修学開始</span></div>


              <li>2020年09月25日</li>
              <div class="info-children"><span>
                  ・会員管理システム、備品管理システム、WEBアプリ開発修学完了</span></div>

              <li>2020年09月21日</li>
              <div class="info-children"><span>
                  ・MENUボタン作成
                  <div class="info-children">
                    JavaScript(jQuery),CSS animation利用
                  </div>
                </span>
              </div>

              <li>2020年09月01日</li>
              <div class="info-children"><span>
                  ・ぷよぷよ練習用ページ追加
                  <div class="info-children">
                    JavaScript利用
                  </div>
                </span>
              </div>

              <li>2020年08月30日</li>
              <div class="info-children"><span>
                  ・NAVIアニメーション追加
                  <div class="info-children">
                    JavaScript(jQuery),CSS animation利用
                  </div>
                </span>
              </div>

              <li>2020年08月27日</li>
              <div class="info-children"><span>スマホ用バックグラウンド写真変更</span></div>
              <li>2020年08月27日</li>
              <div class="info-children"><span>パソコン用バックグラウンド写真変更</span></div>
              <li>2020年08月10日</li>
              <div class="info-children"><span>WEBアプリ開発修学開始</span></div>
              <li>2020年08月01日</li>
              <div class="info-children"><span>Linux修学開始</span></div>


              <li>2020年07月21日</li>
              <div class="info-children"><span>MySQL修学開始</span></div>
              <li>2020年07月13日</li>
              <div class="info-children"><span>ねこちゃんSOS更新</span></div>
              <li>2020年07月12日</li>
              <div class="info-children"><span>TEST PAGE追加</span></div>

              <li>2020年06月20日</li>
              <div class="info-children"><span>Jsp/Servlet修学開始</span></div>
              <li>2020年06月03日</li>
              <div class="info-children"><span>Eclipse利用開始</span></div>
              <li>2020年06月01日</li>
              <div class="info-children"><span>Java修学開始</span></div>


              <li>2020年05月27日</li>
              <div class="info-children"><span>PHOTO SLIDER追加</span></div>

              <li>2020年05月15日</li>
              <div class="info-children"><span>タイトルロゴ変更</span></div>

              <li>2020年05月10日</li>
              <div class="info-children"><span>バックグラウンド写真変更</span></div>

              <li>2020年05月05日</li>
              <div class="info-children"><span>ねこちゃんSOS追加</span></div>
              <li>2020年05月05日</li>
              <div class="info-children"><span>ねこちゃんおみくじ追加</span></div>


              <li>2020年04月28日</li>
              <div class="info-children"><span>フォント変更</span></div>
              <li>2020年04月28日</li>
              <div class="info-children"><span>アニメーション追加</span></div>
              <li>2020年04月28日</li>
              <div class="info-children"><span>WORKページ追加</span></div>
              <li>2020年04月27日</li>
              <div class="info-children"><span>visual studio code利用開始</span></div>
              <li>2020年04月24日</li>
              <div class="info-children"><span>ヘッダーフッター固定</span></div>

              <li>2020年04月22日</li>
              <div class="info-children"><span>FontAwesome5追加</span></div>
              <li>2020年04月21日</li>
              <div class="info-children"><span>デザイン変更(2カラムへ)</span></div>
              <li>2020年04月19日</li>
              <div class="info-children"><span>iphone対応完了</span></div>
              <li>2020年04月17日</li>
              <div class="info-children"><span>デザイン変更(グラ・透過)</span></div>

              <li>2020年04月11日</li>
              <div class="info-children"><span>レスポンシブ対応</span></div>
              <li>2020年04月10日</li>
              <div class="info-children"><span>TOP画作成(ペンタブ)</span></div>

              <li>2020年04月02日</li>
              <div class="info-children"><span>iframe追加</span></div>

              <li>2020年03月24日</li>
              <div class="info-children"><span>1カラム作成(PC閲覧用)</span></div>
              <li>2020年03月23日</li>
              <div class="info-children"><span>サーバー申込</span></div>
              <li>2020年03月22日</li>
              <div class="info-children"><span>独学開始</span></div>

              <li value="210"><i class="fab fa-amazon"></i> <a href="#relations">RELATIONS</a></li>
              <li value="210"><i class="fab fa-amazon"></i> <a href="#recommend">しらひゅー推し</a></li>
            </div>
          </ul>



          <p id="avocado"></p>
          <p>
            <em2>1:下の子たちを優しく押して走らせてください。(jQuery / easing)</em2>
          </p>
          <div class="animal">
            <div class="box2">🐈</div>
            <div class="box2">🐕</div>
            <div class="box2">🐥</div>
          </div>

          <p id="avocado"></p>
          <p>
            <em2>2:下の人たちを押してバネみたいな動きをさせてみましょう。(jQuery / easing)</em2>
          </p>
          <div class="animal">
            <div class="box4">🤸🏻‍♂️</div>
            <div class="box4">🧎🏻‍♂️</div>
            <div class="box4">🤷🏻‍♂️</div>
          </div>

          <p id="avocado"></p>
          <p>
            <em2>3:下の食べ物をクリックして回転させてください。(JavaScript)</em2>
          </p>
          <div class="food">
            <div class="box3" id="target1">🍚</div>
            <div class="box3" id="target2">🍜</div>
            <div class="box3" id="target3">🍔</div>
            <div class="box3" id="target4">🍖</div>
            <div class="box3" id="target5">🥗</div>
          </div>
          
          <div id="countdown"></div>
          <div class="pushbtn">
            <p id="avocado"></p>
            <p>
              <em2>4:下のPUSHボタンを0秒になるまで押してください。(JavaScript)</em2>
            </p>
            <p>
              <em4>※0秒になるとアラートが出ます。"OK"を押下してください。</em4>
            </p>
            <div class="btnArea">
              <a id="count" class="startbtn" onclick="setTimeout('countDown()',0.1);">PUSH</a>
            </div>
          </div>
          
          <div id="judgment"></div>
          <div id="number">
            <p id="avocado"></p>
            <p>
              <em2>5:下の入力欄に数字を入力し、判定を押してみてください。(PHP / jQuery)</em2>
            </p>
            <p>
              <em4>※正負/偶数奇数の判定です。</em4>
            </p>
            <form action="work.php#judgment" method="post">
              <p><input type="number" name="num" placeholder="数字を入力してください" value="<?php if( !empty($_POST['num']) ){ echo $_POST['num']; } ?>"></p>

              <div id="submitAria">
                <input type="submit" value="判定" class="submitButton">
              </div>
            </form>

            <button class="showResult">判定結果を表示する</button>
            <p id="results"><?php include('../parts/number.php'); ?></p>

            <div class="comment">5:Comment<i class="far fa-comment-dots"></i></div>
            <em2>
              今回、”判定結果を表示する”ボタンは、addClassとremoveClassを使っています。
              <br>
              PHPにて、変数のNULL判定する場合は、is_null, isset, emptyなどの関数を使うと思いますが、ここでは is_null で対応しています。
              <br>
              その過程で、NULL型をintにキャストすると”0”になることが分かりました。全く想定していなかったのでデバッグで発見時に驚きました。
              <br>
              if文を途中で抜けるために"goto"文を使っています。"goto"文は、一般的に可読性を損なうため、利用避けた方が良いと言われていますが、検証のために利用しました。
              <br>
            </em2>
          </div>


          <script>
            'use strict';

            const target1 = document.getElementById('target1');
            const target2 = document.getElementById('target2');
            const target3 = document.getElementById('target3');
            const target4 = document.getElementById('target4');
            const target5 = document.getElementById('target5');

            target1.addEventListener('click', () => {
              target1.classList.toggle('circle');
            });
            target2.addEventListener('click', () => {
              target2.classList.toggle('circle');
            });
            target3.addEventListener('click', () => {
              target3.classList.toggle('circle');
            });
            target4.addEventListener('click', () => {
              target4.classList.toggle('circle');
            });
            target5.addEventListener('click', () => {
              target5.classList.toggle('circle');
            });

            $(document).ready(function() {
              $('.box2').click(function() {
                $(this).animate({
                  marginRight: '+=100px'
                }, 1000);
              });
            });

            $(document).ready(function() {
              $('.box4').click(function() {
                $(this).animate({
                  marginLeft: '+=100px'
                }, 1000, "easeOutElastic");
              });
            });
          </script>
        </div>
      </div>
      <?php include('../parts/contents.php'); ?>
    </div>

    <div id="aside">
      <?php include('../parts/prof.php'); ?>
      <div id="relations"></div>
      <div id="widget3">
        <p>
          <em4>利用した参考書</em4>
        </p>
        <iframe id="amazon" style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="https://rcm-fe.amazon-adsystem.com/e/cm?ref=tf_til&t=hiyuma-22&m=amazon&o=9&p=8&l=as1&IS2=1&detail=1&asins=B07ZQWKL2Q&linkId=9ef9959afb8ec42e7fa4c42d21f5fc85&bc1=ff8c8c&lt1=_top&fc1=878787&lc1=ffffff&bg1=ff8c8c&f=ifr">
        </iframe>
        <iframe id="amazon" style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="https://rcm-fe.amazon-adsystem.com/e/cm?ref=tf_til&t=hiyuma-22&m=amazon&o=9&p=8&l=as1&IS2=1&detail=1&asins=4295005940&linkId=a608d54d1a46966f753ca770a17e5b30&bc1=ff8c8c&lt1=_top&fc1=878787&lc1=ffffff&bg1=ff8c8c&f=ifr">
        </iframe>
        <iframe id="amazon" style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="https://rcm-fe.amazon-adsystem.com/e/cm?ref=tf_til&t=hiyuma-22&m=amazon&o=9&p=8&l=as1&IS2=1&detail=1&asins=4295005096&linkId=94cc899163fdbfac373bc624a1dab20a&bc1=ff8c8c&lt1=_top&fc1=878787&lc1=ffffff&bg1=ff8c8c&f=ifr">
        </iframe>
        <iframe id="amazon" style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="https://rcm-fe.amazon-adsystem.com/e/cm?ref=tf_til&t=hiyuma-22&m=amazon&o=9&p=8&l=as1&IS2=1&detail=1&asins=B06W9JDHVF&linkId=9d2e39bc6c1c8c9dd1d4fb01b2d672f2&bc1=ff8c8c&lt1=_top&fc1=878787&lc1=ffffff&bg1=ff8c8c&f=ifr">
        </iframe>
        <iframe id="amazon" style="width:120px;height:200px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="https://rcm-fe.amazon-adsystem.com/e/cm?ref=tf_til&t=hiyuma-22&m=amazon&o=9&p=8&l=as1&IS2=1&detail=1&asins=B019WTE1FE&linkId=0ceee6ba75c567875559fafaa6a8371b&bc1=ff8c8c&lt1=_top&fc1=878787&lc1=ffffff&bg1=ff8c8c&f=ifr">
        </iframe>
      </div>

      <?php include('../parts/widget/side_widget.php'); ?>
    </div>
  </main>

  <footer>
    <?php include('../parts/footer.php'); ?>
  </footer>
  <script src="../js/menu.js"></script>
  <script src="../js/href.js"></script>
  <script src="../js/numberResultShow.js"></script>
  <script src="js/count.js"></script>
  <script src="js/createString.js"></script>
  <script src="js/fadeinout.js"></script>

</body>

</html>