<meta charset="utf-8">
<?php
//接收用户传值
$username = $_GET['username'];
$pwd = $_GET['pwd'];
//连接redis
$redis = new Redis();
$redis->connect('127.0.0.1',6379);
//获取用户名的记录错误次数
//没有这个key，或者key的值过期
//都返回的是false
$data = $redis->get($username);
if($data ===false || $data < 3){
  //没有错误次数，或者错误次数没有超过限制次数
  //验证密码，正常是需要查询数据库的
  $truepwd = 123456;
  //判断密码是否正确
  if($pwd == $truepwd){
    echo '登录成功！';
  }else{
    echo '密码错误！';
    //在redis里进行计数
    $redis->incr($username);
    //设置key过期时间
    //用来自动解封账户
    $redis->setTimeout($username,10);
  }
}else{
  //超过错误次数
  //提示不允许登录，不连接数据库
  echo '你现在已经被限制登录了!';
}