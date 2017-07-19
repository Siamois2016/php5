<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Book{
    private $name;
    private $pages;
    
    function __construct() {
        ;
    }
    function getName() {
        return $this->name;
    }

    function getPages() {
        return $this->pages;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setPages($pages) {
        $this->pages = $pages;
    }

function sorter(Book $a,Book $b){
   if($a->getPages()== $b->getPages()){
       
       
   }
    
    
}   
    
}