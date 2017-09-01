<html>
    <head>
        <title>Message To Tech Support</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="messageStyle.css"/>

    </head>

    <body>

        <?php
        //verify the request method and display the message in case of error
        $name_error = 0;
        $message_error = 0;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (empty($_POST['name'])) {
                $name_error = 1;
            }
            if (empty($_POST['message'])) {
                $message_error = 1;
            }
        }

        /* displayForm($n,$m):A function that displays the form , 
         * whatever is entered in the other field still shows if this field is empty
         * Method recieve the 2 values as parameter
         *
         */

        function displayForm($n, $m) {
            ?>
            <div id="stickyform">
                <h3>Please enter a message to send to our technical support group</h3>

                <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" >
                    <p> <label for="name">Your Name:</label><br><br>
                        <input  type="text" id="name" name="name" value="<?php echo $n; ?>" size="50"/>
                    </p>
                    <p><label for="message">Message:</label><br><br>
                        <input  type="text" id="message" name="message" value="<?php echo $m; ?>" size="50"/>
                    </p>
                    <p><input type="submit" value="Submit"/></p>



                </form>  

            </div>
            <?php
        }

        /*
         * If the server recieves a GET (while going into form for the first time)
         *  or
         * if the name or the message are empty
         * Display the form        
         */

        if (($_SERVER['REQUEST_METHOD'] == 'GET') || ($name_error == 1) || ($message_error == 1)) {

            if ($name_error == 1) {
                $m = $_POST['message'];
                displayForm("", $m);
                echo "<p>NAME  is not entered please enter your name.</p>";
            } else if ($message_error == 1) {
                $n = $_POST['name'];
                displayForm($n, "");
                echo "<p>No MESSAGE has been entered.</p>";
            } else {
                displayForm("", "");
            }
        }
        /* If the server recieves a post and 
         * if all fields are filled.
         * display success message and Form disappears
         * 
         */
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (!($message_error) && !($name_error)) {

                echo "<p>Thanks! your message has been submitted</p>";
            }
        } else {
            die("This script only works with GET or POST requests.");
        }
        ?>
    </body>
</html>
