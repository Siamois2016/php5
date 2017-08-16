<?php

try{
 //step1
$db = new PDO('mysql:host=localhost;dbname=459_class7_jg', 'root', 'concordia');
$db->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
//step2  - Fetch rows
   // var_dump($db);  

  /*  foreach ($db->query('SELECT * FROM employee') as $row){
        echo $row['lastname'];
        echo "<br>";
  
        }
   * */
   $result = $db->query('SELECT * FROM employee');
/*while($row=$result->fetch())
        {
    echo $row['lastname'];
    echo "<br>";
        }
*/
   $rows= $result->fetchAll();
   foreach($rows as $row){
       echo $row['lastname'];
       echo "<br>";
   }
  // echo "Rows : ".count($rows);
   echo "Rows = ". $result->rowCount();//best way to count the result set 
   

}
catch(PDOException $e){
    echo $e;
}
catch(Exception $ex){
    
}
finally{}

