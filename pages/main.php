<?php

include '../constants/constants.php';

?>

<html>
<head>




<form>
My Plan
<form name="plan">
<input type="submit" value="Edit My Plan">
<input type="submit" value="Create New Plan">
</form>


Courses Availible for this Program

<br>
<br>
<br>
<br>
Degree Sought:

Program Type: 

<br>
<br>

<table>
<tr>
<td>Course#</td>
<td>Course Name</td>
<td>Credits</td>
<td>Req'd</td>
<td>Pre-Req(s)</td>
<td>Offered</td>
</tr>
</table>

<?php
include 'courselist.php';
?>



<br>My Plan <input type="submit" value="Save this Plan">



</html>
</head>


