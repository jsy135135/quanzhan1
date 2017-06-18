<?php
//其他方法使用
$mem = new Memcache();
$mem->connect('127.0.0.1',11211);
//增加
// $mem->set('num',100,0,0);
// var_dump($mem->increment('num',10));
// $mem -> increment(key,[int])
// 按照num的幅度，对key的值进行增加操作
//减少
  // $mem -> decrement(key,[int])
  // 按照num的幅度，对key的值进行减少操作
var_dump($mem->decrement('num',100));
var_dump($mem->get('num'));
echo '<hr>';
var_dump($mem->delete('num',0));
echo '<hr>';
var_dump($mem->get('num'));
echo '<hr>';
var_dump($mem->get('name'));
echo '<hr>';
var_dump($mem->flush());
echo '<hr>';
var_dump($mem->get('name'));