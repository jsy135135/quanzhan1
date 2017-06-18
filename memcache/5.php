<?php
$mem = new Memcache();
$mem->connect('127.0.0.1',11211);
//存储NULL
var_dump($mem->set('null',NULL,0,0));
echo '<hr>';
//存储资源类型
$resource = mysql_connect('localhost','root','root');
// var_dump($resource);
var_dump($mem->set('resource',$resource,0,0));
echo '<hr>';
//取出数据
var_dump($mem->get('null'));
echo '<hr>';
var_dump($mem->get('resource'));
echo '<hr>';