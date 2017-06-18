<?php
//$arr1 = array(1,3, 5,7,8);
//
//foreach ($arr1 as $value) {
//    echo $value;
//    $arr1[] = 4;
//}
//
//print_r($arr1);

function t($n) {
    static $num = 1;
    for($j=1; $j<=$n; $j++){
        if($j>=4 && $j<15) {
            $num++;
            t($n-$j);
        }
        if($j==20){$num--;}
    }
    return $num;
}
echo t(30);