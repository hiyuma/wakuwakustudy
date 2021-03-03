<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name=”robots” content=”index”>
  <meta name="description" content="長野県出身、元美容師/イベントオーガナイザーのしらひゅー(白井　飛友馬)が、WEB制作・デザイン・開発などのプログラミング言語(PHP/Java/JSP/Servlet/HTML/CSS/JavaScriptなど)や英語(TOEIC・日常英会話)、投資、アボカド栽培などを学ぶために作成したWEBサイトです。ここは、好きな音楽、Youtubeを掲載していくページです。特に面白味はないです。" />
  <meta name="keywords" content="YouTube,音楽,Amazon,prime music">

  <title>しらひゅーのわくわくスタディ MUSIC</title>
  <link rel="shortcut icon" href="favicon.ico" />
  <link rel="stylesheet" href="mystyle.css">
  <link rel="stylesheet" href="cal.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <div id="page_top">
    <a href="#"></a>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/6256a7882a.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php include('parts/header.php') ?>

  <!-- set -->
  <?php include('parts/widget/widget_music.php'); ?>

  <header>
    <h1 class="logo">音</h1>
  </header>


  <?php include('parts/menuButton.php'); ?>
  <?php include('parts/facebook_twitter_button.php'); ?>
  <main>


    <div id="article">


      <section class="slide-in-animation">
        <h1 class="line">MUSIC</h1>
        <p id="top-img-p">
          <img id="top-img" src="gallery/top/music.jpg" alt="小物">
        </p>
        <p>毎日1曲ずつ。好きな音楽を毎日1曲ずつ。
          <br><br>
          CHILL OUT、JAZZ、TECHNO、ELECTRO、HOUSE、R&B、AMBIENT、POP、ROCKなど。
          <br><br>
          千差万別。クラブDJ出演時は、DEEP HOUSE、TECHNO、ELECTRO系の選曲多。
          <br><br>
          クラブミュージック系は音響、特に低音域が良い環境で聞いて欲しいです。
          <br><br>
          常に音の全体を聴きたいと思い、曲に合わせたイコライジングを考えてしまいます。基本的に、インスト(Instrumental)系を好んでいます。
          <br><br>
          掲載曲が溜まってきましたら、リスト化する予定です。
        </p>

        <!-- <div class="schedule_wrapper">
          <h3><i class="fas fa-list-ul"></i>Music List</h3>
          <div id="schedule0" class="schedule_list">
            <ol>
              <li><a href="#POP">POP</a></li>
              <li><a href="#CHILL OUT">CHILL OUT</a></li>
              <li><a href="#JAZZ">JAZZ</a></li>
              <li><a href="#ELECTRO">ELECTRO</a></li>
              <li><a href="#HOUSE">HOUSE/DEEP HOUSE/TECHNO</a></li>
              <li><a href="#R&B">R&B / HIPHOP</a></li>
              <li><a href="#AMBIENT">AMBIENT</a></li>
            </ol>
          </div>
        </div> -->


        <i class="fas fa-compact-disc"></i><a href="https://iflyer.tv/hiyuma"> HIYUMA SHIRAI </a>
        <div class="accbox">
          <input type="checkbox" id="history" class="cssacc" />
          <label for="history"><small>DJ出演歴　OPEN</small></label>

          <div class="accshow">
            ---2012.11------
            <br><br>
            ■11/05(MON) "09EDGE"-YELLOW LEAVES-@WOMBLOUNGE
            <br><br>
            SPECIAL GUEST:NIBRICK(Takeru John Otoguro(block.fm)/RAYMOND(TheSAMOS)
            GUEST:MASAYASU from MYSS(ROC TRAX)
            <br><br>
            ■11/30(FRI) "LEVEL09"@module
            <br><br>
            SPECIAL GUEST:SUGIURUMN
            GUEST:AZUMI(Wyolicaワイヨリカ）,RAYMOND(TheSAMOS)
            <br><br>
            ---2012.10------
            <br><br>
            ■10/15(MON)U.S. - Usual Suspects - supported by SALTO@WAREHOUSE702
            [Resident of the Month DJ]
            SHINYA OKAMOTO (FOUREAL RECORDS)
            [Featuring DJ]
            FOOG（mule electronic）
            <br><br>
            ■10/19(FRI)TROUBLE HOUSE@WOMB
            OPEN TO LAST EMMA
            <br><br>
            ---2012.9------
            <br><br>
            ■09/03(MON) "09EDGE"-ETERNAL SUMMER-@WOMBLOUNGE
            SPECIAL GUEST：Takeru John Otoguro (block.fm)
            GUEST：RAYMOND（TheSAMOS）、YMASA(06S/BLANC/Paramil)
            <br><br>
            ■9/10 @MODULE
            <br><br>
            ■9/24 DJ SODEYAMA VS 桜井誠(Dragon Ash)-supported by 09EDGE@WAREHOUSE702
            <br><br>
            ---2012.8------
            <br><br>
            ■08/08(WED)Org.@AMATE-RAXI
            <br><br>
            ■08/17(FRI)TROUBLE HOUSE@WOMB
            <br><br>
            ■08/27(MON)09EDGE CAFE@原宿Good Life Lounge
            <br><br>
            ---2012.7------
            <br><br>
            ■07/02(MON)”09EDGE” 2nd ANNIVERSARY@WOMBLOUNGE
            <br><br>
            ■07/09(MON)U.S.@WAREHOUSE702
            <br><br>
            ■07/31(TUE)09EDGE CRUISING@横浜みなとみらい
            <br><br>
            <br><br>
            ---2012.6------
            <br><br>
            ■06/02(SAT)SWEET CONNECTION@メルセデスベンツコネクション六本木
            OPEN23:00
            <br><br>
            ■06/11(MON)U.S@WAREHOUSE702
            OPEN22:00
            <br><br>
            ■06/15(FRI)TROUBLE HOUSE@WOMB
            OPEN to LAST:EMMA
            OPEN23:00
            <br><br>
            ■06/25(MON)LEVO.@代官山AIR
            OPEN22:00
            <br><br>
            <br><br>
            ---2012.5------
            <br><br>
            ■05/04(FRI)NAGANO GOLDEN FESTIVAL@長野県松本市MORE HOLE
            <br><br>

            ■2012/05/07(MON)
            <br><br>
            "09EDGE "OVERROCKET「MUSIC KILLS」Pre-Release Party!!@WOMBLOUNGE
            22:00-OPEN
            <br><br>
            SPECIAL GUEST:OVERROCKET
            GUEST: A-Bee, RAYMOND (THE SAMOS),El poco maro(Block.FM)
            RESIDENT: HIYUMA (09EDGE / LEVEL09)
            <br><br>
            <br><br>
            ---2012.4-------
            <br><br>
            ■04/14(SAT)WOMB 12th ANNIVERSARY @WOMB
            <br><br>
            OSAWA SHINICHI/DEXPISTLS/DJ Aki/SODEYAMA and more
            <br><br>
            ■04/20(FRI) 「TROUBLE HOUSE」@WOMB 23:00-OPEN
            <br><br>
            OPEN to LAST:EMMA
            <br><br>
            ■04/23(MON)NEW PARTY「LAVO.」@AIR 22:00-OPEN
            <br><br>
            <br><br>
            ---2012.3-------
            <br><br>

            ■2012/03/05(mon)
            "09EDGE "SPRING TUNE SPECIAL@WOMBLOUNGE
            22:00-OPEN
            <br><br>
            SPECIAL GUEST: TACOMIMI (IMMI × JETBIKINI)
            GUEST: TSUGE (LIL), RAYMOND (THE SAMOS)
            RESIDENT: HIYUMA (09EDGE / LEVEL09)
            <br><br>

            ■03/15(THU) 「SALON」@AIR 22:00-OPEN
            <br><br>

            ■03/30(FRI) 「LEVEL09」@module 22:00-OPEN
            <br><br>
            SPECIAL GUEST：DJ SODEYAMA
            GUEST:JAVA((Silent Music/FUTURETECH)/TUNE(INTEGRATION/SPACE CRUSIN')/NKGW(HOUSE NATION/avex)
            <br><br>
            ■03/31(SAT) SWEET　CONNECTION@メルセデスベンツコネクション六本木 24:00-OPEN
            <br><br>
            ----2012.2-------------------------------------
            <br><br>
            ■02/6(MON) 「LEVEL09」@module 22:00-OPEN
            GUEST：KATO RYOTA/CASHY × yohei HIBIKI/CLAZY NEO/and more
            <br><br>

            ■02/11(SAT) GANBAN NIGHT @ageHa
            SPECIAL GUEST:EROL ALKAN
            GUEST:RORY PHILLIPS/TAKKYU ISHINO/!SOBE
            <br><br>

            ■02/17(FRI) 「TROUBLE HOUSE」@WOMB 23:00-OPEN
            OPEN to LAST:EMMA
            <br><br>
            <br><br>
            ---2011.8-------
            <br><br>
            08/6(SAT)23:00-
            ■ULTRAMUSIC@ ageHa
            <br><br>
            08/13(SAT)23:00-
            ■C-fhamc@ EVER
            <br><br>
            08/19(FRI)23:00-
            ■TROUBLEHOUSE@ WOMB
            <br><br>
            8/27(SAT)
            ■@solfa
            <br><br>
            <br><br>
            ---2011.7-------
            <br><br>
            07/8(FRI)23:00-
            ■WET@ ICON
            <br><br>
            07/18(MON)
            ■09EDGE@WOMBLOUNGE
            <br><br>
            07/26(TUE)14:00-20:00
            ■PR!ZE BEACH@逗子海岸
            <br><br>
            ---2011.6-------
            <br><br>
            06/17(FRI)23:00-
            ■TROUBLEHOUSE@WOMB
            <br><br>
            06/20(MON)
            ■SURIBAHCI@GLAD
            <br><br>
            06/27(MON)22:00-
            ■DUDE！@AIR
            <br><br>
            <br><br>
            ---2011.5-------
            <br><br>
            05/7(SAT)22:00
            ■”LINE”@Nostyle
            <br><br>
            05/09(MON)22:00-
            ■"09EDGE"@WOMBLOUNGE
            <br><br>
            05/16(MON)22:00-
            ■SURIBACHI@GLAD
            <br><br>
            05/23(MON)22:00-
            ■U.S. -Usual Suspects-support by OPUS@WEREHOUSE702
            <br><br>
            05/28(SAT)23:00-
            ■CLASH＠ageHa
            LUKE SLATER, TAKKYU ISHINO, DJ SODEYAMA,
            <br><br>
            <br><br>
            ---2011.4-------
            <br><br>
            04/01(FRI)22:00
            ■”Juggler”@amate-raxi
            テクノミュージックの祭典!!
            <br><br>
            04/02(SAT)22:00-
            ■"RAINBOW"@ROCKWEST
            <br><br>
            04/15(FRI)22:00-
            ■TROUBLEHOUSE@WOMB
            <br><br>
            04/16(SAT)23:00-
            ■"Puzzle　Radio"@EVER
            <br><br>
            04/17(SUN)14:00-21:00
            ■@NEO
            <br><br>
            04/17(SUN)15:30-
            ■セレブファッションショー「Pandora's BOX」@ラボエム骨董通り
            <br><br>
            04/25(MON)22:00-
            ■Dude!@AIR
            <br><br>
            <br><br>
            ---2011.3-------
            <br><br>
            03/01(TUE)19:00-24：00
            ■【長野県出身】必見!!”長野パーティー”@渋谷カフェスタジオ
            <br><br>

            03/07(MON)22:00-
            ■”09EDGE”＠WOMBLOUNGE
            GUEST：SHYBOY/JUSTIN ROSS(from NYC),ALCUIN/DARLING(from LONDON),RAYMOND(TheSAMOS)
            <br><br>
            03/11(FRI)22:00-
            ■80Kidz from JUN /HomeCut 出演「 WELCOME AVENNE PARTY!! 」@EVER
            <br><br>

            03/25(FRI)21:00-
            ■Freestyle Lab Japan Tour 2011@ZEPP TOKYO
            BOOM BOOM SATELLITES, THE LOWBROWS（LINDATUNE）, TAKKYU ISHINO, DEXPISTOLS
            <br><br>

            03/26(SAT)23:00-
            ■”CLASH”＠ageHa
            JOEL MULL,石野卓球
            <br><br>
            <br><br>
            ---2011.2-------
            <br><br>

            02/04(FRI)22:00-
            ■”Juggler”＠amate-raxi
            テクノミュージックの祭典!!
            <br><br>
            02/13(SAT)16:00-
            ■”SESSION”＠Glad
            <br><br>
            02/18(FRI)22:00-
            ■【EMMA】”TROUBLEHOUSE”＠WOMB
            OPEN TO LAST EMMA'S PLAY!!
            <br><br>
            02/19(SAT)23:00-
            ■”CLASH”＠ageHa!!
            田中フミヤ
            <br><br>
            02/25(SAT)23:00-
            ■”FWBA NIGHT”＠solfa
            <br><br>
            02/28(MON)22:00-
            ■”Dude!”＠AIR
            <br><br>
            <br><br>
            ---2011.01--------
            <br><br>

            01/15(SAT)23:00-
            ■”FAIRY TAIL”＠EVER
            ファッションショー「FAIRY TAIL」の新年会！
            <br><br>
            01/17(MON)22:00-
            ■”09EDGE”＠WOMB
            DEXPISTOLS[MAAR],★STARGUiTAR,SoL-RoM
            <br><br>
            01/21(FRI)
            ■”ASIENSE”@Solfa
            日本と韓国をテクノで繋げる！
            <br><br>
            01/29(SAT)23:00-
            ■CLASH＠ageHa
            <br><br><br><br>

            ---2010.12-----------
            <br><br>
            12/3(FRI)22:00-OPEN
            ■"Juggler"@AMATE-RAXI　　　　
            <br><br>
            12/18(sat)22:00-OPEN
            ■"SESSION"@WOMB　　　　　　
            <br><br>
            12/19(sun)16:00-22:00
            ■"WAVE"@WOMB　　　　　　　
            <br><br>
            12/27(mon)22:00-OPEN
            ■"Dude! "@AIR　　　　　　　　　
            <br><br>
            12/31(FRI)22:00-OPEN
            ■"NEW YEAR SP"@AMATE-RAXI　
            <br><br>
            and more...

          </div>
        </div>


        <!--テンプレ <div id="202103XX"></div>
          <!- XX ->
          <div>
            <p><small> 2021年03月XX日</small></p>

            <h4> / <i class="fas fa-headphones-alt"></i></h4>

            <i class="far fa-file-audio file"></i>
            <a href="X" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
            <br><br>
            <em2>
              時間： X
              <br>
              ジャンル： X
              <br>
              レーベル： X
            </em2>
            <br><br>
          </div>
          <hr> -->

        <!-- <div id="20210307"></div>
          <!- Widdit / LAVA LA RUE ->
          <div>
            <p><small> 2021年03月07日</small></p>

            <h4>Widdit / LAVA LA RUE<i class="fas fa-headphones-alt"></i></h4>

            <i class="far fa-file-audio file"></i>
            <a href="https://amzn.to/3bQj3rF" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
            <br><br>
            <em2>
              時間： 2:32
              <br>
              ジャンル： ヒップホップ
              <br>
              レーベル： NiNE8 COLLECTIVE
            </em2>
            <br><br>
          </div>
          <hr> -->

        <!--<div id="20210306"></div>
          <!- 7/7 / TAAR ->
          <div>
            <p><small> 2021年03月06日</small></p>

            <h4>7/7 / TAAR<i class="fas fa-headphones-alt"></i></h4>

            <i class="far fa-file-audio file"></i>
            <a href="https://amzn.to/3bbb7lL" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
            <br><br>
            <em2>
              時間： 6:07
              <br>
              ジャンル： ダンス・エレクトロニカ
              <br>
              レーベル： PARK
            </em2>
            <br><br>
          </div>
          <hr> -->

        <!-- <div id="20210305"></div>
          <!- Banane / 80KIDZ & Maika Loubté ->
          <div>
            <p><small> 2021年03月05日</small></p>
            <h4>Banane / 80KIDZ & Maika Loubté<i class="fas fa-headphones-alt"></i></h4>
            <i class="far fa-file-audio file"></i><a href="https://amzn.to/3r91rh4" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
            <br><br>
            <em2>
              時間： 3:56
              <br>
              ジャンル： ダンス・エレクトロニカ
              <br>
              レーベル： PARK
            </em2>
            <br><br>
          </div>
          <hr> -->


        <!-- <div id="20210304"></div>
          <!- When You Kill Me / Last Electro ->
          <div>
            <p><small> 2021年03月04日</small></p>
            <h4>When You Kill Me / Last Electro<i class="fas fa-headphones-alt"></i></h4>
            <i class="far fa-file-audio file"></i><a href="https://amzn.to/3b8GY6x" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
            <br><br>
            <em2>
              時間： 4:19
              <br>
              ジャンル： ダンス・エレクトロニカ
              <br>
              レーベル：  junonsaisai records
            </em2>
            <br><br>
          </div>
          <hr> -->










        <h2>今日の1曲<i class="fas fa-music"></i></h2>


        <div id="20210303"></div>
        <!- Baby / フォー・テット ->
          <div>
            <p><small> 2021年03月03日</small></p>
            <h4>Baby / フォー・テット<i class="fas fa-headphones-alt"></i></h4>
            <i class="far fa-file-audio file"></i><a href="https://amzn.to/3sEO7RY" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
            <br><br>
            <em2>
              時間： 4:24
              <br>
              ジャンル： ダンス・エレクトロニカ
              <br>
              レーベル： Text Records
            </em2>
            <br><br>
          </div>
          <hr>






          <div class="accbox">
            今日までの1曲<i class="fas fa-music"></i><br>
            <input type="checkbox" id="select-music" class="cssacc" />
            <label for="select-music">OPEN</label>

            <div class="accshow">

              <div id="20210302"></div>
              <!-- <!- In Lux (Original Mix) / Deep Sky Objects -> -->
              <div>
                <p><small> 2021年03月02日</small></p>
                <h4>In Lux (Original Mix) / Deep Sky Objects<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/2NUtCSv" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 6:01
                  <br>
                  ジャンル： エレクトロニカ
                  <br>
                  レーベル： Never Ready Records
                </em2>
                <br><br>
              </div>
              <hr>


              <div id="20210301"></div>
              <!-- <!- No Longer, Not Yet / The Unperson -> -->
              <div>
                <p><small> 2021年03月01日</small></p>
                <h4>No Longer, Not Yet / The Unperson<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/37XRFql" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 5:52
                  <br>
                  ジャンル： エレクトロニカ
                  <br>
                  レーベル： Negative Space [Ma] Records
                </em2>
                <br><br>
              </div>
              <hr>



              <div id="20210228"></div>
              <!-- <!- Vulnerable / Midnight Pool Party -> -->
              <div>
                <p><small> 2021年02月28日</small></p>
                <h4>Vulnerable / Midnight Pool Party<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/2NkeBJz" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 3:42
                  <br>
                  ジャンル： ダンス・エレクトロニカ
                  <br>
                  レーベル： Midnight Pool Party
                </em2>
                <br><br>
              </div>
              <hr>


              <div id="20210227"></div>
              <!-- <!- Where You Are / Jimpster, Khalil Anthony-> -->
              <div>
                <p><small> 2021年02月27日</small></p>
                <h4>Where You Are / Jimpster, Khalil Anthony<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/2ZB54jN" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 6:09
                  <br>
                  ジャンル： ハウス・ディープハウス
                  <br>
                  レーベル： Freerange Records
                </em2>
                <br><br>
              </div>
              <hr>

              <div id="20210226"></div>
              <!-- <!- She (feat. Barney Artist) [Mixed] / El Train -> -->
              <div>
                <p><small> 2021年02月26日</small></p>
                <h4>She (feat. Barney Artist) [Mixed] / El Train<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/3qL2dAz" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 1:55
                  <br>
                  ジャンル： ダンス・エレクトロニカ
                  <br>
                  レーベル： Kitsuné Musique
                </em2>
                <br><br>
              </div>
              <hr>


              <div id="20210225"></div>
              <!-- <!- Moon / maeshima soshi -> -->
              <div>
                <p><small> 2021年02月25日</small></p>
                <h4>Moon / maeshima soshi<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/2Mg6ZHo" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 2:18
                  <br>
                  ジャンル： エレクトロニカ
                  <br>
                  レーベル： Sony Music Labels Inc.
                </em2>
                <br><br>
              </div>
              <hr>

              <div id="20210224"></div>
              <!-- <!- AKIRA SENTIMENTAL / Last Electro -> -->
              <div>
                <p><small> 2021年02月24日</small></p>
                <h4>AKIRA SENTIMENTAL / Last Electro<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/3pEHk8Y" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 5:52
                  <br>
                  ジャンル： ダンス・エレクトロニカ
                  <br>
                  レーベル： junonsaisai records
                </em2>
                <br><br>
              </div>
              <hr>

              <div id="20210223"></div>
              <!-- <!- Get Creative / lau.ra & Nova -> -->
              <div>
                <p><small> 2021年02月23日</small></p>
                <h4>Get Creative / lau.ra & Nova<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/3kc8eUv" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 2:59
                  <br>
                  ジャンル： ダンス・エレクトロニカ
                  <br>
                  レーベル： Needwant
                </em2>
                <br><br>
              </div>
              <hr>


              <div id="20210222"></div>
              <!-- <!-Waiting / Midnight Pool Party -> -->
              <div>
                <p><small> 2021年02月22日</small></p>
                <h4>Waiting / Midnight Pool Party<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/3uk1QyZ" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 4:19
                  <br>
                  ジャンル： ダンス・エレクトロニカ
                  <br>
                  レーベル： Midnight Pool Party
                </em2>
                <br><br>
              </div>
              <hr>

              <div id="20210221"></div>
              <!-- <!- Girl (Mixed) / Neon Bunny, Children’s Corner -> -->

              <div>
                <p><small> 2021年02月21日</small></p>
                <h4>Girl (Mixed) / Neon Bunny, Children’s Corner<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/2Nx37Sn" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 2:43
                  <br>
                  ジャンル： ダンス・エレクトロニカ
                  <br>
                  レーベル： Kitsuné Musique
                </em2>
                <br><br>
              </div>
              <hr>

              <div id="20210220"></div>
              <!-- <!-  Tonight / Little People -> -->

              <div>
                <p><small> 2021年02月20日</small></p>
                <h4>Tonight / Little People<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/3jXB1w0" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 3:53
                  <br>
                  ジャンル： エレクトロニカ
                  <br>
                  レーベル： Youth and Progress Recordings
                </em2>
                <br><br>
              </div>
              <hr>

              <div id="20210219"></div>
              <!-- <!- Myself / Duñe, Twenty9 -> -->

              <div>
                <p><small> 2021年02月19日</small></p>
                <h4>Myself / Duñe, Twenty9<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/2ZjoMAc" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 2:47
                  <br>
                  ジャンル： ダンス・エレクトロニカ
                  <br>
                  レーベル： Roche Musique
                </em2>
                <br><br>
              </div>
              <hr>

              <div id="20210218"></div>
              <!-- <!- 5 A.M. / Kartell -> -->
              <div>
                <p><small> 2021年02月18日</small></p>
                <h4>5 A.M. / Kartell<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/3qhqvC1" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 4:06
                  <br>
                  ジャンル： ダンス・エレクトロニカ
                  <br>
                  レーベル： Roche Musique
                </em2>
                <br><br>
              </div>
              <hr>

              <div id="20210217"></div>
              <!-- <!- Everything Must Change (Aicube Vocal Mix) [feat. Fonogenico] / Ayur -> -->
              <div>
                <p><small> 2021年02月17日</small></p>
                <h4>Everything Must Change (Aicube Vocal Mix) [feat. Fonogenico] / Ayur<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/37b57a7" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 5:14
                  <br>
                  ジャンル： ダンス・エレクトロニカ
                  <br>
                  レーベル： FILE RECORDS INC.
                </em2>
                <br><br>
              </div>
              <hr>

              <div id="20210216"></div>
              <!-- <!- Niet II / Maika Loubté -> -->
              <div>
                <p><small>2021年02月16日</small></p>
                <h4> Niet II / Maika Loubté <i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/3pmS37y" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play "></i>
                <br><br>
                <em2>
                  時間： 4:44
                  <br>
                  ジャンル： エレクトロニカ
                  <br>
                  レーベル： WATER RECORDS
                </em2>
                <br><br>
              </div>
              <hr>


              <div id="20210215"></div>
              <!-- <!- Shooting Stars / Bag Raiders -> -->
              <div>
                <p><small> 2021年02月15日</small></p>
                <h4>Shooting Stars / Bag Raiders<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 3:47
                  <br>
                  ジャンル： エレクトロ・ポップス
                  <br>
                  レーベル： MODULAR
                </em2>
                <br><br>
              </div>

              <div id="20210214"></div>
              <!-- <!- Something For Your M.I.N.D. / スーパーオーガニズム -> -->
              <hr>
              <div>
                <p><small> 2021年02月14日</small></p>
                <h4>Something For Your M.I.N.D. / スーパーオーガニズム<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/3tQag0Y" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 2:45
                  <br>
                  ジャンル： オルタナティヴ・ロック
                  <br>
                  レーベル： Domino Recording Co
                </em2>
                <br><br>
              </div>

              <div id="20210213"></div>
              <!-- <!- Begin (feat. Wales) / Shallou -> -->
              <hr>
              <div>
                <p><small> 2021年02月13日</small></p>
                <h4>Begin (feat. Wales) / Shallou<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/3793Pwm" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 4:02
                  <br>
                  ジャンル： エレクトロニカ
                  <br>
                  レーベル： Shallou
                </em2>
                <br><br>
              </div>

              <div id="20210212"></div>
              <!-- <!- Full Circle / George FitzGerald and Boxed In -> -->
              <hr>
              <div>
                <p><small> 2021年02月12日</small></p>
                <h4>Full Circle / George FitzGerald and Boxed In<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/3tRZ97C" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 4:52
                  <br>
                  ジャンル： ダンス・エレクトロニカ
                  <br>
                  レーベル： Double Six Records
                </em2>
                <br><br>
              </div>

              <div id="202111"></div>
              <!-- <!- Hang Up (Single ver.) / Young Juvenile Youth -> -->
              <hr>
              <div>
                <p><small> 2021年02月11日</small></p>
                <h4>Hang Up (Single ver.) / Young Juvenile Youth<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/2MK4r4C" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 4:17
                  <br>
                  ジャンル： ダンス・エレクトロニカ
                  <br>
                  レーベル： Underground Gallery
                </em2>
                <br><br>
              </div>

              <div id="202110"></div>
              <!-- <!- Naboo / Hot Since 82, Miss Kittin -> -->
              <hr>
              <div>
                <p><small> 2021年02月10日</small></p>
                <h4>Naboo / Hot Since 82, Miss Kittin <i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/3p6lACq" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 5:13
                  <br>
                  ジャンル： ダンス・エレクトロニカ
                  <br>
                  レーベル： Knee Deep In Sound
                </em2>
                <br><br>
              </div>

              <div id="20210209"></div>
              <!-- <!- The Yancey / Glenn Astro -> -->
              <hr>
              <div>
                <p><small> 2021年02月09日</small></p>
                <h4>The Yancey / Glenn Astro <i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/3oYaJKZ" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 4:29
                  <br>
                  ジャンル： エレクトロニカ
                  <br>
                  レーベル： Tartelet Records
                </em2>
                <br><br>
              </div>

              <div id="20210208"></div>
              <!-- <!-His Rope / Burial & Four Tet & Thom Yorke -> -->
              <hr>
              <div>
                <p><small> 2021年02月08日</small></p>
                <h4>His Rope / Burial & Four Tet & Thom Yorke<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/2N4Y8YS" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 5:32
                  <br>
                  ジャンル： エレクトロニカ
                  <br>
                  レーベル： XL Recordings
                </em2>
                <br><br>
              </div>

              <div id="20210207"></div>
              <!-- <!- Unknown Tongues / Jlin -> -->
              <hr>
              <div>
                <p><small> 2021年02月07日</small></p>
                <h4>Unknown Tongues / Jlin<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/36RWWPT" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 3:26
                  <br>
                  ジャンル： ダンス・エレクトロニカ
                  <br>
                  レーベル： Planet Mu
                </em2>
                <br><br>
              </div>


              <div id="20210206"></div>
              <!-- <!-  Oh No / Jessy Lanza  -> -->
              <hr>
              <div>
                <p><small> 2021年02月06日</small></p>
                <h4>Oh No / Jessy Lanza <i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/3tslt7y" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 4:41
                  <br>
                  ジャンル： ダンス・エレクトロニカ
                  <br>
                  レーベル： Plugz
                </em2>
                <br><br>
              </div>

              <div id="20210205"></div>
              <!-- <!- Stop & Go (Up the Wall Dub) / The Galleria  -> -->
              <hr>
              <div>
                <p><small> 2021年02月05日</small></p>
                <h4>Stop & Go (Up the Wall Dub) / The Galleria <i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/2Mk3S1d" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 6:15
                  <br>
                  ジャンル： ダンス・エレクトロニカ
                  <br>
                  レーベル： Environ
                </em2>
                <br><br>
              </div>

              <div id="20210204"></div>
              <!-- <!- Blessed / Smerz  -> -->
              <hr>
              <div>
                <p><small> 2021年02月04日</small></p>
                <h4>Blessed / Smerz <i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/39HI60b" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 3:07
                  <br>
                  ジャンル： ダンス・エレクトロニカ
                  <br>
                  レーベル： XL Recordings
                </em2>
                <br><br>
              </div>


              <div id="20210203"></div>
              <!-- <!- Sunny's Time (Logic1000 Remix) / カリブー -> -->
              <hr>
              <div>
                <p><small> 2021年02月03日</small></p>
                <h4>Sunny's Time (Logic1000 Remix) / カリブー <i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/2L367VO" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 3:57
                  <br>
                  ジャンル： ダンス・エレクトロニカ
                  <br>
                  レーベル： PLANCHA
                </em2>
                <br><br>
              </div>

              <div id="20210202"></div>
              <!-- <!- Can you / park hye jin -> -->
              <hr>
              <div>
                <p><small> 2021年02月02日</small></p>
                <h4>Can you / park hye jin<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/3cmtVPF" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 3:39
                  <br>
                  ジャンル： ダンス・エレクトロニカ
                  <br>
                  レーベル： Ninja Tune
                </em2>
                <br><br>
              </div>

              <div id="20210201"></div>
              <!-- <!- Wait on Me EP / Felipe Gordon  ->  -->
              <hr>
              <div>
                <p><small> 2021年02月01日</small></p>
                <h4>Wait on Me EP / Felipe Gordon <i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 5:44
                  <br>
                  ジャンル： ダンス・ディープハウス
                  <br>
                  レーベル： Toy Tonics
                </em2>
                <br><br>
              </div>



              <div id="20210131"></div>
              <!-- <!- Talkin' Bout It / Young Franco feat. KLP  -> -->
              <hr>
              <div>
                <p><small> 2021年01月31日</small></p>
                <h4>Talkin' Bout It / Young Franco feat. KLP <i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/3t9mVvB" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 4:00
                  <br>
                  ジャンル： ダンス、ハウス
                  <br>
                  レーベル： TheSoundYouNeed
                </em2>
                <br><br>
              </div>



              <div id="20210130"></div>
              <!-- <!- American Boy (Amazon Original) / イヤーズ＆イヤーズ  -> -->
              <hr>
              <div>
                <p><small> 2021年01月30日</small></p>
                <h4>American Boy (Amazon Original) / イヤーズ＆イヤーズ<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/39t63bc" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 3:41
                  <br>
                  ジャンル： ポップス、エレクトロニカ
                  <br>
                  レーベル： Polydor Records
                </em2>
                <br><br>
              </div>

              <div id="20210129"></div>
              <!-- Collage (KDA vs Lady Blackbird) [Radio Edit] / KDA & Lady Blackbird -->
              <hr>
              <div>
                <p><small> 2021年01月29日</small></p>
                <h4>Collage (KDA vs Lady Blackbird) [Radio Edit] / KDA & Lady Blackbird<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 3:28
                  <br>
                  ジャンル：ダンス・エレクトロニカ > ハウス
                  <br>
                  レーベル： Foundation Music
                </em2>
                <br><br>
              </div>

              <div id="20210128"></div>
              <!-- KNOWU / YOHLU -->
              <hr>
              <div>
                <p><small> 2021年01月28日</small></p>
                <h4>KNOWU / YOHLU<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/3ok2KHD" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 3:24
                  <br>
                  ジャンル： SOUL/R&B
                  <br>
                  レーベル： BOAT
                </em2>
                <br><br>
              </div>

              <div id="20210127"></div>
              <!-- No More Sunshine / Last Electro  -->
              <hr>
              <div>
                <p><small> 2021年01月27日</small></p>
                <h4>No More Sunshine / Last Electro<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/3sS0qLB" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 3:35
                  <br>
                  ジャンル：ダンス・エレクトロニカ
                  <br>
                  レーベル： junonsaisai records
                </em2>
                <br><br>
              </div>

              <div id="20210126"></div>
              <!-- My Girl / Kan Sano -->
              <hr>
              <div>
                <p><small> 2021年01月26日</small></p>
                <h4>My Girl / Kan Sano<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/3c7ONtY" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 4:25
                  <br>
                  ジャンル： J-POP
                  <br>
                  レーベル： origami PRODUCTIONS
                </em2>
                <br><br>
              </div>

              <div id="20210125"></div>
              <!-- Pretty People / Jeremy Jones feat. Mr. Campbell, Elyssa Nicole -->
              <hr>
              <div>
                <p><small> 2021年01月25日</small></p>
                <h4>Pretty People / Jeremy Jones feat. Mr. Campbell, Elyssa Nicole<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/3c7DzG2" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 4:14
                  <br>
                  ジャンル：ヒップホップ、ポップス
                  <br>
                  レーベル： Darling Recordings
                </em2>
                <br><br>
              </div>

              <div id="20210124"></div>
              <!-- circus / showmore -->
              <hr>
              <div>
                <p><small> 2021年01月24日</small></p>
                <h4>circus / showmore<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/3qZeWQ3" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 5:14
                  <br>
                  ジャンル：J-POP
                  <br>
                  レーベル： newscope records
                </em2>
                <br><br>
              </div>


              <div id="20210123"></div>
              <!--LE GONG / Maika Loubte -->
              <hr>
              <div>
                <p><small> 2021年01月23日</small></p>
                <h4>LE GONG / Maika Loubte<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/3p1lMnx" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間：3:07
                  <br>
                  ジャンル：ダンス・エレクトロニカ
                  <br>
                  レーベル：AWDR/LR2
                </em2>
                <br><br>
              </div>

              <div id="20210122"></div>
              <!--	Talk / ディスクロージャー & カリード -->
              <hr>
              <div>
                <p><small> 2021年01月22日</small></p>
                <h4>Talk / ディスクロージャー & カリード<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/2KAOn3R" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 3:17
                  <br>
                  ジャンル：ダンス・エレクトロニカ
                  <br>
                  レーベル：Universal-Island Records Ltd.
                </em2>
                <br><br>
              </div>

              <div id="20210121"></div>
              <!-- Stay on the Light / AOKI takamasa -->
              <hr>
              <div>
                <p><small> 2021年01月21日</small></p>
                <h4>Stay on the Light / AOKI takamasa<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/35VYO9R" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 5:35
                  <br>
                  ジャンル：エレクトロニカ
                  <br>
                  レーベル： commmons
                </em2>
                <br><br>
              </div>


              <div id="20210120"></div>
              <!-- apoptosis / Caelum -->
              <hr>
              <div>
                <p><small> 2021年01月20日</small></p>
                <h4>apoptosis / Caelum<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/35VAc0G" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 5:14
                  <br>
                  ジャンル：ダンス・エレクトロニカ
                  <br>
                  レーベル： p*dis
                </em2>
                <br><br>
              </div>

              <div id="20210119"></div>
              <!-- SKYSCRAPER / AAAMYYY -->
              <hr>
              <div>
                <p><small> 2021年01月19日</small></p>
                <h4>SKYSCRAPER / AAAMYYY<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/38SuUoE" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 5:20
                  <br>
                  ジャンル：ダンス・エレクトロニカ
                  <br>
                  レーベル： AAAMYYY
                </em2>
                <br><br>
              </div>

              <div id="20210118"></div>
              <!-- Your Closet / 80KIDZ & YonYon -->
              <hr>
              <div>
                <p><small> 2021年01月18日</small></p>
                <h4>Your Closet / 80KIDZ & YonYon<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/3ssrqRv" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 4:32
                  <br>
                  ジャンル：ダンス・エレクトロニカ・ロック
                  <br>
                  レーベル： PARK
                </em2>
                <br><br>
              </div>


              <div id="20210117"></div>
              <!-- Tacit / Kizkiwa -->
              <hr>
              <div>
                <p><small> 2021年01月17日</small></p>
                <h4>Tacit / Kizkiwa<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/3nSZGC6" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 2:24
                  <br>
                  ジャンル：ヒップホップ
                  <br>
                  レーベル： Sony Music Labels Inc.
                </em2>
                <br><br>
              </div>


              <div id="20210116"></div>
              <!-- dreamin' / 53 Thieves -->
              <hr>
              <div>
                <p><small> 2021年01月16日</small></p>
                <h4>dreamin' / 53 Thieves<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/3slOUI9" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 3:27
                  <br>
                  ジャンル：ヒップホップ
                  <br>
                  レーベル： Majestic Casual Records
                </em2>
                <br><br>
              </div>

              <div id="20210115"></div>
              <!-- YOU feat. AAAMYYY & Itto / TSUBAME -->
              <hr>
              <div>
                <p><small> 2021年01月15日</small></p>
                <h4>YOU feat. AAAMYYY & Itto / TSUBAME<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/2XqbnWh" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 4:23
                  <br>
                  ジャンル：ヒップホップ
                  <br>
                  レーベル： OMAKE CLUB
                </em2>
                <br><br>
              </div>

              <div id="20210114"></div>
              <!-- & nico (Album ver.) / UKR -->
              <hr>
              <div>
                <p><small> 2021年01月14日</small></p>
                <h4>& nico (Album ver.) / UKR<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/3oEG7yz" target="blank" rel="noopener">PLAY</a><i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 3:38
                  <br>
                  ジャンル：ヒップホップ
                  <br>
                  レーベル： OMAKE CLUB
                </em2>
                <br><br>
              </div>

              <div id="20210113"></div>
              <!-- Love Strong / TAAR -->
              <hr>
              <div>
                <p><small> 2021年01月13日</small></p>
                <h4>Love Strong / TAAR<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/2LfU9bH" target="blank" rel="noopener">PLAY</a>
                <i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 5:09
                  <br>
                  ジャンル：ダンス・エレクトロニカ
                  <br>
                  レーベル： PARK
                </em2>
                <br><br>
              </div>

              <div id="20210112"></div>
              <!-- Reason in Disguise / Ezra Collective -->
              <hr>
              <div>
                <p><small> 2021年01月12日</small></p>
                <h4>Reason in Disguise / Ezra Collective<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/38k5Cj0" target="blank" rel="noopener">PLAY</a>
                <i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 3:41
                  <br>
                  ジャンル：ジャズ・フュージョン
                  <br>
                  レーベル： Enter The Jungle
                </em2>
                <br><br>
              </div>

              <div id="20210111"></div>
              <!-- All to You / Sabrina Claudio -->
              <hr>
              <div>
                <p><small> 2021年01月11日</small></p>
                <h4>All to You / Sabrina Claudio<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/2XlUV9n" target="blank" rel="noopener">PLAY</a>
                <i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 3:23
                  <br>
                  ジャンル：R＆B
                  <br>
                  レーベル： SC Entertainment
                </em2>
                <br><br>
              </div>


              <div id="20210110"></div>
              <hr>
              <div>
                <p><small> 2021年01月10日</small></p>
                <h4>Soft Universe / オーロラ<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/39e7ZTD" target="blank" rel="noopener">PLAY</a>
                <i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 3:59
                  <br>
                  ジャンル：ポップス
                  <br>
                  レーベル： Decca (UMO)
                </em2>
                <br><br>
              </div>

              <div id="20210109"></div>
              <hr>
              <div>
                <p><small> 2021年01月09日</small></p>
                <h4>F_A_R / toe<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/35l4ee9" target="blank" rel="noopener">PLAY</a>
                <i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 5:40
                  <br>
                  ジャンル：ロック
                  <br>
                  レーベル： Machupicchu INDUSTRIAS
                </em2>
                <br><br>
              </div>

              <div id="20210108"></div>
              <hr>
              <div>
                <p><small> 2021年01月08日</small></p>
                <h4>owari no kisetsu / rei harakami<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/3nd59Dy" target="blank" rel="noopener">PLAY</a>
                <i class="fas fa-play play"></i>
                <br><br>

                <em2>
                  時間： 3:19
                  <br>
                  ジャンル：ダンス・エレクトロニカ
                  <br>
                  レーベル： rings
                </em2>
                <br><br>
              </div>

              <div id="20210107"></div>
              <hr>
              <div>
                <p><small> 2021年01月07日</small></p>
                <h4>どうしよう / Tempalay<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/3nioxir" target="blank" rel="noopener">PLAY</a>
                <i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 3:41
                  <br>
                  ジャンル：ロック
                  <br>
                  レーベル： SPACE SHOWER NETWORKS INC.
                </em2>
                <br><br>
              </div>


              <div id="20210106"></div>
              <hr>
              <div>
                <p><small> 2021年01月06日</small></p>
                <h4>Wonderland (Seiho Remix) / iri<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/3nnNTf3" target="blank" rel="noopener">PLAY</a>
                <i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 4:01
                  <br>
                  ジャンル：J-POP
                  <br>
                  レーベル： Colourful Records
                </em2>
                <br><br>
              </div>



              <div id="20210105"></div>
              <hr>
              <div>
                <p><small> 2021年01月05日</small></p>
                <h4>Nighttime (mixed by SASAKI) / re:plus<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/2Ln3ONi" target="blank" rel="noopener">PLAY</a>
                <i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 3:47
                  <br>
                  ジャンル：ヒップホップ
                  <br>
                  レーベル： GOON TRAX
                </em2>
                <br><br>
              </div>


              <div id="20210104"></div>
              <hr>
              <div>
                <p><small> 2021年01月04日</small></p>
                <h4>COLD (Quavius Remix) / The fin. & 小袋成彬<i class="fas fa-headphones-alt"></i></h4>
                <i class="far fa-file-audio file"></i><a href="https://amzn.to/359oxuO" target="blank" rel="noopener">PLAY</a>
                <i class="fas fa-play play"></i>
                <br><br>
                <em2>
                  時間： 5:48
                  <br>
                  ジャンル：ダンス・エレクトロニカ
                  <br>
                  レーベル： HIP LAND MUSIC
                </em2>
                <br><br>
              </div>
            </div>

      </section>
      <?php include('parts/contents.php'); ?>
    </div>

    <div id="aside">
      <?php include('parts/prof.php'); ?>
      <?php include('parts/widget/side_widget.php'); ?>
    </div>
  </main>

  <?php include('parts/footer.php'); ?>
  <?php include('parts/footerJs.php'); ?>
  <script src="js/openAndClose.js"></script>
</body>

</html>