<meta charset="utf-8">
<?php
//连接mongodb
$mongo = new MongoClient("mongodb://root:root@127.0.0.1:27017/admin");
$conllection = $mongo->quanzhan1->zhilian;
//获取mysql里的数据
//连接mysql
$mysqli = new mysqli('127.0.0.1','root','root','curl');
//查询语句
$sql = 'select * from zhilian';
//执行sql
$rs = $mysqli->query($sql);
// var_dump($rs);
$data = array();
//遍历取出每一条数据
while ($row = $rs->fetch_row()) {
  // $data[] = $row;
  // push到data数组里
  array_push($data, $row);
}
// var_dump($data);die();
// echo '<pre>';
// var_dump(json_decode($data,true));
foreach ($data as $key => $value) {
  var_dump($conllection->insert($value));
  //断开value与key联系，可以节省内存
  unset($value);
  echo '<br />';
}
