<?php
/**
 * Extracts keyed array to variables based on keys.
 * **/
$person = array('name' => 'Fred', 'age' => 35, 'wife' => 'Betty');
extract($person);
echo $name;


///////////

$color = 'indigo';
$shape = 'curvy';
$floppy = 'none';
$a = compact('color', 'shape', 'floppy');
//echo $a[0];

