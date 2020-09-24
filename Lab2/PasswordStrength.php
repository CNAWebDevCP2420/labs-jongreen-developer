<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Password Strength</title>
</head>
<body>
<h1>Password Strength</h1><hr />
<?php

$passwords = array(
    
    "abcdefgh",
    "ABCDEFGH",
    "12345678",
    "1234 abc",
    "1233456901234567",
    "Ab12$",
    "P455w0rd!",
    "V4l1Dp455w0rD!",
    "b4d P4s5W0rd",
    "$$$$$$"

);

foreach($passwords as $password) {

    $valid = true;

    // One Number
    if (preg_match("/^(?=.*[0-9])/", $password) == 0) {
        echo "[".$password."] Password doesn't contain a number</br>";
        $valid = false;
    }

    // One Lowercase Letter
    if (preg_match("/^(?=.*[a-z])/", $password) == 0) {
        echo "[".$password."] Password doesn't contain a lowercase letter</br>";
        $valid = false;
    }

    // One Uppercase Letter
    if (preg_match("/^(?=.*[A-Z])/", $password) == 0) {
        echo "[".$password."] Password doesn't contain a uppercase letter</br>";
        $valid = false;
    }

    // No Spaces
    if (preg_match("/^(?!.*\s)/", $password) == 0) {
        echo "[".$password."] Password contains an invalid character</br>";
        $valid = false;
    }

    // Contains Special Character
    if (preg_match("/^(?=.*[^0-9A-Za-z])/", $password) == 0) {
        echo "[".$password."] Password doesn't contain a special character</br>";
        $valid = false;
    }

    // Between 8 And 10 Characters
    if (preg_match("/^.{8,16}$/", $password) == 0) {
        echo "[".$password."] Password isn't between 8 and 16 characters in length</br>";
        $valid = false;
    }

    // Valid Password
    if($valid){
        echo "[".$password."] Password is valid</br>";
    }

    echo "</br>";

}

?>
</body>
</html>