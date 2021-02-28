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

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
  <style>
table{
  border-collapse: separate;
  border-spacing: 5px;
  margin: 10px auto;
  color:#686868;
}
table tr{
  margin-bottom: 30px;
}
th{
  padding: 10px;
  border: none;
  border-radius: 7px;
  background: linear-gradient(-45deg, rgba(221, 220, 220, 0.6), rgba(255, 236, 234, 0.9), rgba(218, 251, 237, 0.8));
}
table td{
  font-size: smaller;
  padding: 10px;
  border: none;
  border-radius: 7px;
  background: linear-gradient(-45deg, rgba(221, 220, 220, 0.6), rgba(255, 236, 234, 0.9), rgba(218, 251, 237, 0.6));
}

  </style>
</head>

<body>
  <main>
  <?php include('parts/header.php') ?>

  <?php include('parts/widget/widget_214.php'); ?>

  <?php include('parts/menuButton.php'); ?>


    <header>
      <h1 class="logo">集</h1>
    </header>

    <?php include('parts/facebook_twitter_button.php'); ?>

    <div id="article">
      <section>

        <p class="line">アンケート結果</p>
        <?php
        
        function checkInput($var)
        {
          if (is_array($var)) {
           
            return array_map('checkInput', $var);
          } else {
             //php.iniでmagic_quotes_gpcが「on」の場合の対策
            //  if(get_magic_quotes_gpc()){  
            //    $var = stripslashes($var);
            //  }
            //NULLバイト攻撃対策
            if (preg_match('/\0/', $var)) {
              die('不正な入力（NULLバイト）です。');
            }
            
            if (!mb_check_encoding($var, 'UTF-8')) {
              die('不正な文字エンコードです。');
            }
            
            if (!ctype_digit($var)) {
              die('不正な入力です。');
            }
            return (int)$var;
          }
        }

        //POSTされたデータをチェック
        $_POST = checkInput($_POST);

        $error = 0;  

        
        if (isset($_POST['gender'])) {
          $gender = $_POST['gender'];
          if ($gender == 1) {
            $gendername = '男性';
          } else if ($gender == 2) {
            $gendername = '女性';
          } else if ($gender == 3) {
            $gendername = '無回答';
          } else {
            $error = 1;  
          }
        } else {
          $error = 1;  
        }

        
        if (isset($_POST['age'])) {
          $age = $_POST['age'];
          if ($age < 1 || $age > 8) {
            $error = 1;  
          }
        } else {
          $error = 1;  
        }

       
        if (isset($_POST['lover'])) {
          $lover = $_POST['lover'];
          if ($lover == 1) {
            $loverStatus = '既婚';
          } else if ($lover == 2) {
            $loverStatus = 'いる(お付き合い1年未満)';
          } else if ($lover == 3) {
            $loverStatus = 'いる(お付き合い1年以上)';
          } else if ($lover == 4) {
            $loverStatus = 'いる(お付き合い3年以上) ';
          } else if ($lover == 5) {
            $loverStatus = 'いない(1年未満)';
          } else if ($lover == 6) {
            $loverStatus = 'いない(1年以上) ';
          } else if ($lover == 7) {
            $loverStatus = 'いない(3年以上)';
          } else if ($lover == 8) {
            $loverStatus = 'いない(友達以上、恋人未満有)';
          } else if ($lover == 9) {
            $loverStatus = 'その他';
          } else {
            $error = 1;  
          }
        } else {
          $error = 1;  
        }

        
        if (isset($_POST['request'])) {
          $request = $_POST['request'];
          if (is_array($request)) {
            foreach ($request as $value) {
              if ($value < 0 || $value > 16) {
                $error = 1; 
              }
            }
          } else {
            $error = 1;  
          }
        } else {
          $error = 1;  
        }

        //エラーがない場合の処理（結果の表示）
        if ($error == 0) {
          echo '<table>';
          echo '<tbody class="table-question"><tr><th>性別</th></tr><tr><td>' . $gendername . '</td></tr>';

          //年齢の値で分岐
          if ($age != 8) {
            echo '<tr><th>年齢</th></tr><tr><td>' . $age . '0代</td></tr>';
          } else {
            echo '<tr><th>年齢</th></tr><tr><td>80代以上</td></tr>';
          }
          //恋人いるいないの値で分岐
          if ($lover != 0) {
            echo '<tr><th>恋人いるいない</th></tr><tr><td>' .$loverStatus . '</td></tr>';
          }

          //foreach で配列の数だけ繰り返し処理
          echo '<tr><th>結婚相手に求めていること</th></tr><tr>';
          echo '<td>';
          foreach ($request as $value) {
            switch ($value) {
              case 0:
                echo '性格・雰囲気<br>';
                break;
              case 1:
                echo '誠実さ・思い遣り<br>';
                break;
              case 2:
                echo '容姿・身長<br>';
                break;
              case 3:
                echo '地位・経済力<br>';
                break;
              case 4:
                echo '常識・教養<br>';
                break;
              case 5:
                echo '家事・生活能力<br>';
                break;
              case 6:
                echo '価値観・金銭感覚の相性<br>';
                break;
              case 7:
                echo '子供好き・育児参加<br>';
                break;
              case 8:
                echo '家族関係良好<br>';
                break;
              case 9:
                echo '年齢<br>';
                break;
              case 10:
                echo '包容力<br>';
                break;
              case 11:
                echo 'ユーモア・面白さ<br>';
                break;
              case 12:
                echo 'センス<br>';
                break;
              case 13:
                echo '体の相性・体力<br>';
                break;
              case 14:
                echo '食事・趣味などの好き嫌いの相性<br>';
                break;
              case 15:
                echo 'ギャンブル・酒癖・喫煙しない<br>';
                break;
              case 16:
                echo 'その他<br>';
                break;
            }
          }
          echo '</td></tr></tbody></table>';

          $textfile = '../log/log.txt';

          $fp = fopen($textfile, 'r+b');
          if (!$fp) {
            exit('ファイルが存在しないか異常があります');
          }
          if (!flock($fp, LOCK_EX)) {
            exit('ファイルをロックできませんでした');
          }
          while (!feof($fp)) {
            $results[] = trim(fgets($fp));
          }

          if ($gender == 1) $results[0]++;
          if ($gender == 2) $results[1]++;
          if ($gender == 3) $results[2]++;

          $results[$age + 2]++;

          $results[$lover + 10]++;

          foreach ($request as $value) {
            $results[$value + 20]++;
          }
          //総計
          $results[38]++;

          rewind($fp);

          foreach ($results as $value) {
            fwrite($fp, $value . "\n");
          }

          fclose($fp);

          echo '<br><p class="message sucess">以上の内容を保存しました。<br><br>アンケートにご協力いただきありがとうございました。</p>';
          echo '<p class="message"><i class="fas fa-poll"></i><a href="qresults.php">集計結果へ</a></p>';
        } else {
          echo '<p class="message error">恐れ入りますが<a href="questionnaire.php">アンケート入力ページ</a>に戻り、アンケートの項目全てにお答えください。</p>';
         
        }

        ?>

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


</body>

</html>