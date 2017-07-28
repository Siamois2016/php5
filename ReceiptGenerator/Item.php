<?php
/**
 * Description of Item
 *
 * @author jgamgo
 */

class Item {
    private $sku;
    private $name;
    private $price;
    
    function __construct($sku, $name, $price) {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
    }
    function getSku() {
        return $this->sku;
    }

    function getName() {
        return $this->name;
    }

    function getPrice() {
        return $this->price;
    }

    function setSku($sku) {
        $this->sku = $sku;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setPrice($price) {
        $this->price = $price;
    }

    public function __toString() {
        $sku = $this->sku;
        $itemname=  $this->name;
        $itemprice = $this->price;
        $ouput = "<tr><td>$sku</td><td>$itemname</td><td>$ ".number_format($itemprice,2)."</td></tr>";
        
        return $ouput;
    }

    
}
