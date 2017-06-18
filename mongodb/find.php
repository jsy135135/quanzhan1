<?php
//查询数据
//实列化
//$m = new MongoClient("mongodb://用户名:密码@主机名:端口/登录的数据库")
$mongo = new MongoClient("mongodb://root:root@127.0.0.1:27017/admin");
//选择到集合
//链式操作
$database = $mongo->quanzhan1;
$conlletion = $database->student;
//操作
//db.student.find({name:'xiaoming'})
// $data = $conlletion->find(array('name' => 'xiaoming'));
$data = $conlletion->findOne(array('name' => 'xiaoming'));
var_dump($data);
//遍历对象
// echo '<pre>';
// foreach ($data as $key => $value) {
  // echo $value['name'].'<br />';
// }