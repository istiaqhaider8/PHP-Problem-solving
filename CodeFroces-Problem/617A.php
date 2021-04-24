<?php

$n = (int)readline();
$result = 0;

for ($i = 5; $i>0; $i--){

    $q = (int)($n/$i);
    $c = $n % $i;

    if ($q > 0){
    $result = $result + $q;

    }

    if ($c === 0){
    break;
    }

    if ($c > 0)
    {
    $n = $c;
    }
}
echo $result;

?>