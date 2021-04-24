<?php

$n =(int)readline();


$sum=0;

for($i = 0; $i < $n; $i++)
{
   $a = (int)readline();
   $b = (int)readline();

   if($a[$i] == $b[$i]){
     $sum++;
   }
}

if($sum!=$n){
  echo("rated" . "<br />");
}

else{
  $ans = 0;
  for($i = 0; $i < $n; $i++){
    if($a[$i] >= $b[$i])
        $ans++;
  }

  if($ans==$n)
    echo("maybe" . "<br />");
    
  else
  echo("unrated" . "<br />");
}



