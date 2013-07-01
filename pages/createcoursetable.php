<?php

//this will create the table for all the course information


//include constants

include '../constants/constants.php';

//Connect to MySQL Server
$con = mysql_connect($dbhost, $dbuser, $dbpass);

echo "Table does not exist";
echo "<br>";
echo "creating table...";
echo "<br>";

//check to see if database exists
$select = mysql_select_db($dbname);
if (!$select){
	echo "Database not found! <br>";
	echo "Create the database first, then rerun this script.";
	exit();
}

//an SQL query for creating a table
//The query specifies the types of the fields 

/* add table fields here */

$sql = "CREATE TABLE courses (
		CKY INT NOT NULL AUTO_INCREMENT,
		PHD BINARY NOT NULL,
		MSONSITE BINARY NOT NULL,
		MSONLINE BINARY NOT NULL,
		GRADCERT BINARY NOT NULL,
		NUMBER TEXT NOT NULL,
		TITLE TEXT NOT NULL,
		CREDITS INT NOT NULL,
		PREREQ TEXT NOT NULL,
		DESCRIPTION	TEXT NOT NULL,
				
		PRIMARY KEY(CKY)
)";

// Execute query
$result = mysql_query($sql,$con);
if ($result)
{
	echo "Table $table_name created successfully" . "<br>";
	echo "<br>";
	echo "<br>";
}
else
{
	//use mysql_errno() function to see what went wrong
	$err = mysql_errno();
}



?>


