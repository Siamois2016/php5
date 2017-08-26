
<?php
/*
 * show a table with columns, based on data from any table in the database
 */
try {
    $tableName = ""; //initialise table name
    $dbname = "cewp459_a3";
    $dsn = 'mysql:hostname=localhost';
    $username = 'root';
    $password = 'concordia';

    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//show the list of tables in a select box
    $sql = "SHOW TABLES FROM {$dbname};";
    $result = $db->query($sql);
    
    ?>

<html>
    <head>
        <title>Assignment3-[3]PDO3 - FORMATED TABLE</title>
        <meta charset="utf8"/>
        <link rel="stylesheet"  type="text/css" href="style.css"/>
    </head>
    <body>
        <div id="box2">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

                <label>Database table name:</label>
                <select name='tablename'>
                    <option value="">Your selection...</option>
                    <?php
                        $counttables = 0;
                        while ($row = $result->fetch()) {
                            $counttables++;
                            
                            echo "<option value='" . $row[0] . "'>" . $row[0] . "</option>";
                        }
                    ?>
                    
                </select><br><br>
                <input type="submit" value="Show Formatted Table" /><br><br>

            </form>

            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    if (!empty($_POST['tablename'])) {
                        $db = new PDO('mysql:hostname=localhost;dbname=cewp459_a3', 'root', 'concordia');
                        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        $tableName = $_POST['tablename'];

                        $resultset = $db->query("SELECT * FROM $tableName ");
                        $rows = $resultset->fetchAll(PDO::FETCH_ASSOC);
                        //store the actual number of rows to display
                        $size = $resultset->rowCount();
                        
                        echo "<table cellspacing='0'>";
                        //generate the header elements
                        echo "<tr>";
                        foreach ($rows[0] as $key => $value) {
                            echo "<th>" . ucfirst($key) . "</th>";
                        }
                        echo "</tr>";
                        //generate the data rows. Loop throught the actual rows
                        for ($i = 0; $i < $size; $i++) {
                            echo "<tr>";
                            foreach ($rows[$i] as $key => $value) {
                                echo "<td>$value</td>";
                            }
                            echo "</tr>";
                        }


                        echo "</table>";
                    }
                   if (empty($_POST['tablename'])) {
                        echo "Please select a database table.";
                    }
                }
            } catch (PDOException $e) {
                echo $e;
            }
            ?> 

        </div>
    </body>
</html>
