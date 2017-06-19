<?php 
     // script for profile.php processing//
     session_start();
     include 'database.php';
     if(isset($_POST['Save']))
     {
     	    $full_name = mysqli_real_escape_string($conn,$_POST['fullname']);
            $city = mysqli_real_escape_string($conn,$_POST['city']);
            $state = mysqli_real_escape_string($conn,$_POST['state']);
     	    $gender =mysqli_real_escape_string($conn,$_POST['gender']);
     	    $phone_number =mysqli_real_escape_string($conn,$_POST['phone_number']);
     	    $login_id =$_SESSION['login_id'];
            //for moving file

     	    $temp_name = $_FILES['profile_pic']['tmp_name'];
     	    $location = '/var/www/html/OnlineAuction/templates/profile_pics/'.basename($_FILES['profile_pic']['name']);
            move_uploaded_file($temp_name, $location);
            $login_id = $_SESSION['login_id'];
            $profile_pic = basename($_FILES["profile_pic"]['name']);

            $query="insert into Users (user_id,login_id,profile_pic,full_name,email,city,state,gender,phone_number) 
                    values (null,$login_id,'$profile_pic','$full_name','$email','$city','$state','$gender',$phone_number);";

            $result = mysqli_query($conn, $query);
            
            
            if(!$result)
            {  
               
               header("Location:profile.php");

            }

            else 
            {
              header("Location:view_profile.php");
            }
     }

     else
     {
          
          header("Location:profile.php");
     }
?>