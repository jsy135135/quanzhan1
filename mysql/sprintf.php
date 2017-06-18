<meta charset="utf-8">
<?php
//sprintf 拼接字符串模板
$classname = 'itcastquanzhan1';
$str = '我是'.$classname.'的学员';
echo $str;
echo '<hr>';
$str1 = "我是%s的学员,我%d岁";
$age = 18;
echo sprintf($str1,$classname,$age);