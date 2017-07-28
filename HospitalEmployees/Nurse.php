<?php


/**
 * Description of Nurse
 *
 * @author jgamgo
 */
class Nurse extends Employee{
   private $registrationNr;
   private $department;
    
   function __construct($registrationNr, $department) {
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

   public function getName() {
        return parent::getFirstName()." ". parent::getLastName()." Rn.";
    }

}
