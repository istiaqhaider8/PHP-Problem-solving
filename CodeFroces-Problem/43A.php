<?php

$n = (int)readline();
$goal = 0;

while($n--){
    if($goal != 0){
        $team = readline();
        if($team == $win){
            $goal+=1;
        }
        else{
            $goal-=1;
        }
    }

    else{
        $win = readline();
        $goal =1;
    }

}

echo $win;

?>