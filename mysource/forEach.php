<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$students = array(
    
    array("ID"=>123452, "Name"=> "Brendan"),
     array("ID"=>110452, "Name"=> "sarah")
);

foreach($students as $student)
{
  echo "ID = ". $student['ID']. " Name = ". $student['Name'];
echo "<br>";  
    
}
