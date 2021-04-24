<?php

class Test {
    public final function myName(){ //if you use final. you cna't overwright this methrods
        return "my name is Hridon";
    }
}

class Test2 extends Test{
    public function myName(){
        return "defferent value";
    }
}

$object = new Test2;

echo $object->myName();