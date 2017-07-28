<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 require 'Receipt.php';
 require 'Item.php';
 
 $item1 = new Item("12345", "Milk", 6.75);
 $item2 = new Item("12346", "Bread", 2.50);
 $item3 = new Item("12347", "Chocolate", 5);
 $item4 = new Item("12348", "Eggs", 3.85);
 //echo $item1;
 

  $r1 = new Receipt(123);
   echo "<u><b>Receipt Nr.</b>  ".$r1->getReceiptNr()."------------  <b>Date:</b>  ".$r1->getReceiptDate()."</u>";
  
 $r1->addItem($item1);
  $r1->addItem($item2);
   $r1->addItem($item3);
$r1->printReceipt();