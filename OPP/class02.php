<?php

class student{
    public $name;
    public $age;
    public $cgpa;

    public function getName(){
    
        return $this->name;
    }

    public function getAge(){

        return $this->age;
    }

    public function getCgpa(){

        return $this->cgpa;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setAge($age){
        $this->age = $age;
    }
    public function setcgpa($cgpa){
        $this->cgpa = $cgpa;
    }
}

$student1 = new student;

$student1->setName("hridon");
$student1->setAge(21);
$student1->setcgpa(3.12);

echo $student1->getName();
echo "<br/>";
echo $student1->getage();
echo "<br/>";
echo $student1->getcgpa();
echo "<br/>";

