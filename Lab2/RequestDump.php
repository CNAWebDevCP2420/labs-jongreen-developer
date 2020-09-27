<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Contact Me</title>
</head>
<body>
<?php 

if(isset($_POST['Submit'])) {

    include 'inc_requestDump.php';

} else { ?>

<h2 style = "text-align:center">Test Form</h2>

<form name="contact" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<p>Your Name: <input type="text" name="Sender" value="Tester" /></p>
<p>Your E-mail: <input type="text" name="Email" value="Test" /></p>
<p>Subject: <input type="text" name="Subject" value="Test" /></p>
<p>Message:<br /><textarea name="Message">Test Message</textarea></p>
<p><input type="reset" value="Clear Form" />&nbsp;&nbsp;<input type="submit" name="Submit" value="Send Form" /></p>
</form>

<?php } ?>

</body>
</html>