<?php

class person{

    //properties
    public $name = "Hridon";
    public $age  = 21;

    //methods
    public function myfullname(){
        return "this is full name";
    }

    public function hello ($name){

        return "hello". $name;
    }

}

$object = new person;

echo $object->name;

echo $object->myfullname();

echo $object->hello('istiaq');
     

