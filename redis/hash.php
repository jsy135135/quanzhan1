<?php
$redis = new Redis();
$redis->connect('127.0.0.1',6379);
$username = $_GET['username'];
$password = $_GET['password'];
$userid = $redis->incr('maxid');
//设置hash
$userData = array('username' => $username,'password' => $password,'userid' => $userid);
$res = $redis->hmSet($username,$userData);
var_dump($res);