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
                        <p> <label for="name">Your Name:</label><br>
                            <input  type="text" id="name" name="name" value="<?php if(isset($_POST['name'])){echo $_POST['name'];} ?>"/></p>
                        <p><label for="message">Message:</label><br>
                            <input  type="text" id="message" name="message" value="<?php if(isset($_POST['message'])){echo $_POST['message'];} ?>"/></p>
                        <p><input type="submit" value="Submit"/></p>
                        
                        
                        
            </form></div>
    </body>
</html>



<?php

//echo $_SERVER["PHP_SELF"];

if (isset($_POST["name"]) && isset($_POST["message"])) {
   //if success hidde form
    if (!empty($_POST["name"]) && !empty($_POST["message"])) {
        echo "Thanks! your message has been submitted";
          
    } else {
        //if no name
        if (empty($_POST["name"])) {

            echo "NAME  is not entered please enter your name.";
        }
        //if no message
        if (empty($_POST["message"])) {
            echo "No MESSAGE has been entered.";
        }
    }
}

