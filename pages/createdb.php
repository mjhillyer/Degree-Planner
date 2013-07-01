<?php

//include constants

include '../constants/constants.php';

//Connect to MySQL Server
$con = mysql_connect($dbhost, $dbuser, $dbpass);

//add this check- check connection using mysqli_connect_errno($con) 
//and mysqli_connect_error()


//check to see if database exists using mysql_select_db($dbname);

$select = mysql_select_db($dbname);

//for testing
//$select = mysql_select_db('Test500');

if (!$select)
{
echo "Database not found, creating it";
echo "<br>";
echo "<br>";
}
else 
{
 echo "Database exists!";
 echo "<br>";
}

$create = mysql_query("CREATE DATABASE $dbname") or die(mysql_error());

?>