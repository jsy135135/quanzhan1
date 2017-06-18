<?php
error_reporting(0);
$conn = mysql_connect('localhost','root','root');
mysql_query('use quanzhan1');
// mysql_query('set names utf8');latin1
//打开该文件
$fh = fopen('./lock.txt','w');
//添加锁
flock($fh,LOCK_EX );//添加锁
// mysql_query('lock table testnum write');//添加写锁
//取出id的值
$res = mysql_query('select num from testnum');
$row = mysql_fetch_assoc($res);
$id = $row['num'];
//执行该id+1运算
$id = $id+1;
//执行结果，再写入数据库
mysql_query("update testnum set num = $id");
// mysql_query('unlock tables');
flock($fh,LOCK_UN );
//释放锁