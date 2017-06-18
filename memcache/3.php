<?php
//多种数据类型的存储
$mem = new Memcache();
$mem->connect('127.0.0.1',11211);
//标量类型
$int = 3;
$string = 'quanzhan1';
$float = 183.23;
$bool = true;
var_dump($mem->set('int',$int,0,0));
echo '<hr>';
var_dump($mem->set('string',$string,0,0));
echo '<hr>';
var_dump($mem->set('float',$float,0,0));
echo '<hr>';
var_dump($mem->set('bool',$bool,0,0));
echo '<hr>';
var_dump($mem->get('int'));
echo '<hr>';
var_dump($mem->get('string'));
echo '<hr>';
var_dump($mem->get('float'));
echo '<hr>';
var_dump($mem->get('bool'));
echo '<hr>';
