<?php

include'../constants/constants.php';

//echo $_SERVER['PHP_SELF'];

$username = NULL;
$password = NULL;
$dbpwd = NULL;
$id = NULL;
$msg = NULL;
$err = NULL;

// enable for troubleshooting

//	echo "<pre>";
//	print_r($_POST);
//	echo "</pre>";


//See if form was submitted, if so, execute...
if(isset($_POST['login']))
{
	//Assigning vars and sanitizing user input
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
	$password = sha1($password); 

/*
echo $username;
echo '<br>';
echo $password;
echo '<br>';
echo $msg;
echo '<br>';
echo $err;
*/

	if(empty($username))
	{
		$err = "You must enter a username";
	}
	if(empty($password))
	{
		$err = "You must enter a password.";
	}
	//Select password hash from db and compare 
	
	$q = mysql_query("SELECT password, id FROM ".security." WHERE username = '$username'") or die(mysql_error());

	//Select only the password if a user matched
	list($dbpwd, $id) = mysql_fetch_row($q);
	
//	echo $dbpwd;
//	echo '<br>';
//	echo $id;

	if(empty($err))
	{
		//If someone was found, check to see if passwords match
		if(mysql_num_rows($q) > 0)
		{
			if($dbpwd === $password)
			{
				//Assign session variables to information specific to user
				$_SESSION['user_id'] = $id;
				$_SESSION['user_name'] = $username;
				$_SESSION['logged'] = true;
				//And some added encryption for session security
				$_SESSION['HTTP_USER_AGENT'] = md5($_SERVER['HTTP_USER_AGENT']);

				//Build a message for display where we want it
				$msg = "Logged in successfully!";
				echo $msg;
			} //end passwords matched
			else
			{
				//Passwords don't match, issue an error
				$err = "Invalid User";
				echo $err;
			}
		} //end if user found
		else
		{
			//No rows found in DB matching username, issue error
			$err = "I could not find you in the system, please create an account.";
			echo $err;
		}
	} //end if no error
}  //end form posted


?>


<html>
<body>
<h3>Welcome</h3>

<p id="welcome" >Welcome to the HCI Degree Planner. We do degree planning, simplified. Please note this is 
just a tool to help you along. Always consult with your program advisor(s) before enrolling 
in classes.</p>

<br>

<div class = "login">

<form action="<?php echo BASE; ?>index.php?p=login" method="post">
   User Name: <input type="text" name="username" /><br />
   Password: <input type="password" name="password" id="password"/><br />
   <input class="button" type="submit" name="login" value="login" />
</form>



<form name="new" action="<?php echo BASE; ?>index.php?p=create" method="post">
<input type="submit" class="button" value="Create an account">
</form>
</div>


<form name="guest" id="guest" action="<?php echo BASE; ?>index.php?p=about" method="post">
Continue as a Guest<br>
<input type="submit" class="button" value="Log in as Guest">
</form>





</body>
</html>

