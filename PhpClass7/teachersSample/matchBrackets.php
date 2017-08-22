<?php

$input_string = "A6";

$search = "/([A-Z])(\d)/";

preg_match_all($search, $input_string, $matches);


print_r($matches);

$command = $matches[1];
$commandValue = $matches[2];