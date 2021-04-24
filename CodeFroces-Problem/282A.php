<?Php

$x=0;
$a = readline();
for($i = 0; $i < $a; $i++){

    $s = readline();
    if($s[1] == '+'){
        $x++;
        
    }
    else{
        $x--;
    }
}

echo $x;

?>