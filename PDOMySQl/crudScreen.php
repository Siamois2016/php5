<?php
$db = new PDO('mysql:host=localhost;dbname=459_class7_jg', 'root', 'concordia');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if (!empty($_GET['addSubmit']) && !empty($_GET['lname']) && !empty($_GET['dpt'])) {
    $lname = $_GET['lname'];
    $dpt = $_GET['dpt'];
//Add record
    $stmt = $db->prepare("INSERT INTO employee(lastname,departmentid) "
            . "values(:lname, :dpt)");

    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':dpt', $dpt);
    $stmt->execute();
}


if (!empty($_GET['delete'])) {
    $idToDelete = $_GET['delete'];

//Add record
    $stmt = $db->prepare("DELETE FROM  employee WHERE "
            . "employeeid= :empid;");

    $stmt->bindParam(':empid', $idToDelete);

    $affected= $stmt->execute();
    echo "OK deleted $affected records.";
}
$stmt = $db->query('SELECT * FROM employee;');
?>
<html>
    <body>
        <table border="1">
            <tr>
                <th>Employee ID</th><th>Last Name</th><th>Department</th><th>Action</th>
            </tr>
            <?php
            foreach ($stmt as $row) {

                $emp_id = $row['employeeid'];
                $lastname = $row['lastname'];
                $department = $row['departmentid'];
                $self = $_SERVER['PHP_SELF'];
                echo "<tr>";
                echo "<td>" . $emp_id . "</td>" .
                "<td>" . $lastname . "</td>" .
                "<td>" . $department . "</td>";
               echo "<td><a href='$self?delete=$emp_id'>Delete</a></td>";
                //add a form with 2 input , one submit button and one hidden button change all to post
                echo "<td><a href='$self?delete=$emp_id'>Delete</a></td>";

                echo "</tr>";
            }
            ?>


        </table>
        <h3>Add a new Employee</h3>
        <form  target="_self">
            <p>
                Lastname <br>
                <input type="text" name="lname"/>  

            </p>
            <p>

                Department <br>
                <input type="text" name="dpt"/>

            </p>
            <p>
                <input name="addSubmit" type="submit" value="ADD"/>  

            </p>


        </form>
    </body>
</html>