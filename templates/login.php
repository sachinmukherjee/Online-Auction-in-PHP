<!DOCTYPE html>
<html>
<head>
	<title>Please Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>


<div class="container">
<h3 style="position: relative; top:1cm; left:3.5cm; font-weight: bolder;">Login</h3>

<form action="authentication.php" method="post" class="form" role="form" style="position: relative; top:1cm; ">
<div class="form-group">
<label for="email">Email id</label>
<input type="email" name="email" class="form-control" style="width:10cm;"><span style="color: red;">* field cannot be empty</span>
</div>

<div class="form-group">
<label for="password">Password</label>
<input type="password" name="password" class="form-control" style="width: 10cm;"><span style="color: red;">* field cannot be empty</span>
</div>

<button type="submit" name="Login" value="submit" class="btn btn-success">Login</button>

</form>

<a class="seller" href="login_seller.php" style="position: relative; top:1cm;">Seller Login</a>
<p style="position: relative; top:1cm;">If new user then <a class="register" href="register.php">Click here</a> to register</p>
</div>
</body>
</html>