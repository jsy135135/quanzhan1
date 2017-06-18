<meta charset="utf-8">
<?php
//抢购操作页面
$redis = new Redis();
$redis->connect('127.0.0.1',6379);
//把list的元素一个一个出来，一个个买商品
$shopid = $redis->rPop('shoplist2');
var_dump($shopid);
// if(){
//   echo '恭喜你，抢到了！';
// }else{
//   echo '不好意思，卖完了！';
// }
