<html>
<body>
<table>

<div id="courselist">

<?php

include '../constants/constants.php';

//Connect to MySQL Server
$con = mysql_connect($dbhost, $dbuser, $dbpass);

//select our database
$select = mysql_select_db($dbname);


//setup query 
$sql  = "SELECT NUMBER, TITLE, CREDITS, PREREQ, PHD, MSONSITE, GRADCERT FROM courses";

//process it
$list = mysql_query($sql,$con) or die(mysql_error());

//echo "Results from query: $sql <br><br>";

//loop for printing out the results
while($row = mysql_fetch_assoc($list))
{

	echo "<tr>";
	echo "<td>";
	echo $row['NUMBER'];
	echo "</td>";
	echo "<td>";
	echo $row['TITLE'];
	echo "</td>";
	echo "<td>";
	echo $row['CREDITS'];
	echo "</td>";
	echo "<td>";
	echo $row['PREREQ'];
	echo "</td>";
	echo "<td>";
	echo $row['PHD'];
	echo "</td>";
	echo "<td>";
	echo $row['MSONSITE'];
	echo "</td>";
	echo "<td>";
	echo $row['CREDITS'];
	echo "</td>";
	echo "<td>";
}
?>
</div>



</table>

</body>
</html>