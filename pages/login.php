<?php

$username = NULL;
$password = NULL;
$email = NULL;


?>
<html>
<body>
Welcome

<p>Welcome to the HCI Degree Planner. We do degree planning, simplified. Please note this is 
just a tool to help you along. Always consult with your program advisor(s) before enrolling 
in classes.</p>

<br>

<form>
<form name="login">
User name: <input type="text" name="username"><br>
Password: <input type="password" name="password"><br>
<a href="create.php">Create an account</a>
<input type="submit" value="Log in">
</form>

<p>

<form>
<form name="guest">
Continue as a Guest
<input type="submit" value="Log in as Guest">
</form>



</body>