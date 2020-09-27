<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Contact Me</title>
</head>
<body>

<form name="twotrains" action="TwoTrains.php" method="post">
<p>Train A Speed: <input type="text" name="speeda" value="" /></p>
<p>Train B Speed: <input type="text" name="speedb" value="" /></p>
<p>Distance: <input type="text" name="distance" value="" /></p>
<p><input type="reset" value="Clear Form" />&nbsp;&nbsp;<input type="submit" name="Submit" value="Send Form" /></p>
</form>

<?php   

$DistanceA = (($SpeedA / $SpeedB) * $Distance) / (1 + ($SpeedA / $SpeedB));
$DistanceB = $Distance - $DistanceA;
$TimeA = $DistanceA / $SpeedA;
$TimeB = $DistanceB / $SpeedB;

if(isset($_POST['Submit'])) {

    

}

?>
</body>
</html>