<?php
//数组和对象类型的存储
$mem = new Memcache();
$mem->connect('127.0.0.1',11211);
//定义array数组
$arr = array(1,2,4,5,6);
//获取一个对象
class Person{
  // public 公有的  类内外都可以访问
  // private  私有的   类内访问
  // protected 受保护的  类内继承类
  // 构造方法 初始化操作  属性赋值
  private $name;
  private $age;
  public function __construct($name,$age){
    $this->name = $name;
    $this->age = $age;
  }
  //普通方法
  public function writeJs(){
    echo $this->name.' can writeJs,'.$this->name.' is '.$this->age;
  }
}
$person = new Person('xiaoquanzhan','22');
// $person->writeJs();
var_dump($mem->set('array',$arr,0,0));
echo '<hr>';
var_dump($mem->set('obj',$person,0,0));
echo '<hr>';
var_dump($mem->get('array'));
echo '<hr>';
var_dump($mem->get('obj'));
echo '<hr>';