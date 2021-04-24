<?php

class test{
    public const Name = 'Hridon';

    private const Name1 ='Haider';

    protected const Name2 ='Istiaq';

    public function myconname(){
        echo self::Name1;
    }

}

class test2 extends test{

    public function getcon(){

        return self::Name2;

    }
}

echo test ::Name;
echo "<br/>";

$ob = new test;
echo $ob->myconname();
echo "<br/>";

$ob1 = new test2;
echo $ob1->getcon();
echo "<br/>";

