<?php

$input = (string)readline();
$zero_count = 0;
$one_count = 0;

for($i = 0; $i < strlen($input); $i++){

    if($input[$i] == '0'){
        $zero_count++;
    }
    else{
        $zero_count = 0;
    }

    if($input[$i] == '1'){
        $one_count++;
    }
    else{
        $one_count = 0;
    }

    if($zero_count >= 7 || $one_count >= 7){
        echo "YES";
        break;
    }
}


if($zero_count != 7 && $one_count != 7){
    echo "NO";
}

?>