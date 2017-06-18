<?php
//设置过期key
$mem = new Memcache();
//连接服务
$mem->connect('127.0.0.1',11211);
//设置key
//时间差设置方式
// var_dump($mem->set('age',18,0,20));
// 时间戳设置方式
// var_dump($mem->set('age',18,0,time()+10));
//获取key
var_dump($mem->get('age'));