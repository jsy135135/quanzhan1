<?php
//生成时间戳
echo time();
echo '<hr>';
//时间戳格式化为时间格式
echo date('Y-m-d H:i:s',time());
echo '<hr>';
//时间格式转为时间戳
$date = '2017-06-12 15:13:47';
echo strtotime($date);
echo '<hr>';
//面向对象化的使用方式
//格式化时间
//参数是时间格式，不是时间戳
$datetime = new DateTime($date);
echo $datetime->format('Y-m-d');