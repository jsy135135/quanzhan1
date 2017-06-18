<?php
//使用多个memcache
$mem = new Memcache();
// $mem->addServer('127.0.0.1',11212);
// $mem->addServer('127.0.0.1',11213);
$mem->addServer('127.0.0.1',11214);
//存储数据
// var_dump($mem->set('name1','name1',0,0));
// echo '<hr>';
// var_dump($mem->set('name2','name2',0,0));
// echo '<hr>';
// var_dump($mem->set('name3','name3',0,0));
// echo '<hr>';
// var_dump($mem->set('zzz','zzzz',0,0));
//读取数据
var_dump($mem->get('name1'));
echo '<hr>';
var_dump($mem->get('name2'));
echo '<hr>';
var_dump($mem->get('name3'));
echo '<hr>';
var_dump($mem->get('zzz'));
// echo '<hr>';