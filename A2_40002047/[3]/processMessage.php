<html>
    <head>
        <title>Message To Tech Support</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="messageStyle.css"/>
       
    </head>

    <body>

        <?php
        /*displayForm($n,$m):A function that displays the form , 
         * whatever is entered in the other field still shows if this field is empty
         * Method recieve the 2 values as parameter
         *
         */
        
        function displayForm($n,$m){
            
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
         //Display the form when going into it for the first time
        
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            
            displayForm("", "");
        }
        /*
         * when the form is submitted: validation and processing
         * if all fields are filled. display success message and Form disappears
         * if there is no name or no message show the form and the warning message
         * 
         */
        
        else if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (!(empty($_POST['name'])) && !(empty($_POST['message']))){
                
                echo "<p>Thanks! your message has been submitted</p>";
                
            } 
            else{
                
                displayForm($_POST['name'], $_POST['message']);
             
                if (empty($_POST['name'])) {

                    echo "<p>NAME  is not entered please enter your name.</p>";
                }
               
                if (empty($_POST['message'])){
                    
                    echo "<p>No MESSAGE has been entered.</p>";
                }
            }
        }
        else{
            die("This script only works with GET or POST requests.");
        }
        ?>
    </body>
</html>
