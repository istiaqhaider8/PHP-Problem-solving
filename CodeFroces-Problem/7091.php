<?php
$paramenter = readline();
$paramenter_line = explode(" ",$paramenter);


$sum = 0;
$a = (int)$paramenter_line['0'];
$b = (int)$paramenter_line['1'];

while($a<=$b){
   $a = $a*3;
   $b = $b*2;

   $sum++;

}

echo $sum;