<?php
//删除数据
//实列化
$mongo = new MongoClient();
//选择到集合
//链式操作
$database = $mongo->quanzhan1;
$conlletion = $database->student;
//操作
//db.student.remove({name:'xiaohong'});
$rs = $conlletion->remove(array('name' => 'xiaohong'));
var_dump($rs);