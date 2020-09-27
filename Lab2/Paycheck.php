<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Paycheck</title>
</head>
<body>
<?php

if (isset($_POST['Submit'])) {

    if(!empty($_POST['hours'])) {

        $hours = $_POST['hours'];

        if (preg_match("/([0-9]|[1-8][0-9]|9[0-9]|1[0-5][0-9]|16[0-8])/", $hours) == 0) {

            echo "Please enter a number between 0 and 168";

        }

    }

    if(!empty($_POST['rate'])) {

        $rate = $_POST['rate'];

        if (preg_match("/^\d+(\.\d{1,2})?/", $rate) != 0) {

            echo "Please enter a rate using the format 0.00";

        }

    }

}

?>
</body>
</html>