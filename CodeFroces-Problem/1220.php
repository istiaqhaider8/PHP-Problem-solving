<?php

$lenght=(int)readline();
$chars = readline();

$number = 0;

for($i = 0; $i < $lenght; ++$i){

    if($chars[$i]=='n'){
        echo "1 ";
    }

    if($chars[$i]=='z'){
        ++$number;
    }
    
}

for ($i = 0; $i < $number; ++$i) {

    echo("0 ");
}