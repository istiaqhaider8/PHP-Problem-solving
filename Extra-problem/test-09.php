<?php

// $rows = (int)readline('enter an integer: ');
$rows = 5;

for($i = 0; $i < $rows; $i++){

    for($j = $i; $j < $rows; $j++){

        echo "&nbsp;";
    }

    for($k = 0; $k < (2*$i-1); $k++)
    {
        echo "*";
    }
    echo "<br>";
}

?>