<?php

$db = new PDO('mysql:host=localhost:3306;dbname=cewp459_class7;', 'root', 'concordia');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// User chose ADD record
if (!empty($_POST['addSubmit']) && !empty($_POST['lname']) && !empty($_POST['dept']))
{
    $lname = $_POST['lname'];
    $dept = $_POST['dept'];
    $role= 'P';
    
    // Add the record
    $stmt = $db->prepare("INSERT INTO employee (lastname, departmentid, role) "
            . "VALUES (:lname, :depid,:role)");
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':depid', $dept);
    $stmt->bindParam(':role', $role);
    $stmt->execute();
}

if (!empty($_POST['delete']))
{
    $recordToDelete = $_POST['delete'];
        
    // Delete the record
    $stmt = $db->prepare("delete from employee where employeeid = :empid;");

    $stmt->bindParam(':empid', $recordToDelete);

    $affected = $stmt->execute();

    echo "OK deleted $affected records.";
    
}

$stmt = $db->query("select * from employee;");

?>

<html>
    <table border="1">
        <tr><th>Employee ID</th><th>Last Name</th><th>Department</th><th>Action</th></tr>
        <?php
            foreach($stmt as $row)
            {
                $emp_id = $row['employeeid'];
                $lastname = $row['lastname'];
                $dep_id = $row['departmentid'];
                $self = $_SERVER['PHP_SELF'];
                
                echo "<tr>";
                echo "<td>$emp_id</td>";
                echo "<td>$lastname</td>";
                echo "<td>$dep_id</td>";
                //echo "<td><a href='$self?delete=$emp_id'>Delete</a></td>";
                echo "<td><form method='post' action=crudScreen.php>" .
                        "<input type='submit' name='deleteSubmit'" .
                        " value='Delete'>" .
                        "<input type='hidden' name='delete' value='" .
                        $emp_id . "'></form></td>";
                echo "</tr>";
            }
        ?>
    </table>
    
    <h3>Add a new Employee</h3>
    
    <form method="post" target="_self">
        Last Name<br>
        <input type="text" name="lname">
        <br>
        Department<br>
        <input type="text" name ="dept">
        <br><br>
        <input type="submit" name="addSubmit" value="ADD record">
    </form>
    
</html>
