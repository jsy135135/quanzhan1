<?php
// ob_start();
// for ($i=0; $i < 3 ; $i++) {
//   echo $i.'<br />';
//   ob_flush();
//   flush();
//   sleep(1);
// }
// $age = 19;
// echo "you age is {$age}?";
// $a = array(1=>5,5=>8,22,2=>'8',81);
// var_dump($a);
// echo $a[7];echo $a[6];echo $a[3];
// $a = 0;
// $b=4;
// if($a || $b=5){

// }
// echo $b;
// $test = 'aa';
// $abc= &$test;
// echo $abc;
// $test = 'bb';
// echo $abc;
// unset($test);
// echo $abc;
// echo date('Y-m-d 00:00:00',strtotime('last sunday'));
// $str = 'i-am-tom';
// function strtoUp($str){
//   $arr = explode('-',$str);
//   foreach ($arr as $key => &$value) {
//     $value = ucwords($value);
//   }
//   $str = implode($arr,'');
//   return $str;
// }
// echo strtoUp($str);
// echo ucwords($str);
// 1-100000
// 100001-20000
function getUserTableName($userid){
  if(strlen($userid) > 5){
    echo substr($userid, 0,1);
  }else{
    echo 1;
  }
}
getUserTableName('56');
