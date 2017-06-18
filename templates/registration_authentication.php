<?php 
     // script for authentication of registration.php//
     session_start();
     include 'database.php';
     if(isset($_POST['submit']) && isset($_POST['email']) && isset($_POST['password']))
     {
     	$email = $_POST['email'];
     	$password = $_POST['password'];
     	$email = mysqli_real_escape_string($conn,$email);
     	$password=mysqli_real_escape_string($conn,$password);

     	$query= "select email from Login where email = '$email';";
     	$result=mysqli_query($conn, $query);
     	if(mysqli_num_rows($result))
     	{
     		// condition email id already exists//
     		header("Location:login.php");
     	}

     	else
     	{
     		// inserting new user//
     		$query="insert into Login values(null,'$email','$password');";
     		$result=mysqli_query($conn,$query);
     		if($result)
     		{
     			header("Location:profile.php");
     		}
     		else
     		{
     			echo mysqli_error();
     		}
     	}
     }

     else
     {
     	header("Location:register.php");
     }


?>
