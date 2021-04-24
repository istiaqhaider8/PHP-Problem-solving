<?php

$count = 0;

$a =(int)readline();

$value = readline();
$arr = array_pad( explode(" ",$value),$a,null);

$max = $arr[0];
$min = $arr[0];

for($i = 0; $i < $a; $i++){

    if($arr[$i] > $max){

        $max = $arr[$i]  ;
        $count++;
    }

    if($arr[$i]<$min){

        $min = $arr[$i]; 
        $count++;

    }  
}

echo $count;

?>