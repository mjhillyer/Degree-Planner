<?php


include'../constants/constants.php';
session_start();

?>

<html>
<body>
<div style="float:left; width:66%">
<h2>My Plan</h2> 

<form name="editplan">
<input type="submit" value="Edit My Plan">
<input type="submit" value="Create New Plan">
</form>

<p>Courses Available for this Program</p>
<table>
<tr>
<th>Course #</th>
<th>Course Name<th>
<th>Credits</th>
<th>Reqd</th>
<th>Pre-Reg(s)</th>
<th>Offered</th>
</tr>
</table>

<?php

include 'courselist.php';

?>



<form name="saveplan">
<input type="submit" value="Save this Plan">
</form>

<h2>My Plan</h2>

Spring 2014<br>
<br>
Course Name     HCI 585 Advanced Computer Architecture

</div>

<div style="float:right; width:33%">


<?php

include 'catalog.php';

?>

</div>

</body>
</html>
