<?php

session_start();

?>

<html>
<body>


<form>
My Profile
Student, Joe D.
<form name="saveprofile">
<input type="submit" value="Save My Profile">
</form>
<br>

Degrees Sought
<br>
<br>

By telling us your end goal, we will help ease the trouble of planning your way by only showing information relevant to you selected degree types[s].
<br>
<br>

<form>
<input type="checkbox" name="certificate" value="certificate">Certificate
<input type="checkbox" name="masters" value="masters">Masters of Science
<input type="checkbox" name="phd" value="phd">PhD<br>
</form>

<h2>Program Type</h2>
Tell us how you will be attending class.<br>
<br>

<form>
<input type="radio" name="online" value="online">Online (Distance)
<input type="radio" name="campus" value="campus">On-Campus (Traditional)
</form>

Home Department:
<select>
  <option value="unspecified">Unspecified</option>
  <option value="graphic">Graphic Design</option>
  <option value="industrial">Industrial Engineering</option>
  <option value="other">Other</option>
</select>

<br>
<br>My Degree Team<br><br>
The awesome people who will help you attain your goal by guiding you along the way.<br><br>


Major Professor: Doe, John<br>
Advisor: Parks, AJ<br>
Advisor: Smith, Sheela<br>




<br>





</body>
</html>


