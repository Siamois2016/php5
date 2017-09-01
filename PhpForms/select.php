<?php

$employeeTypes = array("1"=>"Standard","2"=>"Management","3"=>"Contractual");
?>
<html>
    <form method="GET" action="select.php">
            <p>Employee Name: <br>
            <input type="text" name="name" >
            </p>
            
            
            <select name="s1">
                <?php
                 foreach($employeeTypes as $key=>$value){
                     echo "<option value = '$key'>$value</option>";
                 }
                ?>
               
          
                
            </select>
             <input type="submit" value="GO">
    
    
</html>
