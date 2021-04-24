<?php

$n = readline();
$count = 0;


for($i = 0; $i < $n; $i++){

    $value = readline();
    $x = explode(" ",$value);
    
    
    $a = (int)$x['0'];
    $b = (int)$x['1'];
    $c = (int)$x['2'];

    if(($a+$b+$c)>=2){
        $count++;
    }

}

echo $count;

?>
