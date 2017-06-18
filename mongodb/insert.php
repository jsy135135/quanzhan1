<?php
//添加数据
//实列化
$mongo = new MongoClient();
//选择到集合
//链式操作
$database = $mongo->quanzhan1;
$conlletion = $database->student;
//操作
// db.student.insert({name:'xiaoming',age:18});
$rs = $conlletion->insert(array('name' => 'xiaoming','age' => 18));
var_dump($rs);
