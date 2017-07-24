<?php

class Employee {

//Define private members

    private $employeenumber;
    private $firstname;
    private $lastname;

//define a default constructor to use when creating an instance of this class

    function __construct() {
        
    }

    public static function WithParams($employeeNumber, $firstName, $lastName) {
        $instance = new self();
        $instance->employeenumber = $employeeNumber;
        $instance->firstname = $firstName;
        $instance->lastname = $lastName;

        return $instance;
    }

    //Another constructor with array parameter
    public static function WithArray(Array $empA) {

        $instance = new self();
        $instance->fillArray($empA);
        return $instance;
    }

//Getters and setters

    function getEmployeeNumber() {
        return $this->employeenumber;
    }

    function getFirstName() {
        return $this->firstname;
    }

    function getLastName() {
        return $this->lastname;
    }

    function setEmployeeNumber($employeeNumber) {
        $this->employeenumber = $employeeNumber;
    }

    function setFirstName($firstName) {
        $this->firstname = $firstName;
    }

    function setLastName($lastName) {
        $this->lastname = $lastName;
    }

    //define the method to fill the aray of employee

    protected function fillArray(array $emparray) {

        foreach ($emparray as $key => $value) {
            $key = strtolower($key);
            $this->{$key} = $value;
        }
    }

    //add the toString method
    public function __toString() {

        $result = "Employee Number: " . $this->employeenumber . "<br>";
        $result = $result . "Firstname: " . $this->firstname . "<br>";
        $result = $result . "Lastname: " . $this->lastname . "<br>";

        return $result;
    }

}

//$employee1 = new Employee(10567, 'Mike', 'Penn');
echo "<u>First Constructor: Employee(EmployeeNumber, FirstName, LastName)</u><br><br>";
$employee1 = Employee::WithParams(1056702, 'Mike', 'Penn');
echo $employee1;

echo "<hr>";
echo "<u>Second Constructor: Employee(Array)</u><br> <br>";

$employee2 = Employee::WithArray(array("EmployeeNumber" => 1234567,
            "FirstName" => "Jane",
            "LastName" => "Doe"));

echo $employee2;

