<?php

$db = new PDO('mysql:host=localhost:3306;dbname=cewp459_class7;', 'root', 'concordia');
    //    new PDO('mysql:host=localhost:3306;dbname=459_class7','root', 'concordia');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $db->query("select * from employee;");
    
    $rows = $stmt->fetchAll();
?>

<html>
    <form action="process.php" method="get">
        
      Please select an employee to give a raise.
      <br>
      
      <select name="emp">
          <?php
          
          foreach($rows as $row)
          {
              echo "<option value=" . $row['employeeid'] . ">" . $row['lastname'] . "</option>";
          }
          
          ?>
      </select>
      <button>Submit</button>
    </form>
</html>