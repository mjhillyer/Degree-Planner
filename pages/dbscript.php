<?php

/*

DB setup script

*/

//include constants

include 'includes/constants/constants.php';

//Connect to MySQL Server
$con = mysql_connect($dbhost, $dbuser, $dbpass);

//does the db exist? If not, option to create
$select = mysql_select_db($dbname);

if (!$select)
{
include 'includes/pages/createdb.php';
}
else 
{
 //do nothing
}

//check for table, if not existing then create
if(mysql_num_rows(mysql_query("SHOW TABLES LIKE '".$table_name."'"))==1) 
{    
	//do nothing
}
else 
{
include 'includes/pages/addtable.php';
}

?>