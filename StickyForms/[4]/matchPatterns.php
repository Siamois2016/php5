<?php

/*
 *  Create regular expression to match different pattern
 */

function matchRegex($pattern, $word) {
    $matches = array();
    if (preg_match($pattern, $word, $matches)) {
        echo "Match was found for ( pattern = $pattern ): <br><br>";
        foreach ($matches as $k => $value) {
            echo "Match $k = " . $value . "<br>";
        }

        hr();
    } else {
        echo "No match found.<br>";
        hr();
    }
}

function hr() {
    echo "<hr>";
}

$word1 = "bright blue sky and lighter";
$word2 = "abuzz bridget and brother";
$word3 = "123hfs46l*jk87";



//1.Contains the word “blue”.
$pattern1 = "/blue/";
matchRegex($pattern1, $word1);

//2.Starts with “br”.
$pattern2 = "/\bbr/";
matchRegex($pattern2, $word2);

//3.Starts with “a” and finishes with “z”.
$pattern3 = "/\ba.*z\b/";
matchRegex($pattern3, $word2);

//4.Starts with 2 numbers.
$pattern4 = "/^\d{2}/";
matchRegex($pattern4, $word3);


//5.Contains 2 numbers anywhere.
$pattern5 = "/.*\d{2}.*/";

matchRegex($pattern5, $word3);
