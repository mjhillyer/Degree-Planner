<?php

include'../constants/constants.php';

session_start();


?>

<html>
<body>

<h3>You're on your way!</h3>
Please tell us a bit about yourself so we can make your degree planning easier

<h4>Degree Sought</h4>
<p class="about">By telling us your end goal, we will help ease the trouble of planning your way 
by only showing information relevant to you selected degree types[s].<br><br></p>

<!--- removing other program choices due to time constraints--->
<form>
<!--<input type="radio" name="degree" value="certificate">Certificate-->
<input type="radio" name="degree" value="masters" checked="checked">Masters of Science
<!--<input type="radio" name="degree" value="phd">PhD<br>-->
</form>



<h4>Program Type</h4>
<p class="about">Tell us how you will be attending class.<br></p>

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
<input type="submit" id="crbutton" class="button" value="Create My Plan">
</form>



</body>


</html>