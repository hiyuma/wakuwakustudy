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
              

              <?php include('parts/info.php'); ?>
              <?php include('parts/menuList.php'); ?>


              <div id="article">
                     <ul class="map slide-in-animation">
                            <div id="news" class="line">NEWS <i class="far fa-newspaper"></i></div>

                            <i class="fas fa-angle-double-right"></i><a href="https://www.nikkei.com/">※日本経済新聞</a>
                            <p><img src="gallery/新型コロナウイルス撲滅.png" alt="新型コロナウイルス撲滅ロゴ"></p>
                            <p>
                                   <em3><i class="fas fa-angle-double-right"></i><a href="https://vdata.nikkei.com/newsgraphics/coronavirus-world-map/" target="blank" ※>新型コロナウイルス感染　世界マップ</a>
                                   </em3>
                                   <br>
                                   <img src="gallery/世界感染マップ.jpg" alt="新型コロナウイルス世界感染マップ" target="blank">
                            </p>
                            <p>
                                   <em3><i class="fas fa-angle-double-right"></i><a href="https://vdata.nikkei.com/newsgraphics/coronavirus-japan-chart/" target="blank">※チャートで見る日本の感染状況　新型コロナウイルス※</a>
                                   </em3>
                                   <br>
                                   <img src="gallery/東京グラフ.jpg" alt="東京都の1日の感染者数グラフ">
                            </p>

                     </ul>

                     <ul class="news slide-in-animation">
                            <div class="line">新型コロナウイルス <i class="fas fa-virus-slash"></i></div>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG026OW0S1A200C2000000/" target="blank" rel="noopener">
                            知っておきたいコロナワクチン接種　手順や副作用は？</a></li><br>


                                   <!-- 2021年03月XX日
                                   <li><i class="far fa-file-alt"></i><a
                                          href="" target="blank" rel="noopener">
                                          </a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="" target="blank" rel="noopener">
                                          </a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="" target="blank" rel="noopener">
                                          </a></li>
                                   <hr> -->

                                   2021年03月01日
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODG0142G0R00C21A3000000/" target="blank" rel="noopener">
                                          東京都、新たに121人感染　新型コロナ</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQOGD010YZ0R00C21A3000000/" target="blank" rel="noopener">
                                          日経平均一時700円高　荒れる相場は「三寒四温」</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQOHC263X90W1A220C2000000/" target="blank" rel="noopener">
                                          「緊急事態」6府県解除初日　飲食店「街に活気戻って」</a></li>
                                   <hr>

                                   2021年02月28日
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODG281DA0Y1A220C2000000/" target="blank" rel="noopener">
                                          東京都、新たに329人感染　新型コロナ</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQOFB270MB0X20C21A2000000/" target="blank" rel="noopener">
                                          緊急事態解除の6府県、時短要請は夜9時までに緩和</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQOGN2703K0X20C21A2000000/" target="blank" rel="noopener">
                                          米で初の1回接種ワクチン承認　J&J、年10億人分供給へ</a></li>
                                   <hr>
                                   2021年02月27日
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODG271UX0X20C21A2000000/" target="blank" rel="noopener">
                                          東京都、新たに337人感染　新型コロナ</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQOFB245160U1A220C2000000/" target="blank" rel="noopener">
                                          緊急事態宣言対象外の自治体、観光促進策の再開相次ぐ</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://style.nikkei.com/article/DGXMZO68950480Z00C21A2000000" target="blank" rel="noopener">
                                          コロナワクチン代替策で注目、モノクローナル抗体とは</a></li>
                                   <hr>
                                   2021年02月26日
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODG264MV0W1A220C2000000/" target="blank" rel="noopener">
                                          東京都、新たに270人感染　新型コロナ</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQOGD260TI0W1A220C2000000/" target="blank" rel="noopener">
                                          日経平均急落、終値1202円安　4年8カ月ぶり下げ幅</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODE260IG0W1A220C2000000/" target="blank" rel="noopener">
                                          緊急事態宣言、首都圏除く6府県で月末解除へ　政府方針</a></li>
                                   <hr>
                                   2021年02月25日
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODG2568H0V20C21A2000000/" target="blank" rel="noopener">
                                          東京都、新たに340人感染　新型コロナ</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQOFK174FJ0X10C21A2000000/" target="blank" rel="noopener">
                                          COCOAバグ放置　繰り返された「丸投げ」の実態</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQOGN250DP0V20C21A2000000/" target="blank" rel="noopener">
                                          モデルナ、日本向けワクチン「計画通り」　6月4000万回</a></li>
                                   <hr>
                                   2021年02月24日
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODG242D70U1A220C2000000/" target="blank" rel="noopener">
                                          東京都、新たに213人感染　新型コロナ</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQOFB225G00S1A220C2000000/" target="blank" rel="noopener">
                                          東北各県、観光・飲食店へ支援策　コロナ収束を見据え</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODZ242E70U1A220C2000000/" target="blank" rel="noopener">
                                          武田薬品、米社ワクチン治験開始　21年後半に供給めざす</a></li>
                                   <hr>
                                   2021年02月23日
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODG231IO0T20C21A2000000/" target="blank" rel="noopener">
                                          東京都、新たに275人感染　新型コロナ</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQOFB232SR0T20C21A2000000/" target="blank" rel="noopener">
                                          首都圏4知事、緊急事態宣言の早期解除を要請せず</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODG231Z60T20C21A2000000/" target="blank" rel="noopener">
                                          関西と愛知の4府県、緊急事態解除要請　感染状況改善で</a></li>
                                   <hr>

                                   2021年02月22日
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODG222NR0S1A220C2000000/" target="blank" rel="noopener">
                                          東京都、新たに178人感染　3カ月ぶりの100人台</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODZ210LX0R20C21A2000000/" target="blank" rel="noopener">
                                          緩む自粛効果　ランチ客急増、緊急事態宣言前上回る</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQOHC222RT0S1A220C2000000/" target="blank" rel="noopener">
                                          関西3府県 宣言解除要請へ　「感染対策と経済両立」</a></li>
                                   <hr>

                                   2021年02月21日
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODG210OW0R20C21A2000000/" target="blank" rel="noopener">
                                          東京都、新たに272人感染　新型コロナ</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODE210EJ0R20C21A2000000/" target="blank" rel="noopener">
                                          高齢者ワクチン接種、河野氏「4月は限定的」　供給厳しく</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODZ106BQ0Q1A210C2000000/" target="blank" rel="noopener">
                                          武田や第一三共、コロナワクチン治験へ　国内生産準備</a></li>
                                   <hr>

                                   2021年02月20日
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODG201UL0Q1A220C2000000/" target="blank" rel="noopener">
                                          東京都、新たに327人感染　新型コロナ</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQOGN19DX60Z10C21A2000000/" target="blank" rel="noopener">
                                          ファイザー製ワクチン、1回でも効果　一般冷凍も可能に</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODE201JY0Q1A220C2000000/" target="blank" rel="noopener">
                                          ワクチン接種でじんましん　副作用の疑い、富山の病院</a></li>
                                   <hr>

                                   2021年02月19日
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODG194AI0Z10C21A2000000/" target="blank" rel="noopener">
                                          東京都、新たに353人感染　新型コロナ</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQOHC181QI0Y1A210C2000000/" target="blank" rel="noopener">
                                          大阪府「2月末で緊急事態解除を」　3府県で来週協議</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODE18CIO0Y1A210C2000000/" target="blank" rel="noopener">
                                          ワクチン第2便は45万回分　地方に計234万回分計画</a></li>
                                   <hr>

                                   2021年02月18日
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODG184MC0Y1A210C2000000/" target="blank" rel="noopener">
                                          東京都、新たに445人感染　新型コロナ</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODB130MZ0T10C21A2000000/" target="blank" rel="noopener">
                                          コロナワクチン承認、「日本人データ」で遅れ</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODF124K50S1A210C2000000/" target="blank" rel="noopener">
                                          コロナ宿泊施設、利用3割どまり　自宅療養増に拍車</a></li>
                                   <hr>

                                   2021年02月17日
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODG172JW0X10C21A2000000/" target="blank" rel="noopener">
                                          東京都、新たに378人感染　新型コロナ</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODG164BB0W1A210C2000000/" target="blank" rel="noopener">
                                          コロナワクチン、国内接種開始　医師ら4万人先行</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQOFK107S60Q1A210C2000000/" target="blank" rel="noopener">
                                          COCOA重大バグ放置　厚労省のずさんなテスト実態</a></li>
                                   <hr>

                                   2021年02月16日
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODG163XA0W1A210C2000000/" target="blank" rel="noopener">
                                          東京都、新たに350人感染　新型コロナ</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQOGM151IE0V10C21A2000000/" target="blank" rel="noopener">
                                          ワクチン後もコロナは消えない</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODF163IK0W1A210C2000000/" target="blank" rel="noopener">
                                          日銀総裁「先行きなお慎重」　ワクチン浸透でも気緩めず</a></li>
                                   <hr>

                                   2021年02月15日
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODG152FU0V10C21A2000000/" target="blank" rel="noopener">
                                          東京都、新たに266人感染　新型コロナ</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQOGH12CEI0S1A210C2000000/" target="blank" rel="noopener">
                                          日経平均3万円、主役は外国人・日銀　個人に恩恵薄く</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQOMH09CY90Z00C21A2000000/" target="blank" rel="noopener">
                                          確定申告16日スタート　コロナ下、今年も期限延長</a></li>
                                   <hr>

                            2021年02月14日
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODG141MR0U1A210C2000000/" target="blank" rel="noopener">
                                          東京都、新たに371人感染　新型コロナ</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODB133110T10C21A2000000/" target="blank" rel="noopener">
                                          新型コロナワクチン「1瓶6回」対応注射器　米でも混乱</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODF12D0U0S1A210C2000000/" target="blank" rel="noopener">
                                          ファイザー製ワクチン承認、有効性を確認　17日接種へ</a></li>
                                   <hr>

                            2021年02月13日
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODG131L50T10C21A2000000/" target="blank" rel="noopener">
                                          東京都、新たに369人感染　新型コロナ</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQOFK015KL0R00C21A2000000/" target="blank" rel="noopener">
                                          JR東海「ずらし旅」好調　コロナ禍でブランド再構築</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODG029TV0S1A200C2000000/" target="blank" rel="noopener">
                                          さらば不幸な廃業　コロナでどん底、倒産体験糧に再起</a></li>
                                   <hr>

                            2021年02月12日
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODG1248Y0S1A210C2000000/" target="blank" rel="noopener">
                                          東京都、新たに307人感染　新型コロナ</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODG1222B0S1A210C2000000/" target="blank" rel="noopener">
                                          ファイザーのワクチン、日本に到着</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODJ0117L0R00C21A2000000/" target="blank" rel="noopener">
                                          「巣ごもり」でキウイ急増、バナナも堅調　20年輸入果実</a></li>
                                   <hr>

                            2021年02月11日
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODG111WM0R10C21A2000000/" target="blank" rel="noopener">
                                          東京都、新たに434人感染　新型コロナ</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODG10CL30Q1A210C2000000/" target="blank" rel="noopener">
                                          「ワクチン接種へ医療負荷軽減を」　厚労省助言組織</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQOGR10F0M0Q1A210C2000000/" target="blank" rel="noopener">
                                          ドイツ、3月7日までロックダウン延長　変異株警戒</a></li>
                                   <hr>

                            2021年02月10日
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODG103JF0Q1A210C2000000/" target="blank" rel="noopener">
                                          東京都、新たに491人感染　新型コロナ</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODE103U90Q1A210C2000000/" target="blank" rel="noopener">
                                          来週半ばにワクチン接種開始　首相が明言</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODZ095Z90Z00C21A2000000/" target="blank" rel="noopener">
                                          変異型特定のPCR試薬　ロシュ、日本で商業用発売</a></li>
                                   <hr>

                            2021年02月09日
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODG091MV0Z00C21A2000000/" target="blank" rel="noopener">
                                          東京都、新たに412人感染　新型コロナ</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODF091K60Z00C21A2000000/" target="blank" rel="noopener">
                                          ワクチン1瓶あたりの接種回数、6回から5回に変更 ファイザー製　対応の注射器、確保間に合わず</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODG017SH0R00C21A2000000/" target="blank" rel="noopener">
                                          コロナ差別、条例で防げ　20超の自治体が制定</a></li>
                                   <hr>

                            2021年02月08日
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODG083CU0Y1A200C2000000/" target="blank" rel="noopener">
                                          東京都、新たに276人感染　新型コロナ</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQOGM081LP0Y1A200C2000000/" target="blank" rel="noopener">
                                          南ア、英アストラゼネカ製ワクチンの接種停止へ</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODZ251FQ0V20C21A1000000/" target="blank" rel="noopener">
                                          コロナ禍で「自由時間増えた」4人に1人　民間調査</a></li>
                                   <hr>
                            2021年02月07日
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODG070YP0X00C21A2000000/" target="blank" rel="noopener">
                                          東京都、新たに429人感染　新型コロナ</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQOGM070L50X00C21A2000000/" target="blank" rel="noopener">
                                          南ア変異ウイルスに低い効果か、アストラゼネカワクチン</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQOFP277F40X20C21A1000000/" target="blank" rel="noopener">
                                          在宅勤務、社員の「心のケア」へ企業動く</a></li>
                                   <hr>
                            2021年02月06日
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODG061S70W1A200C2000000/" target="blank" rel="noopener">
                                          東京都、新たに639人感染　新型コロナ</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODG043BN0U1A200C2000000/" target="blank" rel="noopener">
                                          手作りチョコは「大丈夫？」　コロナ下のバレンタイン</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQOGR0601W0W1A200C2000000/" target="blank" rel="noopener">
                                          WHO　他社のワクチン生産、製薬会社に呼びかけ</a></li>
                                   <hr>
                            2021年02月05日
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODG0521Z0V00C21A2000000/" target="blank" rel="noopener">
                                          東京都、新たに577人感染　新型コロナ</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQOGG011970R00C21A2000000/" target="blank" rel="noopener">
                                          見てわかる変異ウイルス　新型コロナ、感染力増も</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODG053530V00C21A2000000/" target="blank" rel="noopener">
                                          抗体保有は東京で0.91%、依然低く　コロナで厚労省調査</a></li>
                                   <hr>

                            2021年02月04日
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODG043BP0U1A200C2000000/" target="blank" rel="noopener">
                                          東京都、新たに734人感染　新型コロナ</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQOGR03E3L0T00C21A2000000/" target="blank" rel="noopener">
                                          変異ウイルス対応ワクチン、開発相次ぐ　英グラクソなど</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXKZO68785140T00C21A2TCS000/" target="blank" rel="noopener">
                                          コロナワクチン 日本の課題</a></li>
                                   <hr>

                            2021年02月03日
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODG033RB0T00C21A2000000" target="blank" rel="noopener">
                                          東京都、新たに676人感染　新型コロナ</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQOGM032SH0T00C21A2000000" target="blank" rel="noopener">
                                          ワクチン接種加速にもたつくバイデン政権</a></li>
                                   <li><i class="far fa-file-alt"></i><a
                                          href="https://www.nikkei.com/article/DGXZQODZ033CT0T00C21A2000000" target="blank" rel="noopener">
                                          東京ディズニー、午前10時開園に　1時間遅く</a></li>
                                   <hr>

                                   2021年02月02日
                            <li><i class="far fa-file-alt"></i><a
                                   href="https://www.nikkei.com/article/DGXZQODG023W50S1A200C2000000" target="blank" rel="noopener">
                                   東京都、新たに556人感染　新型コロナ</a></li>
                            <li><i class="far fa-file-alt"></i><a
                                   href="https://style.nikkei.com/article/DGXMZO68103500T10C21A1000000" target="blank" rel="noopener">
                                   存在感高まるChromebook　教育向け躍進、シェア24％へ</a></li>
                            <li><i class="far fa-file-alt"></i><a
                                   href="https://www.nikkei.com/article/DGXZQODE01A1P0R00C21A2000000" target="blank" rel="noopener">
                                   緊急事態延長、政府が提示　10都府県で3月7日まで</a></li>
                            <hr>

                            2021年02月01日
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG011L30R00C21A2000000/" target="blank" rel="noopener">
                            東京都、新たに393人感染　新型コロナ</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOFK255520V20C21A1000000/" target="blank" rel="noopener">
                                          実感遠い99%脱ハンコ　改革阻む「三権分立」の壁</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOFK283Z50Y1A120C2000000/" target="blank" rel="noopener">
                                          在宅勤務の苦悩　サイボウズは脱「リモハラ」に10年</a></li>
                            <hr>

                            2021年01月31日
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG311ND0R30C21A1000000/" target="blank" rel="noopener">
                                          東京都、新たに633人感染　新型コロナ</a></li>
                            <li><i class="far fa-file-alt"></i><a href="nikkei.com/article/DGXZQODZ29A510Z20C21A1000000/" target="blank" rel="noopener">
                                          仮想現実、コロナ禍で脚光　「X Reality」まとめ読み</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOGH227L50S1A120C2000000/" target="blank" rel="noopener">
                                          年金抑制、コロナの影　増額へ長く働く選択肢</a></li>
                            <hr>

                            2021年01月30日
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG301U90Q1A130C2000000/" target="blank" rel="noopener">
                                          東京都、新たに769人感染　新型コロナ</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOGN26BZ60W1A120C2000000/" target="blank" rel="noopener">
                                          米J&Jのワクチン、接種1回で有効性66%　近く申請</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOFB2084E0Q1A120C2000000/" target="blank" rel="noopener">
                                          有力ホテルの廃業・休館相次ぐ　需要回復見通せず</a></li>
                            <hr>

                            2021年01月29日
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG292QP0Z20C21A1000000/" target="blank" rel="noopener">
                                          東京都、新たに868人感染　新型コロナ</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG296XP0Z20C21A1000000/" target="blank" rel="noopener">
                                          1都3県、休業要請検討　緊急事態宣言延長なら</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZASFL29HNU_Z20C21A1000000/" target="blank" rel="noopener">
                                          新浪氏、日本経済「コロナ政府支援策の先がカギ」　景気討論会</a></li>
                            <hr>

                            2021年01月28日
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG281KI0Y1A120C2000000" target="blank" rel="noopener">
                                          東京都、新たに1064人感染　新型コロナ</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOFK265C70W1A120C2000000" target="blank" rel="noopener">
                                          武漢封鎖1年、大規模ワクチン接種に見た光と影</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOGD281PC0Y1A120C2000000" target="blank" rel="noopener">
                                          エムスリー大幅安　金融緩和に懐疑の芽、株高バブル警戒</a></li>
                            <hr>

                            2021年01月27日
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG275IK0X20C21A1000000" target="blank" rel="noopener">
                                          東京都、新たに973人感染　新型コロナ</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODE274ZU0X20C21A1000000" target="blank" rel="noopener">
                                          ワクチン接種証明、入場制限への活用「慎重に」　厚労相</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG2741I0X20C21A1000000" target="blank" rel="noopener">
                                          新型コロナワクチン接種で合同訓練　厚労省と川崎市</a></li>
                            <hr>

                            2021年01月26日
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG2623T0W1A120C2000000" target="blank" rel="noopener">
                                          東京都、新たに1026人感染　新型コロナ</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGKKZO68513630W1A120C2EAF000" target="blank" rel="noopener">
                                          モデルナ 変異種対応ワクチン治験 追加接種向け2種類</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODZ253490V20C21A1000000" target="blank" rel="noopener">
                                          ノートPCの出荷最多894万台　20年25%増、学校向け好調</a></li>
                            <hr>

                            2021年01月25日
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG252LQ0V20C21A1000000" target="blank" rel="noopener">
                                          東京都、新たに618人感染　新型コロナ</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOGM2531A0V20C21A1000000" target="blank" rel="noopener">
                                          欧州でワクチン供給遅れ　ファイザー削減、反発広がる</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGKKZO68477550V20C21A1EAF000" target="blank" rel="noopener">
                                          米感染 2500万人超す 死者41万人、収束見通せず</a></li>
                            <hr>

                            2021年01月24日
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG241620U1A120C2000000" target="blank" rel="noopener">
                                          東京都、新たに986人感染　新型コロナ</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOGG21BTC0R20C21A1000000" target="blank" rel="noopener">
                                          新型コロナ　高齢男性はなぜ重症化しやすいのか</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODF226DU0S1A120C2000000" target="blank" rel="noopener">
                                          コロナワクチン接種を一元管理　マイナンバー連携で</a></li>
                            <hr>

                            2021年01月23日
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG231VU0T20C21A1000000" target="blank" rel="noopener">
                                          東京都、新たに1070人感染　新型コロナ</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODB125BQ0S1A110C2000000" target="blank" rel="noopener">
                                          重症者施設2割で専門医ゼロ　首都圏、コロナ入院困難</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG229HI0S1A120C2000000" target="blank" rel="noopener">
                                          英国変異種、東京都内で経路不明の感染を初確認</a></li>
                            <hr>


                            2021年01月22日
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG223SB0S1A120C2000000" target="blank" rel="noopener">
                                          東京都、新たに1175人感染　新型コロナ</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODE219M40R20C21A1000000" target="blank" rel="noopener">
                                          「6月までに確保」を削除　河野氏、ワクチン接種で</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG05BX30V00C21A1000000" target="blank" rel="noopener">
                                          20年の自殺者2万919人　11年ぶり増加、コロナ影響か</a></li>
                            <hr>

                            2021年01月21日
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG213E30R20C21A1000000" target="blank" rel="noopener">
                                          東京都、新たに1471人感染　新型コロナ</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG210TE0R20C21A1000000" target="blank" rel="noopener">
                                          「IOC、東京五輪中止せず」　最古参のパウンド委員</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODE210DH0R20C21A1000000" target="blank" rel="noopener">
                                          首相、ワクチン「3.1億回分確保」　参院代表質問</a></li>
                            <hr>

                            2021年01月20日
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG205YY0Q1A120C2000000" target="blank" rel="noopener">
                                          東京都、新たに1274人感染　新型コロナ</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODE206910Q1A120C2000000" target="blank" rel="noopener">
                                          首相、ワクチン接種「一日も早い開始へ努力」</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOGD184X60Y1A110C2000000" target="blank" rel="noopener">
                                          電通、本社ビル売却検討　国内最大級の3000億円規模 コロナ禍でオフィス改革広がる</a></li>
                            <hr>

                            2021年01月19日
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG194P20Z10C21A1000000" target="blank" rel="noopener">
                                          東京都、新たに1240人感染　新型コロナ</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG1929L0Z10C21A1000000" target="blank" rel="noopener">
                                          「鼻出しマスク」49歳受験生を逮捕　不退去容疑で警視庁</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODE191310Z10C21A1000000" target="blank" rel="noopener">
                                          河野規制改革相、ワクチン「一日も早い接種に全力」</a></li>
                            <hr>

                            2021年01月18日
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG1847I0Y1A110C2000000" target="blank" rel="noopener">
                                          東京都、新たに1204人感染　新型コロナ</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODZ123340S1A110C2000000" target="blank" rel="noopener">
                                          医師の9割集うエムスリー、コロナで存在感　時価総額3倍</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODE184Q00Y1A110C2000000" target="blank" rel="noopener">
                                          首相、緊急事態「早急に脱却」　施政方針演説</a></li>
                            <hr>

                            2021年01月17日
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG171CY0X10C21A1000000" target="blank" rel="noopener">
                                          東京都、新たに1592人感染　新型コロナ</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOGM157JF0V10C21A1000000" target="blank" rel="noopener">
                                          中国・武漢封鎖から1年　なお各地で都市封鎖</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG15DJI0V10C21A1000000" target="blank" rel="noopener">
                                          新型コロナ体験　匿名でSNS発信　「誰かの役に」</a></li>
                            <hr>
                            2021年01月16日
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG161TV0W1A110C2000000" target="blank" rel="noopener">
                                          東京都、新たに1809人感染　新型コロナ</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOGN15EWP0V10C21A1000000" target="blank" rel="noopener">
                                          世界のコロナ死者、200万人超に　変異種への警戒強まる</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODZ1458G0U1A110C2000000" target="blank" rel="noopener">
                                          緊急事態宣言で「減収」7割　社長100人アンケート</a></li>
                            <hr>

                            2021年01月15日
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG1547M0V10C21A1000000" target="blank" rel="noopener">
                                          東京都、新たに2001人感染確認　新型コロナ</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOFK123VN0S1A110C2000000" target="blank" rel="noopener">
                                          「リモート初詣」で参拝客130倍　住職がサイト構築</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODF1335A0T10C21A1000000" target="blank" rel="noopener">
                                          ハンドドライヤー禁止は正解か　経団連、問われる検証力</a></li>
                            <hr>

                            2021年01月14日
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG1449M0U1A110C2000000" target="blank" rel="noopener">
                                          東京都、新たに1502人感染　新型コロナ</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG14C5E0U1A110C2000000" target="blank" rel="noopener">
                                          感染源、洗面所の蛇口か　都営大江戸線の集団コロナ</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOGN140800U1A110C2000000" target="blank" rel="noopener">
                                          コロナ下で好調ウォルマート、CEO「デジタルが追い風」</a></li>
                            <hr>

                            2021年01月13日
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG134C20T10C21A1000000" target="blank" rel="noopener">
                                          東京都、新たに1433人感染 新型コロナ</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODE133RW0T10C21A1000000" target="blank" rel="noopener">
                                          緊急事態宣言、7府県を追加　諮問委が政府案を了承</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOGN12CY00S1A110C2000000" target="blank" rel="noopener">
                                          米、ワクチン1回目接種を拡大　高齢者向けに2回目分放出</a></li>
                            <hr>

                            2021年01月12日
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG121VT0S1A110C2000000" target="blank" rel="noopener">
                                          東京都、新たに970人感染　新型コロナ</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOFD111FS0R10C21A1000000" target="blank" rel="noopener">
                                          愛知と岐阜に緊急事態宣言発令へ　知事「厳しい状況」</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODE121BI0S1A110C2000000" target="blank" rel="noopener">
                                          首相、東京五輪「必ずやりきる」　ビル・ゲイツ氏と電話</a></li>
                            <hr>

                            2021年01月11日
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG111660R10C21A1000000" target="blank" rel="noopener">
                                          東京都、新たに1219人感染　重症131人で過去最多に</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODE210BH0R21C20A2000000" target="blank" rel="noopener">
                                          「在宅勤務定着を」56%　コロナで管理職は労働時間増 郵送世論調査</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODF07A940X00C21A1000000" target="blank" rel="noopener">
                                          政府、不特定多数にPCR　繁華街などで感染状況把握</a></li>
                            <hr>

                            2021年01月10日
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG101770Q1A110C2000000" target="blank" rel="noopener">
                                          東京都、新たに1494人感染　新型コロナ</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODE093W40Z00C21A1000000" target="blank" rel="noopener">
                                          首相、緊急事態宣言の関西拡大「数日状況みる」 飲食店取引先への給付金、検討表明</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG1021Q0Q1A110C2000000" target="blank" rel="noopener">
                                          新たなコロナ変異株を確認　ブラジルから入国の4人</a></li>
                            <hr>
                            2021年01月09日
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG092070Z00C21A1000000" target="blank" rel="noopener">
                                          東京都、新たに2268人感染　新型コロナ</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOGM090QG0Z00C21A1000000" target="blank" rel="noopener">
                                          中国、人口1000万都市封鎖　河北省の省都</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOGR08F4O0Y1A100C2000000" target="blank" rel="noopener">
                                          ロンドン市長「制御不能」　英コロナ死者1日で最多1300人</a></li>
                            <hr>
                            2021年01月08日
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG082750Y1A100C2000000" target="blank" rel="noopener">
                                          東京都、新たに2392人感染　新型コロナ</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG073390X00C21A1000000" target="blank" rel="noopener">
                                          2度目の緊急事態、静かに始動　通勤の混雑「通常通り」</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOHC080QK0Y1A100C2000000" target="blank" rel="noopener">
                                          大阪府、緊急事態宣言要請を決定</a></li>
                            <hr>

                            2021年01月07日
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG073DG0X00C21A1000000" target="blank" rel="noopener">
                                          東京都のコロナ感染、新たに2447人確認　過去最多を更新</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODE071LI0X00C21A1000000" target="blank" rel="noopener">
                                          首相、1都3県に緊急事態宣言　8日から2月7日まで</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOGD072XG0X00C21A1000000" target="blank" rel="noopener">
                                          米KKR系、日本で不良債権投資　コロナ禍で増加見込む</a></li>
                            <hr>

                            2021年01月06日
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG0627W0W1A100C2000000" target="blank" rel="noopener">
                                          東京都で1278人感染　新型コロナ、重症者最多の111人</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOGM061070W1A100C2000000" target="blank" rel="noopener">
                                          コロナ最悪の時はこれから、迅速な対策を 変異種の拡大を抑えるために新たなロックダウンが必要</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODE060RR0W1A100C2000000" target="blank" rel="noopener">
                                          緊急事態宣言発令、7日に決定　首相が関係閣僚と詰め</a></li>
                            <hr>

                            2021年01月05日
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG0541B0V00C21A1000000" target="blank" rel="noopener">
                                          東京都で1278人感染　新型コロナ、重症者最多の111人</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOGS045YN0U1A100C2000000" target="blank" rel="noopener">
                                          タイ、首都で夜間外食禁止　コロナで非常事態宣言延長へ</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODE051VU0V00C21A1000000" target="blank" rel="noopener">
                                          緊急事態宣言を7日決定方針、首相表明　1カ月程度想定 1都3県対象「コロナ最優先」</a></li>
                            <hr>

                            2021年01月04日
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG043IC0U1A100C2000000" target="blank" rel="noopener">
                                          東京都、新たに884人感染　重症者は最多の108人</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODE020UP0S1A100C2000000" target="blank" rel="noopener">
                                          緊急事態宣言を再発令へ　首相が検討表明、1都3県対象「限定的に、集中的に」</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODE041PC0U1A100C2000000" target="blank" rel="noopener">
                                          ワクチン接種開始、首相「2月下旬で準備」</a></li>
                            <hr>

                            2021年01月03日
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG031BA0T00C21A1000000" target="blank" rel="noopener">
                                          東京都で新たに816人感染　新型コロナ、重症者100人超</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOFB254WN0V21C20A2000000" target="blank" rel="noopener">
                                          東京郊外へ移住じわり　都心100キロ圏内に関心</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG261XS0W0A221C2000000" target="blank" rel="noopener">
                                          コロナが変えた社会　「ドキュメント日本」セレクション</a></li>
                            <hr>

                            2021年01月02日
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG021250S1A100C2000000" target="blank" rel="noopener">
                                          東京都、新たに814人感染　新型コロナ</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG020FR0S1A100C2000000" target="blank" rel="noopener">
                                          1都3県、緊急事態宣言を要請　経財相「厳しい状況」</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOGN0124J0R00C21A1000000" target="blank" rel="noopener">
                                          コロナ感染、米で2000万人超　加州で変異種まん延も</a></li>
                            <hr>

                            2021年01月01日
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG011490R00C21A1000000" target="blank" rel="noopener">
                                          東京都、新たに783人感染　新型コロナ</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOGM010CJ0R00C21A1000000" target="blank" rel="noopener">
                                          WHOが新型コロナワクチン初承認　米ファイザーなどが開発</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG310OS0R31C20A2000000" target="blank" rel="noopener">
                                          コロナとともに明けた新年　異例の元旦、各地の表情</a></li>
                            <hr>
                            2020年12月31日
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG310S00R31C20A2000000" target="blank" rel="noopener">
                                          東京都の新規感染1337人　新型コロナ、最多大幅更新</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOFH093GR0Z01C20A2000000" target="blank" rel="noopener">
                                          世界の景色、コロナで一変　写真で振り返る2020年</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODB1858Z0Y0A211C2000000" target="blank" rel="noopener">
                                          保健所7割、感染予測甘く　コロナ深刻な5都道府県</a></li>
                            <hr>

                            2020年12月30日
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG292HD0Z21C20A2000000" target="blank" rel="noopener">
                                          東京都、新たに944人感染　新型コロナ</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOGD300Y00Q0A231C2000000" target="blank" rel="noopener">
                                          コロナに揺れた日経平均　2020年、値幅1万1015円</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOGH106A80Q0A211C2000000" target="blank" rel="noopener">
                                          「ワクチン後進国」招いた医療行政の病理</a></li>
                            <hr>

                            2020年12月29日
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG291DZ0Z21C20A2000000" target="blank" rel="noopener">
                                          東京都、新たに856人感染　重症84人は緊急宣言後最多（12月29日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG25B3E0V21C20A2000000" target="blank" rel="noopener">
                                          まさかの延期　コロナに揺れた「五輪イヤー」（12月29日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODZ25B5T0V21C20A2000000" target="blank" rel="noopener">
                                          帰省に観光、動けぬ国内　GoTo停止で消費3000億円減も（12月29日）</a></li>
                            <hr>
                            2020年12月28日
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG283UG0Y0A221C2000000" target="blank" rel="noopener">
                                          東京都で新たに481人の感染確認　新型コロナ（12月28日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODB225TI0S0A221C2000000" target="blank" rel="noopener">
                                          国内の死亡1万4000人減　1～10月、コロナ対策影響か（12月28日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOGR2800U0Y0A221C2000000" target="blank" rel="noopener">
                                          アストラゼネカのワクチン、英で年明けに接種へ（12月28日）</a></li>
                            <hr>


                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG2712V0X21C20A2000000" target="blank" rel="noopener">
                                          東京都、新たに708人感染　新型コロナ（12月27日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOGN264W40W0A221C2000000" target="blank" rel="noopener">
                                          米、1200万人の失業対策失効　追加コロナ対策の成立遅れ（12月27日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOGM270X30X21C20A2000000" target="blank" rel="noopener">
                                          新型コロナ感染、世界8000万人超す　欧米で再拡大（12月27日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG2616T0W0A221C2000000" target="blank" rel="noopener">
                                          東京都、新たに949人感染　新型コロナ（12月26日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO67527970R21C20A2EA8000" target="blank" rel="noopener">
                                          コロナで雇用分断、広がった男女格差　ジャン氏（12月26日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOHC217FK0R21C20A2000000" target="blank" rel="noopener">
                                          「帰省自粛」悩む大学生　友人少なく孤独な年越しも（12月26日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG252RJ0V21C20A2000000" target="blank" rel="noopener">
                                          東京都、新たに884人感染　新型コロナ（12月25日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOGG24D1W0U0A221C2000000" target="blank" rel="noopener">
                                          コロナ変異種、世界で報告相次ぐ　南アで別タイプ流行（12月25日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOFK234EK0T21C20A2000000" target="blank" rel="noopener">
                                          Go Toの裏にある事実、旅行会社の倒産「奇跡の数字」（12月25日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG232AJ0T21C20A2000000" target="blank" rel="noopener">
                                          東京都、新たに748人感染　新型コロナ（12月23日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO67508640Z11C20A2000000" target="blank" rel="noopener">
                                          超短期トレードを返上　コロナ相場で稼いだ1億円（12月23日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOGM231DH0T21C20A2000000" target="blank" rel="noopener">
                                          トランプ氏「恥さらしだ」　コロナ対策法案の修正要求 （12月23日）</a></li>


                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG212QM0R21C20A2000000" target="blank" rel="noopener">
                                          東京都、新たに392人感染　新型コロナ（12月21日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOGG211MT0R21C20A2000000" target="blank" rel="noopener">
                                          新型コロナウイルスに10カ所以上変異、感染力に影響か（12月21日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOFB181DO0Y0A211C2000000" target="blank" rel="noopener">
                                          1都3県コロナ解雇2.5万人　自治体が短期雇用などで支援（12月21日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG201EP0Q0A221C2000000" target="blank" rel="noopener">
                                          東京都、新たに556人感染　新型コロナ（12月20日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODZ117CF0R11C20A2000000" target="blank" rel="noopener">
                                          転職停滞にスキルの壁　コロナ下で10年ぶり減（12月20日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOGR193WX0Z11C20A2000000" target="blank" rel="noopener">
                                          英、ロンドンで3回目都市封鎖　コロナ変異種が感染拡大（12月20日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG1919R0Z11C20A2000000" target="blank" rel="noopener">
                                          東京都、新たに736人感染　新型コロナ（12月19日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOGR18CFD0Y0A211C2000000" target="blank" rel="noopener">
                                          イタリア、年末年始の外出禁止 欧州コロナ封じ込め苦慮（12月19日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOGM191PJ0Z11C20A2000000" target="blank" rel="noopener">
                                          2021年も続くコロナとの闘い（12月19日）</a></li>


                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG184220Y0A211C2000000" target="blank" rel="noopener">
                                          東京都のコロナ新規感染664人　累計5万人超（12月18日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODZ180HR0Y0A211C2000000" target="blank" rel="noopener">
                                          ファイザー、日本でコロナワクチン承認申請　国内初（12月18日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODE187ZG0Y0A211C2000000" target="blank" rel="noopener">
                                          緊急事態宣言の再発令を否定　官房長官（12月18日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG172NU0X11C20A2000000" target="blank" rel="noopener">
                                          東京都で新たに822人感染、連日最多更新　新型コロナ（12月17日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOFB157ZM0V11C20A2000000" target="blank" rel="noopener">
                                          コロナワクチン　都内自治体が準備開始、組織新設など（12月17日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG16C1G0W0A211C2000000" target="blank" rel="noopener">
                                          東京の医療体制、最も深刻な「逼迫」に　独自警報も視野（12月17日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG1653C0W0A211C2000000" target="blank" rel="noopener">
                                          東京都のコロナ感染678人、過去最多を更新（12月16日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/photo/special/article/?ng=DGXZQOFH159WM0V11C20A2000000" target="blank" rel="noopener">
                                          報道写真展、都内で始まる（12月16日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO67202330Q0A211C2970M00" target="blank" rel="noopener">
                                          混迷の時代、コロナで加速　マーティン・ウルフ（12月16日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG153BX0V11C20A2000000" target="blank" rel="noopener">
                                          東京都で新たに460人感染　新型コロナ、重症者78人（12月15日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODZ082OS0Y0A201C2000000" target="blank" rel="noopener">
                                          コロナ新薬、日本勢も着々　抗体や細胞を活用（12月15日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOFK112RX0R11C20A2000000" target="blank" rel="noopener">
                                          アイリスオーヤマ、国産マスク参入が生んだ思わぬ効果（12月15日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG143Z90U0A211C2000000" target="blank" rel="noopener">
                                          東京都、コロナ新規感染305人　重症者は73人（12月14日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOHC1442O0U0A211C2000000" target="blank" rel="noopener">
                                          今年の漢字は「密」、新型コロナ感染拡大で（12月14日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODE144BD0U0A211C2000000" target="blank" rel="noopener">
                                          首相「医師、看護師の処遇倍増」医療研究センターを視察（12月14日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG1318P0T11C20A2000000" target="blank" rel="noopener">
                                          東京都、新たに480人感染　新型コロナ（12月13日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOFB10AXD0Q0A211C2000000" target="blank" rel="noopener">
                                          Go To イート見直し、時短要請…　苦境深まる飲食店（12月13日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOFS130J30T11C20A2000000" target="blank" rel="noopener">
                                          首都圏など「対策に全力」　経財相、GoTo全国停止は否定（12月13日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG121J20S0A211C2000000" target="blank" rel="noopener">
                                          東京都で新たに621人感染、過去最多　新型コロナ（12月12日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOGN100CH0Q0A211C2000000" target="blank" rel="noopener">
                                          米、ファイザーのコロナワクチン承認　接種開始へ（12月12日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG122NN0S0A211C2000000" target="blank" rel="noopener">
                                          国内の新規感染、初めて3000人超す　新型コロナ（12月12日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG114BG0R11C20A2000000" target="blank" rel="noopener">
                                          東京都、新たに595人感染　新型コロナ（12月11日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOGM110970R11C20A2000000" target="blank" rel="noopener">
                                          ニューヨークで看護師スト コロナ下の過酷な勤務に耐えかね（12月11日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG114SP0R11C20A2000000" target="blank" rel="noopener">
                                          感染高止まり地域、飲食店午後8時閉店も　分科会提言（12月11日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG1042T0Q0A211C2000000" target="blank" rel="noopener">
                                          東京都で新たに602人感染　過去最多、新型コロナ（12月10日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOFK022H20S0A201C2000000" target="blank" rel="noopener">
                                          テレワーク効率低い40～50代　若手は冷ややかな目（12月10日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOFC103OU0Q0A211C2000000" target="blank" rel="noopener">
                                          北海道・旭川、医療「綱渡りの状態」　映像で見る（12月10日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG094TK0Z01C20A2000000" target="blank" rel="noopener">
                                          東京都で新たに572人感染　新型コロナ、過去2番目の多さ（12月09日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://vdata.nikkei.com/newsgraphics/coronavirus-vaccine-race/" target="blank" rel="noopener">
                                          コロナワクチン接種始まる　開発レースと3つの課題（12月09日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOGD053330V01C20A2000000" target="blank" rel="noopener">
                                          好調マクドナルド、市場がにらむウィズコロナ次の一手（12月09日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG084O80Y0A201C2000000" target="blank" rel="noopener">
                                          東京都、新たに352人感染　新型コロナ（12月08日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOGR063EM0W0A201C2000000" target="blank" rel="noopener">
                                          英、新型コロナワクチンの接種スタート　米欧で初（12月08日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOGM081NV0Y0A201C2000000" target="blank" rel="noopener">
                                          新型コロナワクチン、「超低温」保管という課題（12月08日）</a></li>


                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG0744Q0X01C20A2000000" target="blank" rel="noopener">
                                          東京都、新たに299人感染　新型コロナ（12月07日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOGM070CH0X01C20A2000000" target="blank" rel="noopener">
                                          米、ワクチン「数日中に許可」　英は8日接種開始（12月07日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOFC071Z80X01C20A2000000" target="blank" rel="noopener">
                                          北海道・大阪府、自衛隊に看護師要請　コロナで医療逼迫（12月07日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQODG060X00W0A201C2000000" target="blank" rel="noopener">
                                          東京都、新たに327人感染　新型コロナ（12月06日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOFE231B30T21C20A1000000" target="blank" rel="noopener">
                                          自宅で受診できる「オンライン診療」ってなに？（12月06日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO67054760V01C20A2EA3000" target="blank" rel="noopener">
                                          コロナで自治体の「貯金」急減　政府、1.5兆円支援へ（12月06日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO67053280V01C20A2CZ8000" target="blank" rel="noopener">
                                          東京都で新たに584人感染確認、最多更新　新型コロナ（12月05日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZQOFE301DW0Q0A131C2000000" target="blank" rel="noopener">
                                          コロナで露呈、ネット接続の壁　障害者ら情報入手に苦慮（12月05日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO67053550V01C20A2AC8Z00" target="blank" rel="noopener">
                                          大阪、綱渡りの医療現場　コロナ患者増「以前と別次元」（12月05日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66998450U0A201C2CC1000" target="blank" rel="noopener">
                                          東京都で新たに449人感染確認　新型コロナ（12月04日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO67041890U0A201C2EA3000" target="blank" rel="noopener">
                                          菅首相会見要旨　コロナ特措法改正「迅速に」（12月04日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO67027230U0A201C2EA1000" target="blank" rel="noopener">
                                          五輪追加経費2940億円　コロナ対策、政府6割負担（12月04日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66950320T01C20A2CC1000" target="blank" rel="noopener">
                                          東京都、新たに533人感染　新型コロナ（12月03日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66964210T01C20A2916M00" target="blank" rel="noopener">
                                          富士フイルム、カナダ企業と米国でアビガンの治験（12月03日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66963920T01C20A2PP8000" target="blank" rel="noopener">
                                          日中韓首脳会談、年内開催見送り　コロナ対策優先（12月03日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66900990S0A201C2CC1000" target="blank" rel="noopener">
                                          東京都で新たに500人感染確認　新型コロナ（12月02日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66884490R01C20A2X13000/" target="blank" rel="noopener">
                                          世界が遠いJ-POP、「会えるアイドル」にコロナの逆風（12月02日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66892740S0A201C2MM0000/" target="blank" rel="noopener">
                                          コロナワクチン接種無料に　改正予防接種法が成立（12月02日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66851400R01C20A2CC1000/" target="blank" rel="noopener">
                                          東京都、新たに372人感染　新型コロナ（12月01日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66862850R01C20A2MM8000/" target="blank" rel="noopener">
                                          GoTo東京、高齢者ら自粛を」　首相が都知事と会談（12月01日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66879470R01C20A2000000/" target="blank" rel="noopener">
                                          コロナで欧米失速懸念　大阪で景気討論会（12月01日）</a></li>


                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66800770Q0A131C2CC1000/" target="blank" rel="noopener">
                                          東京都で新たに311人感染確認　重症は70人に（11月30日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66792530Q0A131C2MM0000/" target="blank" rel="noopener">
                                          五輪コロナ対策費900億円規模　政府中心に負担で調整（11月30日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66711680X21C20A1I00000/" target="blank" rel="noopener">
                                          コロナ検査、定説は変わる　コスパで対策再考を（11月30日）</a></li>


                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66782810Z21C20A1CZ8000" target="blank" rel="noopener">
                                          東京で新たに418人感染確認　新型コロナ（11月29日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66782060Z21C20A1000000" target="blank" rel="noopener">
                                          米国のコロナ感染、初の1日20万人　ロスは外出禁止令（11月29日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66782030Z21C20A1I00000" target="blank" rel="noopener">
                                          英がファイザーのワクチン承認へ　12月7日にも接種、FT報道（11月29日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66775740Y0A121C2CZ8000/" target="blank" rel="noopener">
                                          東京で新たに561人感染確認　新型コロナ、重症者67人（11月28日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66776870Y0A121C2MM8000/" target="blank" rel="noopener">
                                          新規感染2600人超、過去最多を更新　重症者も最多440人（11月28日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66471430Q0A121C2000000/" target="blank" rel="noopener">
                                          iPhone「ウイルス感染」、カレンダー通知攻撃の手口（11月28日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66716550X21C20A1CC1000/" target="blank" rel="noopener">
                                          東京都、最多の570人感染　新型コロナ（11月27日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66702080W0A121C2EA2000/" target="blank" rel="noopener">
                                          コロナ、迫るステージ4　首相「この3週間が重要」（11月27日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66760670X21C20A1EA1000/" target="blank" rel="noopener">
                                          コロナ感染拡大、死者も急増　「医療の質」確保急務（11月27日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66696930W0A121C2FFE000/" target="blank" rel="noopener">
                                          中国ワクチン、足踏み　予防効果が不十分との指摘（11月26日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66666460W0A121C2CC1000/" target="blank" rel="noopener">
                                          東京都で新たに481人感染確認　新型コロナ、重症者60人（11月26日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66685730W0A121C2EN1000/" target="blank" rel="noopener">
                                          「日本株スルー」覆るか　コロナ下、割安感浮き彫り（11月26日）</a></li>


                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66614780V21C20A1CC1000/" target="blank" rel="noopener">
                                          東京都、新たに401人感染　新型コロナ（11月25日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66468940Q0A121C2K14600/" target="blank" rel="noopener">
                                          自宅をオフィスにして籠城　在宅勤務の費用は誰が？（11月25日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66607380V21C20A1MM0000/" target="blank" rel="noopener">
                                          東京都、飲食店に20日間の時短要請　協力金40万円（11月25日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66568050U0A121C2CC1000/" target="blank" rel="noopener">
                                          東京都で新たに186人感染、重症51人に　新型コロナ（11月24日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGKKZO66544680T21C20A1CC1000/" target="blank" rel="noopener">
                                          重症者数、最多331人「第1波」超え 新規感染は1510人（11月24日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66544090T21C20A1MM8000/" target="blank" rel="noopener">
                                          大阪・札幌、GoTo除外へ　大阪は飲食に時短要請方針（11月24日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66542610T21C20A1CZ8000/" target="blank" rel="noopener">
                                          東京都、新たに314人感染　新型コロナ（11月23日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66544680T21C20A1CZ8000/" target="blank" rel="noopener">
                                          コロナ重症者、「第1波」超え最多の331人（11月23日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66544330T21C20A1TJC000/" target="blank" rel="noopener">
                                          大企業スタートアップ投資、4～9月　件数で過去最高（11月23日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66534240S0A121C2CZ8000/" target="blank" rel="noopener">
                                          東京都、新たに391人感染　新型コロナ（11月22日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66529070R21C20A1EA2000/" target="blank" rel="noopener">
                                          GoTo部分制限に転換　対象・時期は知事判断に委ねる（11月22日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66397090Y0A111C2000000/" target="blank" rel="noopener">
                                          驚き、悩み、意気込み…コロナ禍決算 経営者の思い（11月22日）</a></li>


                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66526990R21C20A1CZ8000/" target="blank" rel="noopener">
                                          東京都、新たに539人感染　新型コロナで過去最多更新（11月21日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66523560R21C20A1CE0000/" target="blank" rel="noopener">
                                          「我慢の3連休」始まる　GoTo見直し、旅行者困惑（11月21日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66512050Q0A121C2000000/" target="blank" rel="noopener">
                                          家で楽しもう 東京の紅葉（11月21日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66467080Q0A121C2CC1000/" target="blank" rel="noopener">
                                          東京都、新たに522人感染　新型コロナ（11月20日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66393720Y0A111C2000000/" target="blank" rel="noopener">
                                          コロナ特効薬という市場リスク（高田創） 人生100年こわくない・世界が学ぶニッポンに（11月20日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66363690Y0A111C2I00000/" target="blank" rel="noopener">
                                          コロナ下で生まれる新しい消費と流通　日本の論点2021（11月20日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66403150Z11C20A1MM0000/" target="blank" rel="noopener">
                                          東京都のコロナ新規感染534人　警戒、最高水準に上げ（11月19日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66443260Z11C20A1UU8000/" target="blank" rel="noopener">
                                          国内チームの9%「コロナ陽性者出た」　民間調べ（11月19日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66428650Z11C20A1MM8000/" target="blank" rel="noopener">
                                          国内コロナ新規感染2300人超、2日連続で最多更新（11月19日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66378850Y0A111C2MM8000/" target="blank" rel="noopener">
                                          国内コロナ感染2000人超に　1日あたり最多更新（11月18日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66368880Y0A111C2CC1000/" target="blank" rel="noopener">
                                          東京都のコロナ新規感染493人、過去最多に（11月18日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66393820Y0A111C2916M00/" target="blank" rel="noopener">
                                          ファイザー、コロナワクチン効果95%　緊急許可申請へ 有効性を最終確認、年内にも実用化か（11月18日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66319080X11C20A1CR8000/" target="blank" rel="noopener">
                                          東京都で新たに298人感染確認　新型コロナ（11月17日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66303420X11C20A1000000/" target="blank" rel="noopener">
                                          バイデン氏「コロナの死者増える恐れ」　政権移行遅れで（11月17日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66305880X11C20A1EAF000/" target="blank" rel="noopener">
                                          Google、新型コロナの感染予測を日本で提供（11月17日）</a></li>


                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66268610W0A111C2CC1000/" target="blank" rel="noopener">
                                          東京都で新たに180人感染確認　新型コロナ（11月16日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66284560W0A111C2MM8000/" target="blank" rel="noopener">
                                          首相「イート5人以上対象外」　感染拡大の自治体に提示（11月16日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66294100W0A111C2MM8000/" target="blank" rel="noopener">
                                          新型コロナワクチン、米モデルナが94.5%有効確認（11月16日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66249720V11C20A1CZ8000/" target="blank" rel="noopener">
                                          東京都、新たに255人の感染確認　新型コロナ（11月15日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66155210S0A111C2H11A00/" target="blank" rel="noopener">
                                          「仕事着」はもう買わない　服の選び方コロナで変化（11月15日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGKKZO66241740U0A111C2EA2000/" target="blank" rel="noopener">
                                          感染1715人、3日連続最多 大阪・神奈川など都市部で深刻（11月15日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66241740U0A111C2EA2000/" target="blank" rel="noopener">
                                          国内感染 過去最多の1700人超　新型コロナ（11月14日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66240260U0A111C2CZ8000/" target="blank" rel="noopener">
                                          東京、新たに352人の感染確認　新型コロナ（11月14日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66223910T11C20A1MY1000/" target="blank" rel="noopener">
                                          異常気象の原因か　ウイルス暗躍、温暖化の行方混沌 世界はウイルスでできている（5）（11月14日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66207610T11C20A1CC1000/" target="blank" rel="noopener">
                                          国内の新規感染者数、2日連続で過去最多更新（11月13日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGKKZO66172400T11C20A1MM0000/" target="blank" rel="noopener">
                                          世界新規感染 最多66万人 コロナ、米は2日連続14万人超（11月13日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66210310T11C20A1EA4000/" target="blank" rel="noopener">
                                          「GoToイート」ポイント、近日中に予約終了（11月13日）</a></li>


                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66159290S0A111C2EA2000/" target="blank" rel="noopener">
                                          コロナ「第3波」医療逼迫も　感染ペース第2波並み（11月12日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66131930S0A111C2L83000/" target="blank" rel="noopener">
                                          「住みやすい都市」東京が世界首位に　米経済誌（11月12日）</a></li>


                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66105740R11C20A1CC1000/" target="blank" rel="noopener">
                                          国内感染1500人超　東京で317人、大阪は過去最高（11月11日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66083950R11C20A1000000/" target="blank" rel="noopener">
                                          日経平均29年ぶり高値「中長期投資の海外勢 参入」（11月11日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66083860R11C20A1000000/" target="blank" rel="noopener">
                                          コロナワクチン「90%の有効性」　死角はないのか（11月11日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO6603908010112020CC1000/?n_cid=DSREA001" target="blank" rel="noopener">
                                          東京都、新たに293人感染　新型コロナ（11月10日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66047960Q0A111C2AC8000/" target="blank" rel="noopener">
                                          大阪府、過去2番目の226人感染　吉村知事「第3波」（11月10日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66054470Q0A111C2EA2000/" target="blank" rel="noopener">
                                          コロナワクチン、実用化大詰め　輸送や接種など課題も（11月10日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65989370Z01C20A1CC1000/" target="blank" rel="noopener">
                                          東京都で新たに157人感染確認　新型コロナ（11月09日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65992050Z01C20A1000000/" target="blank" rel="noopener">
                                          北海道で初の200人感染　新型コロナ、1日当たり最多（11月09日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66016210Z01C20A1EA1000/" target="blank" rel="noopener">
                                          米ファイザー、ワクチンの効果9割超に（11月09日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO66014870Z01C20A1EA3000/" target="blank" rel="noopener">
                                          「感染急拡大の恐れ」コロナ分科会、対策徹底を緊急提言（11月09日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65975590Y0A101C2CZ8000/" target="blank" rel="noopener">
                                          東京都で189人の感染確認　新型コロナ（11月08日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65910480W0A101C2CE0000/" target="blank" rel="noopener">
                                          PCR「陽性」基準値巡り議論、日本は厳しめ？（11月08日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65953390W0A101C2000000/" target="blank" rel="noopener">
                                          コロナ禍でも臨場ライブ　NTT西、VRで音楽・演劇配信（11月08日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65965780X01C20A1I00000/" target="blank" rel="noopener">
                                          ワクチン開発、日本の遅れ顕著　体制作り急務 日経・FT感染症会議（11月07日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65965830X01C20A1CZ8000/" target="blank" rel="noopener">
                                          東京都、新たに294人感染　新型コロナ（11月07日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65967860X01C20A1EA3000/" target="blank" rel="noopener">
                                          コロナ対策、ICTで次のパンデミックへ備え 日経・FT感染症会議閉幕（11月07日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65953680W0A101C2CC1000/" target="blank" rel="noopener">
                                          新規感染者2日連続で1000人超　増加基調続く（11月06日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65882860V01C20A1000000/" target="blank" rel="noopener">
                                          台湾コロナ対策　ITとユーモアがカギ オードリー・タン氏　日経・FT感染症会議（11月06日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65915840W0A101C2000000/" target="blank" rel="noopener">
                                          日経平均終値、91年以来の高値 2万4325円（11月06日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65862310V01C20A1CR8000/?n_cid=DSREA001" target="blank" rel="noopener">
                                          東京都で新たに269人感染確認　新型コロナ（11月05日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXLSSXK40533_V01C20A1000000/" target="blank" rel="noopener">
                                          箱根駅伝は予定通り開催　応援自粛を要請、中止の可能性も（11月05日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65869640V01C20A1CR8000/" target="blank" rel="noopener">
                                          国内感染者、8月21日以来の1000人超　北海道で過去最多（11月05日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65811900U0A101C2CC1000/" target="blank" rel="noopener">
                                          東京都、新たに122人感染　新型コロナ（11月04日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65799030U0A101C2MM0000/" target="blank" rel="noopener">
                                          米大統領選、異例の接戦　激戦州で勝敗判明ずれ込み（11月04日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65813980U0A101C2L41000/" target="blank" rel="noopener">
                                          閑散期が繁忙期に？北海道が恐れる「GoToロス」（11月04日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65790340T01C20A1CZ8000/" target="blank" rel="noopener">
                                          東京都で209人の感染確認　新型コロナ（11月03日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65790060T01C20A1MM8000/" target="blank" rel="noopener">
                                          米大統領選、投票始まる　期日前投票は過去最高（11月03日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65791350T01C20A1NN1000/" target="blank" rel="noopener">
                                          中国、日本から渡航「陰性」義務に　PCRと抗体検査で（11月03日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65747440S0A101C2CC1000/" target="blank" rel="noopener">
                                          東京都で新たに87人感染　新型コロナ、20代が最多（11月02日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65703790Q0A031C2QM8000/" target="blank" rel="noopener">
                                          東京の新築オフィス賃料、3年ぶり下落　20年下期（11月02日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65739090S0A101C2MM0000/" target="blank" rel="noopener">
                                          「脱ハンコ」自治体でも加速　働き方改革を後押し（11月02日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65727370R01C20A1CZ8000/" target="blank" rel="noopener">
                                          東京で新たに116人感染　新型コロナ（11月01日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGKKZO65721570R31C20A0CC1000/" target="blank" rel="noopener">
                                          渋谷、仮装控えめのハロウィーン（11月01日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65721450R31C20A0MM8000/" target="blank" rel="noopener">
                                          厚労相「感染情報共有へ法改正」　医療デジタル化も推進（11月01日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65719030R31C20A0CZ8000/" target="blank" rel="noopener">
                                          東京で新たに215人感染　新型コロナ、30代最多の51人（10月31日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65675500Q0A031C2MY1000/" target="blank" rel="noopener">
                                          うつ病と依存症はウイルスが引き金　人類の脳にも革命（10月31日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65719990R31C20A0MM8000/" target="blank" rel="noopener">
                                          米、コロナ新規感染9万9000人　米欧で最多更新（10月31日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65655920Q0A031C2CC1000/" target="blank" rel="noopener">
                                          東京都で新たに204人感染確認　新型コロナ（10月30日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65686980Q0A031C2EA4000/" target="blank" rel="noopener">
                                          GoTo、連泊7泊8日まで　ビジネス利用も除外（10月30日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65644990Q0A031C2000000/" target="blank" rel="noopener">
                                          米、各州で活動制限　コロナ拡大で店内飲食や集会対象（10月30日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65602900Z21C20A0CC1000/" target="blank" rel="noopener">
                                          東京都で新たに221人感染　新型コロナ（10月29日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65610120Z21C20A0CC1000/" target="blank" rel="noopener">
                                          国内感染者10万人突破　地方でもクラスター発生（10月29日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65592370Z21C20A0000000/" target="blank" rel="noopener">
                                          「現金は王様」再び　コロナ警戒、リスク資産に売り（10月29日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65633750Z21C20A0EA2000/" target="blank" rel="noopener">
                                          欧州、コロナ封じに再びカジ　「半世紀で最も深刻」（10月29日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65551580Y0A021C2CC1000/" target="blank" rel="noopener">
                                          東京都、新たに171人感染　新型コロナ（10月28日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65497650X21C20A0XR1000/" target="blank" rel="noopener">
                                          在宅勤務の「燃え尽き」防げ　SlackやZoomが新機能（10月28日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65579860Y0A021C2MM8000/" target="blank" rel="noopener">
                                          企業年金保険、19年ぶり利率下げ　第一生命が0.25%へ（10月28日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65501950X21C20A0CC1000/" target="blank" rel="noopener">
                                          東京都で新たに158人感染確認　新型コロナ（10月27日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65453930W0A021C2000000/" target="blank" rel="noopener">
                                          ANA、最終赤字5100億円　社長「国際線まだ厳しい」決算会見タイムライン（10月27日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65509740X21C20A0PP8000/" target="blank" rel="noopener">
                                          首相「全体みながら判断」　公明がGoTo延長提言（10月27日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65454320W0A021C2CC1000/" target="blank" rel="noopener">
                                          東京都、新たに102人感染　新型コロナ（10月26日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65372870T21C20A0FFV000/" target="blank" rel="noopener">
                                          リモート、社長もできた　大企業トップの働き方改革 働き方innovation　テレワークできてますか(6)（10月26日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65428780U0A021C2EA1000/" target="blank" rel="noopener">
                                          新型コロナ、冬の流行警戒　乾燥で飛沫拡散しやすく（10月26日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65436160V21C20A0CC1000/" target="blank" rel="noopener">
                                          東京都、10月25日の新規感染者は124人　新型コロナ（10月25日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65406030T21C20A0LX0000/" target="blank" rel="noopener">
                                          「コロナと九州・沖縄」変わる働き方 まとめ読み（10月25日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65434810V21C20A0000000/" target="blank" rel="noopener">
                                          世界のコロナ新規感染、再加速　過去最多の50万人超 米で第3波、欧州で再都市封鎖拡大（10月25日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65428430U0A021C2CZ8000/" target="blank" rel="noopener">
                                          東京都で新たに203人感染　新型コロナ（10月24日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65429360U0A021C2EA1000/" target="blank" rel="noopener">
                                          米コロナ新規感染、8.3万人　過去最多に（10月24日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65423760U0A021C2I00000/" target="blank" rel="noopener">
                                          アストラゼネカ、ワクチン治験を世界で再開　新型コロナ（10月24日）</a></li>


                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65369380T21C20A0CC1000/" target="blank" rel="noopener">
                                          東京都で新たに186人感染　新型コロナ（10月23日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://r.nikkei.com/topics/topic_DF_TA_20092900" target="blank" rel="noopener">
                                          CNN「バイデン氏勝利」53%　FOXは「トランプ氏」62%（10月23日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65315340S0A021C2CC1000/" target="blank" rel="noopener">
                                          iPhone12発売　コロナ対策で店頭ひっそり（10月23日）</a></li>


                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65315340S0A021C2CC1000/" target="blank" rel="noopener">
                                          東京都で新たに185人感染確認、新型コロナ（10月22日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65309900S0A021C2000000/" target="blank" rel="noopener">
                                          トランプ氏の経済政策、有権者の評価逆転（10月22日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGKKZO65302330S0A021C2MM0000/" target="blank" rel="noopener">
                                          滞在72時間内 入国容認 政府検討　ビジネス目的、待機免除（10月22日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65266090R21C20A0CC1000/" target="blank" rel="noopener">
                                          東京都のコロナ感染者、新たに150人（10月21日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGKKZO65260690R21C20A0MM0000/" target="blank" rel="noopener">
                                          IT基本法を抜本改正　平井デジタル相 アイサム&トランザム 「日本型モデル示す」（10月21日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65259500R21C20A0000000/" target="blank" rel="noopener">
                                          ANAHDの最終赤字5000億円前後、過去最大　21年3月期（10月21日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65218280Q0A021C2CC1000/" target="blank" rel="noopener">
                                          東京都で新たに139人感染確認　新型コロナ（10月20日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGKKZO65204740Q0A021C2MM0000/" target="blank" rel="noopener">
                                          首相「対コロナ、AI重要」　アイサム&トランザム 経産相、人材教育を後押し（10月20日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65228930Q0A021C2TJ1000/" target="blank" rel="noopener">
                                          オンワード「売らない店」拡大　ネット通販で在庫圧縮（10月20日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65169320Z11C20A0CC1000/" target="blank" rel="noopener">
                                          東京都で新たに78人感染　新型コロナ（10月19日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXKZO65087770W0A011C2M12200/" target="blank" rel="noopener">
                                          尾身茂氏「日本のコロナ対策、今が正念場」（10月19日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65089880W0A011C2TJ1000/" target="blank" rel="noopener">
                                          サブスク成長の陰で国内撤退3割　消費者に「疲れ」も（10月19日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65150620Y0A011C2CC1000/" target="blank" rel="noopener">
                                          東京都で新たに132人感染　新型コロナ、65歳以上22人（10月18日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64760110Y0A001C2000000/" target="blank" rel="noopener">
                                          マイナンバーカード広がる用途　できることを整理した（10月18日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65081630W0A011C2000000/" target="blank" rel="noopener">
                                          コロナ治療薬・ワクチン最前線　スピード開発には注意も（10月18日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65142100X11C20A0CZ8000/" target="blank" rel="noopener">
                                          東京都、235人の新規感染確認　新型コロナ（10月17日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGKKZO65048110V11C20A0MM0000/" target="blank" rel="noopener">
                                          コロナ下 母親に支え　出産、オンライン立ち会い/育児、自治体が悩み相談員（10月17日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65125830W0A011C2MY1000/" target="blank" rel="noopener">
                                          現代人に絶滅人類の遺伝子　ウイルス攻略へ敵か味方か（10月17日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65082060W0A011C2CC1000/" target="blank" rel="noopener">
                                          東京都、新たに184人感染　新型コロナ（10月16日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGKKZO65071720W0A011C2MM0000/" target="blank" rel="noopener">
                                          タクシー、出前に活路　利用者、安心感や輸送量評価　自治体も後押し（10月16日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65130320W0A011C2EA5000/" target="blank" rel="noopener">
                                          レムデシビル、コロナ死亡率減に効果ほぼ無し　WHO（10月16日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65031450V11C20A0CC1000/" target="blank" rel="noopener">
                                          東京都、新たに284人感染　新型コロナ（10月15日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65017210V11C20A0000000/" target="blank" rel="noopener">
                                          欧州が再びコロナ感染の中心に　感染者数、アジア上回る（10月15日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO65017810V11C20A0MM0000/" target="blank" rel="noopener">
                                          タイ政府、5人以上の集会禁止　反体制デモ指導者逮捕（10月15日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64979420U0A011C2CC1000/" target="blank" rel="noopener">
                                          東京都で177人感染確認　新型コロナ（10月14日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64953880T11C20A0X13000/" target="blank" rel="noopener">
                                          中小企業、コロナ対策で業種越え連携　抗菌などに知恵（10月14日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64958200T11C20A0TJ1000/" target="blank" rel="noopener">
                                          大日本印刷、動画で稼ぐ　オンライン診療に「再現力」（10月14日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64933130T11C20A0CC1000/" target="blank" rel="noopener">
                                          東京都のコロナ感染、新たに166人確認（10月13日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64938730T11C20A0LC0000/" target="blank" rel="noopener">
                                          鳥取県、「はんこ廃止」宣言　行政デジタル化を推進（10月13日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64929710T11C20A0XB0000/" target="blank" rel="noopener">
                                          米J&Jコロナワクチン、日本の治験も一時中断（10月13日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64884950S0A011C2CC1000/" target="blank" rel="noopener">
                                          東京都、新たに78人感染　新型コロナ（10月12日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64882040S0A011C2FF2000/" target="blank" rel="noopener">
                                          途上国に債務ドミノ懸念　コロナで急増、G20が救済へ（10月12日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64883950S0A011C2000000/" target="blank" rel="noopener">
                                          GoToトラベル、割引停止や制限相次ぐ　予約サイト（10月12日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64873610R11C20A0CC1000/" target="blank" rel="noopener">
                                          東京都で新たに146人感染　新型コロナ（10月11日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64862130Q0A011C2000000/" target="blank" rel="noopener">
                                          東宝、映画館の全面稼働探る　「鬼滅の刃」試金石に（10月11日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64873250R11C20A0I00000/" target="blank" rel="noopener">
                                          「トランプ氏、コロナ伝染リスクなし」　主治医が見解（10月11日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64865470Q0A011C2CZ8000/" target="blank" rel="noopener">
                                          東京都で新たに249人感染　新型コロナ（10月10日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64817290Z01C20A0SHA000/" target="blank" rel="noopener">
                                          寄付や署名…動く若者　「社会の一員」コロナ禍で実感（10月10日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64839370Z01C20A0TCR000/" target="blank" rel="noopener">
                                          「命か経済か」には解がない　対コロナ医療再考を 編集委員　矢野寿彦（10月10日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64820380Z01C20A0CC1000/" target="blank" rel="noopener">
                                          東京都で新たに203人感染確認　新型コロナ（10月09日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64815820Z01C20A0000000/" target="blank" rel="noopener">
                                          婚姻・離婚届の押印廃止検討　手続きオンライン化推進（10月09日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64828130Z01C20A0EA5000/" target="blank" rel="noopener">
                                          料理宅配員4万人超す　雇用受け皿、外食モデルに転機（10月09日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64770670Y0A001C2CC1000/" target="blank" rel="noopener">
                                          東京都、新たに248人感染　新型コロナ（10月08日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGKKZO64722110X01C20A0MM8000/
                                   " target="blank" rel="noopener">
                                          出張帰国時の待機免除　行動計画提出が条件（10月08日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://r.nikkei.com/topics/topic_DF_TA_20092900" target="blank" rel="noopener">
                                          米CNN調査、勝者「ハリス氏」が59%、ペンス氏は38%（10月08日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64760880Y0A001C2MM0000/" target="blank" rel="noopener">
                                          GoToイートに最低利用料　昼500円、夜1000円（10月08日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64718070X01C20A0CC1000/" target="blank" rel="noopener">
                                          東京都で新たに142人感染確認　新型コロナ（10月07日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64708340X01C20A0EE9000/" target="blank" rel="noopener">
                                          みずほが週休3～4日制　希望者、自分磨く時間に（10月07日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64730940X01C20A0MM8000/" target="blank" rel="noopener">
                                          ANA、希望退職を募集　冬の賞与もゼロに（10月07日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64668810W0A001C2CC1000/" target="blank" rel="noopener">
                                          東京都、新たに177人感染　新型コロナ（10月06日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64678280W0A001C2MM8000/" target="blank" rel="noopener">
                                          書面規制や押印、撤廃へ　年内に政省令改正（10月06日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGKKZO64652410W0A001C2MM0000/" target="blank" rel="noopener">
                                          トランプ氏が退院 コロナ治療は継続 ホワイトハウス7人感染（10月06日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64618000V01C20A0CC1000/" target="blank" rel="noopener">
                                          東京都、新たに66人コロナ感染　7日ぶり100人下回る（10月05日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGKKZO64613680V01C20A0MM0000/" target="blank" rel="noopener">
                                          コロナ対応 住まい変化 三菱地所、テレワーク場所確保/日鉄興和、非接触エレベーター（10月05日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64610820V01C20A0I00000/" target="blank" rel="noopener">
                                          パリが育てた「プレタの旗手」　高田賢三さん（評伝）（10月05日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64621680V01C20A0TJ1000/" target="blank" rel="noopener">
                                          エアアジアが12月に日本撤退　国内航空、コロナ禍で初（10月05日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64595340U0A001C2CC1000/" target="blank" rel="noopener">
                                          東京都で新たに108人感染　新型コロナ（10月04日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64595240U0A001C2NN1000/" target="blank" rel="noopener">
                                          トランプ氏病状、深まる疑問　政権の説明に食い違い（10月04日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64526070S0A001C2K10700/" target="blank" rel="noopener">
                                          東京都で新たに207人感染　新型コロナ（10月04日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64588120T01C20A0CZ8000/" target="blank" rel="noopener">
                                          東京都で新たに207人感染　新型コロナ（10月03日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64587850T01C20A0MM8000/" target="blank" rel="noopener">
                                          トランプ氏、コロナ治療薬を服用　米軍施設に入院（10月03日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64586500T01C20A0MM0000/" target="blank" rel="noopener">
                                          ITが変えるランニング　リモート大会で「密」回避（10月03日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64524430S0A001C2CC1000/" target="blank" rel="noopener">
                                          東京都で新たに196人感染　新型コロナ（10月02日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64513520S0A001C2MM0000/" target="blank" rel="noopener">
                                          完全失業率3.0%に悪化、求人倍率1.04倍に低下　8月統計（10月02日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64521150S0A001C2FF8000/" target="blank" rel="noopener">
                                          トランプ米大統領、新型コロナに感染（10月02日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64471890R01C20A0CC1000/" target="blank" rel="noopener">
                                          東京都で新たに235人感染　新型コロナ（10月01日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64475430R01C20A0000000/" target="blank" rel="noopener">
                                          「GoTo」東京解禁で予約急増　近場のプランが人気（10月01日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64386160Z20C20A9TJ1000/" target="blank" rel="noopener">
                                          さらば「オンライン老け顔」　映える男は薄化粧（10月01日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64416490Q0A930C2CC1000/" target="blank" rel="noopener">
                                          東京都で新たに194人感染　新型コロナ（09月30日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64293430W0A920C2DTA000/" target="blank" rel="noopener">
                                          在宅勤務で株デイトレ　コロナ新常態、個人に勢い（09月30日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64369710Z20C20A9X90000/" target="blank" rel="noopener">
                                          PCR検査どう変わる　ソフトバンクG参入の見方（09月30日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64368240Z20C20A9000000/" target="blank" rel="noopener">
                                          東京都のコロナ感染、新たに212人確認（09月29日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64253280V20C20A9H34A00/" target="blank" rel="noopener">
                                          ユニクロ、学ぶは北欧　コロナ下こそ循環型（09月29日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64367620Z20C20A9000000/" target="blank" rel="noopener">
                                          在宅勤務は法的地雷原になる可能性も（09月29日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64318380Y0A920C2CC1000/" target="blank" rel="noopener">
                                          東京都で新たに78人感染　新型コロナ（09月28日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64239560V20C20A9X11000/" target="blank" rel="noopener">
                                          マンション、コロナ禍で崩れる「都心・駅近」神話（09月28日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64264670V20C20A9FFV000/" target="blank" rel="noopener">
                                          本社・在宅 2択じゃない　「第3の場所」で社員つなぐ（09月28日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64301230X20C20A9CC1000/" target="blank" rel="noopener">
                                          東京都で新たに144人感染　新型コロナ（09月27日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64300350X20C20A9CC1000/" target="blank" rel="noopener">
                                          俳優の竹内結子さんが死亡、自殺か　警視庁（09月27日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64232750V20C20A9HF0A00/" target="blank" rel="noopener">
                                          在宅勤務で拡大　レギンス経済圏に脚光（09月27日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64292800W0A920C2CZ8000/" target="blank" rel="noopener">
                                          東京都で270人感染　新型コロナ、2週間ぶり高水準（09月26日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63920980W0A910C2L83000/" target="blank" rel="noopener">
                                          小池知事、新内閣「コロナ対応連絡しやすい」（09月26日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64255130V20C20A9MM8000/" target="blank" rel="noopener">
                                          首相、五輪開催の決意表明　初の国連演説（09月26日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64185860U0A920C2CC1000/" target="blank" rel="noopener">
                                          東京都で195人感染確認　新型コロナ（09月25日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64223980V20C20A9MM0000/" target="blank" rel="noopener">
                                          テレワークで地方移住、最大100万円補助 政府21年度から（09月25日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64233890V20C20A9EA1000/" target="blank" rel="noopener">
                                          アビガン効果検証大幅遅れ　治験体制、欧米と大差（09月25日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64185860U0A920C2CC1000/" target="blank" rel="noopener">
                                          江戸川区の食品工場で78人感染　都内では195人確認（09月24日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64188000U0A920C2X13000/" target="blank" rel="noopener">
                                          唾液PCR検査、2000円で実施　ソフトバンクG（09月24日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64201560U0A920C2CC1000/" target="blank" rel="noopener">
                                          東京都、1泊5000円上乗せ補助　都民の都内旅行に（09月24日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64132060T20C20A9CC1000/" target="blank" rel="noopener">
                                          東京都、新たに59人感染確認　新型コロナ（09月23日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64124630T20C20A9MM0000/" target="blank" rel="noopener">
                                          全世界から新規入国再開へ　在留資格もつ外国人対象（09月23日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64126950T20C20A9000000/" target="blank" rel="noopener">
                                          富士フイルム、10月にもアビガン承認申請（09月23日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64113000S0A920C2CZ8000/" target="blank" rel="noopener">
                                          東京都の新型コロナ感染、新たに88人（09月22日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64006940Y0A910C2000000/" target="blank" rel="noopener">
                                          コロナ後へ手探りのJAL、ANA　異業種派遣やロボ開発も（09月22日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64111770S0A920C2I00000/" target="blank" rel="noopener">
                                          NYダウ一時900ドル安　市場の催促、届かぬ議会 NY特急便（米州総局　宮本岳則）（09月22日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64104570R20C20A9CZ8000/" target="blank" rel="noopener">
                                          東京都で新たに98人感染　新型コロナ（09月21日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGKKZO64037880Y0A910C2MM8000/" target="blank" rel="noopener">
                                          世界のオフィス一変　郊外に別拠点/「自由席」禁止 在宅勤務浸透で米の新規契約半減（09月21日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64044520Y0A910C2TCR000/" target="blank" rel="noopener">
                                          菅義偉首相の思想と行動　「競争・便益・現実」が3軸（09月21日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64096870Q0A920C2CZ8000/" target="blank" rel="noopener">
                                          東京都で新たに162人感染　新型コロナ（09月20日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://style.nikkei.com/article/DGXMZO63802710U0A910C2000000" target="blank" rel="noopener">
                                          コロナで世界の「歩数」激減　日本は？WHOが対策も（09月20日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGKKZO64092100Z10C20A9MM8000/" target="blank" rel="noopener">
                                          日本の個人マネー、世界株投信に1.6兆円流入 1～8月　海外志向に（09月20日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64089980Z10C20A9CZ8000/" target="blank" rel="noopener">
                                          東京都で新たに218人感染　新型コロナ（09月19日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64088780Z10C20A9000000/" target="blank" rel="noopener">
                                          羽田に戻るにぎわい　4連休初日、ANAはほぼ満席（09月19日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64086540Z10C20A9CE0000/" target="blank" rel="noopener">
                                          コロナ禍の学生生活、川柳に　遠隔授業の悲哀にじむ（09月19日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64021590Y0A910C2CC1000/" target="blank" rel="noopener">
                                          東京都で新たに220人感染　新型コロナ（09月18日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO64007340Y0A910C2DTA000/" target="blank" rel="noopener">
                                          陸空運や外食、19業種が黒字確保の「危険水域」（09月18日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63953730X10C20A9KNTP00/" target="blank" rel="noopener">
                                          職場の雑談が恋しい…　在宅勤務で「つながり係」任命（09月18日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63961080X10C20A9CC1000/" target="blank" rel="noopener">
                                          東京都で新たに171人感染確認　新型コロナ（09月17日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63941930W0A910C2000000/" target="blank" rel="noopener">
                                          新閣僚ってどんな人？　菅内閣20人の横顔（09月17日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63952320X10C20A9CE0000/" target="blank" rel="noopener">
                                          新型コロナで「死」考える　語り合いの場に広がり（09月17日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63906850W0A910C2CC1000/" target="blank" rel="noopener">
                                          東京都で新たに163人感染確認　新型コロナ（09月16日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63896640W0A910C2CE0000/" target="blank" rel="noopener">
                                          終わる都内の時短営業　「お客さんは戻るのか」（09月16日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63915860W0A910C2EE9000/" target="blank" rel="noopener">
                                          外貨建て保険、相次ぐ保険料上げ　世界的金利低下が打撃（09月16日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63855680V10C20A9CC1000/" target="blank" rel="noopener">
                                          東京都、新たに191人感染　重症者は減少（09月15日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63844490V10C20A9MM0000/" target="blank" rel="noopener">
                                          GoTo宿泊1339万人　東京発着も18日から販売（09月15日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63845920V10C20A9PP8000/" target="blank" rel="noopener">
                                          菅氏の人脈、目立つ「構造改革派」　経済優先へ幅広く（09月15日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63802000U0A910C2CC1000/" target="blank" rel="noopener">
                                          東京都で新たに80人感染確認　新型コロナ（09月14日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63801580U0A910C2000000/" target="blank" rel="noopener">
                                          オリエンタルランド、正社員賞与7割減　ダンサー配置転換（09月14日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63818070U0A910C2SHF000/" target="blank" rel="noopener">
                                          ［社説］コロナ危機乗り切りへ挙党体制で（09月14日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63790010T10C20A9CE0000/" target="blank" rel="noopener">
                                          東京都で新たに146人感染　新型コロナ（09月13日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://gooday.nikkei.co.jp/atcl/report/14/091100031/090400702/?waad=KOqJ8ACd" target="blank" rel="noopener">
                                          秋冬コロナ対策　インフルのワクチン接種が重要に（09月13日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://style.nikkei.com/article/DGXKZO63340020S0A900C2W11600" target="blank" rel="noopener">
                                          「COCOA」簡単使い方　新型コロナ陽性者と接触で通知（09月13日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63780250S0A910C2CZ8000/" target="blank" rel="noopener">
                                          東京都で新たに226人感染　新型コロナ（09月12日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63778690S0A910C2000000/" target="blank" rel="noopener">
                                          菅氏「コロナ経済対策に次の手」　総裁選討論会（09月12日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63710730Q0A910C2KNTP00/" target="blank" rel="noopener">
                                          教員が「部屋映せ」　大学、遠隔授業でトラブル多発（09月12日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63727630R10C20A9CR8000/" target="blank" rel="noopener">
                                          東京都で新たに187人感染確認　新型コロナ（09月11日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://r.nikkei.com/article/DGXMZO63358390S0A900C2EA8000?disablepcview=&s=4" target="blank" rel="noopener">
                                          新たな「都市像」描けるか　人口集中から知の集積へ（09月11日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://r.nikkei.com/article/DGXLASFL11HHO_R10C20A9000000?s=4" target="blank" rel="noopener">
                                          小池都知事、GoTo東京追加なら「都内の観光事業の回復に弾み」（09月11日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63674480Q0A910C2CC1000/" target="blank" rel="noopener">
                                          東京都、10日は新たに276人感染　新型コロナ（09月10日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63680370Q0A910C2MM8000/" target="blank" rel="noopener">
                                          タクシー飲食配送10月全面解禁　コロナ特例を恒久化（09月10日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63682420Q0A910C2EA2000/" target="blank" rel="noopener">
                                          東京都、夜10時までの時短営業　15日で終了へ（09月10日）</a></li>


                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63622580Z00C20A9CC1000/" target="blank" rel="noopener">
                                          東京都で新たに149人感染　新型コロナ（09月09日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63626160Z00C20A9MM8000/" target="blank" rel="noopener">
                                          セブン、コンビニ宅配1000店規模　食品など店から直送（09月09日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63630150Z00C20A9EA1000/" target="blank" rel="noopener">
                                          ハイテク株、過熱一転　テスラのオプション9割安（09月09日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63571050Y0A900C2CC1000/" target="blank" rel="noopener">
                                          東京都で新たに170人感染　新型コロナ（09月08日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63583090Y0A900C2EE8000/" target="blank" rel="noopener">
                                          コロナで生産回帰 補助金競争率11倍　マスクや医薬品（09月08日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63533280X00C20A9MM8000/" target="blank" rel="noopener">
                                          世界の稼ぎ頭、コロナで激変　純利益で半導体・IT躍進（09月08日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63523700X00C20A9CC1000/" target="blank" rel="noopener">
                                          東京都、新規感染者77人　2カ月ぶりの70人台（09月07日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63548420X00C20A9EE8000/" target="blank" rel="noopener">
                                          コロナ、内需にも打撃　リーマン時より「悪化」長期化（09月07日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://bizgate.nikkei.co.jp/article/DGXMZO6317505028082020000000/?n_cid=TPRN0002" target="blank" rel="noopener">
                                          コロナうつの職場、パワハラ防ぐ6秒ルール　怒り抑える簡単テク（09月07日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63505500W0A900C2CZ8000/" target="blank" rel="noopener">
                                          東京、新たに116人感染　新型コロナ（09月06日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://r.nikkei.com/article/DGXMZO62882320R20C20A8SHA000?disablepcview=&s=3" target="blank" rel="noopener">
                                          成長の女神 どこへ　コロナで消えた「平和と秩序」（09月06日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://r.nikkei.com/article/DGXMZO63497850V00C20A9MM8000?disablepcview=&s=3" target="blank" rel="noopener">
                                          女性雇用、コロナの逆風　職種転換へ支援急務（09月06日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63497070V00C20A9CZ8000/" target="blank" rel="noopener">
                                          東京都で新たに181人感染確認　新型コロナ（09月05日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63439620U0A900C2PPD000/" target="blank" rel="noopener">
                                          コロナ融資、個人向け無利子も　出費の見直し大前提（09月05日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63495650V00C20A9MM8000/" target="blank" rel="noopener">
                                          菅氏、デジタル庁創設検討へ　黒田日銀総裁の手腕「評価」（09月05日）</a></li>


                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63439050U0A900C2CC1000/" target="blank" rel="noopener">
                                          東京都で新たに136人感染確認　新型コロナ（09月04日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63433120U0A900C2KNTP00/" target="blank" rel="noopener">
                                          会話なくてもつながりたい　ネット通話状態で勉強・仕事（09月04日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63395280T00C20A9M11000/" target="blank" rel="noopener">
                                          増やせぬコロナ検査　日本に4つの課題（09月04日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63388390T00C20A9CC1000/" target="blank" rel="noopener">
                                          東京都で新たに211人感染　新型コロナ（09月03日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63399870T00C20A9916M00/" target="blank" rel="noopener">
                                          JR東日本の終電繰り上げ　東京駅から100キロ圏内対象（09月03日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63387760T00C20A9000000/" target="blank" rel="noopener">
                                          日経平均、終値2万3465円　コロナ前水準回復（09月03日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63336980S0A900C2CC1000/" target="blank" rel="noopener">
                                          東京都で新たに141人感染確認　新型コロナ（09月02日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63332240S0A900C2MM8000/" target="blank" rel="noopener">
                                          コロナワクチン、希望者全員無料に　政府検討（09月02日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGKKZO63329180S0A900C2MM0000/" target="blank" rel="noopener">
                                          五輪会場 貸します（09月02日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63289260R00C20A9CC1000/" target="blank" rel="noopener">
                                          東京都で新たに170人感染　新型コロナ（09月01日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63251960R30C20A8SHA100/" target="blank" rel="noopener">
                                          作業現場でも在宅勤務でも　「複合現実」ゴーグル浸透(09月01日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63280260R00C20A9EE8000/" target="blank" rel="noopener">
                                          厳しい雇用情勢　一段の悪化に警戒感(09月01日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63239630R30C20A8CC1000/" target="blank" rel="noopener">
                                          東京都、31日は新たに100人感染　新型コロナ(08月31日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63250080R30C20A8MM8000/" target="blank" rel="noopener">
                                          パソナ、本社機能を淡路島に　東京集中の弊害回避(08月31日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63266530R30C20A8EE9000/" target="blank" rel="noopener">
                                          銀行の規制緩和・DX推進　金融庁、コロナ対策で方針(08月31日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63222900Q0A830C2CZ8000/" target="blank" rel="noopener">
                                          東京都の30日の新規感染は148人　新型コロナ(08月30日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://r.nikkei.com/article/DGXMZO63213720Z20C20A8EA2000?disablepcview=&s=3" target="blank" rel="noopener">
                                          コロナ、107カ国で抑制傾向　米・ブラジルなど過半(08月30日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63216810Z20C20A8EA2000/" target="blank" rel="noopener">
                                          「あと1年」葛藤した首相　持病悪化、遠のくレガシー(08月30日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63214860Z20C20A8CZ8000/" target="blank" rel="noopener">
                                          東京都、新たに247人感染　新型コロナ(08月29日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGKKZO63210510Z20C20A8NNE000/" target="blank" rel="noopener">
                                          コロナ危機「さらに深刻」 メルケル首相が警告(08月29日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63110220X20C20A8TJM000/" target="blank" rel="noopener">
                                          コロナウイルス対策の換気、国基準では不十分(08月29日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63157340Y0A820C2CC1000/" target="blank" rel="noopener">
                                          東京都、新たに226人感染　新型コロナ(08月28日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63179020Y0A820C2AC8000/" target="blank" rel="noopener">
                                          大阪府、28日の新規感染者106人　新型コロナ(08月28日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63163930Y0A820C2000000/" target="blank" rel="noopener">
                                          安倍首相、辞任を正式表明　記者会見で持病再発と説明(08月28日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63108210X20C20A8CC1000/" target="blank" rel="noopener">
                                          東京都、新たに250人感染　累計2万人超える(08月27日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63079440W0A820C2PP8000/" target="blank" rel="noopener">
                                          「官邸主導」目詰まり　コロナ下、厚労省動かず(08月27日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62966690U0A820C2000000/" target="blank" rel="noopener">
                                          効率悪い日本のテレワーク　IT投資とリテラシー不足(08月27日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63098700X20C20A8MM0000/" target="blank" rel="noopener">
                                          東京都、23区の時短営業要請を延長へ　9月15日まで(08月27日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63053910W0A820C2EAF000/" target="blank" rel="noopener">
                                          GoTo東京発着の追加「9月に判断」　経財相(08月26日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63061330W0A820C2CC1000/" target="blank" rel="noopener">
                                          東京都、新たに236人感染　新型コロナ(08月26日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/aDGXMZO63050910W0A820C2000000/" target="blank" rel="noopener">
                                          英アストラゼネカ　新型コロナの抗体医薬、治験開始(08月26日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63019020V20C20A8CC1000/" target="blank" rel="noopener">
                                          東京都で新たに182人感染　新型コロナ(08月25日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGKKZO63007330V20C20A8MM0000/" target="blank" rel="noopener">
                                          日経平均 コロナ前回復 一時2万3400円台、半年ぶり(08月25日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO63004710U0A820C2DTA000/" target="blank" rel="noopener">
                                          コロナ禍でも配当額増、首位はドコモ　5G銘柄が上位(08月25日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62974600U0A820C2CC1000/" target="blank" rel="noopener">
                                          東京都で新たに95人感染　2桁は7月8日以来(08月24日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62925950R20C20A8TJ1000/" target="blank" rel="noopener">
                                          外食の客足、復活の3条件　全国1万店データ分析(08月24日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://style.nikkei.com/article/DGXMZO62308320V00C20A8000000" target="blank" rel="noopener">
                                          新型コロナ、なぜこんなに「無症状」が多いのか？(08月24日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62959580T20C20A8CZ8000/" target="blank" rel="noopener">
                                          東京都で新たに212人感染　新型コロナ(08月23日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62959190T20C20A8XB0000/" target="blank" rel="noopener">
                                          アストラゼネカや武田、コロナワクチン21年にも生産(08月23日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62959520T20C20A8NN1000/" target="blank" rel="noopener">
                                          東京パラリンピックまで1年　障害に応じた感染対策模索(08月23日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62952160S0A820C2CZ8000/" target="blank" rel="noopener">
                                          東京都で新たに256人感染　新型コロナ(08月22日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62754130Y0A810C2I00000/" target="blank" rel="noopener">
                                          「ポツンと」系小売業の強さ　コロナ禍で際立つ(08月22日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62952830S0A820C2EA2000/" target="blank" rel="noopener">
                                          接触アプリ通知来ても「検査受けられず」8割　本社調査(08月22日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62891470R20C20A8CC1000/" target="blank" rel="noopener">
                                          東京都で新たに258人感染　新型コロナ(08月21日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62873740Q0A820C2EE8000/" target="blank" rel="noopener">
                                          待てなかった厚生年金保険料上限引き上げ(08月21日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62858890Q0A820C2X11000/" target="blank" rel="noopener">
                                          武田、エーザイ…世界で開発進むコロナ治療薬マップ(08月21日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62845440Q0A820C2CC1000/" target="blank" rel="noopener">
                                          東京都で新たに339人感染　5日ぶり300人超(08月20日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62833160Q0A820C2000000/" target="blank" rel="noopener">
                                          IT技術者、テレワーク経験者8割が継続希望　民間調査(08月20日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62820140Z10C20A8MM8000/" target="blank" rel="noopener">
                                          PCR予約サイト、政府が10月開設　まずビジネス渡航(08月20日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62797450Z10C20A8CC1000/" target="blank" rel="noopener">
                                          東京都の新規感染者186人(08月19日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62788110Z10C20A8000000/" target="blank" rel="noopener">
                                          欧州、感染増でコロナ対策再び厳格化　「第2波」懸念(08月19日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62796780Z10C20A8EA2000/" target="blank" rel="noopener">
                                          東京都で新たに207人感染、新型コロナ介護や医療の求人増加、コロナ対応長期化で(08月19日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62754020Y0A810C2CC1000/" target="blank" rel="noopener">
                                          東京都で新たに207人感染、新型コロナ(08月18日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62738270X10C20A8000000/" target="blank" rel="noopener">
                                          「冷やしマスク」始めました　コカ・コーラ系が販売withコロナ　企業の現場(08月18日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62718910X10C20A8I00000/" target="blank" rel="noopener">
                                          コロナのワクチン開発　最終治験に高いハードル(08月18日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62708530X10C20A8CC1000/" target="blank" rel="noopener">
                                          東京都で新たに161人感染確認　新型コロナ(08月17日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGKKZO62699240X10C20A8MM0000/" target="blank" rel="noopener">
                                          GDP実質マイナス27.8%　戦後最大の下げ
                                          4～6月年率　コロナで内外需打撃、7年半ぶり500兆円割れ(08月17日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62654330U0A810C2FFV000/" target="blank" rel="noopener">
                                          カルビー、在宅勤務「20年の計」　ヒット生んだ自由(08月17日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62697880W0A810C2CC1000/" target="blank" rel="noopener">
                                          東京都で新たに260人感染確認　新型コロナ(08月16日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62697560W0A810C2000000/" target="blank" rel="noopener">
                                          最終日まで激しい混雑なし　お盆休み、コロナ影響(08月16日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62612270T10C20A8L60000/" target="blank" rel="noopener">
                                          茨城県のロケ支援、17年で7000作品　経済効果83億円(08月16日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62690640V10C20A8CZ8000/" target="blank" rel="noopener">
                                          東京都で新たに385人感染確認　新型コロナ(08月15日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXZZO62684590V10C20A8000000/" target="blank" rel="noopener">
                                          新型コロナ「正しく恐れて」　わかってきた特徴と対策(08月15日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62369060W0A800C2BC8000/" target="blank" rel="noopener">
                                          瀬戸内寂聴さん寄稿　コロナ禍の日常は「戦争より惨め」(08月15日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62640970U0A810C2CC1000/" target="blank" rel="noopener">東京都、14日の新規感染者は389人　5日ぶりに300人超(08月14日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62648780U0A810C2EN1000/" target="blank" rel="noopener">米中リスクじわり再燃　「新・中国関連株」に売り圧力(08月14日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62654120U0A810C2QM8000/" target="blank" rel="noopener">任天堂「スイッチ」、中古でもなお新品の1割高
                                          いまだ入手困難　巣ごもり需要続く(08月14日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62603490T10C20A8CC1000/" target="blank" rel="noopener">東京都で新たに206人感染　新型コロナ(08月13日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62612710T10C20A8CZ8000/" target="blank" rel="noopener">感染疑いの段階で1日150～200人入院　東京都(08月13日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGKKZO62591200T10C20A8CE0000/" target="blank" rel="noopener">「3密避けられず」9割　保育士のストレス要因調査
                                          感染予防で業務増える(08月13日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62549880S0A810C2CZ8000/" target="blank" rel="noopener">東京都、12日の新規感染者は222人　新型コロナ(08月12日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62543700S0A810C2EA2000/" target="blank" rel="noopener">コロナ禍の巣ごもり夏商戦　エアコン・家用プール好調(08月12日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62501350R10C20A8000000/" target="blank" rel="noopener">GoTo除外でも楽しみたい　都民のための夏休みプラン(08月12日）</a>
                            </li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62509230R10C20A8CC1000/" target="blank" rel="noopener">東京都で新たに188人感染　新型コロナ(08月11日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62522650R10C20A8L91000/" target="blank" rel="noopener">愛知の陽性率17.7%、際立つ高さ　検査報告漏れも影響？(08月11日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://r.nikkei.com/search?keyword=to%3A2020%2F08%2F11+from%3A2020%2F08%2F11+%E6%9D%B1%E4%BA%AC&volume=100" target="blank" rel="noopener">個人のネット閲覧履歴取得、「プライバシーテック」拡大　(08月11日）</a>
                            </li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62489690Q0A810C2CZ8000/" target="blank" rel="noopener">東京都、新たに197人感染　新型コロナ(08月10日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGKKZO62482780Z00C20A8MM8000/" target="blank" rel="noopener">デジタル投資15.8%増　今年度本社調査　コロナ下でDX加速、設備投資総額は4年ぶり減(08月10日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62382210W0A800C2000000/" target="blank" rel="noopener">ライブを止めるな　「配信」「リアル」で揺れる夏(08月10日）</a>
                            </li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62481440Z00C20A8CZ8000/" target="blank" rel="noopener">東京都で新たに331人感染　新型コロナ(08月9日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62309090V00C20A8I00000/" target="blank" rel="noopener">コロナで揺れる銀行の将来　問われる社会的責任(08月9日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62443300X00C20A8EN1000/" target="blank" rel="noopener">巣ごもり銘柄に選別の波　コロナ影響、見極め進む(08月9日）</a>
                            </li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62474420Y0A800C2CZ8000/" target="blank" rel="noopener">東京で新たに429人感染　2日連続の400人台(08月8日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62348850W0A800C2H11A00/" target="blank" rel="noopener">異例ずくめ、夏のシネマ事情　ジブリがランク上位に(08月8日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62372490W0A800C2TY5000/" target="blank" rel="noopener">女性「コロナで転職意欲高まる」5割(08月8日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62448840X00C20A8EA2000/" target="blank" rel="noopener">7日の新規感染1591人に　過去最多を更新(08月7日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62435890X00C20A8L83000/" target="blank" rel="noopener">東京都、コロナによる離職者ら30人採用(08月7日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62428260X00C20A8MM8000/?n_cid=DSREA001" target="blank" rel="noopener">住宅ローンを減免　「コロナで生活困窮」対象(08月7日）</a>
                            </li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62364160W0A800C2CC1000/" target="blank" rel="noopener">東京都、新たに360人感染確認　新型コロナ(08月6日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGKKZO62350740W0A800C2MM0000/" target="blank" rel="noopener">首相「緊急事態の状況でない」
                                          お盆の帰省、自粛求めず(08月6日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62353310W0A800C2000000/" target="blank" rel="noopener">トヨタ、最終黒字確保1588億円　4～6月(08月6日）</a>
                            </li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62315720V00C20A8CC1000/" target="blank" rel="noopener">東京都、新たに263人感染　新型コロナ(08月5日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62307150V00C20A8MM0000/" target="blank" rel="noopener">ウーバーイーツ、宅配料に定額制　月980円(08月5日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62300890U0A800C2SHA000/" target="blank" rel="noopener">デマ、早とちりで連鎖　大量の情報が熟議むしばむ(08月5日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62270230U0A800C2CC1000/" target="blank" rel="noopener">東京都、新たに309人感染　新型コロナ(08月4日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62256580T00C20A8XY0000/" target="blank" rel="noopener">カイコがコロナの救世主？食べるワクチン開発へ(08月4日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62276800U0A800C2MM8000/" target="blank" rel="noopener">雇調金の特例延長へ、年末軸に検討　厚労省(08月4日）</a>
                            </li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62221310T00C20A8CC1000/" target="blank" rel="noopener">東京都内で新たに258人感染　7日連続200人超(08月3日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62213780T00C20A8PP8000/" target="blank" rel="noopener">首相「色々なマスク入手可能に」　品薄解消を強調(08月3日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://style.nikkei.com/article/DGXMZO61494140U0A710C2000000" target="blank" rel="noopener">コロナワクチンでカブトガニ危機？
                                          企業が頼る青い血(08月3日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62203740S0A800C2CZ8000/" target="blank" rel="noopener">東京都、新たに292人感染確認　新型コロナ(08月2日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61725500Q0A720C2000000/" target="blank" rel="noopener">苦境のアパレル　必要なのは自分だけの心地よさ(08月2日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62203480S0A800C2000000/" target="blank" rel="noopener">菅氏、「GoTo」継続に意欲　感染防止対策が前提(08月2日）</a>
                            </li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62197060R00C20A8CZ8000/" target="blank" rel="noopener">全国の新規感染、4日連続1000人超　東京は最多更新(08月1日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGKKZO62163500R30C20A7MM8000/" target="blank" rel="noopener">「緊急事態前に休業要請も」　コロナ分科会
                                          4段階で対策判断(08月1日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62191070R00C20A8EA2000/" target="blank" rel="noopener">PCR目詰まり再び　感染急増で拡充要望、企業は自前も(08月1日）</a>
                            </li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62164440R30C20A7EA2000/" target="blank" rel="noopener">全国で新たに1500人超が感染、最多更新（7月31日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62127310R30C20A7MM0000/" target="blank" rel="noopener">東京都、新たに463人感染　過去最多（7月31日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62125320R30C20A7BE0P00/" target="blank" rel="noopener">コロナ後の世界、怒りと祈り　映画「破壊の日」（7月31日）</a>
                            </li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62077730Q0A730C2CC1000/" target="blank" rel="noopener">東京都で新たに367人感染　新型コロナ、過去最多（7月30日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62073060Q0A730C2MM0000/" target="blank" rel="noopener">東京都、飲食店に営業時間短縮再び要請へ　感染急増（7月30日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62072700Q0A730C2EE8000/" target="blank" rel="noopener">景気回復は18年10月まで、戦後最長ならず　内閣府認定（7月30日）</a>
                            </li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62047690Z20C20A7MM8000/" target="blank" rel="noopener">国内で新規感染1227人　新型コロナ、1000人超えは初（7月29日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO62041340Z20C20A7LKA000/" target="blank" rel="noopener">アシックス、ランニング用マスク発売　呼吸しやすい設計（7月29日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/video/6176213705001/" target="blank" rel="noopener">保健所業務見直し、人材確保も　小池知事インタビュー（7月29日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61977990Y0A720C2CE0000/" target="blank" rel="noopener">東京都で新たに266人感染　新型コロナ（7月28日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://vdata.nikkei.com/newsgraphics/coronavirus-vaccine/" target="blank" rel="noopener">分かる 教えたくなる コロナワクチン開発（7月28日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61975620Y0A720C2EAF000/" target="blank" rel="noopener">布マスク8000万枚、介護施設や保育所に配布へ（7月28日）</a>
                            </li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61940210X20C20A7CC1000/" target="blank" rel="noopener">東京都で新たに131人感染　新型コロナ（7月27日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61934230X20C20A7DTA000/" target="blank" rel="noopener">「心の資本」を企業価値に（7月27日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61929130W0A720C2PE8000/" target="blank" rel="noopener">コロナ新規感染、首都圏外で6割　全国累計3万人超す（7月27日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61925720W0A720C2CC1000/" target="blank" rel="noopener">東京都で新たに239人感染　新型コロナ（7月26日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61924960W0A720C2I00000/" target="blank" rel="noopener">北朝鮮でコロナ感染者発生か　開城市を完全封鎖（7月26日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGKKZO61919500V20C20A7EA1000/" target="blank" rel="noopener">コロナ「後遺症」相次ぐ　息切れや倦怠感
                                          リハビリで軽減目指す（7月26日）</a></li>


                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61919540V20C20A7CZ8000/" target="blank" rel="noopener">東京都で新たに295人感染　200人超は5日連続（7月25日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://r.nikkei.com/article/DGXMZO61919800V20C20A7AC8000" target="blank" rel="noopener">大阪府、25日の新規感染132人　学校など経路多様化（7月26日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61921910V20C20A7EA2000/" target="blank" rel="noopener">感染再拡大、3つの懸念　情報把握・陽性率・入院数（7月25日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61897920U0A720C2EA2000/" target="blank" rel="noopener">GoTo、政権が見誤った世論　二転三転で傷口広げる（7月25日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61897580U0A720C2EA2000/" target="blank" rel="noopener">東京都で新たに260人感染　新型コロナ（7月24日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61889540T20C20A7NN1000/" target="blank" rel="noopener">感染警戒で人出に濃淡　「Go
                                          To」の連休、自粛の動き（7月24日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61897590U0A720C2000000/" target="blank" rel="noopener">富士フイルム、新型コロナ用ワクチンの製造受託（7月24日）</a>
                            </li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61888060T20C20A7MM8000/" target="blank" rel="noopener">国内感染966人、連日の最多更新　都市部中心に拡大（7月23日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61885680T20C20A7CZ8000/" target="blank" rel="noopener">東京都の新規感染366人　新型コロナ、過去最多（7月23日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61786200R20C20A7000000/" target="blank" rel="noopener">「コロナ越えて前へ」パナソニック中国責任者の180日（7月23日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61866950S0A720C2I00000/" target="blank" rel="noopener">抗体検査、誤解相次ぐ　「現在の感染」はわからない（7月23日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61811390S0A720C2MM0000/" target="blank" rel="noopener">東京のコロナ感染者、累計1万人超に　新規230人以上（7月22日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61807800S0A720C2I00000/" target="blank" rel="noopener">あふれるマネー、金融市場に　株・債券・金…軒並み上昇（7月22日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61738140Q0A720C2X11000/" target="blank" rel="noopener">やってきたノーコード　アプリ開発、誰でも早く安く（7月22日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61721980Q0A720C2EA1000/" target="blank" rel="noopener">東京五輪、しぼむ巨大な祭典　コロナ禍で収益見通せず（7月21日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61775390R20C20A7000000/" target="blank" rel="noopener">在日米軍、感染者数公表　10基地で140人（7月21日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61795010R20C20A7EA2000/" target="blank" rel="noopener">日本のコロナ検査能力、米英の1割どまり（7月21日）</a>
                            </li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61719110Q0A720C2CC1000/" target="blank" rel="noopener">東京都で新たに168人感染、都立2校で生徒2人陽性（7月20日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61727690Q0A720C2MM8000/" target="blank" rel="noopener">塩野義、ワクチン「年3000万人分」確保へ　21年内に（7月20日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61719210Q0A720C2SHA000/" target="blank" rel="noopener">国家が企業をサイバー攻撃　IoT標的、57%が備えなし（7月20日）</a>
                            </li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61701690Z10C20A7CC1000/" target="blank" rel="noopener">東京都の感染者数は180人台　4日ぶり200人下回る（7月19日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61536050V10C20A7I00000/" target="blank" rel="noopener">米国は衰退するのか　陰るソフトパワーと国際経済秩序（7月19日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61701520Z10C20A7000000/" target="blank" rel="noopener">全国知事会「GoToの対象範囲、機動的に見直しを」（7月19日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61694160Y0A710C2CZ8000/" target="blank" rel="noopener">東京都内で新たに290人感染　新型コロナ（7月18日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61692780Y0A710C2000000/" target="blank" rel="noopener">GoTo、新経連が延期要請　「医療崩壊の可能性」（7月18日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61690570Y0A710C2MM0000/" target="blank" rel="noopener">世界で自転車利用増　独仏英4割超　コロナで電車避ける（7月18日）</a>
                            </li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61635800X10C20A7CC1000/" target="blank" rel="noopener">東京都内で新たに293人感染　新型コロナ、最多を更新（7月17日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61625900X10C20A7EA3000/" target="blank" rel="noopener">移住で在宅勤務推進を　政府、地方創生方針を決定（7月17日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61667150X10C20A7LKA000/" target="blank" rel="noopener">GoToトラベルの東京除外　「適切」の声多く、京都知事ら（7月17日）</a>
                            </li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61574570W0A710C2MM0000/" target="blank" rel="noopener">東京都で新たに286人感染　新型コロナ、過去最多（7月16日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61559900V10C20A7FF8000/" target="blank" rel="noopener">コロナでも家買う中国人　4～6月GDP3.2%増
                                          億ション400戸「即日完売」（7月16日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61600200W0A710C2PP8000/" target="blank" rel="noopener">「GoTo」事業、東京発着除外へ　首相に国交相が報告（7月16日）</a>
                            </li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61535810V10C20A7CC1000/" target="blank" rel="noopener">都内で新たに165人感染　新型コロナ（7月15日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61565580V10C20A7CC1000/" target="blank" rel="noopener">軽症者向けホテル逼迫　東京都、新たに2カ所確保（7月15日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61496930U0A710C2NZKP00/" target="blank" rel="noopener">健康保険料、年50万円超えへ　高齢化で医療費増（7月15日）</a>
                            </li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61489810U0A710C2CC1000/" target="blank" rel="noopener">東京都で新たに143人感染　新型コロナ、6日連続3桁（7月14日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61499750U0A710C2CR8000/" target="blank" rel="noopener">新型コロナ、抗体に感染防ぐ能力確認　保有調査で検出（7月14日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61495230U0A710C2AC8Z00/" target="blank" rel="noopener">「GoTo」利用の希望者、抗体検査へ　大阪市長方針（7月14日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61441380T10C20A7CC1000/" target="blank" rel="noopener">東京都内で新たに119人感染　新型コロナ（7月13日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61431140T10C20A7000000/" target="blank" rel="noopener">米の新規感染6万1300人　フロリダ、4月のNY抜き最多（7月13日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61192850W0A700C2000000/" target="blank" rel="noopener">コロナ通知システム乱立　調整役不在「総崩れ」の恐れ（7月13日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61429580S0A710C2CZ8000/" target="blank" rel="noopener">東京都で206人感染　新型コロナ、4日連続200人超え（7月12日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://r.nikkei.com/article/DGXMZO6142414011072020MM8000?unlock=1&s=5" target="blank" rel="noopener">企業価値、コロナで一変　リーマン以来の順位激動（7月12日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61399690Q0A710C2K10700/" target="blank" rel="noopener">「出遅れ日本」の目覚めに投資
                                          編集委員　藤田和明（7月12日）</a></li>


                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61423710R10C20A7CC1000/" target="blank" rel="noopener">東京都で新たに206人感染　3日連続200人超（7月11日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61419050R10C20A7000000/" target="blank" rel="noopener">世界の新規感染者、過去最多の22.7万人　米で拡大続く（7月11日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61415890Q0A710C2000000/" target="blank" rel="noopener">コロナ、山中氏「対策なければ日本で死者10万人以上」（7月11日）</a>
                            </li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61378010Q0A710C2000000/" target="blank" rel="noopener">東京都内で新たに243人感染　新型コロナ、過去最多（7月10日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61388680Q0A710C2L83000/" target="blank" rel="noopener">新宿区、コロナ感染者に10万円の見舞金（7月10日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61300970Y0A700C2X11000/" target="blank" rel="noopener">ロボット、時給980円で雇う　省人化にもサブスクの波（7月10日）</a>
                            </li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO55811680Z10C20A2I00000/" target="blank" rel="noopener">新型コロナ、国内感染者2万347人（7月9日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61345670Z00C20A7EE9000/" target="blank" rel="noopener">新型コロナ、廃業ラッシュ加速か　苦肉の銀行受け皿化（7月9日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61323380Z00C20A7CC1000/" target="blank" rel="noopener">東京都で新たに224人感染　新型コロナ、過去最多（7月9日）</a>
                            </li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61282800Y0A700C2CC1000/" target="blank" rel="noopener">東京都で新たに75人感染　2桁は1日以来（7月8日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGKKZO61278300Y0A700C2MM0000/" target="blank" rel="noopener">米、WHOを来年7月脱退　国連に正式通告　「中国寄り」批判（7月8日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61290960Y0A700C2910M00/" target="blank" rel="noopener">ブラジル大統領、新型コロナから回復　経済再開緩めず（7月8日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61243530X00C20A7CC1000/" target="blank" rel="noopener">東京都内で新たに106人感染　新型コロナ（7月7日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61228600X00C20A7AM1000/" target="blank" rel="noopener">マスク1枚10円台に急落　参入の中小、生き残りへ知恵　企業名を印字、夏用に薄手タイプ（7月7日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGKKZO61230410X00C20A7EAC000/" target="blank" rel="noopener">人間性も画面に映る 日本マイクロソフト執行役員常務
                                          手島主税氏（7月7日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61194040W0A700C2EA2000/" target="blank" rel="noopener">東京都で新たに102人感染　新型コロナ、5日連続3桁（7月6日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61137890T00C20A7X11000/" target="blank" rel="noopener">進化するニッポンのマスク　異業種がコロナ包囲網（7月6日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61185920W0A700C2MM0000/" target="blank" rel="noopener">小池都知事「国の力も借りコロナに勝つ」　首相と会談（7月6日）</a></li>


                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61178440V00C20A7CZ8000/" target="blank" rel="noopener">都内で新たに111人感染　新型コロナ、4日連続100人超（7月5日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGKKZO61176360U0A700C2EA1000/" target="blank" rel="noopener">「O型、リスク低い？」報告
                                          コロナ重症化　独大チームや米検査大手（7月5日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://r.nikkei.com/article/DGXMZO6117315004072020MM8000?disablepcview=&s=4" target="blank" rel="noopener">在宅勤務定着、ニッポンの壁　主要国で最低水準（7月5日）</a>
                            </li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61170820U0A700C2CC1000/" target="blank" rel="noopener">東京都で131人感染　小池知事「都外への移動自粛を」（7月4日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61171090U0A700C2EA3000/" target="blank" rel="noopener">欧州8カ国、日本からの入国制限解除　フランスやギリシャなど（7月4日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGKKZO61132720T00C20A7CR8000/" target="blank" rel="noopener">裁判ウェブ会議、コロナで存在感　4～5月167件
                                          出頭せず民事訴訟手続き、全国で導入拡大（7月4日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61144250T00C20A7MM8000/" target="blank" rel="noopener">東京都で連日100人超感染、全国で249人　解除後最多（7月3日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61149360T00C20A7EA2000/" target="blank" rel="noopener">「東京の繁華街と往来避けて」　自治体など第2波警戒（7月3日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61154860T00C20A7EA2000/" target="blank" rel="noopener">感染再拡大に3つの懸念　経路不明・高齢者・検査体制（7月3日）</a></li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61060050S0A700C2MM0000/" target="blank" rel="noopener">東京都で新たに107人感染　新型コロナ、2カ月ぶり高水準（7月2日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61050860R00C20A7TJ2000/" target="blank" rel="noopener">アウトドア、コロナ下で市場拡大　屋外・近場・非日常　家族や初心者つかむ（7月2日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61064460S0A700C2EE8000/" target="blank" rel="noopener">新型コロナでの解雇3万人超に　1カ月で1万人増加（7月2日）</a>
                            </li>

                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61016840R00C20A7CC1000/" target="blank" rel="noopener">東京都、新たに67人感染　緊急事態宣言解除後で最多（7月1日）</a></li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO60729150U0A620C2000000/" target="blank" rel="noopener">天才プログラマーのテレワークシステム、4万人救う（7月1日）</a>
                            </li>
                            <li><i class="far fa-file-alt"></i><a href="https://www.nikkei.com/article/DGXMZO61023120R00C20A7MM8000/" target="blank" rel="noopener">ネット不正出品の対策開示、運営業者に責任　新法検討（7月1日）</a></li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO60974500Q0A630C2CC1000/" target="blank" rel="noopener">都内で新たに54人感染　新型コロナ（6月30日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60974100Q0A630C2L72000/" target="blank" rel="noopener">埼玉県の戦略会議、「第2波」に備え10項目に着手（6月30日）</a></li>
                            <li><a href="https:/https://www.nikkei.com/article/DGXMZO60953160Q0A630C2000000/" target="blank" rel="noopener">シルク・ドゥ・ソレイユ経営破綻　会社更生手続きへ（6月30日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60952950Q0A630C2000000/" target="blank" rel="noopener">レムデシビル1人25万円　コロナ薬、ギリアドが価格決定（6月30日）</a>
                            </li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO60922630Z20C20A6CC1000/" target="blank" rel="noopener">都内で新たに58人感染　4日連続で50人超（6月29日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60844420W0A620C2TJ2000/" target="blank" rel="noopener">植物工場に衛生の追い風　コロナ下、袋詰め販売に支持（6月29日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60908930Z20C20A6MM0000/" target="blank" rel="noopener">コロナ、世界の死者50万人　ブラジルなど新興国増加（6月29日）</a></li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO60903580Y0A620C2000000/" target="blank" rel="noopener">都内で新たに60人感染　新型コロナ（6月28日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGKKZO60895390X20C20A6EA2000/" target="blank" rel="noopener">米、再び感染急拡大 1日4万4000人
                                          経済再開の目算狂う（6月28日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60897900X20C20A6EA3000/" target="blank" rel="noopener">民主主義が機能する条件（6月28日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGKKZO60897530X20C20A6EA4000/" target="blank" rel="noopener">7月1日、東京ディズニーが再開　3密回避と魅力
                                          どう両立（6月28日）</a></li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO60895400X20C20A6CZ8000/" target="blank" rel="noopener">東京都で新たに57人感染　緊急事態宣言の解除後最多（6月27日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60896060X20C20A6EA2000/" target="blank" rel="noopener">EU、日本含め十数カ国の渡航受け入れ　7月1日から（6月27日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60829430W0A620C2LX0000/" target="blank" rel="noopener">東京→九州、広がる「コロナ移住」　オフィス移転も（6月27日）</a></li>


                            <li><a href="https://www.nikkei.com/article/DGXMZO60829590W0A620C2CC1000/" target="blank" rel="noopener">東京都で新たに54人感染　高水準続く（6月26日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60855480W0A620C2CC1000/" target="blank" rel="noopener">緊急事態宣言中の4・5月、刑法犯認知件数28%減（6月26日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60848620W0A620C2I00000/" target="blank" rel="noopener">山梨大など、下水から新型コロナ検出　各地の流行把握も（6月26日）</a>
                            </li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO60774710V20C20A6CC1000/" target="blank" rel="noopener">東京都で新たに48人感染　新型コロナ（6月25日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60786090V20C20A6EE8000/" target="blank" rel="noopener">コロナ予算、デジタル投資わずか1%　海外に遅れ（6月25日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60766940V20C20A6L41000/" target="blank" rel="noopener">北海道の「どうみん割」予約開始を延期、28日正午に（6月25日）</a></li>


                            <li><a href="https://www.nikkei.com/article/DGXMZO60724890U0A620C2CC1000/" target="blank" rel="noopener">東京都で新たに55人感染　新型コロナ、宣言解除後最多（6月24日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60726350U0A620C2EA2000/" target="blank" rel="noopener">米、コロナ再拡大期に　経済優先の危うさ鮮明に（6月24日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60731500U0A620C2AC8000/" target="blank" rel="noopener">大阪府、24日の新規感染者2人　累計1811人に（6月24日）</a></li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO60675200T20C20A6CC1000/" target="blank" rel="noopener">都内で新たに31人感染　新型コロナ（6月23日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60685750T20C20A6L91000/" target="blank" rel="noopener">愛知の在宅勤務、3割未満　東京や大阪より低く（6月23日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60667630T20C20A6AM1000/" target="blank" rel="noopener">東京ディズニーリゾート、7月1日再開を発表（6月23日）</a>
                            </li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO60629110S0A620C2CC1000/" target="blank" rel="noopener">都内で新たに29人感染　新型コロナ（6月22日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60392820W0A610C2000000/" target="blank" rel="noopener">新型コロナを不活化　人に無害な紫外線「光明」照らす（6月22日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60642630S0A620C2ACYZ00/" target="blank" rel="noopener">北九州、3日連続で新規感染ゼロ　5月23日以降初めて（6月22日）</a>
                            </li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO60611810R20C20A6CZ8000/" target="blank" rel="noopener">都内で新たに35人感染　4日連続30人超（6月21日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60525120Y0A610C2ML0000/" target="blank" rel="noopener">マイナンバー
                                          普及へ試練　「10万円」給付で混乱（6月21日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60442410X10C20A6I00000/" target="blank" rel="noopener">コロナ後の世界、デフレかインフレか？（6月21日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60612200R20C20A6MM8000/" target="blank" rel="noopener">首相、弱まる求心力　コロナで揺らぐ経済の看板（6月21日）</a>
                            </li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO60605640Q0A620C2000000/" target="blank" rel="noopener">東京都内で新たに39人感染　新型コロナ（6月20日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60606990Q0A620C2CZ8000/" target="blank" rel="noopener">接触確認アプリ、公開1日で179万ダウンロード　厚労省（6月20日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60607480Q0A620C2EA5000/" target="blank" rel="noopener">巣ごもり投資家、世界で急増　給付金元手に相場動かす（6月20日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60608580Q0A620C2EA1000/" target="blank" rel="noopener">中国、19年秋からコロナ感染拡大か　分析相次ぐ（6月20日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60546310Z10C20A6CC1000/" target="blank" rel="noopener">都内で新たに35人感染　新型コロナ（6月19日）</a></li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO60493860Y0A610C2CC1000/" target="blank" rel="noopener">東京都内で新たに41人感染　新型コロナ（6月18日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60483100Y0A610C2EAF000/" target="blank" rel="noopener">新型コロナ接触確認アプリ「19日にも配信」　経財相</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60479010Y0A610C2TJ1000/" target="blank" rel="noopener">誰でもソフト開発「ノーコード」　米IT大手が熱視線（6月18日）</a></li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO60450060X10C20A6CC1000/" target="blank" rel="noopener">東京都の新規感染16人に（6月17日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60473710X10C20A6MM8000/" target="blank" rel="noopener">行政手続き、オンライン完結は1割未満　経済の足かせ（6月17日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60474460X10C20A6EA1000/" target="blank" rel="noopener">コロナ抗原検査、唾液で可能に　週内にも保険適用（6月17日）</a>
                            </li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO60401990W0A610C2CC1000/" target="blank" rel="noopener">都内で新たに27人感染　新型コロナ（6月16日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60391960W0A610C2MM0000/" target="blank" rel="noopener">都内の抗体保有率0.1%、海外より低水準　厚労省検査（6月16日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60412630W0A610C2L83000/" target="blank" rel="noopener">東京都、「第2波」備え療養用ホテルを公募（6月16日）</a>
                            </li>


                            <li><a href="https://www.nikkei.com/article/DGXMZO60180870Q0A610C2I00000/" target="blank" rel="noopener">コロナがあぶりだす
                                          世界一裕福な国の貧困（6月15日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60348480V10C20A6000000/" target="blank" rel="noopener">ユニクロ、「エアリズムマスク」19日から販売（6月15日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60356190V10C20A6AC8000/" target="blank" rel="noopener">大阪府、15日の新たな感染者なし（6月15日）</a></li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO60343260U0A610C2CZ8000/" target="blank" rel="noopener">東京都、新規感染者47人　5月5日以来の高水準（6月1４日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60343290U0A610C2EAF000/" target="blank" rel="noopener">中国・北京市で新たに36人感染、新型コロナ（6月14日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60247430R10C20A6PPE000/" target="blank" rel="noopener">職場でコロナに感染・在宅勤務でケガ…　労災になる？（6月14日）</a></li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO60338620T10C20A6CZ8000/" target="blank" rel="noopener">都内で新たに24人感染　新型コロナ、3日連続20人以上（6月13日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGKKZO60334280T10C20A6MM0000/" target="blank" rel="noopener">新規感染 世界14万4000人
                                          ブラジル死者数、世界2番目に（6月13日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60335140T10C20A6CC1000/" target="blank" rel="noopener">一部自治体、10万円給付金に「上乗せ」　1万～3万円（6月13日）</a>
                            </li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO60289780S0A610C2CC1000/" target="blank" rel="noopener">都内で新たに25人感染　新型コロナ（6月12日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60297890S0A610C2L83000/" target="blank" rel="noopener">「外食利用したい」94%、緊急事態宣言解除で　民間調べ（6月12日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60306420S0A610C2L41000/" target="blank" rel="noopener">北海道のアルバイト時給が下落、新型コロナ後で初（6月12日）</a>
                            </li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO60230470R10C20A6CC1000/" target="blank" rel="noopener">都内で新たに22人感染　新型コロナ（6月11日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60243740R10C20A6MM8000/" target="blank" rel="noopener">東京都、19日に休業要請を全面解除（6月11日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60247320R10C20A6EA2000/" target="blank" rel="noopener">コロナ新規感染、新興国が8割に　中南米など加速（6月11日）</a>
                            </li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO60189480Q0A610C2CC1000/" target="blank" rel="noopener">都内で新たに18人感染　新型コロナ（6月10日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60194260Q0A610C2EE8000/" target="blank" rel="noopener">20年の世界成長率、感染再拡大ならマイナス7.6%予測（6月10日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60179540Q0A610C2EE8000/" target="blank" rel="noopener">低所得のひとり親に5万円、自動振り込みの人も（6月10日）</a>
                            </li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO60142200Z00C20A6CC1000/" target="blank" rel="noopener">東京都、新たに12人の感染確認　新型コロナ（6月9日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59746380Z20C20A5000000/" target="blank" rel="noopener">10万円給付、本人確認「番号」使えず　謎のシステム（6月9日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60130270Z00C20A6000000/" target="blank" rel="noopener">米国の人出、コロナ前迫る　経済再開と抗議デモで（6月9日）</a>
                            </li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO60098070Y0A600C2CC1000/" target="blank" rel="noopener">都内で新たに13人感染　新型コロナ（6月8日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60020080V00C20A6000000/" target="blank" rel="noopener">コロナ集団免疫、4割でも終息？　第2波警戒は必要（6月8日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60091190Y0A600C2000000/" target="blank" rel="noopener">日経平均2万3000円台　国内機関投資家に買い余力（6月８日）</a></li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO60082230X00C20A6CZ8000/" target="blank" rel="noopener">東京都、新規感染者14人　7日連続で2桁（6月7日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60078040W0A600C2EA1000/" target="blank" rel="noopener">「知の共有」世界で加速　新型コロナ論文、SARSの100倍（6月7日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60057770V00C20A6K10800/" target="blank" rel="noopener">データが語る「新常態」　職場への人出と株価は比例（6月7日）</a>
                            </li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO60076650W0A600C2CZ8000/" target="blank" rel="noopener">東京で新たに26人感染　新型コロナ、3日連続20人超（6月6日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60072030W0A600C2000000/" target="blank" rel="noopener">ニューヨーク市の死者ゼロに　新型コロナ、3月以降で初 新型コロナ
                                          北米 中南米（6月6日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60029100V00C20A6SHA000/" target="blank" rel="noopener">DIYや家庭菜園…コロナを機に「自給自足」（6月6日）</a>
                            </li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO60020430V00C20A6CC1000/" target="blank" rel="noopener">都内で新たに20人感染　新型コロナ（6月5日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59984690U0A600C2L82000/" target="blank" rel="noopener">新型コロナ、病院経営を直撃　「第2波来たら持たない」（6月5日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO60012270V00C20A6000000/" target="blank" rel="noopener">日本株、上げ一服でも視線は「上」　生保が警戒解除（6月5日）</a>
                            </li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO59969250U0A600C2CC1000/" target="blank" rel="noopener">東京、新たに28人の感染を確認　新型コロナ（6月4日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59982690U0A600C2MM8000/" target="blank" rel="noopener">ライオン、副業人材を公募　リモートワーク拡大追い風（6月4日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59931710T00C20A6000000/" target="blank" rel="noopener">ディズニーリゾート、臨時休園でも投資続ける底力（6月4日）</a>
                            </li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO59921090T00C20A6CC1000/" target="blank" rel="noopener">東京都内で新たに12人感染　新型コロナ（6月3日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59912590T00C20A6CE0000/" target="blank" rel="noopener">「東京アラート」生活への影響は？　解除はいつ？（6月3日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59586800W0A520C2000000/" target="blank" rel="noopener">生産性「下がった」6割超　間違いだらけのウェブ会議（6月3日）</a></li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO59875410S0A600C2000000/" target="blank" rel="noopener">都、「東京アラート」発動へ　新たに34人が感染（6月2日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59635320X20C20A5000000/" target="blank" rel="noopener">テレワーク普及でオフィス再構築　人をつなぐ分散型へ（6月2日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59887390S0A600C2000000/" target="blank" rel="noopener">空自の編隊飛行、再披露も　防衛相「全国から要望」（6月2日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59854530R00C20A6CC1000/" target="blank" rel="noopener">コロナ収束願う花火、各地で一斉に打ち上げ（6月1日）</a>
                            </li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO59821570R00C20A6000000/" target="blank" rel="noopener">東京都、1日は感染者13人　再び2桁に（6月1日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59741050Z20C20A5TJ3000/" target="blank" rel="noopener">アマゾン使い格安テレワーク　サーバーワークス急成長（6月1日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59808630R00C20A6EAF000/" target="blank" rel="noopener">世界の1日あたり感染者数、最多を更新　新型コロナ（6月1日）</a>
                            </li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO59803600R30C20A5CZ8000/" target="blank" rel="noopener">東京都、感染者5人　6日ぶりの1桁（5月31日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59671970Y0A520C2000000/" target="blank" rel="noopener">テレワークに潜む「リモハラ」の危険（5月31日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59794090Q0A530C2EA1000/" target="blank" rel="noopener">「コロナ対策品」違法表示疑い横行　Amazonなど通販（5月31日）</a>
                            </li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO59797540Q0A530C2CZ8000/" target="blank" rel="noopener">東京都内、新たに14人感染　5日連続で10人以上（5月30日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59793920Q0A530C2CE0000/" target="blank" rel="noopener">東京都心の百貨店に行列も　緊急事態解除後初の週末（5月30日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59695210Y0A520C2KNTP00/" target="blank" rel="noopener">目指すは最強のテレワーク部屋　ビデオ会議用に照明も（5月30日）</a></li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO59739640Z20C20A5MM8000/" target="blank" rel="noopener">東京都の感染新たに22人　新型コロナ、15日ぶり20人超（5月29日）</a>
                            </li>
                            <li><a href="https://style.nikkei.com/article/DGXMZO59453220S0A520C2000000" target="blank" rel="noopener">コロナで進むか脱・都心　転職で高まる「求む！地方」（5月29日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGKKZO59737750Z20C20A5CE0000/" target="blank" rel="noopener">北九州の2病院でクラスター
                                          子ども感染の2校閉鎖（5月29日）</a></li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO59679830Y0A520C2CC1000/" target="blank" rel="noopener">都内で新たに15人感染　宣言解除後初のクラスター（5月28日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59722760Y0A520C2EAF000/" target="blank" rel="noopener">安倍首相「途上国の経済再開策、検討を」　国連イベント（5月28日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58661120Q0A430C2000000/" target="blank" rel="noopener">給付金・借りる・猶予　個人が使えるコロナ公的支援（5月28日）</a></li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO59631310X20C20A5CC1000/" target="blank" rel="noopener">東京都、新たに11人の感染確認　新型コロナ（5月27日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59620640X20C20A5MM0000/" target="blank" rel="noopener">9月入学、21年度も見送り提言へ　自民が原案（5月27日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59584650W0A520C2MM8000/" target="blank" rel="noopener">日立、週2～3日出社
                                          在宅前提に脱・時間管理（5月27日）</a></li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO59575770W0A520C2CC1000/" target="blank" rel="noopener">東京都、新たに10人の感染確認　新型コロナ（5月26日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59532670V20C20A5I00000/" target="blank" rel="noopener">日本はうまくいったのか　解除後もモヤモヤ続くわけ（5月26日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59539170V20C20A5000000/" target="blank" rel="noopener">マスク山積み、友人と居酒屋も　全面解除ドキュメント（5月26日）</a></li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO59523350V20C20A5CC1000/" target="blank" rel="noopener">都内で新たに8人感染　新型コロナ（5月25日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59508030U0A520C2NN1000/" target="blank" rel="noopener">コロナ感染死、把握漏れも　「超過死亡」200人以上か（5月25日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59513290V20C20A5MM0000/" target="blank" rel="noopener">映画館など月内にも再開　東京都、段階的緩和を前倒し（5月25日）</a>
                            </li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO59506970U0A520C2CC1000/" target="blank" rel="noopener">東京都で14人感染確認　新型コロナ、3日ぶり2桁（5月24日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59507280U0A520C2000000/" target="blank" rel="noopener">緊急事態の全面解除、25日に諮問　経財相（5月24日）</a>
                            </li>
                            <li><a href="https://wwhttps://www.nikkei.com/article/DGKKZO59501860T20C20A5MM8000/" target="blank" rel="noopener">ユニクロ、マスク参入
                                          夏見据え、高機能素材で通気性良く（5月24日）</a></li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO59501290T20C20A5000000/" target="blank" rel="noopener">東京都で2人感染確認　新型コロナ、9日連続で20人割れ（5月23日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59496630T20C20A5000000/" target="blank" rel="noopener">新型コロナ感染1日で10万人増　過去最多、新興国で拡大（5月23日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59497750T20C20A5AM1000/" target="blank" rel="noopener">SNS直売、生産者救う　コロナ契機に販路拡大（5月23日）</a>
                            </li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO59453640S0A520C2CC1000/" target="blank" rel="noopener">都内で新たに3人感染確認　3月22日以来、最も少なく（5月22日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGKKZO59406450R20C20A5MM8000/" target="blank" rel="noopener">首都圏と北海道、25日にも判断（5月22日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGKKZO59387440R20C20A5PP8000/" target="blank" rel="noopener">入国制限緩和、3段階で　ビジネス客→留学生→観光客（5月22日）</a></li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO59387220R20C20A5CC1000/" target="blank" rel="noopener">都内で新たに11人感染　7日連続20人下回る（5月21日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59406450R20C20A5MM8000/" target="blank" rel="noopener">首都圏、25日にも判断　緊急事態宣言、関西3府県解除（5月21日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59381380R20C20A5EA2000/" target="blank" rel="noopener">世界の感染者500万人超える　ロシアとブラジルで急増（5月21日）</a>
                            </li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO59331440Q0A520C2CC1000/" target="blank" rel="noopener">都東京都内で新たに5人感染　6日連続で20人を下回る（5月20日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59343580Q0A520C2LA0000/" target="blank" rel="noopener">10万円オンライン申請、確認に追われ職員「限界」　高知市も中止（5月20日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59338390Q0A520C2MM8000/" target="blank" rel="noopener">LINE、オンライン診療アプリ参入　8000万顧客生かす（5月20日）</a>
                            </li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO59287330Z10C20A5CC1000/" target="blank" rel="noopener">都内で新たに5人感染　5日連続で20人を下回る（5月19日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59228140Y0A510C2I00000/" target="blank" rel="noopener">中国にモノ申す豪州、浮かぶ「コロナ後」の新秩序（5月19日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59272050Y0A510C2000000/" target="blank" rel="noopener">米モデルナ、コロナワクチン抗体確認　7月に大規模治験（5月19日）</a>
                            </li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO59239330Y0A510C2CC1000/" target="blank" rel="noopener">都内で新たに10人感染　新型コロナ（5月18日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59228550Y0A510C2X11000/" target="blank" rel="noopener">コロナ下の医療物品不足　国産化に動くスタートアップ（5月18日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59219430X10C20A5FF8000/" target="blank" rel="noopener">インド都市封鎖、3度目の延長　感染者はアジア最多に（5月18日）</a></li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO59218670X10C20A5AC8000/" target="blank" rel="noopener">大阪府の新規感染者ゼロ　3月9日以来、新型コロナ（5月17日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59218610X10C20A5CC1000/" target="blank" rel="noopener">東京都、新たに5人の感染確認　新型コロナ（5月17日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59211260W0A510C2SHB000/" target="blank" rel="noopener">「自粛警察」危うい正義感　コロナで鬱憤、他者を攻撃（5月17日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58813180X00C20A5H11A00/" target="blank" rel="noopener">「デマ拡散で買い占め」のワケ　識者に聞く対処法（5月17日）</a>
                            </li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO59213850W0A510C2CZ8000/" target="blank" rel="noopener">都内で新たに14人感染、11人死亡　新型コロナ（5月16日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59211290W0A510C2AM1000/" target="blank" rel="noopener">大阪・兵庫・京都、日常再開へ始動　休業緩和初日（5月16日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59213960W0A510C2EA1000/" target="blank" rel="noopener">新型コロナ「欧州型」世界で猛威　半月で遺伝子変異（5月16日）</a></li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO59155960V10C20A5CC1000/" target="blank" rel="noopener">東京都、新たに9人の感染確認　54日ぶり1桁に（5月15日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGKKZO59124620U0A510C2TJ2000/" target="blank" rel="noopener">忍び寄るオフィス不要論（5月15日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59145410V10C20A5L83000/" target="blank" rel="noopener">東京・池袋に「社会的距離カフェ」オープン（5月15日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58936790R10C20A5000000/" target="blank" rel="noopener">ランナーの真後ろは10メートル空けて　飛沫を流体解析（5月15日）</a>
                            </li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO58989320S0A510C2CC1000/" target="blank" rel="noopener">新型コロナ、東京で30人感染確認　感染者5000人超に（5月14日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGKKZO59074840U0A510C2MM0000/" target="blank" rel="noopener">緊急事態宣言、39県解除へ　愛媛は条件付き（5月14日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59044610T10C20A5I00000/" target="blank" rel="noopener">新型コロナ、ネコ同士で感染　東大チームが確認（5月14日）</a>
                            </li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO59036370T10C20A5CC1000/" target="blank" rel="noopener">東京都、新たに10人の感染確認　死者は200人超える（5月13日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59058250T10C20A5MM8000/" target="blank" rel="noopener">緊急事態宣言、39県を解除へ　14日に決定（5月13日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO59030900T10C20A5EE8000/?n_cid=SPTMG002" target="blank" rel="noopener">倒産ゆるやかに拡大　4月15%増、非集計の廃業に懸念（5月13日）</a>
                            </li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO58989320S0A510C2CC1000/" target="blank" rel="noopener">都内で新たに28人感染　3日連続30人以下（5月12日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58990350S0A510C2MM8000/" target="blank" rel="noopener">9月入学、知事の6割「賛成」
                                          グローバル化進展期待（5月12日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58971580S0A510C2I00000/" target="blank" rel="noopener">Zoomだけではない、コロナが映すビジネス新景（5月12日）</a>
                            </li>

                            <li><a href="https://style.nikkei.com/article/DGXMZO58797330X00C20A5000000" target="blank" rel="noopener">新型コロナで悩む資金繰り　支援策の利用はここに注意（5月11日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58938490R10C20A5CC1000/" target="blank" rel="noopener">東京都、11日の感染確認は15人　6日連続で50人下回る（5月11日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXLASFL11H33_R10C20A5000000/" target="blank" rel="noopener">米コロナバブル550兆円　給付現金はGAFAや暗号資産に（5月11日）</a>
                            </li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO58921350Q0A510C2CZ8000/" target="blank" rel="noopener">東京都で新たに22人感染　5日連続で50人下回る（5月10日）</a></li>
                            <li><a href="https://r.nikkei.com/article/DGXMZO5891593009052020MM8000?disablepcview=&s=3" target="blank" rel="noopener">新興国感染、先進国抜く　1日5万人超え
                                          新たなリスク（5月10日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58921340Q0A510C2000000/" target="blank" rel="noopener">「今日だけで50人埋めた」　ブラジル、コロナ死者1万人（5月10日）</a>
                            </li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO58914940Z00C20A5CZ8000/" target="blank" rel="noopener">東京都、新たに36人感染　島しょ部で初の確認（5月9日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58915150Z00C20A5EA1000/" target="blank" rel="noopener">看護師・SE…「不可欠職種」の時給・求人が急伸（5月9日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58909620Z00C20A5000000/" target="blank" rel="noopener">新型コロナ感染の子供に「川崎病」症状　NY州で73件（5月9日）</a></li>
                            <li><a href="https://style.nikkei.com/article/DGXMZO58692430R00C20A5000000" target="blank" rel="noopener">業務の記録は1分刻み　テレワーク先進企業の本気度（5月9日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58914470Z00C20A5000000/" target="blank" rel="noopener">コロナ制限緩和の韓国、クラブで集団感染（5月9日）</a></li>


                            <li><a href="https://www.nikkei.com/article/DGXMZO58870040Y0A500C2CC1000/" target="blank" rel="noopener">東京都　新たに39人の感染確認　11人死亡（5月8日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58845130X00C20A5L92000/" target="blank" rel="noopener">映画館は2席空けて　休業解除、ジムや美術館も工夫（5月8日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58870490Y0A500C2TJC000/" target="blank" rel="noopener">コロナ簡易キット
                                          来週にも承認　みらか、15分で判定（5月8日）</a></li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO58819930X00C20A5MM8000/" target="blank" rel="noopener">休業者に「失業手当」　コロナで特例、個人申請で迅速に（5月7日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58818160X00C20A5CC1000/" target="blank" rel="noopener">東京都、新たに23人感染　5日連続2桁（5月7日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58771990T00C20A5SHA000/" target="blank" rel="noopener">在宅勤務で消費も急変　パソコン復権、化粧品急落（5月7日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58796020X00C20A5I00000/" target="blank" rel="noopener">コロナ後、世界秩序が変化　中国覇権強まる　ダリオ氏語る（5月7日）</a>
                            </li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO58794650W0A500C2CZ8000/" target="blank" rel="noopener">東京都、新たに38人の感染確認　4日連続100人下回る（5月6日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58785950V00C20A5CZ8000/" target="blank" rel="noopener">相次ぐマスクの路上販売　警察、対応に苦慮（5月6日）</a>
                            </li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO58785950V00C20A5CZ8000/" target="blank" rel="noopener">東京都、新たに58人の感染確認　新型コロナ（5月5日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58785190V00C20A5000000/" target="blank" rel="noopener">小池都知事、協力金第2弾支給へ　1店舗50万円で調整（5月5日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58597820Y0A420C2BC8000/" target="blank" rel="noopener">ウイルスが変える建築の形　「衛生的な都市」問い直す（5月5日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58786150V00C20A5SHA000/" target="blank" rel="noopener">従業員の感染公表どこまで　悩める企業、揺れる行政（5月5日）</a>
                            </li>


                            <li><a href="https://www.nikkei.com/article/DGXMZO58778120U0A500C2000000/" target="blank" rel="noopener">東京都で新たに87人感染　新型コロナ、死者計150人に（5月4日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58777010U0A500C2I00000/" target="blank" rel="noopener">「速やかに追加経済対策」　首相、緊急事態延長で会見（5月4日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58770310T00C20A5CZ8000/" target="blank" rel="noopener">東京都で新たに91人感染　新型コロナ（5月3日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58770000T00C20A5MM8000/" target="blank" rel="noopener">緊急事態宣言31日まで延長、公園や美術館は再開へ　政府方針（5月3日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58764110S0A500C2000000/" target="blank" rel="noopener">東京都、新たに160人感染　新型コロナ（5月2日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58723690R00C20A5SHA000/" target="blank" rel="noopener">必要な外出は自転車で　混雑避ける・体を動かす（5月2日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58758290S0A500C2CE0000/" target="blank" rel="noopener">4月の事故死者19・9%減　コロナ影響か、都市部は増（5月2日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGKKZO58710660R00C20A5EA2000/" target="blank" rel="noopener">東京・大阪、接触4～6割減どまり（5月2日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58707590R00C20A5EA3000/" target="blank" rel="noopener">10万円給付スタート　小規模自治体で手渡しも
                                          新型コロナの緊急経済対策（5月1日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58710220R00C20A5CC1000/" target="blank" rel="noopener">東京都、新たに165人感染　新型コロナ（5月1日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58691420R00C20A5MM0000/" target="blank" rel="noopener">外出自粛、当面維持を　新型コロナ専門家会議が提言（5月1日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58641150Q0A430C2000000/" target="blank" rel="noopener">新型コロナ収束まで3～5年？　集団免疫の獲得が条件（5月1日）</a></li>

                            <li><a href="https://www.nikkei.com/article/DGXMZO58651890Q0A430C2CC1000/" target="blank" rel="noopener">東京都、新たに46人の感染確認　新型コロナ（4月30日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58659490Q0A430C2FF8000/" target="blank" rel="noopener">ロシアの感染者10万人超に　段階的な外出緩和探る（4月30日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58653800Q0A430C2CC1000/" target="blank" rel="noopener">休校解除、小1・小6・中3先行　文科省指針（4月30日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58622720Z20C20A4000000/" target="blank" rel="noopener">東京で新たに47人感染確認　新型コロナ（4月29日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58621150Z20C20A4000000/" target="blank" rel="noopener">首相、9月入学「様々な選択肢検討」　国挙げた議論へ（4月29日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58622380Z20C20A4000000/?n_cid=DSREA001?n_cid=DSREA001" target="blank" rel="noopener">首相、緊急事態宣言の解除「依然厳しい状況続く」（4月29日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58585540Y0A420C2CC1000/" target="blank" rel="noopener">東京都、新たに112人感染　新型コロナ（4月28日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58529420X20C20A4I00000/" target="blank" rel="noopener">シンガポールで感染爆発、「移民立国」の光と影
                                          アジア総局長 高橋徹（4月28日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58533350X20C20A4CC1000/" target="blank" rel="noopener">都内、新たに39人感染確認　50人未満は約1カ月ぶり（4月27日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58528280X20C20A4000000/" target="blank" rel="noopener">黒田総裁、国債「上限なく必要なだけ」　追加緩和決定（4月27日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58515950W0A420C2CZ8000/" target="blank" rel="noopener">東京都、26日の感染確認は72人　13日ぶりに2桁（4月26日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58517270W0A420C2UU8000/" target="blank" rel="noopener">全国高校総体、初の中止　移動・宿泊時も感染リスク（4月26日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58509170V20C20A4000000/" target="blank" rel="noopener">東京都で新たに103人感染確認　新型コロナ（4月25日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58494070U0A420C2EA1000/" target="blank" rel="noopener">コロナ「人為説」否定多く　ウイルス全容解明には時間（4月25日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58462500U0A420C2MM8000/" target="blank" rel="noopener">休業手当100%国が補助、小規模企業向け雇用調整助成金（4月25日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58448920U0A420C2CC1000/" target="blank" rel="noopener">東京都で新たに161人感染確認　新型コロナ（4月24日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58446920U0A420C2000000/" target="blank" rel="noopener">新型コロナ、既存薬転用　数カ月で結果が続々判明へ（4月24日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58399260T20C20A4EE8000/" target="blank" rel="noopener">政府景気判断、11年ぶり「悪化」　4月の月例経済報告（4月23日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58399110T20C20A4000000/" target="blank" rel="noopener">東京都で新たに134人感染確認　6人死亡（4月23日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58399110T20C20A4000000/" target="blank" rel="noopener">東京都「企業は12連休を」　首都圏3県と協力依頼（4月23日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58353800S0A420C2CC1000/" target="blank" rel="noopener">東京都、新たに132人感染確認　新型コロナ（4月22日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58342430S0A420C2I00000/" target="blank" rel="noopener">最高益Netflix、映画会社の「駆け込み寺」に（4月22日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58302120R20C20A4MM8000/" target="blank" rel="noopener">緊急事態宣言　延長の是非、GW中に判断へ（4月21日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58311200R20C20A4CC1000/" target="blank" rel="noopener">東京都で新たに123人感染確認　新型コロナ（4月21日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58262380Q0A420C2CC1000/" target="blank" rel="noopener">国内感染者20人超死亡、1日で最多　新型コロナ（4月20日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58242890Z10C20A4CZ8000/" target="blank" rel="noopener">コロナの救急搬送千件超　3月下旬以降急増　消防庁（4月19日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58242870Z10C20A4CZ8000/" target="blank" rel="noopener">東京、107人の感染確認　新型コロナ、累計3000人超に（4月19日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58237330Y0A410C2CZ8000/" target="blank" rel="noopener">東京で181人感染確認　新型コロナ、国内1万人超す（4月18日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58237620Y0A410C2CC1000/" target="blank" rel="noopener">国内感染1万人超す　新型コロナ、9日間で倍増（4月18日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO55811680Z10C20A2I00000/" target="blank" rel="noopener">新型コロナ、国内の感染者9000人超す（4月17日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58178980X10C20A4CC1000/" target="blank" rel="noopener">東京都で新たに201人感染確認　1日あたり最多（4月17日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58128160W0A410C2MM8000/" target="blank" rel="noopener">緊急事態宣言、全都道府県に
                                          地方への感染拡大を防止　5月6日まで（4月16日）</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58111320W0A410C2000000/" target="blank" rel="noopener">トランプ氏「新規感染ピーク過ぎた」16日に経済再開指針（4月16日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58128430W0A410C2CC1000/" target="blank" rel="noopener">149人の感染を確認　東京（4月16日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58067240V10C20A4EAF000/" target="blank" rel="noopener">公明「一律10万円給付を」　首相「方向性持って検討」（4月15日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58078670V10C20A4CC1000/" target="blank" rel="noopener">東京都で新たに127人の感染確認　新型コロナ（4月15日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO58032900U0A410C2CC1000/" target="blank" rel="noopener">東京都、新たに161人感染確認
                                          105人感染経路分からず(4月14日)</a></li>
                            <li><a href="https://www.nikkei.com/video/6149024331001/" target="blank" rel="noopener">消えたアジアの交通渋滞(4月13日)</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO57811410Y0A400C2I10000/" target="blank" rel="noopener">新型コロナ　死亡率を下げたドイツ流(4月13日)</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO57980690T10C20A4CC1000/" target="blank" rel="noopener">新型コロナ、東京で91人感染確認(4月13日)</a></li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO57967630S0A410C2CC1000/" target="blank" rel="noopener">新型コロナ、東京で165人以上確認　全国で7000人超に(4月12日)</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO57955140R10C20A4I00000/" target="blank" rel="noopener">新型コロナ、世界の死者10万人突破　感染は160万人超(4月11日)</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO57955250R10C20A4I00000/" target="blank" rel="noopener">コロナ濃厚接触をスマホで通知　AppleとGoogle(4月11日)</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO57959830R10C20A4MM8000/" target="blank" rel="noopener">東京都、新たに197人感染　新型コロナ(4月11日)</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO57921630Q0A410C2CC1000/" target="blank" rel="noopener">東京で189人の感染確認　これまでで最多(4月10日)</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO57869450Z00C20A4000000/" target="blank" rel="noopener">東京都で新たに181人感染　新型コロナウイルス(4月9日)</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO57819310Y0A400C2CC1000/" target="blank" rel="noopener">新型コロナ　東京で144人感染
                                          これまでで最多(4月8日)</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO57765860X00C20A4CC1000/" target="blank" rel="noopener">東京で新たに80人の感染確認　累計1195人に
                                          (4月7日)</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO57708170W0A400C2000000/" target="blank" rel="noopener">東京、6日は感染確認83人　新型コロナ(4月6日)</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO57718020W0A400C2MM8000/" target="blank">緊急事態宣言、7日発令　7都府県、5月6日まで(4月6日)
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO57686620V00C20A4MM8000/" target="blank">東京都、新たに143人感染　累計1000人超える（4月5日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO57680190U0A400C2CZ8000/" target="blank">都で新たに118人感染確認　新型コロナ、100人超は初（4月4日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO57619080T00C20A4MM8000/" target="blank">現金給付、1世帯30万円に　対象は月収で絞り込み（4月3日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO57667220T00C20A4CC1000/" target="blank">20代以下の感染急増　甘い危機意識「当事者意識を」（4月3日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO57624810T00C20A4CC1000/" target="blank">東京都で新たに感染89人　新型コロナウイルス（4月3日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO55811680Z10C20A2I00000/" target="blank">新型コロナ、44都道府県で2644人感染
                                          （4月2日）</a>
                            </li>
                            <li><a href="https://www.nikkei.com/article/DGXMZO57565870S0A400C2CC1000/" target="blank">東京都、97人の感染確認　1日あたりで最多（4月2日）</a>
                            </li>
                            <li><a href="https://r.nikkei.com/article/DGXMZO57578810S0A400C2EA1000?s=3" target="blank">新型コロナ、効く薬を探せ　既存薬に光明か（4月2日）</a>
                            </li>
                     </ul>


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