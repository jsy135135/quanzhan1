<meta charset="utf-8">
<?php
//获取是否有缓存
$mem = new Memcache();
$mem->connect('127.0.0.1', 11211);
$data = $mem->get('data');
//没有数据，或者数据过期返回false
//严格判断，同时判断类型
if ($data === false) {
    // echo 'this is mysql data!';
    //没有缓存
    //查询数据库数据
    $mysqli = new mysqli('127.0.0.1', 'root', 'root', 'curl');
    $sql = 'select * from zhilian limit 5';
    $rs = $mysqli->query($sql);
    // var_dump($rs);
    $data = array();
    while ($row = $rs->fetch_row()) {
        // $data[] = $row;
        array_push($data, $row);
    }
    $mem->set('data', $data, 0, 5);
} else {
    // echo 'this is memcache data!';
}
// var_dump($data);
foreach ($data as $key => $value) {
    foreach ($value as $k => $v) {
        ?>
        <div><?php echo $v ?></div>
        <?php
    }
}
?>