<?php

class Book
{
    private $pages;
    private $name;
        
    function __construct($name, $pages) {
        $this->name = $name;
        $this->pages = $pages;
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
}

function sorter($a, $b)
{
    if ($a->getPages() == $b->getPages() )
        return 0;
    
    return $a->getPages() < $b->getPages() ? -1 : +1;
}

$b1 = new Book("Book1", 500);
$b2 = new Book("Book2", 25);
$b3 = new Book("Book3", 1000);

$bookArray = array($b1, $b2, $b3);

usort($bookArray, 'sorter');

foreach ($b1 as $k=>$v)
{
    echo "k: $k, v: $v";
}

//echo $bookArray[0]->getName() . "<br>";
//echo $bookArray[1]->getName() . "<br>";
//echo $bookArray[2]->getName() . "<br>";
