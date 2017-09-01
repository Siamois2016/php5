<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $db = new PDO('mysql:host=localhost;dbname=459_class7_jg', 'root', 'concordia');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $result = $db->query('SELECT * FROM employee;');

        $rows = $result->fetchAll();


        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            ?>
            <form method="POST" action ="<?php echo $_SERVER['PHP_SELF'] ?>">
                <select  name = "emp">
                    <?php
                    foreach ($rows as $row) {
                        echo "<option value=" . $row['employeeid'] . ">" . $row['lastname'] . "</option> ";
                    }
                    ?>


                </select>
                <input type="submit" value="Submit"/>


            </form>


    <?php
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "thanks "; 
    
    $empid = $_POST['emp'];
    echo "$empid ";
}
?>
    </body>
</html> 