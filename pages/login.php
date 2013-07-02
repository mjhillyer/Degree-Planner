<?php

$username = NULL;
$password = NULL;
$email = NULL;

include'../constants/constants.php';

?>
<html>
<body>
Welcome

<p>Welcome to the HCI Degree Planner. We do degree planning, simplified. Please note this is 
just a tool to help you along. Always consult with your program advisor(s) before enrolling 
in classes.</p>

<br>

<form name="login" >
User name: <input type="text" name="username"><br>
Password: <input type="password" name="password"><br>
<input type="submit" value="Log in">
</form>

<form name="new" action="<?php echo BASE; ?>index.php?p=create" method="post">
<input type="submit" value="Create an account">
</form>


<p>

<form name="guest" action="<?php echo BASE; ?>index.php?p=about" method="post">
Continue as a Guest
<input type="submit" value="Log in as Guest">
</form>



</body>
</html>

