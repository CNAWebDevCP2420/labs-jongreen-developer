<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Is Even</title>
</head>
<body>
<?php

$SelectedNumber = 4.225;

if (is_numeric($SelectedNumber)) {

    if(round($SelectedNumber) % 2 == 0){
        
        echo "The number is even.";

    } else {

        echo "The number is odd.";

    }

} else {

    echo "The value is not numeric.";

}

?>
</body>
</html>