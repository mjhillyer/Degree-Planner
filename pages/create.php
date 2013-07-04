<?php



//this will create a new user

include '../constants/constants.php';

//set variables

$username = NULL;
$password = NULL;
$password2 = NULL;
$email = NULL;
$type = 'sha1';
$STABLE = 'security';

// uncomment for troubleshooting
// echo $_SERVER['PHP_SELF'];
// echo '<br>';
// echo BASE;
// echo '<br>';
// echo BASE."/includes/pages/create.php";

echo '<form id="newuser action=';
echo BASE;
echo '/includes/pages/create.php"" method="post">
<table>
<tr>
<td>Username:</td>
<td><input type="text" name="username" value="'.stripslashes($username).'" /></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="text" name="password" value="'.stripslashes($password).'" /></td>
</tr>
<tr>
<td>Email:</td>
<td><input type="text" name="email" value="'.stripslashes($email).'" /></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" class="button" name="add" value="Create User" /></td>
</tr>
</table>
</form>';


if(isset($_POST['add']))
{
/* 

//  this is for testing

	echo "<p><b>Data submitted:</b></p>";
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";
*/
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
	$email = mysql_real_escape_string($_POST['email']);

	$q = mysql_query("SELECT username FROM ".$STABLE." WHERE username = '$username'");
	if(mysql_num_rows($q) > 0)
	{
		echo "User already exists";
	}

	//md5 encrypts password
	
	$password = sha1($password);
	
	$q1 = mysql_query("INSERT INTO ".$STABLE." (username, password, email) VALUES ('$username', '$password', '$email')") or die("Unable to insert data");
}


?>
