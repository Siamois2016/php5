<?php

class Faculty
{
    private $emp_no;
    private $rate;
    
    function getRate() {
        echo "F";
        return $this->rate;
    }

    function setRate($rate) {
        echo "F";
        $this->rate = $rate;
    }

    function getEmp_no() {
        return $this->emp_no;
    }

    function setEmp_no($emp_no) {
        $this->emp_no = $emp_no;
    }
}

class Instructor extends Faculty
{
    private $rate;

    function getRate() {
        //return $this->rate;
        
        return parent::getRate();
    }

    function setRate($rate) {
        $this->rate = $rate;
    }
}

class Professor extends Faculty
{
    private $salary;
    
    function getSalary() {
        return $this->salary;
    }

    function setSalary($salary) {
        $this->salary = $salary;
    }
}

$instr1 = new Instructor();
$instr1->setEmp_no(1234);
$instr1->setRate(200);

echo $instr1->getRate();
