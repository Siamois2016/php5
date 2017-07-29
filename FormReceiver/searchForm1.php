<?php

if(count($_POST)==0){
    echo "Warning: No fields were found to display";
    
}
else{
    if(!empty($_POST['querystr'])&& !empty($_POST['term'])){
        $text = $_POST['term'];
        $querystr = $_POST['querystr'];
        
        
       if(strpos($text, $querystr) !=FALSE){
           //$wordlength = strlen($text);
           $length = strlen($querystr);
           
           $startpos = strpos($text, $querystr);
            $found = substr($text, $startpos, $length);
            
          echo "The search String \"$querystr \" was found in the string "."\"$text\" (as indicated).";  
         
           $result = str_ireplace($found,"<span style=\"color:red\" >$found</span>",$text);
           echo "<hr>";
           
           echo "<br>Search Result = ".$result;
       }     
        else{
             echo "<p>The search String \" $querystr \" was not found in the string \"$text\".</p>";
            
        }
    }else{echo "Warning!!! Empty Fields :Please enter a text and a search string ";}
  echo "<p><a href='searchForm1.html'> <<= Back To SearchForm </a></p>";  
} 

//echo $text;


