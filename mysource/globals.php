<?php
$a =1;
$b=2;
$c =3;
function testGlobals(){

var_dump($GLOBALS);
print_r($GLOBALS);
}

testGlobals();
function testGlobals2(){

    foreach ($GLOBALS as $key => $value) {
        print_r($key);
    }
}
testGlobals2();