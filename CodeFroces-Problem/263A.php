<?php

for($i = 0; $i < 5; $i++)
{

    for($j = 0; $j < 5; $j++)
    {
        $x = readline();

        if($x==1){
            $result = abs($i-3)+abs($j-3);
            echo $result;
        }
    
    } 
}

?>