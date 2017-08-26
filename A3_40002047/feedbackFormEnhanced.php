<html>
    <head>
        <title>Assignment3 - [2]PDO2 - FEEDBACK FORM ENHANCED</title>
        <meta charset="utf8"/>
        <link rel="stylesheet"  type="text/css" href="style.css"/>
    </head>
    <body>


        <?php
        /*

         * Enhancing the feedback form :
         * code a drop-down selection allowing selection of a product from the customer.
         * The products that are listed are read from the “Products” table in the database.
         */

        //select the products from the database
        try {



            //a function to display the html form 

            function displayForm() {
                //define the connection string 
                $db = new PDO('mysql:hostname=localhost;dbname=cewp459_a3', 'root', 'concordia');
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $statement = $db->query("SELECT * FROM products; ");
                $resultset = $statement->fetchAll(PDO::FETCH_ASSOC);
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

                        <label>Select Product :</label> 
                        <select name="product">

                            <?php
                            foreach ($resultset as $row) {
                                echo "<option value='" . $row['ID'] . "'>" . $row['Name'] . "</option>";
                            }
                            ?>   


                        </select>
                        <label>Question :</label> 
                        <input type="text" name="question"/> 
                    </div>
                    <div><input type="submit" value="SUBMIT QUESTION"/> </div>

                </form> 
            </div>

            <?php
        }

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            //display the form with select options  
            displayForm();
        }
            // check if the form is send 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            displayForm();
            //validate values
            if (!empty($_POST['email']) && !empty($_POST['firstname']) &&
                    !empty($_POST['lastname']) && !empty($_POST['phone']) &&
                    !empty($_POST['question'])) {
                //assign variables to post values 
                $email = $_POST['email'];
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $phone = $_POST['phone'];
                $product = $_POST['product'];
                $question = $_POST['question'];
                //use PDO to insert data into the Webinquiries table
                $db = new PDO('mysql:hostname=localhost;dbname=cewp459_a3', 'root', 'concordia');
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $stmt = $db->prepare("INSERT INTO WebInquiries(Email,FirstName,LastName,Phone,ProductId,Question)"
                        . " VALUES(:mail,:fname,:lname,:phone,:productid,:qst)");

                //bind parameters with variables

                $stmt->bindParam(':mail', $email);
                $stmt->bindParam(':fname', $firstname);
                $stmt->bindParam(':lname', $lastname);
                $stmt->bindParam(':phone', $phone);
                $stmt->bindParam(':productid', $product);
                $stmt->bindParam(':qst', $question);
                
                //Do the insertion 
                $stmt->execute();
                // Get the last inserted id
                $lastID = $db->lastInsertId();
                 //Display success message
                echo "<div class='msgbox1'>Thank you for your enquiry. Your reference ID is $lastID .</div>";
            }
            if (empty($_POST['email']) && empty($_POST['phone'])) {
                echo "<div class='msgbox2'>Please provide a valid email Address or phone number to contact you.</div>";
            }

            if (empty($_POST['firstname']) && empty($_POST['lastname'])) {
                echo "<div class='msgbox2'>Please provide your Name.</div>";
            }
        }
    } catch (PDOException $pdoe) {

        echo $pdoe;
    }
    ?>

</body>

</html>




