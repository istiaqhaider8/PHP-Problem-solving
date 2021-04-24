<?php
$n = (int)readline();

$arr1 = [];
$arr2 = [];
$isSolved = false;
for ($i=0; $i < $n; $i++) { 
    $line = readline();
    $marks = explode(' ', $line);
    $arr1[$i] = (int)$marks[0];
    $arr2[$i] = (int)$marks[1];

    if ($arr1[$i] != $arr2[$i]) {
        echo 'rated';
        $isSolved = true;
        break;
    }
}

if(!$isSolved)
    {
        for($i=0; $i< $n-1; $i++)
        {
            if( $arr1[ $i]< $arr1[ $i+1])
            {
                echo("unrated\n");
                $isSolved=true;
                break;
            }
        }
    }
    if(!$isSolved)
        echo("maybe\n");