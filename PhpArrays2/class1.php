<?php


class Student
{
    private $age = 5;
    
    public function DisplayAge()
    {
        echo "My age is : " . $this->age;
    }
    
    public function GetAge()
    {
        return $this->age;
    }
}

$s1 = new Student;
$s1->age = 22;
//$s1->DisplayAge();

echo "The age of the student is ",$s1->GetAge();