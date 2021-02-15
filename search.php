<!-- user_list.php -->
<?php
//データベースへ接続
$dsn = 'mysql:dbname=developershirai_user;host=localhost;charset=utf8';
$user = 'developershirai_user';
$password = 'post2021';

try {
  $db = new PDO($dsn, $user, $password);
  print '接続に成功しました。';
} catch (PDOException $e) {
  print "接続エラー：{$e->getMessage()}";
} finally {
  $db = null;
}

$pdo = new PDO($dsn, $user, $password);
$stmt = $pdo->query("SELECT * FROM user WHERE user_name ='" . $_POST["user_name"] . "' OR pass LIKE  '%" . $_POST["pass"] . "%')");

?>
<!DOCTYPE html>
<html lang="ja">

<head>

  <title>User List</title>
</head>

<body>

  <form action="search.php" method="post">
    User Name:<input type="text" name="user_name" value="<?php echo $_POST['user_name'] ?>"><br>
    <?php
    if (preg_match("/[^0-9A-Za-z]/", $_POST['user_name'])) {
      echo " User Nameは英数字で入力してください！";
    }
    ?>
    pass:<input type="text" name="pass" value="<?php echo $_POST['pass'] ?>"><br>
    <input type="submit">
  </form>
  <table>
    <tr>
      <th>User Name</th>
      <th>Password</th>
    </tr>
    <?php foreach ($stmt as $row) : ?>
      <tr>
        <td><?php echo $row[0]; ?></td>
        <td><?php echo $row[1]; ?></td>
      </tr>
    <?php endforeach; ?>
    <?php echo $stmt ?>
    <?php echo $username ?>
    <?php echo $_POST['user_name'] ?>
    <?php echo $_POST['pass'] ?>
    <?php
    var_dump($stmt);
    var_dump($row[0]);
    var_dump($row[1]);
    ?>
  </table>

<a href="https://developershirai.com/">HOME</a>
</body>

</html>