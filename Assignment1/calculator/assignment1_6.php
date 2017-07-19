

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/style.css"/>
        
        <title>Assignment1 : part 6</title>
    </head>
    <body>
        <div  id="box2">
            <h3>Assignment 1.6 : OBJECTS</h3>
            <?php
            //calling the calculator to display the results
            require_once 'Calculator.php';
            require_once 'CalculatorData.php';
            
            $data = new CalculatorData(operandEnum::ADD, 2, 4);
            $calc = new Calculator($data);
            echo $calc;
            ?>
        </div>
    </body>
</html>


