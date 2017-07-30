<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/style.css"/>
        <title>Assignment1: Part 1-2-3</title>
    </head>
    <body>


        <div id="box2">
            <!-- [1]  --> 
            <h3>Assignment 1.1 :  Even/Odd</h3>
            <?php
            /* Even or Odd: ternatry if statement
             * define if a value is even or odd
             */
            $value = 3;
            echo "The value is ";
            echo ($value % 2 == 0) ? "even. " : "odd. ";
            ?> 

        </div>
        <!-- [2]  -->  
        <div id="box2">
            <h3>Assignment 1.2 : Multiplication table</h3>
            <?php
            /*
             * using 2 foor loops , 
             * the first loop for each row from 1 to 10 
             * the second loop for each column from 1 to ten 
             */
            echo "<table cellspacing ='0'>";
            echo "<tr>";
            for ($i = 0; $i < 11; $i++) {
                if ($i == 0) {
                    echo "<td class='head'>X</td>";
                    continue;
                }
                echo "<td class='head'>" . $i . "</td>";
            }
            echo "</tr>";
            for ($row = 1; $row < 11; $row++) {
                echo "<tr><td class='head'>$row</td>";
                for ($col = 1; $col < 11; $col++) {

                    echo "<td>" . ($row * $col) . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
            ?> 

        </div>
        <!-- [3] FUNCTIONS -->
        <div id ="box2">
            <h3>Assignment 1.3 : FUNCTIONS</h3>
            <?php

            function calculateQuebecTax($salesAmount) {
                // define magic numbers for taxes
                define("GST", 0.05);
                define("QST", 0.09975);
                $gst = $salesAmount * GST;
                $qst = $salesAmount * QST;

                return $salesAmount + $gst + $qst;
            }

            /*             * call the function with a sales amount of 100.50 
             * function returns the result with 3 digits after the dot
             */

            $salesAmount = 100.00;
            printf("floatNumberResult = $ %.3f", calculateQuebecTax($salesAmount));
            ?>

        </div>

    </body>
</html>
