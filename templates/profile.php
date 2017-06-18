<?php 
     session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile </title>
</head>
<body>
<form action="profile_process.php" method="post" enctype="multipart/form-data">

	<label for="profile_pic"> Profile Pic</label><br>

	<input type="file" name="profile_pic"><span style="color: red;">*</span><br><br>

	<label for="fullname">Fullname</label>
	<input type="text" name="fullname"><span style="color: red;">*</span><br><br>

	<label for="email">Email</label>
	<input type="email" name="email"><span style="color: red;">*</span><br><br>

	<label>City</label>
	<input type="text" name="city"><span style="color: red;">*</span><br><br>

	<label>State</label>
	<input type="text" name="state"><span style="color: red;">*</span><br><br>

	<label>Phone Number</label>
	<input type="text" name="phone_number"><span style="color: red;">*</span><br><br>

	<label>Gender</label>
	<input type="radio" name="gender" value="Male">Male
	<input type="radio" name="gender" value="Female">Female
	<span style="color: red;">*</span>

	<p style="color: red;">* field cannot be empty</p>
	<input type="submit" name="Save">

</form>

</body>
</html>