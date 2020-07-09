<?php require './header.php'?>
<?php

function calc($bottom,$height){

  //if文と正規表現で判定、底辺高さ共に値が数字ならtrue
  if(preg_match('/[0-9]/',$bottom) && preg_match('/[0-9]/',$height)){
    $result = ($bottom + $height) / 2 .'<a href="container_input.php">戻る</a>';
    return $result;
  } else {
    return '半角数値以外入力できません。'.'<a href="container_input.php">戻る</a>';
  }

} 
  
//送られてきた値をmb_convert_kana()の第二引数をnにして強制的に半角数字にする。
$bottom = mb_convert_kana($_REQUEST['bottom'],'n');
$height = mb_convert_kana($_REQUEST['height'],'n');

echo calc($bottom,$height);

?>
<?php require './footer.php'?>