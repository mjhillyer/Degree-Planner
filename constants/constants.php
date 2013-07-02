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



?>