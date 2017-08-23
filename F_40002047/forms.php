<html>
    <head>
        <title>Self Posting Form </title>
    </head>
    <body>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            ?>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <p> Select the first number <br> <input type="text" name="number1"/></p>
                <p> Select the operations <br>
                    <select multiple name="selected_function[]">
                        <option value="add">+</option>
                        <option value="substract">-</option>
                        <option value="multiply">*</option>
                        <option value="divide">/</option>
                    </select>

                </p>
                <p>Select the second number <br><input type="text" name="number2"/> </p>



                <p><input type="submit" value="Calculate"/> </p>
            </form>
            <?php
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $number1 = $_POST["number1"];
            $number2 = $_POST["number2"];
            //All numbers are numeric
            if (!is_numeric($number1) || !is_numeric($number2)) {
                echo "\"Error: All values must be numeric\".";
            } else {
                // do the operations if selected 
                if (empty($_POST['selected_function'])) {
                    echo "\"Error: No operation selected!\".";
                } else {
                    foreach ($_POST['selected_function'] as $key => $value) {
                      
                        //uppercased the first letter and display the selected operation
                        echo ucfirst($value) . " selected: ";
                        
                        //process the user selection in a switch case
                        switch ($value) {
                            case "add":
                                echo "$number1 + $number2 = " . ($number1 + $number2) . "<br>";
                                break;
                            case "substract":
                                echo "$number1 - $number2 = " . ($number1 - $number2) . "<br>";
                                break;
                            case "multiply":
                                echo "$number1 * $number2 = " . ($number1 * $number2) . "<br>";
                                break;
                            case "divide":
                                echo division($number1, $number2) . "<br>";
                                break;
                            //nothing as default
                            default:
                                break;
                        }
                    }
                }
            }
        }

        ?>

    </body>
</html>
<?php

//Need to handel the division by 0
function division($a, $b) {
    if ($b == 0) {
        return "\"Error: Cannot divide by 0\".";
    } else {

        return "$a / $b = " . number_format((($a / $b)), 2);
    }
}
