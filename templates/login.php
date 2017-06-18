<!DOCTYPE html>
<html>
<head>
	<title>Please Login</title>
</head>
<body>
<h3>Login</h3>
<form action="authentication.php" method="post">
<label for="email">Email id</label>
&nbsp;&nbsp;<input type="text" name="email">&nbsp;<span style="color: red;">* field cannot be empty</span><br><br>
<label for="password">Password</label>
<input type="password" name="password">&nbsp;<span style="color: red;">* field cannot be empty</span><br><br>
<input type="submit" name="submit">
</form>
<p>if new user then <a href="register.php">Click here</a> to register</p>
</body>
</html>