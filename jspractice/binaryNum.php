<?php
$b = [];
$n = 0; // 格納位置
for ($i = 0; $_POST['binaryNum'] > 0; $i++) {
  $b[$i] = $n % 2;
  $n = $n / 2;
}
$n--;
while ($n >= 0) {
  print_r($b[$i]);
  $n--;
}
?>