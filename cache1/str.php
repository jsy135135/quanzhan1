<?php
//开启ob缓存
ob_start();
echo 'this is string';
header('Content-type:text/html;charset=utf-8');
echo 'this is string2';