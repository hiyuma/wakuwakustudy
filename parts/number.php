<?php

$num = @$_POST['num'];

if(preg_match("/[^0-9]/", $num)){
  echo '数値以外が入力されています。';
}
if(strlen($num) > 20) {
  echo '20桁以下で入力してください。' ;
  goto end;
}
if(is_null($num)){
  echo '入力されていません';
}

if ($num > 0) {
  if ($num % 2 === 0) {
    echo $num . 'は、正の偶数です';
  } else {
    echo $num . 'は、正の奇数です';
  }
} else if ($num < 0) {
  if ($num % 2 === 0) {
    echo $num . 'は、負の偶数です';
  } else {
    echo $num . 'は、負の奇数です';
  }
} else if($num === 0) {
  echo $num . 'は、何もないことに対応する基数、最小の非負整数です';
} 
end:

?>