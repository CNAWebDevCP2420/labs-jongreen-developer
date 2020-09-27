<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Paycheck</title>
</head>
<body>
<?php

$hours = 0;
$rate = 0;
$valid = true;

if (isset($_POST['Submit'])) {

    if(!empty($_POST['hours'])) {

        $hours = $_POST['hours'];

        if (preg_match("/([0-9]|[1-8][0-9]|9[0-9]|1[0-5][0-9]|16[0-8])/", $hours) == 0) {

            echo "Please enter the number of weekly hours worked (1 - 168)";
            $valid = false;

        }

    } else {

        echo "Please enter the number of weekly hours worked (ex. 40)";
        $valid = false;

    }

    if(!empty($_POST['rate'])) {

        $rate = $_POST['rate'];

        if (preg_match("/\d+(\.\d{1,2})?/", $rate) == 0) {

            echo "Please enter the hourly rate (ex. 15.00)";
            $valid = false;

        }

    } else {

        echo "Please enter the hourly rate (ex. 15.00)";
        $valid = false;

    }

    if($valid != false){

        if($hours >= 40){

            $pay = (40 * $rate) + (($hours - 40) * ($rate * 1.5));

        } else {

            $pay = (40 * $rate);

        }

        echo "The wages earned are $".$pay;

    }

}

?>
</body>
</html>