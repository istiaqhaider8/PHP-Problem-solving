<?php
$units = readline();


    $unit_cost_first = 3.50;
    $unit_cost_second = 4.00;
    $unit_cost_third = 5.20;
    $unit_cost_fourth = 6.50;

    if($units<=50){
        echo $unit_cost_first*$units;
    }

    else if ($units > 50  && $units <= 100 ){

        $temp = $unit_cost_first*50;
        $remind = $units - 50;
        echo $temp + ($remind*$unit_cost_second);

    }
    else if ($units > 100  && $units <= 250 ){

        $temp = $units-150;
        $remind =(3.50*50)+(4.00*100);
        echo $remind+($temp*5.20);

    }

    else{
        $temp = $units-250;
        $remind =(3.50*50)+(4.00*100)+(5.20*100);
        echo $remind+($temp*6.50);

    }


    
?>
