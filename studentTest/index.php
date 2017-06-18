<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>vistahu</title>
</head>
<body>
<?php
    abstract class CowFactory{
        static $cows = array();
        static public $cownumber=0;
        static public function Create(){
            self::$cownumber = self::$cownumber +1;
            self::$cows[]=new Cow();
        }
    }
    class Cow{
        public $age;
        function __construct()
        {
            $this->age = 0;
            echo '哞哞哞...<br/>';
        }
        function haveChildren(){
            if($this->age >= 4 && $this->age<15){
                CowFactory::Create();
            }
        }
        function timeGo(){
            $this->age=$this->age+1;
        }

    }

    function yearGo($year){
        for($i=0;$i<$year;$i++){
            foreach (CowFactory::$cows as $key=>$cow) {
                $cow->timeGo();
                $cow->haveChildren();
                if($cow->age==20){
                    unset(CowFactory::$cows[$key]);
                }

            }
        }
    }

    CowFactory::Create();
    yearGo(30);
    echo count(CowFactory::$cows);


?>
</body>
</html>