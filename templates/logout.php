<?php
     // script to loggin out user and distroying all sessions// 

     session_start();
     if(isset($_SESSION['login_id']))
     {
       session_destroy();
     }
     else 
     	header("Location:index.php");

?>