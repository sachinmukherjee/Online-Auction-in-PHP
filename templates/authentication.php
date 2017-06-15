<?php
	session_start();
	include 'database.php';

	if(isset($_POST['submit']) && isset($_POST['email']) && isset($_POST['password']))
	{
		$email = $_POST['email'];
		$password = $_POST['password'];

		$query = "select login_id from Login where email='$email' and pass='$password';";
		$result=mysqli_query($conn, $query);
		
		if(mysqli_num_rows($result))
		{
			$_SESSION['user']=true        
			header("Location:home.php");
		}
		else
		{
			header("Location:register.php");

		}

	}
	else 
	{
		header("Location:login.php");
	}

?>