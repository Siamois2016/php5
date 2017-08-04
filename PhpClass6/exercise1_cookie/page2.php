<?php

/* 
 * Web page #2: Read the cookie and color the
background according to the cookie value.
 */

$usercolor= $_COOKIE["color"];
?>
<html>
    <body style="background-color: <?php echo $usercolor; ?>">
        <title>Setting user color</title>
    </body>
</html>