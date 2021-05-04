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
  <?php include('parts/mobileAmazon.php') ?>
</head>

<body>
  <?php include('parts/header.php') ?>


  <?php include('parts/widget/widget_214.php') ?>


  <header>
    <h1 class="logo">術</h1>
  </header>

  <?php include('parts/menuButton.php'); ?>
  <?php include('parts/facebook_twitter_button.php'); ?>


  <main>
    <div id="article">
      <section id="techsection" class="slide-in-animation">
        <div class="line">TECHNICAL DIARY</div>
        <p>
          <img id="top-img" src="gallery/top/techtop.jpg" alt="">
        </p>
        <br>
        <p>IT関連の技術的な日記を書くかもしれないし、書かないかもしれないです。
          <br><br>
          <em2>※2021年3月現在、フリーランス活動とTOEIC試験勉強中のため、更新頻度が低くなっています。</em2>
        </p>
        <br>
        <h3><i class="far fa-list-alt"></i>Technical diary list</h3>
        <div class="schedule_wrapper">
          <!-- list -->
          <div id="schedule0" class="schedule_list">
            <ol reversed>
              <!-- 
      
               <li><a href="#20210505"> 2021年05月05日 基本情報処理技術者試験 ⑧「午前試験　テクノロジ系　過去問②」
               <li><a href="#20210506"> 2021年05月06日 基本情報処理技術者試験 ⑦「2進数/16進数」
               <li><a href="#20210505"> 2021年05月05日 基本情報処理技術者試験 ⑥「午前試験　テクノロジ系　過去問①」</a></li>-->
              <li><a href="#20210504"> 2021年05月04日 基本情報処理技術者試験 ⑤「午後試験」</a></li>
              <li><a href="#20210503"> 2021年05月03日 基本情報処理技術者試験 ④「午前試験　ストラテジ系」</a></li>
              <li><a href="#20210502"> 2021年05月02日 基本情報処理技術者試験 ③「午前試験　マネジメント系」</a></li>
              <li><a href="#20210501"> 2021年05月01日 基本情報処理技術者試験 ②「午前試験　テクノロジ系」</a></li>
              <li><a href="#20210430"> 2021年04月30日 基本情報処理技術者試験 ①「基本情報処理技術者試験」</a></li>
              <li><a href="#20210314"> 2021年03月14日 JavaScript/jQuery ③「スクロールイベント・フェードイン」</a></li>
              <li><a href="#20210228"> 2021年02月28日 JavaScript/jQuery ②「スクロールトップ/アニメーション」</a></li>
              <li><a href="#20210221"> 2021年02月21日 JavaScript/jQuery ①「lightGalleryの使い方」</a></li>
              <li><a href="#20210218"> 2021年02月18日 PHP ③「繰り返し処理(while文)」</a></li>
              <li><a href="#20210214"> 2021年02月14日 SEO ①「サイトマップの作成と追加」</a></li>
              <li><a href="#20210210"> 2021年02月10日 HTML/CSS ①「ソースコードの埋め込み」</a></li>
              <li><a href="#20210209"> 2021年02月09日 PHP ②「現在日時の所得」</a></li>
              <li><a href="#20210208"> 2021年02月08日 PHP ①「入力値の継承」</a></li>
              <li><a href="#20210206"> 2021年02月06日 CSS ②「リストデザイン変更」</a></li>
              <li><a href="#20210205"> 2021年02月05日 CSS ①「スクロールバーデザイン変更」</a></li>
            </ol>
          </div>
        </div>

        <!--問題テンプレート <div class="accbox">
            <h3>第x問　</h3>
            <input type="checkbox" id="0000x" class="cssacc" />

            <label for="0000x"><span><i class="fas fa-book"></i>READ</span></label>
            <div class="accshow">

              <em3></em3>
              <p id="feQuestion"></p>


              <h4>選択肢</h4>
              <table id="feSelection">
                <tr>
                  <td>ア</td>
                  <td>イ</td>
                  <td>ウ</td>
                  <td>エ</td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>

              <div id="answer">
                答え
                <input type="checkbox" id="0000xa" class="cssacc" />

                <label for="0000xa"><span>READ</span></label>
                <div class="accshow">

                  <h4>正解</h4>
                  <div class="accbox">
                    <table id="feSelection">
                      <tr>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                      </tr>
                    </table>
                    <P>
                    </p>
                    <em3><a href="https://www.fe-siken.com/">参考・引用：基本情報技術者試験.com</a></em3>
                  </div>
                </div>
              </div>
            </div>
          </div> 
          
          <br>
        </div>  -->


        <!--テンプレート id=00XX -->
        <!--<div id="20210508"></div>
         <div class="schedule_wrapper">
        <br>
        <p id="avocado">2021年05月08日 <i class="fas fa-laptop-code"></i></p>
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
        <br>
      </div>
         -->

        <!-- id=0020 ※ID 2か所変更 -->
        <!--<div id="20210508"></div>
        <div class="schedule_wrapper">
          <br>
          <p id="avocado">2021年05月08日 <i class="fas fa-laptop-code"></i>基本情報処理技術者試験</p>
          <h2 id="title">「午前試験　テクノロジ系　過去問③」</h2>

          <div class="accbox">

            <p><img src="gallery/techimg/20210509/feQuiz3.png" alt="基本情報処理技術者試験 過去問③"></p>
            <h3>第21問　MIPS</h3>

            <input type="checkbox" id="0021" class="cssacc" />

            <label for="0021"><span><i class="fas fa-book"></i>READ</span></label>
            <div class="accshow">

              <em3>平成30年秋期　問9</em3>
              <p id="feQuestion">動作クロック周波数が700MHzのCPUで，命令の実行に必要なクロック数とその命令の出現率が表に示す値である場合，このCPUの性能は約何MIPSか。</p>

              <h4>選択肢</h4>
              <table id="feSelection">
                <tr>
                  <td>ア</td>
                  <td>イ</td>
                  <td>ウ</td>
                  <td>エ</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>50</td>
                  <td>70</td>
                  <td>100</td>
                </tr>
              </table>

              <div id="answer">
                答え
                <input type="checkbox" id="0021a" class="cssacc" />

                <label for="0021a"><span>READ</span></label>
                <div class="accshow">

                  <h4>正解</h4>

                  <div class="accbox">
                    <table id="feSelection">
                      <tr>
                        <td>エ</td>
                      </tr>

                      <tr>
                        <td>100</td>
                      </tr>
                    </table>

                    <P>まず1命令を実行するのに必要な平均クロック数を求めます。
                      <br><br>
                      各命令を実行するのに必要なクロック数に、出現率を乗じたものを足し合わせて、
                      <br><br>
                      (4×0.3)＋(8×0.6)＋(10×0.1)＝1.2＋4.8＋1.0＝7.0
                      <br><br>
                      この計算結果から、1命令に必要な平均クロック数は7クロックであるとわかります。
                      <br><br>
                      CPUの動作クロック数が700MHzなので、1秒間の命令実行可能回数は、
                      <br><br>
                      700×10(6乗)÷7＝100×10(6乗)回
                      <br><br>
                      MIPSは1秒間に実行できる命令数を百万単位で表す指標なので、このCPUの性能は100MIPSになります。したがって「エ」が正解です。
                    </p>

                    <em3><a href="https://www.fe-siken.com/">参考・引用：基本情報技術者試験.com</a></em3>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="accbox">
            <h3>第22問　HTTPS</h3>
            <input type="checkbox" id="00022" class="cssacc" />

            <label for="00022"><span><i class="fas fa-book"></i>READ</span></label>
            <div class="accshow">

              <em3>平成26年秋期　問43</em3>
              <p id="feQuestion">HTTPS(HTTP over SSL/TLS)の機能を用いて実現できるものはどれか。</p>


              <h4>選択肢</h4>
              <table id="feSelection">
                <tr>
                  <td>ア</td>
                  <td>イ</td>
                  <td>ウ</td>
                  <td>エ</td>
                </tr>
                <tr>
                  <td>SQLインジェクションによるWebサーバへの攻撃を防ぐ。</td>
                  <td>TCPポート80番と443番以外の通信を遮断する。</td>
                  <td>Webサーバとブラウザの間の通信を暗号化する。</td>
                  <td>Webサーバへの不正なアクセスをネットワーク層でのパケットフィルタリングによって制限する。</td>
                </tr>
              </table>

              <div id="answer">
                答え
                <input type="checkbox" id="00022a" class="cssacc" />

                <label for="00022a"><span>READ</span></label>
                <div class="accshow">

                  <h4>正解</h4>
                  <div class="accbox">
                    <table id="feSelection">
                      <tr>
                        <td>ウ</td>
                      </tr>
                      <tr>
                        <td>Webサーバとブラウザの間の通信を暗号化する。</td>
                      </tr>
                    </table>
                    <P>HTTPSは、WebサーバとWebブラウザがデータを安全に送受信するために、SSL/TLSプロトコルによって生成されるセキュアな接続上でデータのやり取り(HTTP通信)を行う方式です。
                    <br><br>
                    HTTPは、平文のままで情報をやり取りするため個人情報の送信や電子決済などセキュリティが重要となる通信に使うことは危険が伴います。HTTPSではこの問題に対処するためSSL/TLSから提供される通信の暗号化，ノードの認証，改ざん検出などの機能を使用し、「なりすまし」や「盗聴」による攻撃から通信を保護できるようになっています。
                    </p>
                    <em3><a href="https://www.fe-siken.com/">参考・引用：基本情報技術者試験.com</a></em3>
                  </div>
                </div>
              </div>
            </div>
          </div> 

          <div class="accbox">
            <h3>第23問　</h3>
            <input type="checkbox" id="00023" class="cssacc" />

            <label for="00023"><span><i class="fas fa-book"></i>READ</span></label>
            <div class="accshow">

              <em3></em3>
              <p id="feQuestion"></p>


              <h4>選択肢</h4>
              <table id="feSelection">
                <tr>
                  <td>ア</td>
                  <td>イ</td>
                  <td>ウ</td>
                  <td>エ</td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>

              <div id="answer">
                答え
                <input type="checkbox" id="00023a" class="cssacc" />

                <label for="00023a"><span>READ</span></label>
                <div class="accshow">

                  <h4>正解</h4>
                  <div class="accbox">
                    <table id="feSelection">
                      <tr>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                      </tr>
                    </table>
                    <P>
                    </p>
                    <em3><a href="https://www.fe-siken.com/">参考・引用：基本情報技術者試験.com</a></em3>
                  </div>
                </div>
              </div>
            </div>
          </div> 

          <div class="accbox">
            <h3>第24問　</h3>
            <input type="checkbox" id="00024" class="cssacc" />

            <label for="00024"><span><i class="fas fa-book"></i>READ</span></label>
            <div class="accshow">

              <em3></em3>
              <p id="feQuestion"></p>


              <h4>選択肢</h4>
              <table id="feSelection">
                <tr>
                  <td>ア</td>
                  <td>イ</td>
                  <td>ウ</td>
                  <td>エ</td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>

              <div id="answer">
                答え
                <input type="checkbox" id="00024a" class="cssacc" />

                <label for="00024a"><span>READ</span></label>
                <div class="accshow">

                  <h4>正解</h4>
                  <div class="accbox">
                    <table id="feSelection">
                      <tr>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                      </tr>
                    </table>
                    <P>
                    </p>
                    <em3><a href="https://www.fe-siken.com/">参考・引用：基本情報技術者試験.com</a></em3>
                  </div>
                </div>
              </div>
            </div>
          </div> 

          <div class="accbox">
            <h3>第25問　</h3>
            <input type="checkbox" id="00025" class="cssacc" />

            <label for="00025"><span><i class="fas fa-book"></i>READ</span></label>
            <div class="accshow">

              <em3></em3>
              <p id="feQuestion"></p>


              <h4>選択肢</h4>
              <table id="feSelection">
                <tr>
                  <td>ア</td>
                  <td>イ</td>
                  <td>ウ</td>
                  <td>エ</td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>

              <div id="answer">
                答え
                <input type="checkbox" id="0000xa" class="cssacc" />

                <label for="0000xa"><span>READ</span></label>
                <div class="accshow">

                  <h4>正解</h4>
                  <div class="accbox">
                    <table id="feSelection">
                      <tr>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                      </tr>
                    </table>
                    <P>
                    </p>
                    <em3><a href="https://www.fe-siken.com/">参考・引用：基本情報技術者試験.com</a></em3>
                  </div>
                </div>
              </div>
            </div>
          </div> 

          <div class="accbox">
            <h3>第26問　</h3>
            <input type="checkbox" id="00026" class="cssacc" />

            <label for="00026"><span><i class="fas fa-book"></i>READ</span></label>
            <div class="accshow">

              <em3></em3>
              <p id="feQuestion"></p>


              <h4>選択肢</h4>
              <table id="feSelection">
                <tr>
                  <td>ア</td>
                  <td>イ</td>
                  <td>ウ</td>
                  <td>エ</td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>

              <div id="answer">
                答え
                <input type="checkbox" id="00026a" class="cssacc" />

                <label for="00026a"><span>READ</span></label>
                <div class="accshow">

                  <h4>正解</h4>
                  <div class="accbox">
                    <table id="feSelection">
                      <tr>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                      </tr>
                    </table>
                    <P>
                    </p>
                    <em3><a href="https://www.fe-siken.com/">参考・引用：基本情報技術者試験.com</a></em3>
                  </div>
                </div>
              </div>
            </div>
          </div> 

          <div class="accbox">
            <h3>第27問　</h3>
            <input type="checkbox" id="00027 class="cssacc" />

            <label for="00027"><span><i class="fas fa-book"></i>READ</span></label>
            <div class="accshow">

              <em3></em3>
              <p id="feQuestion"></p>


              <h4>選択肢</h4>
              <table id="feSelection">
                <tr>
                  <td>ア</td>
                  <td>イ</td>
                  <td>ウ</td>
                  <td>エ</td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>

              <div id="answer">
                答え
                <input type="checkbox" id="00027a" class="cssacc" />

                <label for="00027a"><span>READ</span></label>
                <div class="accshow">

                  <h4>正解</h4>
                  <div class="accbox">
                    <table id="feSelection">
                      <tr>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                      </tr>
                    </table>
                    <P>
                    </p>
                    <em3><a href="https://www.fe-siken.com/">参考・引用：基本情報技術者試験.com</a></em3>
                  </div>
                </div>
              </div>
            </div>
          </div> 

          <div class="accbox">
            <h3>第28問　</h3>
            <input type="checkbox" id="00028" class="cssacc" />

            <label for="00028"><span><i class="fas fa-book"></i>READ</span></label>
            <div class="accshow">

              <em3></em3>
              <p id="feQuestion"></p>


              <h4>選択肢</h4>
              <table id="feSelection">
                <tr>
                  <td>ア</td>
                  <td>イ</td>
                  <td>ウ</td>
                  <td>エ</td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>

              <div id="answer">
                答え
                <input type="checkbox" id="00028a" class="cssacc" />

                <label for="00028a"><span>READ</span></label>
                <div class="accshow">

                  <h4>正解</h4>
                  <div class="accbox">
                    <table id="feSelection">
                      <tr>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                      </tr>
                    </table>
                    <P>
                    </p>
                    <em3><a href="https://www.fe-siken.com/">参考・引用：基本情報技術者試験.com</a></em3>
                  </div>
                </div>
              </div>
            </div>
          </div> 

          <div class="accbox">
            <h3>第29問　</h3>
            <input type="checkbox" id="00029" class="cssacc" />

            <label for="00029"><span><i class="fas fa-book"></i>READ</span></label>
            <div class="accshow">

              <em3></em3>
              <p id="feQuestion"></p>


              <h4>選択肢</h4>
              <table id="feSelection">
                <tr>
                  <td>ア</td>
                  <td>イ</td>
                  <td>ウ</td>
                  <td>エ</td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>

              <div id="answer">
                答え
                <input type="checkbox" id="00029a" class="cssacc" />

                <label for="00029a"><span>READ</span></label>
                <div class="accshow">

                  <h4>正解</h4>
                  <div class="accbox">
                    <table id="feSelection">
                      <tr>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                      </tr>
                    </table>
                    <P>
                    </p>
                    <em3><a href="https://www.fe-siken.com/">参考・引用：基本情報技術者試験.com</a></em3>
                  </div>
                </div>
              </div>
            </div>
          </div> 

          <div class="accbox">
            <h3>第30問　</h3>
            <input type="checkbox" id="00030" class="cssacc" />

            <label for="00030"><span><i class="fas fa-book"></i>READ</span></label>
            <div class="accshow">

              <em3></em3>
              <p id="feQuestion"></p>


              <h4>選択肢</h4>
              <table id="feSelection">
                <tr>
                  <td>ア</td>
                  <td>イ</td>
                  <td>ウ</td>
                  <td>エ</td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>

              <div id="answer">
                答え
                <input type="checkbox" id="00030a" class="cssacc" />

                <label for="00030a"><span>READ</span></label>
                <div class="accshow">

                  <h4>正解</h4>
                  <div class="accbox">
                    <table id="feSelection">
                      <tr>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                      </tr>
                    </table>
                    <P>
                    </p>
                    <em3><a href="https://www.fe-siken.com/">参考・引用：基本情報技術者試験.com</a></em3>
                  </div>
                </div>
              </div>
            </div>
          </div> 

          <div class="accbox">
            <h3>第31問　</h3>
            <input type="checkbox" id="00031" class="cssacc" />

            <label for="00031"><span><i class="fas fa-book"></i>READ</span></label>
            <div class="accshow">

              <em3></em3>
              <p id="feQuestion"></p>


              <h4>選択肢</h4>
              <table id="feSelection">
                <tr>
                  <td>ア</td>
                  <td>イ</td>
                  <td>ウ</td>
                  <td>エ</td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>

              <div id="answer">
                答え
                <input type="checkbox" id="00031a" class="cssacc" />

                <label for="00031a"><span>READ</span></label>
                <div class="accshow">

                  <h4>正解</h4>
                  <div class="accbox">
                    <table id="feSelection">
                      <tr>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                      </tr>
                    </table>
                    <P>
                    </p>
                    <em3><a href="https://www.fe-siken.com/">参考・引用：基本情報技術者試験.com</a></em3>
                  </div>
                </div>
              </div>
            </div>
          </div> 

          <div class="accbox">
            <h3>第32問　</h3>
            <input type="checkbox" id="00032" class="cssacc" />

            <label for="00032"><span><i class="fas fa-book"></i>READ</span></label>
            <div class="accshow">

              <em3></em3>
              <p id="feQuestion"></p>


              <h4>選択肢</h4>
              <table id="feSelection">
                <tr>
                  <td>ア</td>
                  <td>イ</td>
                  <td>ウ</td>
                  <td>エ</td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>

              <div id="answer">
                答え
                <input type="checkbox" id="00032a" class="cssacc" />

                <label for="00032a"><span>READ</span></label>
                <div class="accshow">

                  <h4>正解</h4>
                  <div class="accbox">
                    <table id="feSelection">
                      <tr>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                      </tr>
                    </table>
                    <P>
                    </p>
                    <em3><a href="https://www.fe-siken.com/">参考・引用：基本情報技術者試験.com</a></em3>
                  </div>
                </div>
              </div>
            </div>
          </div> 
          

         <br>
        </div>

        -->



        <!-- id=0019 ※ID 2か所変更 -->
        <!-- <div id="20210507"></div>
        <div class="schedule_wrapper">
          <br>
          <p id="avocado">2021年05月07日 <i class="fas fa-laptop-code"></i>基本情報処理技術者試験</p>
          <h2 id="title">「午前試験　テクノロジ系　過去問②」</h2>

          <div class="accbox">

            <p><img src="gallery/techimg/20210507/fePastQuiz2.png" alt="基本情報処理技術者試験 過去問②"></p>
            <h3>第11問　クライアントサーバ方式</h3>

            <input type="checkbox" id="0011" class="cssacc" />

            <label for="0011"><span><i class="fas fa-book"></i>READ</span></label>
            <div class="accshow">

              <em3>平成17年秋期　問32</em3>
              <p id="feQuestion">クライアントサーバ方式の説明として，最も適切なものはどれか。</p>

              <h4>選択肢</h4>
              <table id="feSelection">
                <tr>
                  <td>ア</td>
                  <td>イ</td>
                  <td>ウ</td>
                  <td>エ</td>
                </tr>
                <tr>
                  <td>パソコンとワークステーションをLANで接続したシステムの構成方式の総称であり，パソコンをクライアント，ワークステーションをサーバと呼ぶ。</td>
                  <td>プロセス間通信機能を利用し，一連の処理を，サービスを受けるプロセスと，そのサービスを提供するプロセスとに分離したものである。</td>
                  <td>ホストコンピュータの一部の機能と処理対象のデータファイルを端末に分散することによって，負荷の分散を図ることを主目的としたものである。</td>
                  <td>ホストコンピュータの代わりに配した複数のワークステーションと端末を接続し，負荷の水平分散を図ることを主目的としたものである。</td>
                </tr>
              </table>

              <div id="answer">
                答え
                <input type="checkbox" id="0011a" class="cssacc" />

                <label for="0011a"><span>READ</span></label>
                <div class="accshow">
                  <h4>正解</h4>
                  <div class="accbox">
                    <table id="feSelection">
                      <tr>
                        <td>イ</td>
                      </tr>
                      <tr>
                        <td>プロセス間通信機能を利用し，一連の処理を，サービスを受けるプロセスと，そのサービスを提供するプロセスとに分離したものである。</td>
                      </tr>
                    </table>
                    <P>クライアントサーバシステムは、サービスを要求する側であるクライアントと、サービスを提供するサーバにアプリケーションの機能を分離した垂直分散システムの一形態です。<br>
                      クライアントの環境を変更することなしにシステムに機能を追加したり、それぞれのサーバの機能を専用化することで比較的容易に個々の性能を向上させることができる利点があります。
                    </p>
                    <em3><a href="https://www.fe-siken.com/">参考・引用：基本情報技術者試験.com</a></em3>
                  </div>
                </div>
              </div>
            </div>


            <div class="accbox">
              <h3>第12問　バイオメトリクス認証</h3>
              <input type="checkbox" id="00012" class="cssacc" />

              <label for="00012"><span><i class="fas fa-book"></i>READ</span></label>
              <div class="accshow">

                <em3>平成20年春期　問64</em3>
                <p id="feQuestion">バイオメトリクス認証システムの判定しきい値を変化させるとき，FRR(本人拒否率)と FAR(他人受入率)との関係はどれか。</p>


                <h4>選択肢</h4>
                <table id="feSelection">
                  <tr>
                    <td>ア</td>
                    <td>イ</td>
                    <td>ウ</td>
                    <td>エ</td>
                  </tr>
                  <tr>
                    <td>FRRとFARは独立している。</td>
                    <td>FRRを減少させると，FARは減少する。</td>
                    <td>FRRを減少させると，FARは増大する。</td>
                    <td>FRRを増大させると，FARは増大する。</td>
                  </tr>
                </table>

                <div id="answer">
                  答え
                  <input type="checkbox" id="00012a" class="cssacc" />

                  <label for="00012a"><span>READ</span></label>
                  <div class="accshow">

                    <h4>正解</h4>
                    <div class="accbox">
                      <table id="feSelection">
                        <tr>
                          <td>ウ</td>
                        </tr>
                        <tr>
                          <td>FRRを減少させると，FARは増大する。</td>
                        </tr>
                      </table>
                      <P>バイオメトリクス認証は、指紋，虹彩，顔など人間の身体的な特徴や行動の特性など個人に固有の情報を用いて本人の認証を行う方式です。
                        <br><br>
                        一般にバイオメトリクス認証システムの精度は、本人拒否率(False Rejection Rate:FRR)と他人受入率(False Acceptance Rate:FAR)の組合せで評価されます。<br>
                        本人拒否率とは、本人であるにもかかわらず本人ではないと判断されてしまう確率、他人受入率とは、他人であるにもかかわらず本人であると誤認してしまう確率です。<br>
                        本人拒否率と他人受け入れ率はトレードオフの関係にあり、一方を減少させると他方は増大することになります。通常は十分なセキュリティを確保するため本人拒否率よりも他人受入率が十分に低くなるように設定されています。

                      </p>
                      <em3><a href="https://www.fe-siken.com/">参考・引用：基本情報技術者試験.com</a></em3>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="accbox">
              <h3>第13問　線形リスト</h3>
              <input type="checkbox" id="00013" class="cssacc" />

              <label for="00013"><span><i class="fas fa-book"></i>READ</span></label>
              <div class="accshow">

                <em3>平成27年秋期　問5</em3>
                <p id="feQuestion">ポインタを用いた線形リストの特徴のうち，適切なものはどれか。</p>


                <h4>選択肢</h4>
                <table id="feSelection">
                  <tr>
                    <td>ア</td>
                    <td>イ</td>
                    <td>ウ</td>
                    <td>エ</td>
                  </tr>
                  <tr>
                    <td>先頭の要素を根としたn分木で，先頭以外の要素は全て先頭の要素の子である。</td>
                    <td>配列を用いた場合と比較して，2分探索を効率的に行うことが可能である。</td>
                    <td>ポインタから次の要素を求めるためにハッシュ関数を用いる。</td>
                    <td>ポインタによって指定されている要素の後ろに，新たな要素を追加する計算量は，要素の個数や位置によらず一定である。</td>
                  </tr>
                </table>

                <div id="answer">
                  答え
                  <input type="checkbox" id="00013a" class="cssacc" />

                  <label for="00013a"><span>READ</span></label>
                  <div class="accshow">

                    <h4>正解</h4>
                    <div class="accbox">
                      <table id="feSelection">
                        <tr>
                          <td>エ</td>
                        </tr>
                        <tr>
                          <td>ポインタによって指定されている要素の後ろに，新たな要素を追加する計算量は，要素の個数や位置によらず一定である。</td>
                        </tr>
                      </table>
                      <P>線形リストとは、線形で表現されるリスト構造の総称で、一般的には隣接するデータ同士をポインタで連結して表現します。
                      <p><img src="gallery/techimg/20210508/線形リスト.jpg" alt="線形リスト構造"></p>

                      単方向リストの場合は新たな要素の追加は以下の手順で行われます。<br>
                      1　ポインタで指定された要素(以降、元要素)を取得する<br>
                      2　元要素のポインタを新要素のポインタに付け替える<br>
                      3　元要素のポインタが新要素を指し示すようにする<br>
                      <br><br>
                      元要素の取得後、その要素の後ろに新たな要素を追加する計算量は、リストの要素の個数や追加する位置によらず一定です。一方、配列の場合は追加する位置以後の要素を1つずつ後ろにシフトしなければなりません。

                      </p>
                      <em3><a href="https://www.fe-siken.com/">参考・引用：基本情報技術者試験.com</a></em3>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="accbox">
              <h3>第14問　C&Cサーバ</h3>
              <input type="checkbox" id="00014" class="cssacc" />

              <label for="00014"><span><i class="fas fa-book"></i>READ</span></label>
              <div class="accshow">

                <em3>平成30年秋期　問41</em3>
                <p id="feQuestion">ボットネットにおけるC&Cサーバの役割として，適切なものはどれか。</p>


                <h4>選択肢</h4>
                <table id="feSelection">
                  <tr>
                    <td>ア</td>
                    <td>イ</td>
                    <td>ウ</td>
                    <td>エ</td>
                  </tr>
                  <tr>
                    <td>Webサイトのコンテンツをキャッシュし，本来のサーバに代わってコンテンツを利用者に配信することによって，ネットワークやサーバの負荷を軽減する。</td>
                    <td>外部からインターネットを経由して社内ネットワークにアクセスする際に，CHAPなどのプロトコルを用いることによって，利用者認証時のパスワードの盗聴を防止する。</td>
                    <td>外部からインターネットを経由して社内ネットワークにアクセスする際に，チャレンジレスポンス方式を採用したワンタイムパスワードを用いることによって，利用者認証時のパスワードの盗聴を防止する。</td>
                    <td>侵入して乗っ取ったコンピュータに対して，他のコンピュータへの攻撃などの不正な操作をするよう，外部から命令を出したり応答を受け取ったりする。</td>
                  </tr>
                </table>

                <div id="answer">
                  答え
                  <input type="checkbox" id="00014a" class="cssacc" />

                  <label for="00014a"><span>READ</span></label>
                  <div class="accshow">

                    <h4>正解</h4>
                    <div class="accbox">
                      <table id="feSelection">
                        <tr>
                          <td>エ</td>
                        </tr>
                        <tr>
                          <td>侵入して乗っ取ったコンピュータに対して，他のコンピュータへの攻撃などの不正な操作をするよう，外部から命令を出したり応答を受け取ったりする。</td>
                        </tr>
                      </table>
                      <P>C&C(コマンド&コントロール)サーバは、攻撃者がマルウェアに対して指令となるコマンドを送信し、マルウェアが仕掛けられたコンピュータの動作を制御するために用いられる外部の指令サーバです。したがって「エ」が適切な記述です。
                      <p><img src="gallery/techimg/20210508/C&Cサーバ.jpg" alt="C&Cサーバ"></p>
                      アは、CDN(Contents Delivery Network)の役割です。
                      <br><br>
                      イとウは、認証サーバの役割です。
                      </p>
                      <em3><a href="https://www.fe-siken.com/">参考・引用：基本情報技術者試験.com</a></em3>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="accbox">
              <h3>第15問　TCPポート番号</h3>
              <input type="checkbox" id="00015" class="cssacc" />

              <label for="00015"><span><i class="fas fa-book"></i>READ</span></label>
              <div class="accshow">

                <em3>平成28年秋期　問45</em3>
                <p id="feQuestion">PCへの侵入に成功したマルウェアがインターネット上の指令サーバと通信を行う場合に，宛先ポートとしてTCPポート番号80が多く使用される理由はどれか。</p>


                <h4>選択肢</h4>
                <table id="feSelection">
                  <tr>
                    <td>ア</td>
                    <td>イ</td>
                    <td>ウ</td>
                    <td>エ</td>
                  </tr>
                  <tr>
                    <td>DNSのゾーン転送に使用されるので，通信がファイアウォールで許可されている可能性が高い。</td>
                    <td>WebサイトのHTTPS通信での閲覧に使用されることから，侵入検知システムで検知される可能性が低い。</td>
                    <td>Webサイトの閲覧に使用されることから，通信がファイアウォールで許可されている可能性が高い。</td>
                    <td>ドメイン名の名前解決に使用されるので，侵入検知システムで検知される可能性が低い。</td>
                  </tr>
                </table>

                <div id="answer">
                  答え
                  <input type="checkbox" id="00015a" class="cssacc" />

                  <label for="00015a"><span>READ</span></label>
                  <div class="accshow">

                    <h4>正解</h4>
                    <div class="accbox">
                      <table id="feSelection">
                        <tr>
                          <td>ウ</td>
                        </tr>
                        <tr>
                          <td>Webサイトの閲覧に使用されることから，通信がファイアウォールで許可されている可能性が高い。</td>
                        </tr>
                      </table>
                      <P>TCPポート番号"80"はHTTP通信のために予約されている通信ポートで、多くの場合、業務でWebサイト接続を利用する関係でポートを閉じることが困難です。<br>
                        マルウェアが80/TCPを使用するのは、このポートを使えば指令サーバへの通信をファイアウォールで遮断されにくく、さらに業務上行われる大量のHTTP通信に自身の通信を紛れ込ませられるからです。
                      </p>
                      <em3><a href="https://www.fe-siken.com/">参考・引用：基本情報技術者試験.com</a></em3>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="accbox">
              <h3>第16問　プロトコル</h3>
              <input type="checkbox" id="00016" class="cssacc" />

              <label for="00016"><span><i class="fas fa-book"></i>READ</span></label>
              <div class="accshow">

                <em3>平成25年秋期　問35</em3>
                <p id="feQuestion">IPv4においてIPアドレスからMACアドレスを取得するために用いるプロトコルはどれか。</p>


                <h4>選択肢</h4>
                <table id="feSelection">
                  <tr>
                    <td>ア</td>
                    <td>イ</td>
                    <td>ウ</td>
                    <td>エ</td>
                  </tr>
                  <tr>
                    <td>ARP</td>
                    <td>DHCP</td>
                    <td>ICMP</td>
                    <td>RARP</td>
                  </tr>
                </table>

                <div id="answer">
                  答え
                  <input type="checkbox" id="00016a" class="cssacc" />

                  <label for="00016a"><span>READ</span></label>
                  <div class="accshow">

                    <h4>正解</h4>
                    <div class="accbox">
                      <table id="feSelection">
                        <tr>
                          <td>ア</td>
                        </tr>
                        <tr>
                          <td>ARP</td>
                        </tr>
                      </table>
                      <P>ARP(Address Resolution Protocol)は、IPアドレスから対応する機器のMACアドレスを取得するプロトコルです。
                        <br><br>
                        イは、Dynamic Host Configuration Protocolの略。TCP/IPネットワークで、ネットワークに接続するノードへのIPアドレスの割り当てをアドレスプールから自動的に行うプロトコルです。
                        <br><br>
                        ウは、Internet Control Message Protocolの略。インターネットプロトコル(IP)の通信制御を補完するプロトコルで、データ配送中のエラー通知や送達エラーを通知する機能を持っています。
                        <br><br>
                        エは、Reverse Address Resolution Protocolの略。ARPがIPアドレスから機器のMACアドレスを得るのとは逆に、機器固有のMACアドレスから対応するIPアドレスを取得するためのプロトコルです。
                      </p>
                      <em3><a href="https://www.fe-siken.com/">参考・引用：基本情報技術者試験.com</a></em3>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="accbox">
              <h3>第17問　フォールトトレラントシステム</h3>
              <input type="checkbox" id="00017" class="cssacc" />

              <label for="00017"><span><i class="fas fa-book"></i>READ</span></label>
              <div class="accshow">

                <em3>平成25年春期　問14</em3>
                <p id="feQuestion">フォールトトレラントシステムの説明として，適切なものはどれか。</p>


                <h4>選択肢</h4>
                <table id="feSelection">
                  <tr>
                    <td>ア</td>
                    <td>イ</td>
                    <td>ウ</td>
                    <td>エ</td>
                  </tr>
                  <tr>
                    <td>システムが部分的に故障しても，システム全体としては必要な機能を維持するシステム</td>
                    <td>地域的な災害などの発生に備えて，遠隔地に予備を用意しておくシステム</td>
                    <td>複数のプロセッサがネットワークを介して接続され，資源を共有するシステム</td>
                    <td>複数のプロセッサで一つのトランザクションを並行して処理し，結果を照合するシステム</td>
                  </tr>
                </table>

                <div id="answer">
                  答え
                  <input type="checkbox" id="000017a" class="cssacc" />

                  <label for="000017a"><span>READ</span></label>
                  <div class="accshow">

                    <h4>正解</h4>
                    <div class="accbox">
                      <table id="feSelection">
                        <tr>
                          <td>ア</td>
                        </tr>
                        <tr>
                          <td>システムが部分的に故障しても，システム全体としては必要な機能を維持するシステム</td>
                        </tr>
                      </table>
                      <P>フォールトトレラントシステムは、システムの構成要素に冗長性を導入し、一部に故障が発生してもシステム全体としての必要な機能を維持させようとする考え方で設計されたシステムです。
                        実現する方法としては無停電電源装置の導入や構成機器の二重化などがあります。
                        <br><br>
                        フォールトトレラントシステムの実現方法として、フェールソフト、フェールセーフがあります。
                        <br><br>
                        イは、ホットサイトやコールドサイトなどのバックアップセンタの説明です。
                        <br><br>
                        ウは、密結合プロセッサシステムの説明です。
                        <br><br>
                        エは、デュアルシステムの説明です
                      </p>
                      <em3><a href="https://www.fe-siken.com/">参考・引用：基本情報技術者試験.com</a></em3>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="accbox">
              <h3>第18問　DFD表記</h3>
              <input type="checkbox" id="00018" class="cssacc" />

              <label for="00018"><span><i class="fas fa-book"></i>READ</span></label>
              <div class="accshow">

                <em3>平成22年秋期　問45</em3>
                <p id="feQuestion">DFD表記方法として，適切なものはどれか。</p>


                <h4>選択肢</h4>
                <table id="feSelection">
                  <tr>
                    <td>ア</td>
                    <td>イ</td>
                    <td>ウ</td>
                    <td>エ</td>
                  </tr>
                  <tr>
                    <td>2本の平行線は同期を意味し，名前は付けない。</td>
                    <td>円には，データを蓄積するファイルの名前を付ける。</td>
                    <td>四角には，入力画面や帳票を現す名前を付ける。</td>
                    <td>矢印には，データを表す名前を付ける。</td>
                  </tr>
                </table>

                <div id="answer">
                  答え
                  <input type="checkbox" id="00018a" class="cssacc" />

                  <label for="00018a"><span>READ</span></label>
                  <div class="accshow">

                    <h4>正解</h4>
                    <div class="accbox">
                      <table id="feSelection">
                        <tr>
                          <td>エ</td>
                        </tr>
                        <tr>
                          <td>矢印には，データを表す名前を付ける。</td>
                        </tr>
                      </table>
                      <P>DFD（Data Flow Diagram）はデータの流れに着目して業務をモデル化したものです。
                      <p><img src="gallery/techimg/20210508/DFD.jpg" alt="DFDの表記方法"></p>
                      </p>
                      <em3><a href="https://www.fe-siken.com/">参考・引用：基本情報技術者試験.com</a></em3>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="accbox">
              <h3>第19問　CPI(Clocks Per Instruction)</h3>
              <input type="checkbox" id="00019" class="cssacc" />

              <label for="00019"><span><i class="fas fa-book"></i>READ</span></label>
              <div class="accshow">

                <em3>平成18年春期　問19</em3>
                <p id="feQuestion">あるベンチマークテストプログラムの命令ごとの出現頻度と，これを実行するプロセッサの実行クロック数を表に示す。このベンチマークテストプログラムにおけるCPI(Clocks Per Instruction)は幾らか。</p>
                <p><img src="gallery/techimg/20210508/ベンチマークテスト.jpg" alt="ベンチマークテスト"></p>


                <h4>選択肢</h4>
                <table id="feSelection">
                  <tr>
                    <td>ア</td>
                    <td>イ</td>
                    <td>ウ</td>
                    <td>エ</td>
                  </tr>
                  <tr>
                    <td>0.48</td>
                    <td>0.69</td>
                    <td>2.10</td>
                    <td>2.67</td>
                  </tr>
                </table>

                <div id="answer">
                  答え
                  <input type="checkbox" id="00019a" class="cssacc" />

                  <label for="00019a"><span>READ</span></label>
                  <div class="accshow">

                    <h4>正解</h4>
                    <div class="accbox">
                      <table id="feSelection">
                        <tr>
                          <td>ウ</td>
                        </tr>
                        <tr>
                          <td>2.10</td>
                        </tr>
                      </table>
                      <P>CPI(Clocks Per Instruction)は、コンピュータのCPUの1命令を実行するのに必要なクロック数を表す指標です。
                        <br><br>
                        表から得られる命令ごとの出現頻度に実行クロック数を乗じた数値を足し合わせてCPIを求めます。
                        <br><br>
                        0.5×1＋0.3×2＋0.2×5 ＝ 0.5＋0.6＋1 ＝ 2.1
                        <br><br>
                        以上の計算でCPIは「2.10」とわかります。
                      </p>
                      <em3><a href="https://www.fe-siken.com/">参考・引用：基本情報技術者試験.com</a></em3>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="accbox">
              <h3>第20問　パリティチェック</h3>
              <input type="checkbox" id="00020" class="cssacc" />

              <label for="00020"><span><i class="fas fa-book"></i>READ</span></label>
              <div class="accshow">

                <em3>平成26年春期　問11</em3>
                <p id="feQuestion">メモリモジュールのパリティチェックの目的として，適切なものはどれか。</p>


                <h4>選択肢</h4>
                <table id="feSelection">
                  <tr>
                    <td>ア</td>
                    <td>イ</td>
                    <td>ウ</td>
                    <td>エ</td>
                  </tr>
                  <tr>
                    <td>メモリモジュールに電源が供給されているかどうかを判定する。</td>
                    <td>読出し時に，エラーが発生したかどうかを検出する。</td>
                    <td>読出し時に，エラーを検出して自動的に訂正する。</td>
                    <td>読み出したデータを暗号化する。</td>
                  </tr>
                </table>

                <div id="answer">
                  答え
                  <input type="checkbox" id="00020a" class="cssacc" />

                  <label for="00020a"><span>READ</span></label>
                  <div class="accshow">

                    <h4>正解</h4>
                    <div class="accbox">
                      <table id="feSelection">
                        <tr>
                          <td>イ</td>
                        </tr>
                        <tr>
                          <td>読出し時に，エラーが発生したかどうかを検出する。</td>
                        </tr>
                      </table>
                      <P>パリティチェックは、データ通信やメモリチェックなどにおいてデータのビット誤りを検出する最もシンプルな方法の一つです。<br>
                      一定長のビット列（通常は7～8ビット）ごとに1ビットの検査ビット（パリティビット）を付加し、検査側が受信データとパリティビットを照合することで誤りを検出します。
                      <p><img src="gallery/techimg/20210508/メモリモジュールのパリティチェック.jpg" alt="メモリモジュールのパリティチェック"></p>
                      </p>
                      パリティチェックは基本的に誤り訂正の機能を持たないため、誤りが検出されたときには送信側に再送要求を行います（データ通信の場合）。<br>
                      また、誤りが奇数個であれば検出できますが、偶数個の誤りは検出できないという特徴があります。
                      <br><br>
                      パリティチェックの目的は誤りの検出なので「イ」が適切な記述です。
                      <em3><a href="https://www.fe-siken.com/">参考・引用：基本情報技術者試験.com</a></em3>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          -->

        <!-- id=0018 -->
        <!--<div id="20210506"></div>
         <div class="schedule_wrapper">
        <br>
        <p id="avocado">2021年05月06日 <i class="fas fa-laptop-code"></i>基本情報処理技術者試験</p>
        <h2 id="title">「2進数と16進数」</h2>
        <p><img src="gallery/techimg/20210507/2進数と16進数.png" alt="2進数と16進数"></p>

        <div class="accbox">

          <p><img src="gallery/techimg" alt=""></p>

          <input type="checkbox" id="二進数" class="cssacc" />

          <label for="二進数"><span><i class="fas fa-book"></i>READ</span></label>
          <div class="accshow">
            <h3>2進数とは？</h3>
            <p><strong><mark>2進数とは、「0」と「1」の組み合わせで表現される数字です。</mark></strong>
            <br><br>
            普段利用している数字は、10進数です。知っての通り、1が10集まると桁あがりします。
            <br><br>
            2進数は、「0」に1足すと「1」になり、さらに1足すと桁上がりし、「10」と表現されます。
            <br><br>
            例えば、10進数で「10」は、2進数では、「1010」となります。
            <br><br>
            下の表を見ると分かりやすいです。
            
            <table id="techdiary">
                <tr>
                  <th>10進数</th>
                  <th>2進数</th>
                </tr>
                <tr>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>1</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>10</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>11</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>100</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>101</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>110</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>111</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>1000</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>1001</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>1010</td>
                </tr>
            </table>

            <table id="techdiary">
                <tr>
                  <th>2進数</th>
                  <th>10進数</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>1（2の0乗）の位</td>
                </tr>
                
                <tr>
                  <td>10</td>
                  <td>2（2の1乗）の位</td>
                </tr>

                 <tr>
                  <td>100</td>
                  <td>4（2の2乗）の位</td>
                </tr>

                 <tr>
                  <td>1000</td>
                   <td>8（2の3乗）の位</td>
                </tr>

                 <tr>
                  <td>10000</td>
                  <td>16（2の4乗）の位</td>
                </tr>

                 <tr>
                  <td>100000</td>
                  <td>32（2の5乗）の位</td>
                </tr>

                 <tr>
                  <td>1000000</td>
                  <td>64（2の6乗）の位</td>
                </tr>

                 <tr>
                  <td>10000000</td>
                  <td>128（2の7乗）の位</td>
                </tr>

                 <tr>
                  <td>100000000</td>
                  <td>256（2の8乗）の位</td>
                </tr>

                 <tr>
                  <td>1000000000</td>
                  <td>512（2の9乗）の位</td>
                </tr>

                 <tr>
                  <td>10000000000</td>
                  <td>1024（2の10乗）の位</td>
                </tr>
            </table>


            コンピュータは、2進数を理解するよう作られています。基本的に10進数は理解できません。
            <br><br>
            数えきれないほどの「0」「1」を高速で読み取り、理解し、動作しているのです。
            <br><br>
            人間は、2進数よりも 10進数の方がはるかに扱いやすいため、2進数を普段使うことはありません。
            <br><br>
            ですが、IT業界やコンピュータ関連を学ぶには、理解しておくべきことです。
            <br><br>
            上の表で示した通り、当然ながら「2の〇乗」を2進数で表すと「0」の数が〇個になることが分かります。
            <br><br>
            例えば、「2の5乗(10進数で32)」は、100000で、0が5個あります。
            <br><br>
            10進数を2進数へ変換する方法は後述しますが、2進数は、10進数と同じ数字です。2になると桁上がりする数字だと考えればよいでしょう。
            </p>


            <h3>16進数とは？</h3>
            <p><strong><mark>0から9までの数字とAからFまでのアルファベットの組み合わせで表現され、16になると桁上がりする英数字です。</mark></strong>
            <br><br>
            2進数と同じく、16になると桁上がりするので16進数なのですが、数字だけでは表現できないため、アルファベットを使っています。
            <br><br>
            10進数で「16」は、16進数では「10」になるということです。
            <br><br>
            カラーコード(#FFFFFF)や、IPアドレス(例：fe80::b461:2735....)も16進数で表記する場合がありますので、IT業界では関連性の高いものです。


            <table id="techdiary">
                <tr>
                  <th>10進数</th>
                  <th>16進数</th>
                </tr>
                <tr>
                  <td>10</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>11</td>
                  <td>B</td>
                </tr>
                <tr>
                  <td>12</td>
                  <td>C</td>
                </tr>
                <tr>
                  <td>13</td>
                  <td>D</td>
                </tr>
                <tr>
                  <td>14</td>
                  <td>E</td>
                </tr>
                <tr>
                  <td>15</td>
                  <td>F</td>
                </tr>
                <tr>
                  <td>16</td>
                  <td>10</td>
                </tr>
                <tr>
                  <td>17</td>
                  <td>11</td>
                </tr>
                <tr>
                  <td>18</td>
                  <td>12</td>
                </tr>
                <tr>
                  <td>19</td>
                  <td>13</td>
                </tr>
                <tr>
                  <td>20</td>
                  <td>14</td>
                </tr>
            </table>
            
            <table id="techdiary">
                <tr>
                  <th>16進数</th>
                  <th>10進数</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>1（16の0乗）の位</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>16（16の1乗）の位</td>
                </tr>
                <tr>
                  <td>100</td>
                  <td>256（16の2乗）の位</td>
                </tr>
                <tr>
                  <td>1000</td>
                  <td>4096（16の3乗）の位</td>
                </tr>
                <tr>
                  <td>10000</td>
                  <td>65536（16の4乗）の位</td>
                </tr>
                <tr>
                  <td>100000</td>
                  <td>1048576（16の5乗）の位</td>
                </tr>
            </table>

            上の表のように、16進数はとても大きな数字を短く表現できます。また、2進数などコンピュータとの相性が良い数字です。
            <br><br>
            インターネット上のIPアドレスは、IPv4(32ビット)とIPv6(128ビット)とバージョンがありますが、IPv6アドレスは16進数で表現されています。
            <br><br>
            ちなみに、IPv6が開発された理由は、IPv4が32ビット(約43億個)のIPアドレスしか作れないので、そのIPアドレス枯渇問題を解決するためです。
            <br><br>
            16進数はアルファベットが入るため、ある意味16進数なのだと分かりやすい数字です。
            <br><br>
            他の12進数や18進数といったものは、使われていません。
            <br><br>
            2進数と16進数を覚えておけばよいでしょう。
            </p>

            
            <h3>2進数と10進数の変換方法は？</h3>
            <p><strong><mark>10進数から2進数への変換方法は割り算と2進数から10進数への変換方法は足し算です。</mark></strong>
            
            <h4>10進数から2進数への変換方法</h4>
            <p><img src="gallery/techimg/20210507/2進数変換割り算.jpg" alt="2進数と10進数変換"></p>
            上の画像のように10進数を「2」で割り算していきます。
            <br><br>
            その余りを右に並べています。
            <br><br>
            「0」になるまで割り算し、余りを逆に並べると2進数になります。
            <br><br>
            これは、16進数への変換でも使えます。
            <br><br>
            10進数の値に2で割るので余りがでると必ず「1」です。ですので、余りを並べることで2進数へ変換できるのです。
            <br><br>
            例えば、10進数で「50」であれば、<br>
            50÷2=25...余り0、<br>
            25÷2=12...余り1、<br>
            12÷2=6...余り0、<br>
            6÷2=3...余り0、<br>
            3÷2=1...余り1、<br>
            <br>
            ここで2より小さい数字になりました。
            <br><br>
            最後の1も含め、反対に並べてみると、「110010」です。
            <br><br>
            次に、これが本当に合っているのか、10進数に変換して確認しましょう。
            <h4>2進数から10進数への変換方法</h4>
            先ほどの10進数で「50」を2進数に変換して「110010」と表現できました。
            <br><br>
            10進数に変換する方法は、以下の画像を参考にしてみましょう。
            <p><img src="gallery/techimg/20210507/2進数を10進数に変換.jpg" alt="2進数を10進数に変換"></p>
            画像は、2進数では「11110000」、10進数では「240」です。
            <br><br>
            つまり、桁ごとに2の〇乗を加えて、10進数に変換できるのです。
            <br><br>
            「110010」の場合は、
            <table id="techdiary">
                <tr>
                  <th>2進数</th>
                  <th>10進数</th>
                </tr>
                <tr>
                  <td>0</td>
                  <td>0 (2の0乗)</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>2 (2の1乗)</td>
                </tr>
                <tr>
                  <td>0</td>
                  <td>0 (2の2乗)</td>
                </tr>
                <tr>
                  <td>0</td>
                  <td>0 (2の3乗)</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>16 (2の4乗)</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>32 (2の5乗)</td>
                </tr>
                <tr>
                  <td>合計</td>
                  <td>2+16+32=50</td>
                </tr>
                
            </table>
            と、上表のように、「1」の桁を2の何乗か重みを計算し、それぞれ足すだけで10進数へ変換できます。
            <br><br>
            この10進数と2進数の変換は、とても基本的で重要なことなので、何度か練習するなどして身につけておきたい変換方法です。
            </p>
            
            
            <h3>2進数と16進数の変換方法は？</h3>
            <p><strong><mark>2進数と16進数の変換方法は、2進数4桁が16進数1桁であることに注目して変換します。</mark></strong>
            <br><br>
            例えば、2進数の「11011001」を16進数に変換してみます。
            <p><img src="gallery/techimg/20210507/2進数と16進数.jpg" alt=""></p>
            2進数と16進数の対応づけは、このように4桁ごとに分け、もし2進数「10111」などの場合は、「0111」と「0001」と分けて16進数に変換します。
            <br><br>
            また、10進数に一度変換すると手間ですが分かりやすくなります。
            <br><br>
            例えば、2進数「1110」を10進数にすると「8+4+2+0」=「14」です。10進数「14」を16進数にすると、「E」です。
            <br><br>
            大切なことは、○進数は、○個進むと1桁繰り上がることです。
            <br><br>
            また、コンピュータの世界では、2進数や16進数でやり取りしているということも大切です。
            </p>

          </div>
        </div>
        <br>
      </div>
         -->



        <!-- id=0017 ※ID 2か所変更 -->
        <!-- <div id="20210505"></div>
        <div class="schedule_wrapper">
          <br>
          <p id="avocado">2021年05月05日 <i class="fas fa-laptop-code"></i>基本情報処理技術者試験</p>
          <h2 id="title">「午前試験　テクノロジ系　過去問①」</h2>


          <div class="accbox">

            <p><img src="gallery/techimg/20210505/fePastQuiz.png" alt="基本情報処理技術者試験 過去問①"></p>
            <h3>第1問　テスト</h3>

            <input type="checkbox" id="0017" class="cssacc" />

            <label for="0017"><span><i class="fas fa-book"></i>READ</span></label>
            <div class="accshow">

              <em3>平成28年秋期　問48</em3>
              <p id="feQuestion">整数1～1,000を有効とする入力値が，1～100の場合は処理Aを，101～1,000の場合は処理Bを実行する入力処理モジュールを，同値分割法と境界値分析によってテストする。次の条件でテストするとき，テストデータの最小個数は幾つか。</p>

              <div id="feTerm">
                <em3>〔条件〕</em3>
                <p>①有効同値クラスの1クラスにつき，一つの値をテストデータとする。ただし，テストする値は境界値でないものとする。
                  <br><br>
                  ②有効同値クラス，無効同値クラスの全ての境界値をテストデータとする。
                </p>
              </div>
              <h4>選択肢</h4>
              <table id="feSelection">
                <tr>
                  <td>ア</td>
                  <td>イ</td>
                  <td>ウ</td>
                  <td>エ</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>6</td>
                  <td>7</td>
                  <td>8</td>
                </tr>
              </table>

              <div id="answer">
                答え
                <input type="checkbox" id="0017a" class="cssacc" />

                <label for="0017a"><span>READ</span></label>
                <div class="accshow">
                  <h4>正解</h4>
                  <div class="accbox">
                    <table id="feSelection">
                      <tr>
                        <td>エ</td>
                      </tr>
                      <tr>
                        <td>8</td>
                      </tr>
                    </table>
                    <P>この問題は、開発を経験していないとイメージが湧きづらいと思います。<strong><mark>同値分割と境界値分析はブラックボックステストのテストケース作成手法です。</mark></strong></p>
                    <h4>同値分割</h4>
                    正しい入力値のデータクラス、正しいデータ範囲の上限を超えて無効であるデータクラス、正しいデータ範囲の下限を下回って無効であるデータクラスの3つのデータクラスに分割し、その中から1つの代表値を選んでテストケースとします。
                    入力値が整数に限定されており有効値が 0～50 である場合、「有効なデータ範囲 0～50」「有効値を下回る無効なデータ範囲 -∞～-1」「有効値を上回る無効なデータ範囲 51～∞」の中から、それぞれ適当な値を選択しテストケースとします。
                    <p><img src="gallery/techimg/20210505/同値分割.jpg" alt="同値分割"></p>
                    </p>
                    <h4>境界値分析(限界値分析)</h4>
                    同値分割と同じようにデータ範囲を「有効値」及び「有効値超過」「有効値未満」の3つに分類するところまでは同じですが、テストケースには有効範囲の上限値とそれを1つ上回る値、および下限値とそれを1つ下回る値を利用します。
                    入力値が整数に限定されており、有効値が 0～50 である場合、境界分析のテストケースには「-1, 0, 50, 51」の4つが選ばれます。
                    <p><img src="gallery/techimg/20210505/境界値分析.jpg" alt="境界値分析"></p>
                    処理Aと処理Bの有効同値クラス、および無効同値クラスを図で表すと以下のようになります。
                    <p><img src="gallery/techimg/20210505/有効同値クラスと無効同値クラス.jpg" alt="有効同値クラスと無効同値クラス"></p>
                    設問の〔条件〕に則りテストデータを追加していきます。まず有効同値クラスの1クラスにつき、境界値ではない1つの値を選択します(①)。(※無効同値クラスからは代表値を選択しないことに注意します)
                    <p><img src="gallery/techimg/20210505/有効同値クラスの1クラス.jpg" alt="有効同値クラス"></p>
                    次に「有効値の下限」「処理Aと処理Bの境界」「有効値の上限」の3つの境界について、それぞれ2つの境界値をテストデータに追加します(②)。
                    <p><img src="gallery/techimg/20210505/有効値と境界、有効値の上限.jpg" alt="有効値と境界、有効値の上限"></p>
                    このテストデータから、どれか1つでも減らしてしまうと設問の条件を満たせなくなるため、テストケースの最小個数は「8」になります。
                    </p>
                    <em3><a href="https://www.fe-siken.com/">参考・引用：基本情報技術者試験.com</a></em3>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="accbox">
            <h3>第2問　仮想記憶システム</h3>
            <input type="checkbox" id="0018" class="cssacc" />

            <label for="0018"><span><i class="fas fa-book"></i>READ</span></label>
            <div class="accshow">

              <em3>平成28年秋期　問17</em3>
              <p id="feQuestion">仮想記憶システムにおいて主記憶の容量が十分でない場合，プログラムの多重度を増加させるとシステムのオーバヘッドが増加し，アプリケーションのプロセッサ使用率が減少する状態を表すものはどれか。</p>


              <h4>選択肢</h4>
              <table id="feSelection">
                <tr>
                  <td>ア</td>
                  <td>イ</td>
                  <td>ウ</td>
                  <td>エ</td>
                </tr>
                <tr>
                  <td>スラッシング</td>
                  <td>フラグメンテーション</td>
                  <td>ページング</td>
                  <td>ボトルネック</td>
                </tr>
              </table>

              <div id="answer">
                答え
                <input type="checkbox" id="0018a" class="cssacc" />

                <label for="0018a"><span>READ</span></label>
                <div class="accshow">

                  <h4>正解</h4>
                  <div class="accbox">
                    <table id="feSelection">
                      <tr>
                        <td>ア</td>
                      </tr>
                      <tr>
                        <td>スラッシング</td>
                      </tr>
                    </table>
                    <P>仮想記憶システムにおいて主記憶の容量が十分でない場合にプログラムの多重度が増加すると、ページング処理が多発します。このようにシステムのオーバヘッドが増加したことによりアプリケーションのCPU使用率が減少し、処理速度が遅くなる状態を「スラッシング」(Thrashing)といいます。
                      <br><br>
                      「フラグメンテーション」とは、ディスク装置の記憶領域の中に使用されない領域の断片が存在した状態になりアクセス効率が低下する現象です。
                      <br><br>
                      「ページング」は、仮想記憶管理方式の一つで仮想アドレス空間と主記憶空間を「ページ」と呼ばれる固定長の区画に分割し、このページ単位で主記憶と補助記憶装置のアドレス変換を行う方式です。
                      <br><br>
                      「ボトルネック」は、処理性能や通信性能の向上を阻む支障となっている要素のことです。
                    </p>
                    <em3><a href="https://www.fe-siken.com/">参考・引用：基本情報技術者試験.com</a></em3>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="accbox">
            <h3>第3問　DNS</h3>
            <input type="checkbox" id="0019" class="cssacc" />

            <label for="0019"><span><i class="fas fa-book"></i>READ</span></label>
            <div class="accshow">

              <em3>平成26年春期　問31</em3>
              <p id="feQuestion">TCP/IPネットワークでDNSが果たす役割はどれか。</p>


              <h4>選択肢</h4>
              <table id="feSelection">
                <tr>
                  <td>ア</td>
                  <td>イ</td>
                  <td>ウ</td>
                  <td>エ</td>
                </tr>
                <tr>
                  <td>PCやプリンタなどからのIPアドレス付与の要求に対し，サーバに登録してあるIPアドレスの中から使用されていないIPアドレスを割り当てる。</td>
                  <td>サーバにあるプログラムを，サーバのIPアドレスを意識することなく，プログラム名の指定だけで呼び出すようにする。</td>
                  <td>社内のプライベートIPアドレスをグローバルIPアドレスに変換し，インターネットへのアクセスを可能にする。</td>
                  <td>ドメイン名やホスト名などとIPアドレスとを対応付ける。</td>
                </tr>
              </table>

              <div id="answer">
                答え
                <input type="checkbox" id="0019a" class="cssacc" />

                <label for="0019a"><span>READ</span></label>
                <div class="accshow">

                  <h4>正解</h4>
                  <div class="accbox">
                    <table id="feSelection">
                      <tr>
                        <td>エ</td>
                      </tr>
                      <tr>
                        <td>ドメイン名やホスト名などとIPアドレスとを対応付ける。</td>
                      </tr>
                    </table>
                    <P>TCP/IPを利用したネットワークでは、各ノードを識別するため一意のIPアドレスが割り当てられていますが、このIPアドレスは数字の羅列で人間にとって覚えにくいため、IPアドレスと対応する別名であるドメイン名が付けられています。DNS(Domain Name System)はこのドメイン名とIPアドレスを結びつけて相互変換する(名前解決する)仕組みです。
                      <br><br>
                      アは、DHCP(Dynamic Host Configuration Protocol)の説明です。
                      <br><br>
                      イは、RPC(Remote Procedure Call)の役割です。
                      <br><br>
                      ウは、NAT(Network Address Translation)の説明です。
                    </p>
                    <em3><a href="https://www.fe-siken.com/">参考・引用：基本情報技術者試験.com</a></em3>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="accbox">
            <h3>第4問　ルータの機能</h3>
            <input type="checkbox" id="0020" class="cssacc" />

            <label for="0020"><span><i class="fas fa-book"></i>READ</span></label>
            <div class="accshow">

              <em3>平成16年秋期　問66</em3>
              <p id="feQuestion">ルータの機能に関する記述として，適切なものはどれか。</p>


              <h4>選択肢</h4>
              <table id="feSelection">
                <tr>
                  <td>ア</td>
                  <td>イ</td>
                  <td>ウ</td>
                  <td>エ</td>
                </tr>
                <tr>
                  <td>LAN同土やLANとWANを接続して，ネットワーク層での中継処理を行う。</td>
                  <td>データ伝送媒体上の信号を物理層で増幅して中継する。</td>
                  <td>データリンク層でネットワーク同士を接続する。</td>
                  <td>二つ以上のLANを接続し，LAN上のMACアドレスを参照して，データフレームをほかのセグメントに流すかどうかの判断を行う。</td>
                </tr>
              </table>

              <div id="answer">
                答え
                <input type="checkbox" id="0020a" class="cssacc" />

                <label for="0020a"><span>READ</span></label>
                <div class="accshow">

                  <h4>正解</h4>
                  <div class="accbox">
                    <table id="feSelection">
                      <tr>
                        <td>ア</td>
                      </tr>
                      <tr>
                        <td>LAN同土やLANとWANを接続して，ネットワーク層での中継処理を行う。</td>
                      </tr>
                    </table>
                    <P>ルータはネットワーク同士を接続し、IPアドレスを基にパケットの送信先を決定する機器です。
                      <br><br>
                      イは、リピータの説明です。
                      <br><br>
                      ウは、ブリッジの説明です。
                      <br><br>
                      エは、スイッチングハブの説明です。
                    </p>
                    <em3><a href="https://www.fe-siken.com/">参考・引用：基本情報技術者試験.com</a></em3>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="accbox">
            <h3>第5問　OSI基本参照モデル</h3>
            <input type="checkbox" id="00005" class="cssacc" />

            <label for="00005"><span><i class="fas fa-book"></i>READ</span></label>
            <div class="accshow">

              <em3>平成31年春期　問43</em3>
              <p id="feQuestion">OSI基本参照モデルのネットワーク層で動作し，"認証ヘッダ(AH)"と"暗号ペイロード(ESP)"の二つのプロトコルを含むものはどれか。</p>


              <h4>選択肢</h4>
              <table id="feSelection">
                <tr>
                  <td>ア</td>
                  <td>イ</td>
                  <td>ウ</td>
                  <td>エ</td>
                </tr>
                <tr>
                  <td>IPsec</td>
                  <td>S/MIME</td>
                  <td>SSH</td>
                  <td>XML暗号</td>
                </tr>
              </table>

              <div id="answer">
                答え
                <input type="checkbox" id="00005a" class="cssacc" />

                <label for="00005a"><span>READ</span></label>
                <div class="accshow">

                  <h4>正解</h4>
                  <div class="accbox">
                    <table id="feSelection">
                      <tr>
                        <td>ア</td>
                      </tr>
                      <tr>
                        <td>IPsec</td>
                      </tr>
                    </table>
                    <P>IPsec(IP Security)は、IP(Internet Protocol)を拡張してセキュリティを高めたプロトコルで、改ざんの検知、通信データの暗号化、送信元の認証などの機能をOSI基本参照モデルのネットワーク層レベル(TCP/IPモデルではIP層)で提供します。IPsecを用いれば上層のアプリケーションに依存せずに暗号化通信を行えるため、VPNの構築に利用されます。
                      IPsecはプロトコル群の総称であり、認証、暗号化、鍵交換などの複数のプロトコルを含みます。そのうち、認証を担うプロトコルがAH(Authentication Header)、認証と暗号化を担うプロトコルがESP(Encapsulated Security Payload)です。
                      <br><br>
                      どの規格もデータの暗号化を担いますが、ネットワーク層で動作するのはIPsecだけです。したがって「ア」が正解です。
                      <br><br>
                      イは、Secure MIMEの略。公開鍵暗号技術を使用して「認証」「改ざん検出」「暗号化」などの機能を電子メールソフトに提供する規格です。
                      <br><br>
                      ウは、Secure Shellの略。公開鍵暗号や認証の技術を利用して、安全にリモートコンピュータと通信するためのプロトコルです。
                      <br><br>
                      エ、XML暗号は、XML文書の一部分を暗号化するための規格です。
                    </p>
                    <em3><a href="https://www.fe-siken.com/">参考・引用：基本情報技術者試験.com</a></em3>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="accbox">
            <h3>第6問　エラー埋込法</h3>
            <input type="checkbox" id="00006" class="cssacc" />

            <label for="00006"><span><i class="fas fa-book"></i>READ</span></label>
            <div class="accshow">

              <em3>令和元年秋期　問47</em3>
              <p id="feQuestion">エラー埋込法において，埋め込まれたエラー数をS，埋め込まれたエラーのうち発見されたエラー数をm，埋め込まれたエラーを含まないテスト開始前の潜在エラー数をT，発見された総エラー数をnとしたとき，S，T，m，nの関係を表す式はどれか。</p>


              <h4>選択肢</h4>
              <table id="feSelection">
                <tr>
                  <td>ア</td>
                  <td>イ</td>
                  <td>ウ</td>
                  <td>エ</td>
                </tr>
                <tr>
                  <td>m/S = n-m/T</td>
                  <td>m/S = T/n-m</td>
                  <td>m/S = n/T</td>
                  <td>m/S = T/n</td>
                </tr>
              </table>

              <div id="answer">
                答え
                <input type="checkbox" id="00006a" class="cssacc" />

                <label for="00006a"><span>READ</span></label>
                <div class="accshow">

                  <h4>正解</h4>
                  <div class="accbox">
                    <table id="feSelection">
                      <tr>
                        <td>ア</td>
                      </tr>
                      <tr>
                        <td>m/S = n-m/T</td>
                      </tr>
                    </table>
                    <P>まず4つのエラー数の関係を図示します。
                    <p><img src="gallery/techimg/20210505/エラー数関係図.jpg" alt="エラー数関係図"></p>
                    <br><br>
                    潜在エラーのうちテストで発見されたエラー数は、次の式で表すことができます（下のオレンジ色の部分）。
                    <br><br>
                    発見された総エラー数－埋め込まれたエラーのうち発見されたエラー数
                    ＝n－m
                    <br><br>
                    埋め込まれたエラーの発見率 m/S
                    <br><br>
                    と潜在エラーの発見率 n-m/T
                    <br><br>
                    は同程度と考えられるので、m/S = n-m/T の関係式が成り立ちます。
                    </p>
                    <em3><a href="https://www.fe-siken.com/">参考・引用：基本情報技術者試験.com</a></em3>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="accbox">
            <h3>第7問　XML文書</h3>
            <input type="checkbox" id="00007" class="cssacc" />

            <label for="00007"><span><i class="fas fa-book"></i>READ</span></label>
            <div class="accshow">

              <em3>平成30年春期　問8</em3>
              <p id="feQuestion">XML文書のDTDに記述するものはどれか。</p>


              <h4>選択肢</h4>
              <table id="feSelection">
                <tr>
                  <td>ア</td>
                  <td>イ</td>
                  <td>ウ</td>
                  <td>エ</td>
                </tr>
                <tr>
                  <td>使用する文字コード</td>
                  <td>データ</td>
                  <td>バージョン情報</td>
                  <td>文書型の定義</td>
                </tr>
              </table>

              <div id="answer">
                答え
                <input type="checkbox" id="00007a" class="cssacc" />

                <label for="00007a"><span>READ</span></label>
                <div class="accshow">

                  <h4>正解</h4>
                  <div class="accbox">
                    <table id="feSelection">
                      <tr>
                        <td>エ</td>
                      </tr>
                      <tr>
                        <td>文書型の定義</td>
                      </tr>
                    </table>
                    <P>XMLでは、文書作成者が自由に要素名や属性名を付け文章構造を構築することができます。DTD(Document Type Definition)とは、XMLなどのマークアップ言語において文書構造を定義するスキーマ言語の一つです。
                      <br><br>
                      DTDには、記述可能な要素名、属性名や発生順序・発生回数など文書作成のルールを定義でき、XML文書側では文書型宣言"<!DOCTYPE …>"で使用するDTDを指定できます。作成された文書がDTDに適合するかどうかを検証することで、処理の正確性や安全性を高められます。
                      <p><img src="gallery/techimg/20210505/dtd.jpg" alt="DTD　XML文書構造"></p>
                    </p>
                    <em3><a href="https://www.fe-siken.com/">参考・引用：基本情報技術者試験.com</a></em3>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="accbox">
            <h3>第8問　キーバリューストア</h3>
            <input type="checkbox" id="00008" class="cssacc" />

            <label for="00008"><span><i class="fas fa-book"></i>READ</span></label>
            <div class="accshow">

              <em3>平成31年春期　問30</em3>
              <p id="feQuestion">ビッグデータの処理で使われるキーバリューストアの説明として，適切なものはどれか。</p>


              <h4>選択肢</h4>
              <table id="feSelection">
                <tr>
                  <td>ア</td>
                  <td>イ</td>
                  <td>ウ</td>
                  <td>エ</td>
                </tr>
                <tr>
                  <td>"ノード"，"リレーションシップ"，"プロパティ"の3要素によってノード間の関係性を表現する。</td>
                  <td>1件分のデータを"ドキュメント"と呼び，個々のドキュメントのデータ構造は自由であって，データを追加する都度変えることができる。</td>
                  <td>集合論に基づいて，行と列から成る2次元の表で表現する。</td>
                  <td>任意の保存したいデータと，そのデータを一意に識別できる値を組みとして保存する。</td>
                </tr>
              </table>

              <div id="answer">
                答え
                <input type="checkbox" id="00008a" class="cssacc" />

                <label for="00008a"><span>READ</span></label>
                <div class="accshow">

                  <h4>正解</h4>
                  <div class="accbox">
                    <table id="feSelection">
                      <tr>
                        <td>エ</td>
                      </tr>
                      <tr>
                        <td>任意の保存したいデータと，そのデータを一意に識別できる値を組みとして保存する。</td>
                      </tr>
                    </table>
                    <P>個人的には、キーバリューはJavaでMapを使う時に学びました。キーバリューストア(KVS)は、NoSQLで用いられるデータ型の1つです。プログラミングで使用される連想配列のように、1つのキーに1つの値を結びつけてデータを格納します。構造が単純な分、スケーラビリティや処理速度に優れるためビッグデータの処理に使われています。
                      <p><img src="gallery/techimg/20210505/keyValueStore.jpg" alt="キーバリューストア"></p>
                      NoSQLで用いられる他の主要なデータ型についても簡単にまとめておきます。
                      「カラム指向」<br>
                      行キーに対してカラム（名前と値の組み合わせ）を結びつけて格納する
                      「ドキュメント指向」<br>
                      XMLやJSONなどの構造でデータを格納する
                      「グラフ指向」<br>
                      グラフ理論に基づいてデータ間の関係性を表現する
                      <br><br>
                      アは、グラフ型データベースの説明です。
                      <br><br>
                      イは、ドキュメント指向データベースの説明です
                      <br><br>
                      ウは、関係データベースの説明です。
                    </p>
                    <em3><a href="https://www.fe-siken.com/">参考・引用：基本情報技術者試験.com</a></em3>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="accbox">
            <h3>第9問　SIEM</h3>
            <input type="checkbox" id="00009" class="cssacc" />

            <label for="00009"><span><i class="fas fa-book"></i>READ</span></label>
            <div class="accshow">

              <em3>令和元年秋期　問43</em3>
              <p id="feQuestion">SIEM(Security Information and Event Management)の機能はどれか。</p>


              <h4>選択肢</h4>
              <table id="feSelection">
                <tr>
                  <td>ア</td>
                  <td>イ</td>
                  <td>ウ</td>
                  <td>エ</td>
                </tr>
                <tr>
                  <td>隔離された仮想環境でファイルを実行して，C&Cサーバへの通信などの振る舞いを監視する。</td>
                  <td>様々な機器から集められたログを総合的に分析し，管理者による分析と対応を支援する。</td>
                  <td>ネットワーク上の様々な通信機器を集中的に制御し，ネットワーク構成やセキュリティ設定などを変更する。</td>
                  <td>パケットのヘッダ情報の検査だけではなく，通信先のアプリケーショプログラムを識別して通信を制御する。</td>
                </tr>
              </table>

              <div id="answer">
                答え
                <input type="checkbox" id="00009a" class="cssacc" />

                <label for="00009a"><span>READ</span></label>
                <div class="accshow">

                  <h4>正解</h4>
                  <div class="accbox">
                    <table id="feSelection">
                      <tr>
                        <td>イ</td>
                      </tr>
                      <tr>
                        <td>様々な機器から集められたログを総合的に分析し，管理者による分析と対応を支援する。</td>
                      </tr>
                    </table>
                    <P>SIEM(シーム)は、OS、データベース、アプリケーション、ネットワーク機器など多様なソフトウェアや機器が出力する大量のログデータを分析し、異常があった場合に管理者に通知したり対策を知らせたりする仕組みです。日本語ではセキュリティ情報およびイベント管理と訳されます。
                      <br><br>
                      アは、サンドボックス技術を利用した機能です。
                      <br><br>
                      イは、SDN(Software Defined Network)の機能です。
                      <br><br>
                      エは、IPS(侵入防止システム)やWAF(Web Application Firewall)の機能です。SIEMには通信を制御する機能は備わっていません。
                      <br><br>
                    </p>
                    <em3><a href="https://www.fe-siken.com/">参考・引用：基本情報技術者試験.com</a></em3>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="accbox">
            <h3>第10問　SOAP</h3>
            <input type="checkbox" id="00010" class="cssacc" />

            <label for="00010"><span><i class="fas fa-book"></i>READ</span></label>
            <div class="accshow">

              <em3>平成23年秋期　問49</em3>
              <p id="feQuestion">Webサービスを利用するときのSOAPの役割として，適切なものはどれか。</p>


              <h4>選択肢</h4>
              <table id="feSelection">
                <tr>
                  <td>ア</td>
                  <td>イ</td>
                  <td>ウ</td>
                  <td>エ</td>
                </tr>
                <tr>
                  <td>Webサービスのインタフェースを記述して，プログラムからサービスを利用できるようにする。</td>
                  <td>Webサービスの情報を登録しておき，利用者がそのサービスを検索できるようにする。</td>
                  <td>Webサービスの送受信プログラム間で， XML形式のメッセージを受け渡す。</td>
                  <td>Webサービスプログラム間の配信保証や重複防止など，データ転送の信頼性を確保する。</td>
                </tr>
              </table>

              <div id="answer">
                答え
                <input type="checkbox" id="00010a" class="cssacc" />

                <label for="00010a"><span>READ</span></label>
                <div class="accshow">

                  <h4>正解</h4>
                  <div class="accbox">
                    <table id="feSelection">
                      <tr>
                        <td>ウ</td>
                      </tr>
                      <tr>
                        <td>Webサービスの送受信プログラム間で， XML形式のメッセージを受け渡す。</td>
                      </tr>
                    </table>
                    <P>SOAP(ソープ)は、ソフトウェア同士がメッセージを交換する遠隔手続き呼び出し(RPC)のためのプロトコルです。汎用なデータ形式であるXMLに基づいて記述されており、Webサービスにとって有効な手段の一つとなっています。
                      <br><br>
                      AmazonのWebサービスを例にすると、ソフトウェアが商品データを要求するときにXML形式であるSOAPリクエストを発行し、それに対してWebサービス側からも要求に基づいて商品データがSOAPメッセージとしてかえってくという仕組みです。
                      <br><br>
                      アは、WSDL(Web Services Description Language)の説明です。
                      <br><br>
                      イは、UDDI(Universal Description, Discovery and Integration)の説明です。
                      <br><br>
                      エは、WS-RM(Web Services-ReliableMessaging)の説明です。
                    </p>
                    <em3><a href="https://www.fe-siken.com/">参考・引用：基本情報技術者試験.com</a></em3>
                  </div>
                </div>
              </div>
            </div>
          </div> 

          <br>
        </div>  -->


        <!-- id=0016 -->
        <div id="20210504"></div>
        <div class="schedule_wrapper">
          <br>
          <p id="avocado">2021年05月04日 <i class="fas fa-laptop-code"></i>基本情報処理技術者試験</p>
          <h2 id="title">「午後試験」</h2>
          <p><img src="gallery/techimg/20210505/fePm.png" alt="基本情報処理技術者試験の午後試験"></p>

          <div class="accbox">

            <p><img src="gallery/techimg" alt=""></p>

            <input type="checkbox" id="00XX" class="cssacc" />

            <label for="00XX"><span><i class="fas fa-book"></i>READ</span></label>
            <div class="accshow">
              <h3>午後試験の内容は？</h3>
              <p><strong><mark>基本情報処理技術者試験の午後試験の内容は、コンピュータシステム、情報セキュリティ、ソフトウェア設計、開発、マネジメント、ストラテジの範囲で、11問中、5問を選択して、150分で解答します。</mark></strong>
                <br><br>
                以上の範囲で、必須選択は、情報セキュリティ20点、アルゴリズム25点、ソフトウェア開発25点で合計 70点です。
                <br><br>
                ソフトウェア開発のプログラム言語では、COBOLが廃止され、人気高いPythonが追加されました。
                <br><br>
                現在は、C言語，Java，Python，アセンブラ言語，表計算ソフトからの選択制となっています。
                <br><br>
                午後試験の問題数は2019年以前の試験では13問より7問を選択して解答する形式となっていました。
                <br><br>
                2020年の試験からは11問から5問を選択へ変更になり、問題数は減りましたが、ボリュームが増加したため、試験にかかる時間は同等と考えられます。
                <br><br>
                午前試験は、時間が足りないことは、ほぼなく、時間が余るくらいだと思いますが、午後問題では、意識していないとほぼ、時間が足りなくなるでしょう。
                <br><br>
                ちなみに、午後試験は、過去問と同じ問題は出題されません。
                <br><br>
                ただし、基本情報技術者試験の午前、午後の試験範囲は同じです。
                <br><br>
                午前は基礎的な問題、午後はその応用、発展系の問題です。
                <br><br>
                まず、午前試験の対策をしっかり行い、基礎を学んでおけば、午後試験の応用が効くようになるでしょう。
                <br><br>
                ですので、午後試験対策は、午前試験対策の後に行う順序が良いでしょう。
                <br><br>
                午後試験の勉強方法は、午前試験対策をした上で、過去問をじっくり解いて理解することが大切です。
                <br><br>
                午後試験の対策は、eラーニングや書物での勉強も良いですし、<a href="https://www.fe-siken.com/">基本情報処理技術者試験ドットコム</a>を利用するのも良いでしょう。
                <br><br>
                午後試験は、一つの問題が長く集中力が必要なので、何度か解いて、問題型式に慣れておきたいところです。
              </p>
            </div>
          </div>
          <br>
        </div>


        <!--テンプレート id=0015 -->
        <div id="20210503"></div>
        <div class="schedule_wrapper">
          <br>
          <p id="avocado">2021年05月03日 <i class="fas fa-laptop-code"></i>基本情報処理技術者試験</p>
          <h2 id="title">「午前試験　ストラテジ系」</h2>


          <div class="accbox">

            <p><img src="gallery/techimg/20210430/strategyGroup.png" alt="基本情報処理技術者試験のストラテジ系"></p>

            <input type="checkbox" id="0015" class="cssacc" />

            <label for="0015"><span><i class="fas fa-book"></i>READ</span></label>
            <div class="accshow">
              <h3>午前試験「ストラテジ系」とは？</h3>
              <p><strong><mark>基本情報処理技術者試験の午前試験「ストラテジ系」とは、システム戦略、企画や企業活動や法務まで含めた分野です。</mark></strong>
                <br><br>
                ストラテジ系の問題は、午前80問中20問が出題されています。
                <br><br>
                著作権などの関連法規やPDCAサイクルなど、企業活動や業務改善に関する問題が出題されています。
                <br><br>
                約50％が過去問題が出題されており、文系出身者やIT業界初心者の方にもわかりやすい分野だと言えます。
                <br><br>
                しかも、ストラテジ系は、過去問題と同テーマで出題される率が増えており、80問中20問出題されることから大きな得点源となります。
                <br><br>
                以下の範囲の中で、決して広くない範囲のため、過去問を繰り返し解くことが大切でしょう。
                <br><br>
                17．システム戦略(情報システム戦略・業務プロセス・ソリューションビジネス・システム活用促進・評価)
                <br><br>
                18．システム企画(システム化計画・要件定義・調達計画・実施)
                <br><br>
                19．経営戦略マネジメント(経営戦略手法・マーケティング・ビジネス戦略と目標・評価・経営管理システム)
                <br><br>
                20．技術戦略マネジメント(技術開発戦略の立案・技術開発計画)
                <br><br>
                21．ビジネスインダストリ(ビジネスシステム・エンジニアリングシステム・e-ビジネス・民生機器・産業機器)
                <br><br>
                22．企業活動(経営組織論・OR/IE・会計財務)
                <br><br>
                23．法務(知的財産権・セキュリティ関連法規・労働関連/取引関連法規・その他の法律/ガイドライン/技術者倫理・標準化関連)
                <br><br>
                この分野も過去問は、<a href="https://www.fe-siken.com/">基本情報処理技術者試験ドットコム</a>を無料で利用するのが良いでしょう。
              </p>
            </div>
          </div>
          <br>
        </div>



        <!--テンプレート id=0014 -->
        <div id="20210502"></div>
        <div class="schedule_wrapper">
          <br>
          <p id="avocado">2021年05月02日 <i class="fas fa-laptop-code"></i>基本情報処理技術者試験</p>
          <h2 id="title">「午前試験　マネジメント系」</h2>


          <div class="accbox">

            <p><img src="gallery/techimg/20210430/managementGroup.png" alt="基本情報処理技術者試験のマネジメント系"></p>

            <input type="checkbox" id="0014" class="cssacc" />

            <label for="0014"><span><i class="fas fa-book"></i>READ</span></label>
            <div class="accshow">
              <h3>午前試験「マネジメント系」とは？</h3>
              <p><strong><mark>基本情報処理技術者試験の午前試験「マネジメント系」とは、品質マネジメントやサービスの設計などの組織やチームが永続的に発展するために不可欠な要素の分野です。</mark></strong>
                <br><br>
                午前試験では、80問中、以下のテーマから10問出題されます。
                <br><br>
                14．プロジェクトマネジメント(プロジェクトマネジメント・統合マネジメント・ステークホルダマネジメント・スコープマネジメント・タイムマネジメント・コストマネジメント・品質マネジメント・資源マネジメント・コミュニケーションマネジメント・リスクマネジメント・調達マネジメント)
                <br><br>
                15．サービスマネジメント(サービスマネジメント・サービスの設計/移行・サービスマネジメントプロセス・サービスの運用・ファシリティマネジメント)
                <br><br>
                16．システム監査(システム監査・内部統制)
                <br><br>
                以上の通り、範囲は狭いですが、システム開発の進捗管理やソフトウェアの品質管理などで用いられるPDCAサイクルなど、用語を知らないと解答できないことが多いでしょう。
                <br><br>
                予測で解答できてしまうこともありますが、覚えれば解答できるので、さらっと一通り過去問をやっておいた方が良いでしょう。
                <br><br>
                過去問は、<a href="https://www.fe-siken.com/">基本情報処理技術者試験ドットコム</a>を無料で利用するのが良いでしょう。
              </p>
            </div>
          </div>
          <br>
        </div>





        <!--テンプレート id=0013 -->
        <div id="20210501"></div>
        <div class="schedule_wrapper">
          <br>
          <p id="avocado">2021年05月01日 <i class="fas fa-laptop-code"></i>基本情報処理技術者試験</p>
          <h2 id="title">「午前試験　テクノロジ系」</h2>


          <div class="accbox">

            <p><img src="gallery/techimg/20210430/technologyGroup.png" alt="基本情報処理技術者試験のテクノロジ系"></p>

            <input type="checkbox" id="0013" class="cssacc" />

            <label for="0013"><span><i class="fas fa-book"></i>READ</span></label>
            <div class="accshow">
              <h3>午前試験「テクノロジ系」とは？</h3>
              <p><strong><mark>基本情報処理技術者試験の「テクノロジ系」とは、アルゴリズムとプログラミング、ハードウェア、ソフトウェアなど、他分野より出題数が多い技術的な分野です。</mark></strong>
                <br><br>
                このテクノロジ系で、正答率が高ければ、かなり合格に近づけます。
                <br><br>
                範囲は広いですが、約70％は過去問題と同じものが出題される傾向にあります。
                <br><br>
                以下の、13のテーマから午前80問中の50問が出題されます。
                <br><br>
                1．基礎理論(離散数学・応用数学・情報理論・通信理論・計測制御理論)
                <br><br>
                2．アルゴリズムとプログラミング(データ構造・アルゴリズム・プログラミング・プログラム言語・マークアップ言語など)
                <br><br>
                3．コンピュータ構成要素(プロセッサ・メモリ・バス・入出力デバイス・入出力装置)
                <br><br>
                4．システム構成要素(システムの構成・システム評価指標)
                <br><br>
                5．ソフトウェア(オペレーティングシステム・ミドルウェア・ファイルシステム・開発ツール・オープンソースソフトウェア)
                <br><br>
                6．ハードウェア(ハードウェア全般)
                <br><br>
                7．ヒューマンインターフェイス(ヒューマンインターフェイス技術・インターフェイス設計)
                <br><br>
                8．マルチメディア(マルチメディア技術・マルチメディア応用)
                <br><br>
                9．データベース(データベース方式・データベース設計・データ操作・トランザクション処理・データベース応用)
                <br><br>
                10．ネットワーク(ネットワーク方式・データ通信と制御・通信プロトコル・ネットワーク管理・ネットワーク応用)
                <br><br>
                11．セキュリティ(情報セキュリティ・情報セキュリティ管理・セキュリティ技術評価・情報セキュリティ対策・セキュリティ実装技術)
                <br><br>
                12．システム開発技術(システム要件定義・システム方式設計・ソフトウェア要件定義・ソフトウェア方式設計・ソフトウェア詳細設計・ソフトウェア構築・ソフトウェア結合/ソフトウェア適格性確認テスト・システム結合/システム適格性確認テスト・導入・受入支援・保守・廃棄)
                <br><br>
                13．ソフトウェア開発管理技術(開発プロセス手法・知的財産適用管理・開発環境管理・構成管理・変更管理)
                <br><br>
                プログラミングやエンジニアを経験している人なら、イメージしやすい問題が多いですが、初心者がイメージするのはなかなか難しいんじゃないかと思える問題も出てきます。
                <br><br>
                ただ、多くは、過去問と同じものがでますので、答えを覚えてしまえば、解答できてしまいます。
                <br><br>
                過去問は、<a href="https://www.fe-siken.com/">基本情報処理技術者試験ドットコム</a>を無料で利用するのが良いでしょう。
                <br><br>
                それでも、過去問を覚えるだけでは、本当の意味で基本情報処理技術者とは言えません。
                <br><br>
                しっかりと基本を身に着けておくためには、基本情報処理技術者試験受験者の中では有名ですが、<a href="https://www.amazon.co.jp/dp/B08PPJPZ4V/ref=dp_kinw_strp_1">「キタミ式イラストIT塾 基本情報技術者」</a>などの書物を読むことが望まれます。
              </p>
            </div>
          </div>
          <br>
        </div>



        <!-- id=0011 -->
        <div id="20210430"></div>
        <div class="schedule_wrapper">
          <br>
          <p id="avocado">2021年04月30日 <i class="fas fa-laptop-code"></i>基本情報処理技術者試験</p>
          <h2 id="title">「基本情報処理技術者試験」</h2>


          <div class="accbox">

            <p><img src="gallery/techimg/20210430/FE.png" alt="基本情報処理技術者試験"></p>

            <input type="checkbox" id="0011" class="cssacc" />

            <label for="0011"><span><i class="fas fa-book"></i>READ</span></label>
            <div class="accshow">
              <h3>”基本情報処理技術者試験”とは？</h3>
              <p><img src="gallery/techimg/20210430/infoTable.jpg" alt="情報処理技術者試験の区分"></p>
              <em3>写真：情報処理技術者試験の区分</em3>
              <p><strong><mark>「基本情報処理技術者試験」とは「情報処理の促進に関する法律第29条第1項」に基づき、経済産業大臣が行う国家試験「情報処理技術者試験」の1つです。</strong></mark>
                <br><br>
                多くは、SE（システムエンジニア）やPG（プログラマー）などのIT技術を提供する人、そこに関連する、しようとしている人を対象とした試験です。
                <br><br>
                同じ国家試験の「ITパスポート試験」がレベル1だとすると、「基本情報技術者試験」はレベル2の位置づけであり、合格することでIT力の向上が望めます。
                <br><br>
                新型コロナの影響で最近は人数が減っているようですが、年間10万人以上が受験する人気のあります。
                <br><br>
                合格率は、約25%と、IT関連の仕事をしている人でも、ある程度しっかり勉強して挑む必要があるレベルです。
                <br><br>
                そして、学校でプログラミング必修化されたことや日本のIT化遅れも相まって、今後の日本の課題となっているIT化を進めていくためにも「基本情報処理技術者試験」は取っておきたい資格です。
              </p>

              <h3>”基本情報処理技術者試験”の午後と午前とは？</h3>
              <p><img src="gallery/techimg/20210430/ampmInfo.jpg" alt="基本情報処理技術者試験の午前と午後"></p>

              <p><strong><mark>「基本情報技術者試験」は、「午前試験」と「午後試験」に分かれています。</strong></mark>
                <br><br>
                一般的に言う「昼前の午前」「昼後の午後」とは違います。
                <br><br>
                午前試験と午後試験は時間帯の違いではなく、問題内容や型式の違いがあります。
                <br><br>
                午前、午後とともに、150分間の試験で、合計すると300分(5時間)もあります。
                <br><br>
                午前は、テクノロジ系50問（ハードウェアからプログラミング・アルゴリズムなど、IT技術や計算に関する問題）とマネジメント系10問（運営、サービスマネジメント、システム監査などに関する問題）、ストラテジ系20問（経営戦略マネジメント、システム戦略、企画、企業活動などに関する問題）の合計80問の構成です。
                <br><br>
                午後は、コンピュータシステム、情報セキュリティ、データ構造及びアルゴリズム、ソフトウェア開発、マネジメント、ストラテジの範囲から長文の大問形式です。
                <br><br>
                2020年から、プログラミング言語「Python」の追加され、出題数と解答数が、11問の出題から5問を選択して解答する形式に変更されました。
                <br><br>
                また、「COBOL（コボル）」の問題はなくなりました。
                <br><br>
                プログラミング言語の中でも、人気上昇中のPythonが、もう古くなったCOBOLと入れ替わった形となっています。
                <br><br>
                また、午後は、2020年データ構造及びアルゴリズム、ソフトウェア開発の配点が合計50点に増えました。
                <br><br>
                やはり、プログラミングと密接に関連のある分野で、プログラミングに関する知識への重要度が高まっています。
              </p>
              <h3>”CBT方式”とは？</h3>
              <p>
                令和2年度から、「基本情報技術者試験」（FE）は、CBT（Computer Based Testing）方式により実施しています。
                <br><br>
                <strong><mark>CBT方式とは、簡単に言うと、試験会場へ行き、パソコンを使って受験する方式です。</strong></mark>
                <br><br>
                問題用紙やマークシートを用いる筆記試験とは異なります。
                <br><br>
                受験者はパソコンに表示される問題を、マウスやキーボードを使って解答します。
                <br><br>
                また、スピーキング問題がある場合は、マイクを使って解答します。
                <br><br>
                CBT方式を使えば、受験者の利便性を上げられます。
                <br><br>
                受験者は、試験日時や試験会場が指定されるわけではなく、受験者自身が日時や会場を選ぶため、受験機会が格段に増えます。
                <br><br>
                自宅の近くの会場で、自分の好きなタイミングで受験できることがCBT方式の大きなメリットと言えるでしょう。
              </p>
              <h3>”基本情報処理技術者試験”の料金と申し込み方法は？</h3>

              <p><strong><mark>”基本情報処理技術者試験”の受験手数料は、5,700円（税込み）です。</strong></mark>
                <br><br>
                支払い方法は、クレジットカード決済、ペイジー（Pay-easy）による払込み、コンビニ利用による払込みの3つがあります。
                <br><br>
                <strong><mark>申し込み方法は、インターネットでの申し込みのみです。</strong></mark>
                <br><br>
                インターネットでの申し込みは、プロメトリックが管理する<a href="http://pf.prometric-jp.com/testlist/fe/index.html">ページ</a>から、申し込みができます。
                <br><br>
                午前と午後は、それぞれ同じ日でも、別の日でも受けることが可能ですが、受験可能な期間が異なりますので予約する際に注意が必要です。
              <p><img src="gallery/techimg/20210430/scheduleInfo.jpg" alt="基本情報処理技術者試験の予約"></p>
              また、始めてプロメトリックのページを利用する場合は、プロメトリックIDを新規取得してから予約する必要があります。
              <br><br>
              申込みの順序にかかわらず、午前と午後はどちらを先に受験しても問題はありません。
              <br><br>
              それぞれ、試験期間内において、同一試験の申込みは1回のみです。
              </p>

              <h3>IT関連職を目指すなら”基本情報処理技術者試験”を受けてみよう！</h3>
              <p>
                既にシステムエンジニアやプログラマーなどのIT関連職であれば、「ITパスポート」を受験するよりも、「基本情報処理技術者試験」を取得した方が実用的だと言えます。
                <br><br>
                ただ、IT関連職になりたい人や、IT関連未経験であれば、先に「ITパスポート」を取得するのが良いでしょう。
                <br><br>
                「ITパスポート」は、50%ほどの合格率のIT社会への第一歩的な国家資格です。
                <br><br>
                「ITパスポート」を取得してから、「基本情報処理技術者試験」を取得するのが順序良いですが、内容が似ている部分があることと、受験期間や料金を考慮すると、最初から「基本情報処理技術者試験」を受験することも良いでしょう。
                <br><br>
                いずれにせよ、「基本情報処理技術者試験」は、合格率は25%程で、出題範囲が広く、情報処理に関係ないと思われる範囲も含まれていますので、しっかりと勉強して挑むべきでしょう。
                <br><br>
                <strong><mark>「基本情報技術者試験」はIT業界への登竜門的存在とも言える国家資格でしょう。</strong></mark>
              </p>
            </div>
          </div>
          <br>
        </div>


        <!--id=0010 -->
        <div id="20210314"></div>
        <div class="schedule_wrapper">
          <br>
          <p id="avocado">2021年03月14日 <i class="fas fa-laptop-code"></i>jQuery</p>
          <h2 id="title">「スクロールイベント・フェードイン」</h2>


          <div class="accbox">

            <p><video id="technicaldiary" src="gallery/techimg/20210314/Slide in animation0314_Trim.mp4" controls poster=""></video></p>

            <input type="checkbox" id="0010" class="cssacc" />

            <label for="0010"><span><i class="fas fa-book"></i>READ</span></label>
            <div class="accshow">
              <h3>”スクロールイベント”とは？</h3>
              <p>前回の②「スクロールトップ/アニメーション」で紹介したjQueryのscrollTopを応用した内容です。
                <br><br>
                <strong><mark>”スクロールイベント”とは、画面を上下左右に移動させたときに起きることです。</strong></mark>
                <br><br>
                WEBサイトの画面を下にスクロールした場合、ある位置まで移動すると、文字や画像を表示させたいときなどに使います。
                <br><br>
                また、WEBサイトを閲覧しているとコンテンツに動きがあるため、より印象的なWEBサイトになります。
                <br><br>
                ですが、”スクロールイベント”はやりすぎると、鬱陶しい印象になりかねないです。
                <br><br>
                本サイトも若干やりすぎてる感があります。
                <br><br>
                実装コードを下に記載したので、試してみてください。
                <br><br>
              <p class="codepen" data-height="356" data-theme-id="dark" data-default-tab="html,result" data-user="hiyuma" data-slug-hash="LYbaGem" style="height: 356px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Slide in Animation1">
                <span>See the Pen <a href="https://codepen.io/hiyuma/pen/LYbaGem">
                    Slide in Animation1</a> by MARC JACOBS (<a href="https://codepen.io/hiyuma">@hiyuma</a>)
                  on <a href="https://codepen.io">CodePen</a>.</span>
              </p>
              <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
              <br><br>
              スクロールすると下から画像が現れてくるようにプログラミングしています。
              <br><br>
              常に表示されているWEBサイトよりも動きがあるため、モダンな印象を与えることができます。
              </p>
              <h3>”フェードイン”とは？</h3>
              <p>
                <strong><mark>”フェードイン”とは、画面が徐々に明るくなり、映像が見えてくる表現のことです。</strong></mark>
                <br><br>
                ここで、言う”フェードイン”とは、jQueryとCSSを利用したものです。
                <br><br>
                jQueryには、”fadeIn()”や”slideUp()”などのメソッドがありますが、今回は利用していません。
                <br><br>
                CSSの方が、動作が軽い場合が多く、WEBサイトの読み込みの邪魔をしません。
                <br><br>
                上記のCSSコードで「.animation」と「.active」に記述してある通りです。
                <br><br>
                ”opacity: 0;”で、初期状態は表示なし、スクロールされ座標を取得して「.active」”opacity: 1;”になると表示されます。
                <br><br>
                ”transition: 2s;”は、表示されるまで2秒ということで、
                <br><br>
                ”transform: translateY(30px);”は、Y軸(縦)の座標位置どこからアニメーションを始めるかを指定します。
              </p>
              <h3>”オフセット(offset)”とは？</h3>
              <p>前回同様、今回もjQueryの”offset()”メソッドを使っています。
                <br><br>
                ”offset()”とは、対象要素の左上部分と、画面左上の起点との距離を取得します。
                <br><br>
                画面トップへ戻る時や、スクロールイベントでよく使われるメソッドです。
                <br><br>
              <pre class="prettyprint linenums">var target = $(this).offset().top;</pre>
              <br><br>
              上記のように、対象の座標を取得します。
              <br><br>
              別の話になりますが、最初、"this"を上手く使うことができず、使いこなせるまで時間がかかりました。
              <br><br>
              話は戻って、".top"は、Y座標、".left"だとX座標を取得します。
              <br><br>
              <pre class="prettyprint linenums">var offset = $(this).offset({top: 4000, left: 500});</pre>
              <br><br>
              また、上記のように、topとleftを入れて、指定の場所(上記の場合は、y座標4000/x座標500)へ移動させることもできます。
              </p>
              <h3>色々な方向からフェードイン、フェードアウトできる</h3>
              <p>
                <br><br>
                jQueryの記述をまとめると以下のようになります。
                <br><br>
              <pre class="prettyprint linenums">var target = $(this).offset().top;
            //スクロール量を取得
            var scroll = $(window).scrollTop();
            //ウィンドウの高さを取得
            var height = $(window).height();
            //もし、スクロールが対象から高さを引いた数値よりも大きければ、"active"クラスを付与
            //つまり、対象までスクロールされたら、"active"クラスを付与
            if (scroll > target - height) {
            $(this).addClass("active");</pre>
              <br><br>
              今回は、下からフェードインするアニメーション効果を実装しましたが、CSSを変えるだけで、上からでも左右からでもフェードインさせることもできます。
              <br><br>
              例えば、フェードイン前がX軸”translateX(-300px)”で、フェードイン後が"translateX(0)"とすると、
              <br><br>
              <p class="codepen" data-height="306" data-theme-id="dark" data-default-tab="html,result" data-user="hiyuma" data-slug-hash="eYBXzNX" style="height: 306px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Slide in Animation2">
                <span>See the Pen <a href="https://codepen.io/hiyuma/pen/eYBXzNX">
                    Slide in Animation2</a> by MARC JACOBS (<a href="https://codepen.io/hiyuma">@hiyuma</a>)
                  on <a href="https://codepen.io">CodePen</a>.</span>
              </p>
              <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
              <br><br>
              と、上のようにx軸-300px(左)からフェードインします。
              <br><br>
              y軸とx軸の数字を変えるだけで、色々な方向からフェードイン、または、フェードアウトもできます。
              <br><br>
              アニメーション効果の時間は”transition”の数字を変更するだけです。
              <br><br>
              ただ、あまりやりすぎると逆効果になりますので、使いすぎに注意です。
              </p>
            </div>
          </div>
          <br>
        </div>



        <!-- id=0009 -->
        <div id="20210228"></div>
        <div class="schedule_wrapper">
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
              値は、WEBサイトの座標で、例えば”scrollTop( 800 )”なら、座標800(ページ1番上が基準0で下へ800の場所)へスクロールさせます。
              <br><br>
              省略した場合は、HTML要素の位置を取得することになります。
              <br><br>
              "scrollTop"記述方法は、様々あります。
              <br><br>
              まず、プログラムされていない場合を確認しておきます。
              <br><br>
              例で記述したHTMLの「For example」や「一番上へスクロール」を押すと、下の”Result”のように動作します。
              <br><br>
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
              <br><br>

              <p class="codepen" data-height="265" data-theme-id="dark" data-default-tab="html,result" data-user="hiyuma" data-slug-hash="dyOmOaP" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Scroll Top / Animation Example">
                <span>See the Pen <a href="https://codepen.io/hiyuma/pen/dyOmOaP">
                    Scroll Top / Animation Example</a> by MARC JACOBS (<a href="https://codepen.io/hiyuma">@hiyuma</a>)
                  on <a href="https://codepen.io">CodePen</a>.</span>
              </p>
              <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
              <br>
              アニメーション効果があった方が、”今”を生きている感じがします。(?)
              <br><br>
              アニメーションのスクロールスピードは、以下の”1500ms”のように指定できます。
              <pre class="prettyprint linenums">speed = 1500;</pre>
              <br><br>
              もちろん、僕が上記に記述したみたいに、わざわざ変数に格納しなくても使えます。
              <br><br>
              そして、本サイトのTOPへ戻る「▲」ボタンを座標150以上(一番上から座標150まで表示させない)例を記述してみました。
              <br><br>
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
        </div>


        <!-- id=0008 -->
        <div id="20210221"></div>
        <div class="schedule_wrapper">
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
        </div>


        <!-- id=0007 -->
        <div id="20210218"></div>
        <div class="schedule_wrapper">
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
        </div>

        <!-- id=0006 -->
        <div id="20210214"></div>
        <div class="schedule_wrapper">
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
              しかし、現在(2021年2月14日)では、Googleは”XMLサイトマップ”を参考・引用にしているため、”HTMLサイトマップ”は、SEO施策としての効果はないと言われているのです。
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
        </div>

        <!-- id=0004 -->
        <div id="20210210"></div>
        <div class="schedule_wrapper">
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
        </div>

        <!-- id=0005 -->
        <div id="20210209"></div>
        <div class="schedule_wrapper">
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
        </div>


        <!-- id=0003 -->
        <div id="20210208"></div>
        <div class="schedule_wrapper">
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
        </div>


        <!-- id=0002 -->
        <div id="20210206"></div>
        <div class="schedule_wrapper">
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
        </div>

        <div id="20210205"></div>
        <div class="schedule_wrapper">
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
        </div>
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