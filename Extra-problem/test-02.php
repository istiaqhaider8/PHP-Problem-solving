<?php

$n =(int)readline();

$allNumbers = [];

for($i =0; $i < $n; $i++){

    $line = readline();
    $numbers = explode(' ', $line);

  for($j = 0; $j < 3; $j++){

    $allNumbers[$i][$j] = (int)$numbers[$j];

  }
    
    
}
var_dump($allNumbers);


