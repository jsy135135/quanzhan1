<meta charset="utf-8">
<?php
//连接mongodb
$mongo = new MongoClient("mongodb://root:root@127.0.0.1:27017/admin");
$conllection = $mongo->quanzhan1->zhilian;
//获取文件里的数据
$data = json_decode(file_get_contents('./data.json'),true);
echo '<pre>';
// var_dump(json_decode($data,true));
foreach ($data[0] as $key => $value) {
  var_dump($conllection->insert($value));
  echo '<br />';
}
