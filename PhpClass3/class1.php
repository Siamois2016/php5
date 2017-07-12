<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Student{
    var $age;
    public function DisplayAge(){
        echo "My age  is:". $this->age;
    }  
     public function GetAge(){
        return $this->age;
    } 
}
  $s1 = new Student;
  $s1->age = 22;
  //$s1->DisplayAge();
  echo "The age of the Student is ". $s1->GetAge();