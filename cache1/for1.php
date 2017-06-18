<?php

//理解缓存区之间的关系
//开启ob
ob_start();
for ($i = 0; $i < 4; $i++) {
    echo $i . '<br />';
    //每次输出$i从ob里刷出去
    ob_flush();
    //从程序缓存刷出去
    flush();
    //暂停执行时间，单位s
    sleep(1);
}