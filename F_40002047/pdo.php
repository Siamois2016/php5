<?php
$targetRecord = 3;
$db = new PDO('mysql:host=localhost;dbname=f_40002047', 'root', 'concordia');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// STEP1 : show record id =3 

$stmt = $db->prepare("SELECT * FROM sale where id =:recordid;");
$stmt->bindValue(':recordid', $targetRecord);
$stmt->execute();
echo "Record with ID #3: <br>";
foreach ($row = $stmt->fetchAll(PDO::FETCH_ASSOC) as $item) {
    echo $item['id'] . "   " . $item['itemname'] . '   ' . $item['cadprice'] . "<br><br>";
}

//STEP2 display horizontal line
echo "<hr>";

//STEP3 display a table with th data

$statement = $db->query("SELECT * FROM sale;");
$countrows = $statement->rowCount();
?>

<html>

    <body>
        <table border="1" style="">
            <tr><th>ID</th><th>Item Name</th><th>CAD Price</th></tr>
            <?php
            //set the summ of price
            $sum = 0;
            
            //loop throught the records
            foreach ($statement as $row) {
                $id = $row['id'];
                $itemname = $row['itemname'];
                $cadprice = moneyFormater($row['cadprice']);
                $sum +=$row['cadprice'];

                echo "<tr>" .
                "<td>" . $id . "</td>" .
                "<td>" . $itemname . "</td>" .
                "<td>" . $cadprice . "</td>";
                echo "</tr>";
            }

            echo "<tr><td colspan ='2'></td><td>TOTAL:" . moneyFormater($sum) . "</td></tr>";
            echo "<tr><td colspan ='2'></td><td>Number of Records: $countrows</td></tr>";

//A procedure to format the price 
            function moneyFormater($number) {
                return "$" . $number;
            }
            ?>
        </table>
    </body>
</html>