<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Temp Conversion</title>
</head>
<style>
table {width: 400px;}
td {text-align: center;}
</style>
<body>
<table border="1">
    <tr><td colspan = "2">Fahrenheit to Celsius Conversion Table</td></tr>
    <tr><td>Fahrenheit</td><td>Celsius</td></tr>
<?php

$Fahrenheit = 0;

while($Fahrenheit <= 100){

    $Celsius = round(($Fahrenheit - 32) * (5 / 9), 1);
    echo "<tr><td>$Fahrenheit</td><td>$Celsius</td></tr>";
    ++$Fahrenheit;

}

?>
</table>
</body>
</html>