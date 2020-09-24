<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Standard Palindrome</title>
</head>
<body>
<h1>Standard Palindrome</h1><hr />
<?php

$words = array(
    
    "radar",
    "ra-dd'a'r"

);

foreach($words as $word){

    $newword = preg_replace("/[^A-Za-z]/", "", $word);
    
    if (strrev($newword) == $newword){   
    
        echo $word." is a palindrome</br>";
    
    } else { 
    
        echo $word." is not a palindrome</br>";
    
    } 
}

?>
</body>
</html>