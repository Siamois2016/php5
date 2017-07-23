<?php

//use Employee;

/**
 * Description of Employee
 * This class will sort class objects in an array.
 * @author josiane Gamgo
 */
class Employee {

//Define private members

private $employeeNumber;
private $firstName;
private $lastName;

//define a constructor to use when creating an instance of this class

public function __construct($employeeNumber, $firstName, $lastName) {
$this->employeeNumber = $employeeNumber;
$this->firstName = $firstName;
$this->lastName = $lastName;
}

//Getters and setters

function getEmployeeNumber() {
return $this->employeeNumber;
}

function getFirstName() {
return $this->firstName;
}

function getLastName() {
return $this->lastName;
}

function setEmployeeNumber($employeeNumber) {
$this->employeeNumber = $employeeNumber;
}

function setFirstName($firstName) {
$this->firstName = $firstName;
}

function setLastName($lastName) {
$this->lastName = $lastName;
}

}

//Step1: creating 6 employees

$emp1 = new Employee(10567, 'Mike', 'Penn');
$emp2 = new Employee(40562, 'Jane', 'Fonda');
$emp3 = new Employee(20941, 'William', 'Finn');
$emp4 = new Employee(30100, 'Stephan', 'Schimdt');
$emp5 = new Employee(10063, 'Caroline', 'Bokhout');
$emp6 = new Employee(11588, 'Alexandre', 'Marcotte');

/**
 * Step2 create an array of employees
 * Step3: Add employees to array
 */
$employeeArray = array($emp1, $emp2, $emp3, $emp4, $emp5, $emp6);


//Step4 & 7 : A function that displays all the employee in the array   
function displayEmployee($empA) {

foreach ($empA as $key => $value) {
echo "Key= ".$key."value= ". $value->getEmployeeNumber() . ": " .
$value->getFirstName() . " " .
$value->getLastName() . "<br>";
}
echo "<hr>";
}
//Step4:Show  the unsorted array
echo "<u>Unsorted List of Employee</u> <br><br>";
displayEmployee($employeeArray);

var_dump($employeeArray);

echo "<hr>";
//echo $employeeArray[0]->getLastName();

//array_intersect_assoc($arrayOfLastName, $empA);
// var_dump($empA);


//sortByLastName($employeeArray);
//Step6: create a custom sort function. To sort employees by Lastname

  function sortByLastName($empA) {
  $tempArray = $empA;
  $size=count($empA);
  echo "size= ".$size;
  $i=0;
  $j=0;
  do{
   // for($i==($size-1);$i>0;$i--) {
   reset($empA);
        $str1=$empA[0]->getLastName();
        $str2=$empA[$i]->getLastName();
      if(strcmp($str1,$str2)>=0 && $i<($size-1) ){
     //eitner the same or greater
        $tempArray[$j]=$empA[$i]; 
        next($empA);
        $i++;
    }
    if(strcmp($str1,$str2)<0 && $i<($size-1)){
       $tempArray[$j]=$empA[$i+1]; 
        next($empA);
        $i++;
    }
      
  //}
   array_push($tempArray, $tempArray[$j]);
    $j++; 
    
  
    }while($j<$size);
 
      
  //}
 
  var_dump($tempArray);
      
//$arrayOfLastName = array();
  }

sortByLastName($employeeArray);

  //Step5: usort statement
  //usort($employeeArray, 'sortByLastName');

  //show the sorted list
  //echo "<u>Sorted List of Employee</u><br> <br>";

  

 
