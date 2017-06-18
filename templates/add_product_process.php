<?php 
     // script for processing add_product.php //

     session_start();
     include('database.php');
     


     if (isset($_POST['submit'])) 
     {
     	$product_name = $_POST['product_name'];
     	$description = $_POST['description'];
     	$date = $_POST['date'];
     	$price = $_POST['price'];
     }

?>