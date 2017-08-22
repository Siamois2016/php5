<?php

class Book
{
    private $name;
    private $isbn;
    private $author;

    public function __construct()
    {}

    public function __toString()
    {
        $return = "ISBN: " . $this->isbn . "<br>";
        $return = $return . "Name: " . $this->name . "<br>";
        $return = $return . "Author: " . $this->author . "<br>";
        
        return $return;
    }

    public static function WithNameISBN($name, $isbn)
    {
        $instance = new self();
        $instance->isbn = $isbn;
        $instance->name = $name;
        return $instance;
    }

    public static function WithAuthorISBN($author, $isbn)
    {
        $instance = new self();
        $instance->isbn = $isbn;
        $instance->author = $author;
        return $instance;
    }
}
    
$myBook = Book::WithAuthorISBN("Ernest Cline", 12345);

echo $myBook;

$myBook2 = Book::WithNameISBN("My Book 2", 23456);

echo $myBook2;  