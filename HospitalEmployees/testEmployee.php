<?php
require_once 'Employee.php';
require 'Doctor.php';
require 'Nurse.php';

$d1 = new Doctor();
$d1->setEmployeeNr('Marc');
$d1->setEmployeeNr("D1234");
$d1->setFirstName("Helene");
$d1->setLastName("Gagnon");
$d1->setLicenseNr(12345);
$d1->setSpecialty("neurology");
echo $d1->getName();
echo "<hr>";
$n1 = new Nurse(1234, "Maternity");
$n1->setFirstName("Josee");
$n1->setLastName("StOnge");

echo $n1->getName();

