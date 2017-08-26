
<html>
    <head>
        <title>Assignment3 - [1]PDO1 - FEEDBACK FORM</title>
        <meta charset="utf8"/>
        <link rel="stylesheet"  type="text/css" href="style.css"/>
    </head>
    <body>
       
        <?php
        /*

         * a very simple page for a company that customers can use to request information about a product. 
         * It will take the information and insert the values into a row into the database.         
         */

        define('PRODUCTID', NULL);
        $dsn = 'mysql:hostname=localhost';
        $username='root';
        $password ='concordia';
        

        /*
         * A function to display the form
         * Assuming the phone number is a canadian local phone like 999-999-9999
         */

        function displayForm() {
            ?>
        <div class='box'>
            <p><h2>Customer Inquiry Form</h2> </p>
            <p> Please fill the following form and a customer service representative should get back to you within 72 hours.</p>
           
        
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div>
                <label>Email Address    :</label>
                <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/> 
                <label>First Name   :</label>
                <input type="text" name="firstname"/>  
                <label>Last Name    :</label>
                <input type="text" name="lastname"/> 
                <label>Phone Number :</label> 
                <input type="text" name="phone"  pattern="\d{3}[\s-.]\d{3}[\s-.]\d{4}"/>  
                
                <label>Question :</label> 
                <input type="text" name="question"/> 
            </div>
            <div><input type="submit" value="SUBMIT QUESTION"/> </div>

            </form> 
        </div>
        <?php
    }

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        displayForm();
    }




// check if post 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        displayForm();
//validate values
        if (!empty($_POST['email']) && !empty($_POST['firstname']) &&
                !empty($_POST['lastname']) && !empty($_POST['phone']) &&
                !empty($_POST['question'])) {
            $email = $_POST['email'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $phone = $_POST['phone'];
            $question = $_POST['question'];
            try {
                // connection string  and statement
                
                $db = new PDO($dsn, $username, $password);
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $stmt = $db->prepare("INSERT INTO WebInquiries(Email,FirstName,LastName,Phone,ProductId,Question )"
                        . " VALUES(:mail,:fname,:lname,:phone,:productid,:qst)");

                //bind parameters with variables

                $stmt->bindParam(':mail', $email);
                $stmt->bindParam(':fname', $firstname);
                $stmt->bindParam(':lname', $lastname);
                $stmt->bindParam(':phone', $phone);
                $stmt->bindValue(':productid', PRODUCTID);
                $stmt->bindParam(':qst', $question);


            //Do the insertion 
                $stmt->execute();
             // Get the last inserted id
                $lastID=$db->lastInsertId();
               
                 echo "<div class='msgbox1'>Thank you for your enquiry. Your reference ID is $lastID .</div>";
            } catch (PDOException $pdoe) {
                echo $pdoe;
               echo "<div class='msgbox2'>Your request couldn't be completed, an error has occured. Please try again.</div>";
                
            }
        }
         if (empty($_POST['email'])&& empty($_POST['phone'])) {
            echo "<div class='msgbox2'>Please provide a valid email Address or phone number to contact you.</div>";
        }
        


        if (empty($_POST['firstname'])&& empty($_POST['lastname'])) {
            echo "<div class='msgbox2'>Please provide your Name.</div>";
        }





   
    }
    ?>

    <!-- </div> -->

</body>

</html>


