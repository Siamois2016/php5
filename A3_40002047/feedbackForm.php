
<html>
    <body>
        <!--<div id="feedbackform"> -->


        <?php
        /*

         * a very simple page for a company that customers can use to request information about a product. It will take the information and insert the values into a row into the database.
          The company can later use the data in the database to give to the marketing department so they can do the callbacks.
          The SQL needed to create the tables used are at the end of this question.
         */

        define('PRODUCTID', NULL);

        /*
         * A function to display the form
         * Assuming the phone number is a canadian local phone like 999-999-9999
         */

        function displayForm() {
            ?>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <p><h2>Customer Inquiry Form</h2> </p>
            <p> Please fill the following form and a customer service representative should get back to you within 72 hours.</p>
            <p>Email Address    : <input type="email" name="email" size="50"/> </p>
            <p>First Name   : <input type="text" name="firstname" size="50"/>  </p>
            <p>Last Name    : <input type="text" name="lastname" size="50"/>  </p>
            <p>Phone Number : <input type="text" name="phone" size="50" pattern="\d{3}[\s-.]\d{3}[\s-.]\d{4}"/>  </p>
            <p>Question : <input type="text" name="question" size="50"/>  </p>
            <p><input type="submit" value="SUBMIT QUESTION"/> </p>

        </form> 

        <?php
    }

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        displayForm();
    }




// check if post 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

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
                
                $db = new PDO('mysql:hostname=localhost:3307;dbname=CEWP459_A3', 'root', 'concordia');
                $stmt = $db->prepare("INSERT INTO WebInquiries(Email,FirstName,LastName,Phone,ProductId,Question )"
                        . " VALUES(:mail,:fname,:lname,:phone,:productid,:qst)");

                //bind parameters with variables

                $stmt->bindParam(':mail', $email);
                $stmt->bindParam(':fname', $firstname);
                $stmt->bindParam(':lname', $lastname);
                $stmt->bindParam(':phone', $phone);
                $stmt->bindParam(':productid', PRODUCTID);
                $stmt->bindParam(':qst', $question);


            //Do the insertion 
                $stmt->execute();
             // Get the last inserted id
                $lastID=$db->lastInsertId();
               
                echo "Thank you for your enquiry. Your reference ID is $lastID .";
            } catch (PDOException $pdoe) {
                echo $pdoe;
                echo "Your request couldn't be completed, an error has occured. Please try again.";
                displayForm();
            }
        }


        if (empty($_POST['email'])) {
            //error 
        }



   
    }
    ?>

    <!-- </div> -->

</body>

</html>


