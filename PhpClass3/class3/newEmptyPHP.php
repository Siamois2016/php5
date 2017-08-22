<?php

$ages = array('Person' => 'Age', 'Fred' => 35, 'Barney' => 30, 'Tigger' => 8, 'Pooh' => 40);


$firstRecord = array_keys($ages);

echo $firstRecord[0];

echo $ages[$firstRecord[0]];