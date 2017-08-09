<?php
echo preg_replace("/([Cc]opyright)
200(3|4|5|6)/", "$1 2007", "Copyright
2005");
echo preg_replace("/1/", "one", "abc123abc");
echo preg_replace("/1/", "One", "abc123ab1c");
echo "<hr>";
$subject="Hello my name is Josiane . ";
//remove all spaces
echo preg_replace("/\s/", "", $subject);



echo "<hr>";
//replace all word ending with y with ie
echo preg_replace("/y\b/", "ie", "abc123ab1y");