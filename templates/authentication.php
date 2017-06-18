<?php
    // script for login.php authentication//
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
			// if any result exist means user logged in sucessfully//
			$arr = mysqli_fetch_assoc($result);
			$_SESSION['login_id']=$arr['login_id'];      
			header("Location:home.php");
		}
		else
		{
			// user not present //
			header("Location:register.php");

		}

	}
	else 
	{
		header("Location:login.php");
	}

?>