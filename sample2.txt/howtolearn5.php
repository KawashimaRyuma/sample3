<?php
$name = "ryuma";
if ($name == "ryuma") {
    echo "私は" . $name ."です";
    echo "\n";
}else {
    echo $name . "ではありませｎ";
    echo "\n";
}

$total = 0;
for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
echo "\n";

$fruits = array("strawberry", "peach", "melon", "apple", "kiwi");
foreach($fruits as $fruits){
    echo "要素は" . $fruits;
    echo "\n";
}

$start = 1;
$end = 100;
for($i = $start; $i < $end; $i++){
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }  
}