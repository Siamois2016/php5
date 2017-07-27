<?php

/**
 * Description of Doctor
 *
 * @author jgamgo
 */
class Doctor extends Employee{
    private $licenseNr;
    private $specialty;
    function __construct($licenseNr, $specialty) {
        parent::__construct($employeeNr, $firstName, $lastName, $hireDate);
        $this->licenseNr = $licenseNr;
        $this->specialty = $specialty;
    }

    
    function getLicenseNr() {
        return $this->licenseNr;
    }

    function getSpecialty() {
        return $this->specialty;
    }

    function setLicenseNr($licenseNr) {
        $this->licenseNr = $licenseNr;
    }

    function setSpecialty($specialty) {
        $this->specialty = $specialty;
    }

        
    
    protected function getName() {
        return "Dr.".parent::getName();
    }

//put your code here
}
