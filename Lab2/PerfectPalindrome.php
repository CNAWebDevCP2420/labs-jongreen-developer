<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Perfect Palindrome</title>
</head>
<body>
<h1>Perfect Palindrome</h1><hr />
<?php

$words = array(
    
    "radar",
    "ABCDEFGH"

);

foreach($words as $word){

    if (strrev($word) == $word){   
    
        echo $word." is a palindrome</br>";
    
    } else { 
    
        echo $word." is not a palindrome</br>";
    
    } 
}

?>
</body>
</html>