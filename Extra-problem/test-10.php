<?php
$count =0;
$value = readline();
$a = array_pad(explode(" ",$value),2,null);

for($i=0;$i<5;$i++){
    if($a[$i]=='bule'){
      $count++;
    }
}
echo $count;
?>