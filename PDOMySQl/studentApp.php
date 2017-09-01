<?php

//connection string
$dbConnection = new PDO('mysql:host=localhost:3306;dbname=cewp459_class7;', 'root', 'concordia');
//set attribute error mode to throw the pdo exception
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//wrap all in a try catch
$sid=8;
$fname='Josiane';
try{
  
//build query
 //$resultset =$dbConnection->query("Select * from student"); //this takes more time
//print_r($resultset);
//$statement1 =$dbConnection->prepare("Select * from student");
//$statement1->execute();

$statement2 =$dbConnection->prepare("Select * from student where ID=:sid AND Firstname=:fname");
$statement2->bindValue(':sid', $sid,  PDO::PARAM_INT);
$statement2->bindValue(':fname', $fname,  PDO::PARAM_STR);
$statement2->execute();
$rows = $statement2->fetchAll(PDO::FETCH_ASSOC);

print_r($rows);
//fetch reseults
    
/*
foreach ( $dbConnection->query("Select * from student") as $studentrow) {
    echo $studentrow['Firstname'].', '.
            $studentrow['Lastname']."<br>";
}
*/
 // $results = $statement->fetchAll(PDO::FETCH_ASSOC);
 //while($studentrow = $resultset->fetch(PDO::FETCH_ASSOC))
 //print_r($results);
 //echo "<br>".$statement->rowCount().' rows';
 
 //insert a row
//$result2 = $dbConnection->exec("INSERT INTO student(Firstname,Lastname,Age,stype) values('Josiane','Gamgo',36,'P')");
//$insertedID = $dbConnection->lastInsertId();
 
 //update a row
/*$result2 = $dbConnection->exec("UPDATE student SET Firstname='Thomas' WHERE ID=7");

echo $result2. " updated";
 */
 
}
 catch (PDOException $pe){
     echo "An error Occured!<br>";
     echo $pe->getMessage();
 }


