<?php


/**
 * Description of Nurse
 *
 * @author jgamgo
 */
class Nurse extends Employee{
   private $registrationNr;
   private $department;
    
   function __construct($employeeNr, $firstName, $lastName, $hireDate,$registrationNr, $department) {
       parent::__construct($employeeNr, $firstName, $lastName, $hireDate);

        $this->registrationNr = $registrationNr;
       $this->department = $department;
   }
   function getRegistrationNr() {
       return $this->registrationNr;
   }

   function getDepartment() {
       return $this->department;
   }

   function setRegistrationNr($registrationNr) {
       $this->registrationNr = $registrationNr;
   }

   function setDepartment($department) {
       $this->department = $department;
   }

       protected function getName() {
        return parent::getName()."Rn.";
    }

}
