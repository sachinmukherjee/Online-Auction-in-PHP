<?php 
    // script for seller authentication login_seller.php //
    
     session_start();
     include 'database.php';

     if(isset($_POST['Login']) && isset($_POST['username']) && isset($_POST['password']))
     {
     	$username= $_POST['username'];
     	$password = $_POST['password'];

     	$query="select username from Seller where username='$username';";
     	$result=mysqli_query($conn, $query);

     	if(mysqli_num_rows($result))
     	{
     		$query2 = "select id from Seller where username='$username';";
     		$result2 = mysqli_query($conn,$query2);
     		$arr = mysqli_fetch_assoc($result2);
     		$_SESSION['seller_id']=$arr['id'];
     		header("Location: home_seller.php");
     	}

     	else 
     	{
     		header("Location: login_seller.php");

     	}
     }

     else 
     {
     	header("Location: login_seller.php");
     }

?>