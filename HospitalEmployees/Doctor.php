<?php

/**
 * Description of Doctor
 *
 * @author jgamgo
 */

class Doctor extends Employee{

    
    private $licenseNr;
    private $specialty;
       
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

        
    
    public function getName() {
        return "Dr.".parent::getFirstName()." ". parent::getLastName();
    }

}
