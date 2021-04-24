<?php
//$rows=(int)readline('Enter an integer: ');
$rows=5;
for($i=1; $i<=$rows; $i++)
{
    for($j=$i; $j<$rows; $j++)
    {
        echo "&nbsp;&nbsp;";
    }


    for($j=1; $j<=(2*$i-1); $j++)
    {
        echo "*";
    }

    echo "<br>";

}
for($i=$rows-1; $i>=1; $i--){

    for($j=$i;$j<=$rows;$j++){

        echo "&nbsp;";
    }

    for($j=(2*$i-1);$j>=1;$j--){

        echo "*";
    }

    echo "<br>";

}