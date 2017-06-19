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
          $date = date('Y-m-d',strtotime($_POST['date']));
          $user_id = $_SESSION['user_id'];

          // for product image processing//
          $product_pic = basename($_FILES['product']['name']);
          $location = "/var/www/html/OnlineAuction/templates/products/" .basename($_FILES['product']['name']);
          move_uploaded_file($_FILES['product']['temp_name'],$location);   

          $query = "insert into Product values(null,'$product_name','$date',$price,'$product_pic','$user_id','$description');";
          $result=mysqli_query($conn, $query);
     }

?>