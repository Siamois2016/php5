

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <title>Assignment1_part4-5</title>
    </head>
    <body>
        <div id="colorbox">
             <h3>Assignment 1.4 : ARRAYS</h3>
        <?php
        $favColors = array();
        $favColors[] = 'Blue';
        $favColors[] = 'Red';
        $favColors[] = 'Green';
        $favColors[] = 'Yellow';
        //assign the array size to a variable
        $size = count($favColors);
        // add html to build a table
        echo "<table cellspacing='0'>";
        echo "<tr><td>Color List</td></tr>";
        // loop throught the array and display each value
       for($i=0; $i<$size;$i++){
           
          $color = $favColors[$i];
         
           echo  "<tr><td bgcolor='$color'>".$favColors[$i]."</td></tr>";
           
       }
        echo "</table>";
        ?>
            </div>
        
        <div  id="box2">
            <h3>Assignment 1.5 : ARRAYS-2</h3>
            <?php 
            //creating an array
            $numbers = Array();
            // placing numbers in the array
            array_push($numbers,78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73 );
           
            echo "1) Array of Numbers: <br>";
            print_r($numbers);
            /*
             * Generating the average of the array
             * Displaying the 3 firstThree numbers and the 3 lowest numbers
             */
            $arraySize = count($numbers); // getting the number of element in the array
            $arraySum = 0; 
    
            for($i=0; $i<$arraySize;$i++){
                $arraySum = $arraySum + $numbers[$i];
                
            }
            echo "<br ><br >2) Average of the Array = ". $arraySum / $arraySize . "<br >";
            
           
            
            /*
             * A Function that displays the first Three numbers in an array
             * input : Array
             * return value:the first three  numbers
             *              
             */
            
            function firstThreeOf($numarray){
                $firstThree=array();
                 $counter = 0;
                
                while(count($firstThree)<3){
                 array_push($firstThree, $numarray[$counter]);
                  echo (count($firstThree) <=2) ? $firstThree[$counter].", " : $firstThree[$counter]; 
                     $counter++;
                     
             }
            }
            //remove all redundant numbers
            
          $distinctNumbers = array_unique($numbers);
          echo "<br>";
          //var_dump($distinctNumbers);
             rsort($distinctNumbers); // descending sort 
           
             echo "3)<br> The 3 highest numbers: { ";
             firstThreeOf($distinctNumbers);
             echo "}<br>";
             
           sort($distinctNumbers); // ascending sort 
            echo "The 3 lowest numbers: { ";
             firstThreeOf($distinctNumbers);
             echo "}";
            
            
            ?>
            
        </div>
         <div  id="box2">
            <h3>Assignment 1.6 : OBJECTS</h3>
            <?php
            
            ?>
        </div>
    </body>
</html>

