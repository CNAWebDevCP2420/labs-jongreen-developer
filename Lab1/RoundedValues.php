<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Rounded Values</title>
</head>
<body>
<?php

$SampleNumber = 5.255;

echo "5.255 becomes ".round($SampleNumber)." using the round() function.</br>";
echo "5.255 becomes ".ceil($SampleNumber)." using the ceil() function.</br>";
echo "5.255 becomes ".floor($SampleNumber)." using the floor() function.";

?>
</body>
</html>