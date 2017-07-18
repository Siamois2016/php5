

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <title>Assignment1_part4-5</title>
    </head>
    <body>
        <div  id="box2">
            <h3>Assignment 1.6 : OBJECTS</h3>
            <?php
            require_once 'calculator.php';
            require_once 'calculatorData.php';

            $data = new calculatorData(operandEnum::ADD, 2, 4);

            $calc = new calculator($data);
            return $calc;
            ?>
        </div>
    </body>
</html>


