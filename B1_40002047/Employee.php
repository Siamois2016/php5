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
   
    foreach ($empA as $key =>$value) {
        echo "Key= ".$key."value= ". $value->getEmployeeNumber() . ": " .
        $value->getFirstName() . " " .
        $value->getLastName() . "<br>";
    }
    echo "<hr>";
}
//Step4:Show  the unsorted array
echo "<u>Unsorted List of Employee</u> <br><br>";
displayEmployee($employeeArray);

var_dump($employeeArray[0]);

echo "<hr>";
echo $employeeArray[0]->getLastName();
echo "<hr>";

function sortByLastName($empA) {
   $arraySorted = array();
$size=count($empA);
   
   $i=0;
   $temp = $empA[0];
    foreach ($empA as $value) {
        $actual = current($empA);
        echo "actual = ".$actual->getLastName(). "<br>";
      for($i==$size-1;$i>0;$i++){
          next($empA);
          if(strcmp($actual->getLastName(), $empA[$i]->getLastName())>=0){
          $lastname= $actual->getLastName();
          $firstname=$actual->getFirstName();
          $id = $actual->getEmployeeNumber();
          $employe = array($id,$firstname,$lastname);
          $actual =  current($empA);
        }
         array_push($arraySorted, $employe);
          
      } 
     
      
      
       
       
        
        
    }
    

    var_dump($arraySorted); 
    echo "<hr>";
     //array_intersect_assoc($arrayOfLastName, $empA);
   // var_dump($empA);
    
}
sortByLastName($employeeArray);
//Step6: create a custom sort function. To sort employees by Lastname
/*
function sortByLastName($empA) {
    $arrayOfLastName = array();
    $size=  count($empA);
   $current= reset($empA);
   $next = next($empA);
   
   if(strcmp($current->getLastName(), $next->getLastName())>0){
       
       array_push($arrayOfLastName, $current);
       
   }
    return $arrayOfLastName;
    
    }
    
   

//Step5: usort statement
usort($employeeArray, 'sortByLastName');

//show the sorted list
echo "<u>Sorted List of Employee</u><br> <br>";

foreach ($employeeArray as $value) {
        echo 
        $value->getLastName() . "<br>";
    }
  

*/
