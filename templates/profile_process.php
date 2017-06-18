<?php 
     // script for profile.php processing//
     session_start();
     include 'database.php';
     if(isset($_POST['Save']))
     {
     	  echo $fullname = mysqli_real_escape_string($conn,$_POST['fullname']);
     	  echo $city = mysqli_real_escape_string($conn,$_POST['city']);
     	  $state = mysqli_real_escape_string($conn,$_POST['state']);
     	  $gender =mysqli_real_escape_string($conn,$_POST['gender']);
     	  $phone_number =mysqli_real_escape_string($conn,$_POST['phone_number']);
     	  $login_id =$_SESSION['login_id'];
            //for moving file
     	  $temp_name = $_FILES['profile_pic']['tmp_name'];
     	  $location = 'profile_pics/'.basename($_FILES['profile_pic']['name']);

            echo $login_id = $_SESSION['login_id'];
            $profile_pic = basename($_FILES["profile_pic"]['name']);

            $query="insert into Users values (null,'$login_id','$profile_pic','$fullname','$email','$city','$state,'$gender','$phone_number');";
            
            
            if(mysqli_query($conn, $query))
            {
               
               header("location:view_profile.php");

            }

            else 
            {
               echo "Failed";
               mysqli_error($conn);
               //header("Location:profile.php");
            }
     }

     else
     {
          header("Location:profile.php");
     }
?>