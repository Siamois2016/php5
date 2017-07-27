<?php


/**
 * Abstract Class HospitalEmployees:
 * An abstract class defining the behaviour of all hospital employee
 * All type of employee must extend this class.
 * Only the salary cannot be modified 
 * @property String $employeeNr: The employee identification number
 * @property String $firstName: Employee first name
 * @property String $lastName: Employee Last name
 * @property Date $hireDate: Employee's employment start date
 * @property String $salary: Employee's salary(final)
 *  
 * @author jgamgo
 */
abstract class Employee {
    private $employeeNr;
    private $firstName;
    private $lastName;
    private $hireDate;
    private $salary; //must not be overritten
    //constructor
    
    function __construct($employeeNr, $firstName, $lastName, $hireDate) {
        $this->employeeNr = $employeeNr;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->hireDate = $hireDate;
    }

    
    function getEmployeeNr() {
        return $this->employeeNr;
    }

    function getFirstName() {
        return $this->firstName;
    }

    function getLastName() {
        return $this->lastName;
    }

    function getHireDate() {
        return $this->hireDate;
    }

    function setEmployeeNr($employeeNr) {
        $this->employeeNr = $employeeNr;
    }

    function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    function setHireDate($hireDate) {
        $this->hireDate = $hireDate;
    }
    //set the getter and setter final. No modification allow
   final function getSalary() {
        return $this->salary;
    }

    final function setSalary($salary) {
        $this->salary = $salary;
    }

    public function getName(){
        return $this->firstName.", ".$this->lastName;
    }
}
