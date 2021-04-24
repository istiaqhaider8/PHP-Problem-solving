<?php

 function factorail ($number){
  if($number<2){
      return 1;
  }

  else{
      return($number * factorail($number-1));
  }
}

echo factorail(4);

?>