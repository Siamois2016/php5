<?php


/**
 * Description of Receipt
 *
 * @author jgamgo
 */

class Receipt {
  private $receiptDate;
  private $receiptNr;
  private $listOfItems;
  
  function __construct($receiptNr) {
      $this->receiptDate = date('Y-m-d H:i:s');
      $this->receiptNr = $receiptNr;
      $this->listOfItems = array();
  }
  function getReceiptDate() {
      return $this->receiptDate;
  }

  function getReceiptNr() {
      return $this->receiptNr;
  }

  function getListOfItems() {
      return $this->listOfItems;
  }

  function setReceiptDate($receiptDate) {
      $this->receiptDate = $receiptDate;
  }

  function setReceiptNr($receiptNr) {
      $this->receiptNr = $receiptNr;
  }

  function setListOfItems($listOfItems) {
      $this->listOfItems = $listOfItems;
  }

public function addItem(Item $item){
    return array_push($this->listOfItems, $item);
}
//comparison 



public function printReceipt(){
    
    //usort($list,"comparesku");
    echo "<table border='2px solid black'>";
    echo "<tr><th>SKU</th><th>Item Name</th><th>Price</th></tr>";
    foreach($this->listOfItems as $item){
        echo $item;
    }
     echo "</table>";
     //return $result;
}


public function getTotalPrice(){
    $total = 0;
    foreach($this->listOfItems as $item){
        $total += $item->getPrice();
    }
    return $total;
}

public function getTotal(){
    $countItems = count($this->listOfItems);
    return $countItems;
}

}


