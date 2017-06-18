<meta charset="utf-8">
<?php
//判断文件是否存在。并且是否过期
$id = $_GET['id'];
$filename = "./statichtml/$id.html";
//判断存在，并且没有过期
//设置10s过期
if(file_exists($filename) && (time()-filemtime($filename)) < 10){
  //引入静态
  //输出静态页面
  include "$filename";
  // echo file_get_contents('./static.html');
}else{
  //开启ob
  ob_start();
  // echo '<html>this is static test php pages</html>';
  //连接mysql取出数据
  mysql_connect('127.0.0.1','root','root');
  mysql_select_db('quanzhan1');
  mysql_query('set names utf8');
  $sql = "select * from zhilian where id = $id";
  $res = mysql_query($sql);
  //遍历资源集
  $data = mysql_fetch_assoc($res);
  // var_dump($data);
  //遍历输出
  foreach ($data as $key => $value) {
      echo $value.'<br />';
  }
  //生成静态页面
  $content = ob_get_contents();
  //保存文件
  $rs = file_put_contents($filename, $content);
  //判断是否生成成功
  echo '<br/>';
  if($rs){
    // echo 'static page create is success';
  }else{
    // echo 'failed';
  }
}
