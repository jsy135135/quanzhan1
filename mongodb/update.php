<?php
//修改数据
//实列化
$mongo = new MongoClient();
//选择到集合
//链式操作
$database = $mongo->quanzhan1;
$conlletion = $database->student;
//操作
//db.student.update({name:'xiaoming'},{'$set':{age:19}})
$rs = $conlletion->update(array('name' => 'xiaoming'),array('$set' => array('age' => 19)));
var_dump($rs);