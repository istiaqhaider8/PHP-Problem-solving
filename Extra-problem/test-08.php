<?php

$delete_item = 'march';

$month = array('january','february','march','april','may');

if(($key = array_search($delete_item, $month)) !==false){
    unset($month[$key]);
}
//  var_dump($key)
echo $key;

?>