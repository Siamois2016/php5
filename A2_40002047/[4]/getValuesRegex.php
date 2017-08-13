<?php

/*
 * Function to find out the first two characters of a string
 * takes the string as $parameter
 * $pattern contains the pattern that matches any 2 characters
 * returns  the first and last subpart of the match
 */
function getCharsFromString($subject) {
    $matches = array();
    $pattern = "/^[\s\S]{2}/"; 
    preg_match($pattern, $subject, $matches); 
    $one = substr($matches[0], 0, 1);
    $two = substr($matches[0], -1);

    return "$subject – \$one = \"$one\" and \$two = \"$two\"";
}

/*
 * Function to find the first word of a sentence
 * $pattern is the regex that matches the first word of a sentence with no white space
 * function returns the only match
 */
function getFirstWord($subject){
    $matches = array();
    $pattern = "/^[a-z A-Z 0-9 *_+-.,!@#$%^&();|<>\"']\w\S+/";   
    preg_match($pattern, $subject, $matches);
    
    return $matches[0]; 
}
/*
 * This function displays two form to allow user 
 * to enter either a string or a sentence for processing
 * 
 **/

function displayForm(){?>

    <html>
        <body>
            <h3>[1]Get the first and second character of a string</h3>
            <div>
                <form method="POST" action ="<?php echo($_SERVER['PHP_SELF']); ?>">
                    Your String:<input type="text" name="str" size="50"/>  
                    <input type="submit" value="Get the First two characters"/>
                </form>
                
            </div>
            <h3>[2] Get the first word of a sentence.</h3>
            <div>
                <form method="POST" action ="<?php echo($_SERVER['PHP_SELF']); ?>">
                    Your Sentence: <input type="text" name="sentence" size="50"/>  
                    <input type="submit" value="Get the First word"/>
                </form>
                
            </div>
        </body>
    </html>
    <?php
       
}
/*
 * If this is the first page call, it is a Get
 * then displays the form .
 * After submission(method = post)
 *  1. Test if a word is entered. In this case process 
 *  2. Test if a sentence is entered. In this case process
 *  3. Otherwise display a warning message. 
 */
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    
    displayForm();
    
} else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $str="";
    $sentence = "";
    
    if (!empty($_POST['str'])) {
       
        $str = $_POST['str'];
        
        echo getCharsFromString($str)."<br>";
        
        echo "<br><a href=''>Back to Form</a>";
        
    }else if(!empty($_POST['sentence'])){
        
        $sentence = $_POST['sentence'];
        
        echo getFirstWord($sentence)."<br>";
        
        echo "<br><a href=''>Back to Form</a>";
    }else{
        echo "<span style='color:blue'>Warning!: Please provide a word or a Sentence.</span>";
        displayForm();
    }
}

