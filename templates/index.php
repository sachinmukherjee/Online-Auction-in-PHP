<?php 
	// starting page of website //
    session_start();
    include 'database.php';

    if(isset($_SESSION['login_id']))
    	header("Location:home.php");
    else
    	header("Location:login.php");
?>