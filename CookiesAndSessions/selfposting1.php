<?php

$val1 = "";
$val2 = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if(!empty($_POST['val1']) && !empty($_POST['val2']))
    {
        $val1 = $_POST['val1'];
        $val2 = $_POST['val2'];
        $result = $val1 + $val2;
    }
}
?>
<html>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    
        Enter first number<br>
        <input type="text" name="val1" value="<?php echo $val1; ?>"><br>
        <br>
        Enter second number<br>
        <input type="text" name="val2" value="<?php echo $val2; ?>"><br>
        <br>
        <input type="submit" value="Add Numbers">
    </form>
    <br>
    <br>
    <?php 

    if(!empty($val1) && !empty($val2))
    {
        echo "<b>The values added are $result</b>";
    }

    ?>
    
    
    
</html>







