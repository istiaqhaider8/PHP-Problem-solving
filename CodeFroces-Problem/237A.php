<?php

$n = (int)readline();
$cash = 0;
$arr =["24"]["60"];

$value = readline();
$m = explode(" ",$value);

for($i = 0; $i < $n; $i++){

    $value = readline();
    $m = explode(" ",$value);
     
     $a = $m["0"];
     $b = $m["1"];
     $arr[$a][$b]++;

     if($arr[$a][$b]>$cash){
         $cash = $arr[$a][$b];
     }
}

echo $cash;

?>