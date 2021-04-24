<?php

class test {

    public $x  =   100;
    private $y  =  200;
    protected $z = 300;


    public function privateMethod(){

        return $this->y;
    }
}



class ChildClass extends test {

    public function asscss(){
        return $this->z;
    }
}


$boject = new test;

echo $boject->x;
echo "<br/>";

echo $boject->privateMethod();
echo "<br/>";

echo (new childClass) -> asscss();
echo "<br/>";