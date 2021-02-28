<!DOCTYPE html>
<html lang="ja" class="js">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name=”robots” content=”index”>
  <meta name="description" content="長野県出身、元美容師/イベントオーガナイザーのしらひゅー(白井　飛友馬)が、WEB制作・デザイン・開発などのプログラミング言語(PHP/PHP/Java/JSP/Servlet/HTML/CSS/JavaScriptなど)や英語(TOEIC・日常英会話)、アボカド栽培などを学ぶために作成したサイトです。このページは、PHPを独学するために作成しました。現在は作成したアンケート集計機能を公開しています。特に面白味はないです。" />
  <meta name="keywords" content="プログラミング,PHP,アンケート">

  <title>しらひゅーのわくわくスタディ アンケート</title>
  <link rel="shortcut icon" href="favicon.ico" />
  <link rel="stylesheet" href="mystyle.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <div id="page_top">
    <a href="#"></a>
  </div>
  <script src="js/jquery-3.5.1.min.js"></script>
  <style>
    p.error {
      margin: 0;
      color: red;
      font-weight: bold;
      margin-bottom: 1em;
    }

    #submitAria {
      text-align: center;
    }

    label {
      display: inline-block;
      margin: 5px 15px 5px 3px;

    }

    .submitButton {
      margin: 30px auto;
      display: inline-block;
      border-radius: 10%;
      font-size: 11pt;
      font-weight: bold;
      text-align: center;
      cursor: pointer;
      padding: 8px 11px;
      background: rgba(250, 230, 230, 0.62);
      color: #998d8d;
      line-height: 1em;
      transition: .3s;
      box-shadow: 1px 1px 9px #666666;
      border: none;
    }
    
    .submitButton:hover {
      box-shadow: none;
      color: rgba(250, 163, 110, 0.62);
      background: #ffffff;
    }

    .bold {
      font-weight: bold;
    }

    select {
      appearance: none;
      margin-bottom: 20px;
      padding: 7px 30px 7px 10px;
      font-size: 93%;
      line-height: 1.1em;
      border-radius: 5px;
      border: none;
      background-image: url(gallery/ICONS/angle-down-solid.svg);
      background-repeat: no-repeat;
      background-size: 12px 10px;
      background-position: right 10px center;
      background-color: #ffffff;
      outline-style: none;
    }

  </style>
</head>

<body>

<?php include('parts/header.php') ?>

<?php include('parts/widget/widget_214.php'); ?>
  <main>
   

  <?php include('parts/menuButton.php'); ?>
  


    <header>
      <h1 class="logo">集</h1>
    </header>

    <?php include('parts/facebook_twitter_button.php'); ?>

    <div id="article">
      <section>

        <h1 class="line">アンケート<i class="far fa-edit"></i></h1>
        
          <p id="top-img-p">
            <img src="gallery/top/questionnaire2.jpg" alt="文房具">
          </p>
        <p>
        <i class="fab fa-php"></i>PHP独学の一環で、1から作成してみたアンケート・集計機能です。(データベースとの連携なし)
          <br><br>
          もしよろしければ、アンケート回答（4つの質問）のご協力をお願い致します。
          <br><br>
          アンケート内容に関しては、特に意味はありません。
          <br><br>
          そのうち、実験的に別のアンケート内容を追加する可能性があります。
          <br><br>
          PHPでの配列、ループ処理、ファイル読み書き、計算式が正常に機能するか確認するために作成しました。
          <br><br>
          最後のページで計算して結果を確認できるようにしました。
          <br><br>
          <em4>完全匿名性です。誰が、どう回答したかなどの確認はできません。</em4>
        </p>
        <hr>
        <br>
        <form action="qconfirm.php" method="post">

          <div class="gender">
            <p class="bold">① 性別 <i class="fas fa-male"></i><i class="fas fa-female"></i> </p>
            <input type="radio" name="gender" id="male" value="1" class="required">
            <label for="male"> 男性 </label>
            <input type="radio" name="gender" id="female" value="2">
            <label for="female"> 女性 </label>
            <input type="radio" name="gender" id="others" value="3">
            <label for="others"> 無回答 </label>
          </div>
          <br>

          <div>
            <p class="bold"><label for="age">② 年齢 <i class="fas fa-clock"></i></label></p>
            <select name="age" id="age">
              <option value="0" selected>選択してください。</option>
              <?php
              for ($num = 1; $num <= 7; $num++) {
                echo '<option value="' . $num . '">' . $num . '0代</option>' . "\n";
              }
              ?>
              <option value="8">80代以上</option>
            </select>
          </div>
          <br>
          <div class="lover">
            <p class="bold">③ 恋人いる・いない <i class="far fa-heart"></i> </p>
            <input type="radio" name="lover" id="marryed" value="1" class="required">
            <label for="marryed"> 既婚 </label>
            <br>
            <input type="radio" name="lover" id="exist1" value="2">
            <label for="exist1"> いる(お付き合い1年未満) </label>
            <br>
            <input type="radio" name="lover" id="exist2" value="3">
            <label for="exist2"> いる(お付き合い1年以上) </label>
            <br>
            <input type="radio" name="lover" id="exist3" value="4">
            <label for="exist3"> いる(お付き合い3年以上) </label>
            <br>
            <input type="radio" name="lover" id="notexist1" value="5">
            <label for="notexist1"> いない(1年未満) </label>
            <br>
            <input type="radio" name="lover" id="notexist2" value="6">
            <label for="notexist2"> いない(1年以上) </label>
            <br>
            <input type="radio" name="lover" id="notexist3" value="7">
            <label for="notexist3"> いない(3年以上) </label>
            <br>
            <input type="radio" name="lover" id="notexist4" value="8">
            <label for="notexist4"> いない(友達以上、恋人未満有) </label>
            <br>
            <input type="radio" name="lover" id="others" value="9">
            <label for="others"> その他 </label>

          </div>
          <br>
          <div>
            <p class="bold">④ 結婚相手に求めていること　(複数選択可) <i class="fas fa-laugh"></i></p>
            <?php
            $request = array(
              0 => "性格・雰囲気",
              1 => "誠実さ・思い遣り",
              2 => "容姿・身長",
              3 => "地位・経済力",
              4 => "常識・教養",
              5 => "家事・生活能力",
              6 => "価値観・金銭感覚の相性",
              7 => "子供好き・育児参加",
              8 => "家族関係良好",
              9 => "年齢",
              10 => "包容力",
              11 => "ユーモア・面白さ",
              12 => "センス",
              13 => "体の相性・体力",
              14 => "食事・趣味などの好き嫌いの相性",
              15 => "ギャンブル・酒癖・喫煙しない",
              16 => "その他"
            );
            $ids = array('personality', 'sincerity', 'appearance', 'economy', 'educated', 'housework', 'values', 'childcare', 'family', 'ages', 'tolerance', 'interesting', 'sense', 'compatibility', 'dislikes', 'gambling', 'requestother');

            foreach ($request as $key => $value) {
              if ($key == 0) {
                echo '<label for="personality"><input type="checkbox" name="request[]" value="0" id="personality" class="required">' . $value . '</label>' . "\n";
              } else {
                echo '<label for="' . $ids[$key] . '"><input type="checkbox" name="request[]" value="'
                  . $key . '" id="' . $ids[$key] . '">' . $value . '</label>' . "\n";
              }
            }

            ?>



            <div id="submitAria">
              <input type="submit" value="送信する" class="submitButton">
            </div>
        </form>

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
  <script src="js/menu.js"></script>
  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script type="text/javascript">
    jQuery(function($) {
      $("form").submit(function() {
        //エラー表示の初期化
        $("p.error").remove();
        $("div").removeClass("error");
        var text = "";

        //ラジオボタンの検証
        $(":radio").filter(".required").each(function() {
          if ($('input[name="' + $(this).attr("name") + '"]:checked').size() == 0) {
            text = $(this).parent().find('p').text();
            $(this).parent().prepend("<p class='error'>" + text + "を選択してください。</p>");
          }
        })

        //セレクトメニューの検証
        $("select").each(function() {
          if ($(this).val() == 0) {
            text = $(this).parent().find('label').text();
            $(this).parent().prepend("<p class='error'>" + text + "を選択してください。</p>");
          }
        });

        //チェックボックスの検証
        $(":checkbox").filter(".required").each(function() {
          if ($('input[name="' + $(this).attr("name") + '"]:checked').size() == 0) {
            text = $(this).closest('div').find('p').text();
            $(this).parent().prepend("<p class='error'>" + text + "を選択してください。</p>");
          }
        })

        //error クラスの追加の処理
        if ($("p.error").size() > 0) {
          $("p.error").parent().addClass("error");
          return false;
        }

      })

    });
  </script>
  <?php include('parts/footerJs.php'); ?>


</body>

</html>