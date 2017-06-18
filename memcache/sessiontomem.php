<?php

//设置session入memcache
ini_set('session.save_handler', 'memcache');
ini_set('session.save_path', 'tcp://127.0.0.1:11211');
//开启session
session_start();
//设置session
var_dump($_SESSION['name'] = 'quanzhan1');
echo '<hr>';
echo session_id();
