<html>
<head><title>Temperature Conversion</title></head>
<body>
<?php
//$fahr = $_GET['fahrenheit'];
if ($_SERVER['REQUEST_METHOD']=='GET') {
?>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>"
method="POST">
Fahrenheit temperature:
<input type="text" name="fahrenheit" /> <br />
<input type="submit" name="Convert to Celsius!" />
</form>
<?php
} else if ($_SERVER['REQUEST_METHOD']=='POST'){
$fahr= $_POST['fahrenheit'];
    $celsius = ($fahr - 32) * 5/9;
printf("%.2fF is equal to %.2fC", $fahr, $celsius);
}
?>
</body>
</html>

