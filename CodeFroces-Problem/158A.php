<?php
$count = 0;
$paramenter = readline();
$paramenter_line = explode(" ",$paramenter);


$n = (int)$paramenter_line['0'];
$k = (int)$paramenter_line['1'];

$value = readline();
$a = array_pad( explode(" ",$value),2,null);

for($i = 0; $i <  $n; $i++){

    if( $a[$i] != 0 ){
      
      if($a[$i] >= $a[$k-1] ){

        $count++;
    }

   }
}

echo $count;

?>