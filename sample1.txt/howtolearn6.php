<?php
function sum($max) {
    return $max * 2;
}
echo sum(2). "\n";

function sum2($a, $b){
    return $a + $b;
}
echo sum(1,2)  ."\n";


function sum3($arr){
    $result = 1;
    foreach($arr as $a){
    $result *= $a;
    }
    return $result;
}
echo sum3(array(1,3,5,7,9));
echo "\n";

 function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
     if($max_number<$a){
         $max_number = $a;
     }
 }
 return $max_number;
 }
  echo max_array ([5,2,3,9,7]);
  echo "\n";