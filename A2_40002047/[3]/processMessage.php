<!DOCTYPE html>

<html>
    <head>
        <title>Message To Tech Support</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
                <div>
                    <form  action="" method="POST">
                        <p> <label for="name">Your Name:</label><br><input type="text" id="name" name="name"/></p>
                        <p><label for="message">Message:</label><br><input type="text" id="message" name="message"/></p>
                        <p><input type="submit" value="Submit"/></p>
                        
                        
                        
            </form></div>
    </body>
</html>



<?php

//echo $_SERVER["PHP_SELF"];

if (isset($_POST["name"]) && isset($_POST["message"])) {
    //message
    if (!empty($_POST["name"]) && !empty($_POST["message"])) {
        echo "Thanks! your message has been submitted";
        
    } else {
        if (empty($_POST["name"])) {

            echo "NAME  is not entered please enter your name.";
        }
        if (empty($_POST["message"])) {
            echo "No MESSAGE has been entered.";
        }
    }
}

