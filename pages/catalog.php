<?php

include '../constants/constants.php';

//Connect to MySQL Server
$con = mysql_connect($dbhost, $dbuser, $dbpass);

//select our database
$select = mysql_select_db($dbname);

echo '<form>
      <form name="addtoplan">
      Course Details
      <input type="submit" value="Add Course to My Plan">
      </form>';



//this is for testing
$courseCKY = 7;

//setup query 
$sql  = "SELECT NUMBER, TITLE, CREDITS, PREREQ, DESCRIPTION  FROM courses where CKY = $courseCKY";

//process it
$list = mysql_query($sql,$con) or die(mysql_error());


//loop for printing out the results
while($row = mysql_fetch_assoc($list))
{

	echo $row['NUMBER'];
	echo ":  ";
	echo $row['TITLE'];
	echo '<br>';
	echo '<br>';
	echo 'Average Course Rating:';
	echo '<br>';
	echo '<br>';
	echo 'Credits: ';
	echo $row['CREDITS'];
	echo '<br>';
	echo 'Prerequisite(s): ';
	echo $row['PREREQ'];
	echo '<br>';
	echo '<br>';
	echo 'Description: ';
	echo $row['DESCRIPTION'];
	echo '<br>';
	echo '<br>';
	echo 'Required Textbook(s): ';
	echo '<br>';
	echo '<br>';
	echo '<br>';
	echo '<br>';
	echo 'Student Reviews';
}



?>
