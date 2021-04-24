<?php

class parenClass{
    public $eyeCount = 2;
    public $legcount = 2;


    public function bogso(){
        return "sorkar bogso";
    }
}

class childClass extends parenClass{

    public $name = 'hridon';
}


$chid = new childClass;

echo $chid->bogso();

