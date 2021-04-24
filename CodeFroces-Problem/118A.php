<?php

$s = (readline());
$x = strlen($s);

for($i = 0; $i < $x; $i++){

    if($s[$i] == 'a' || $s[$i] == 'e' || $s[$i] == 'i' || $s[$i] == 'o' || $s[$i] == 'u' || $s[$i] == 'y' || $s[$i] == 'A' || $s[$i] == 'E' || $s[$i] == 'I' || $s[$i] == 'O' || $s[$i] == 'U' || $s[$i] == 'Y' ){
      
        continue;

    }

    else{
    
        $count = strtolower($s[$i]);
    } 
    
    echo ".".$count;
}



?>