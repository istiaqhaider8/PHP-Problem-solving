<?php
$n = (int)readline();

for($i = 0;$i < $n;$i++){

    $x = (string) readline();
    $wordCount = strlen($x);

    if($wordCount > 10){
        echo $x[0].($wordCount - 2).$x[-1];
        echo "\n";
    }
    
    else{
        echo $x."\n";
    }
}
?>