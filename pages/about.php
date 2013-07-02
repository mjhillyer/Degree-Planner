<?php

include'../constants/constants.php';

?>

<html>
<body>

<h1>You're on your way!<h1>
Please tell us a bit about yourself so we can make your degree planning easier

<h2>Degree Sought</h2>
By telling us your end goal, we will help ease the trouble of planning your way 
by only showing information relevant to you selected degree types[s].<br><br>

<form>
<input type="radio" name="degree" value="certificate">Certificate
<input type="radio" name="degree" value="masters" checked="checked">Masters of Science
<input type="radio" name="degree" value="phd">PhD<br>
</form>



<h2>Program Type</h2>
Tell us how you will be attending class.<br>

<form>
<input type="radio" name="program" value="online" checked="checked">Online (Distance)
<input type="radio" name="program" value="campus">On-Campus (Traditional)
</form>


Home Department:
<select>
  <option value="unspecified">Unspecified</option>
  <option value="graphic">Graphic Design</option>
  <option value="industrial">Industrial Engineering</option>
  <option value="other">Other</option>
</select>




<form name="plan" action="<?php echo BASE; ?>index.php?p=plan" method="post">
<input type="submit" value="Create My Plan">
</form>



</body>


</html>