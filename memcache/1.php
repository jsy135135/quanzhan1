<?php
//实列化
$mem = new Memcache();
//连接服务
$mem->connect('127.0.0.1',11211);
//设置key
//set(key,value,是否压缩0/1,过期时间[0为不过期])
$rs = $mem->set('name','quanzhan1',0,0);
var_dump($rs);
$data = $mem->get('name');
echo '<br />';
var_dump($data);
