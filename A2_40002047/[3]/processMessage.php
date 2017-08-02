<?php 
$name="";
$message="";

if($_SERVER['REQUEST_METHOD']=='POST')
    {
    
      if(!(empty($_POST['name'])) && !(empty($_POST['message']))){
          
          $name = $_POST['name'];
          $message = $_POST['message'];
      
      }else{
          //if no name
        if (empty($_POST['name'])) {

            echo "<p style='color:red;'>NAME  is not entered please enter your name.</p>";
            
        }
         //if no message
        if (empty($_POST['message'])) {
            echo "<p style='color:red;'>No MESSAGE has been entered.</p>";
        } 
         
          
      }
       
      
        
      
    }


?>

<html>
    <head>
        <title>Message To Tech Support</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="messageStyle.css"/>
        <script type='text/javascript'> 
       
       function hideForm() {
                document.getElementById('stickyform').style.display="none";
             }
            
       </script>
    </head>
   
    <body>
                <div id="stickyform">
                    <h3>Please enter a message to send to our technical support group</h3>
                    <form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" >
                        <p> <label for="name">Your Name:</label><br><br>
                            <input  type="text" id="name" name="name" value="<?php echo $name; ?>" size="50"/>
                        </p>
                        <p><label for="message">Message:</label><br><br>
                            <input  type="text" id="message" name="message" value="<?php echo $message; ?>" size="50"/>
                        </p>
                        <p><input type="submit" value="Submit"/></p>
                        
                        
                        
            </form>
                
                
                </div>
    </body>
</html>



<?php


          
   
   //if success display message and  hidde form
    if (!empty($name) && !empty($message)) {
        echo "<p>Thanks! your message has been submitted</p>";
        ?>
         <script type='text/javascript'> hideForm()</script>
         <?php
         }


