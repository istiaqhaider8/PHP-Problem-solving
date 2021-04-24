<?php

$a = readline();
$b = readline();

for($i = 0; $i < strlen($a); $i++ ){

    $a[$i] = strtolower($a[$i]);
    $b[$i] = strtolower($b[$i]);
}
if($a==$b){
    echo "0";
}
else
{
   for($i = 0; $i < strlen($a); $i++ )
   {
       if($a[$i]<$b[$i])
       {
           echo "-1";
           break;
       }
       
       if($a[$i]>$b[$i])
       {
        echo "1";
        break;

       }

       
   }
}

?>