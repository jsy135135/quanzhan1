<?php
//排队买商品，一个一个卖出去
//不能有超卖现象
//连接redis
  $redis = new Redis();
  $redis->connect('127.0.0.1',6379);
  //生成多个商品id，添加到redis里的list结构
  for ($i=0; $i < 20 ; $i++) {
    //添加元素i到list中
    //$redis->lPush('key1', 'C'); // returns 1
    $redis->lPush('shoplist2',$i);
  }