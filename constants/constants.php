<?php

/*
Set global constants here:

*/

//base URL of site
define ("BASE", "http://".$_SERVER['HTTP_HOST']."/air/HCIProgPlan/");

//base in operating system
define ("REL_BASE", $_SERVER['DOCUMENT_ROOT'] . "/air/HCIProgPlan/");

//echo BASE

//db connection information

$dbhost = "localhost";
$dbuser = "hci573";
$dbpass = "hci573";
$dbname = "hci573";
$table_name = "project";


$link = mysql_connect($dbhost, $dbuser, $dbpass) or die("Couldn't make connection.");
$db = mysql_select_db($dbname, $link) or die("Couldn't select database");

/*Function to secure pages and check users*/
function secure_page()
{
	session_start();
	global $db;

	//Secure against Session Hijacking by checking user agent
	if(isset($_SESSION['HTTP_USER_AGENT']))
	{
		//Make sure values match!
		if($_SESSION['HTTP_USER_AGENT'] != md5($_SERVER['HTTP_USER_AGENT']) || $_SESSION['logged'] != true)
		{
			logout();
			exit;
		}

		//We can only check the DB IF the session has specified a user id
		if(isset($_SESSION['user_id']))
		{
			$details = mysql_query("SELECT id, username FROM ".security." WHERE id ='".$_SESSION['user_id']."'") or die(mysql_error());
			list($id, $username) = mysql_fetch_row($details);

			//We know that we've declared the variables below, so if they aren't set, or don't match the DB values, force exit
			if(!isset($_SESSION['stamp']) && $_SESSION['stamp'] != $username || !isset($_SESSION['key']) && $_SESSION['key'] != $id)
			{
				logout();
				exit;
			}
		}
	}
	//if we get to this, then the $_SESSION['HTTP_USER_AGENT'] was not set and the user cannot be validated
	else
	{
		logout();
		exit;
	}
}

/*Function to logout users securely*/
function logout($lm = NULL)
{
	if(!isset($_SESSION))
	{
		session_start();
	}

	//If the user is 'partially' set for some reason, we'll want to unset the db session vars
	if(isset($_SESSION['user_id']))
	{
		global $db;
		mysql_query("UPDATE `".USERS."` SET `id`= '', `username`= '' WHERE `id`='".$_SESSION['user_id']."'") or die(mysql_error());
		unset($_SESSION['user_id']);
	}
		unset($_SESSION['user_name']);
		unset($_SESSION['user_level']);
		unset($_SESSION['HTTP_USER_AGENT']);
		unset($_SESSION['stamp']);
		unset($_SESSION['key']);
		unset($_SESSION['fullname']);
		unset($_SESSION['logged']);
		session_unset();
		session_destroy();

	if(isset($lm))
	{
		header("Location: ".SITE_BASE."/login.php?msg=".$lm);
	}
	else
	{
		header("Location: ".SITE_BASE."/login.php");
	}
}


/*Function to generate key for login.php*/
function generate_key($length = 7)
{
	$password = "";
	$possible = "0123456789abcdefghijkmnopqrstuvwxyz";

	$i = 0;
	while ($i < $length)
	{
		$char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
		if (!strstr($password, $char))
		{
			$password .= $char;
			$i++;
		}
	}
	return $password;
}

/*Function to super sanitize anything going near our DBs*/
function filter($data)
{
	$data = trim(htmlentities(strip_tags($data)));

	if (get_magic_quotes_gpc())
	{
		$data = stripslashes($data);
	}

	$data = mysql_real_escape_string($data);
	return $data;
}



?>