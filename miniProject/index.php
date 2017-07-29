<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>MIni Project </title>
        <style>
            table{
                background-color:rgb(121,177,196);

               
                color: black;
            }
            table th{
                background-color: rgb(121,177,196);
                color: white;
                font-weight: bold;
            }
            table td{
                 border: 2px white solid;
                 
                 margin-right: 2px;
            }
        </style>
    </head>
    <body>
        <?php
        
        $values =[""," ","FALSE","TRUE","array()","NULL","0",0,0.0,"var","\ 0","String value",123];
        echo "<table>";
        echo "<tr><th>Value of Variable</th><th>isset(\$var)</th><th>empty(\$var)</th><th>is_null(\$var)</th></tr>";
        foreach ($values as $value) {
            $newvalue = substr($value, 0, strlen($value));
            $bool = is_null($newvalue);
            echo "<tr>".
                    "<td>$newvalue</td>".
                    "<td>".isset($newvalue)."</td>".
                    "<td>".empty($newvalue)."</td>".
                    "<td>". $bool."</td>".
                  "</tr>";
            
    
}
        echo "</table>";
        ?>
    </body>
</html>
