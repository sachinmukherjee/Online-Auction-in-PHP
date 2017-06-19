<?php 
     session_start();
     include 'database.php';

     $login_id = $_SESSION['login_id'];

     $query = "select * from Users where login_id = '$login_id';";
     $result = mysqli_query($conn, $query);

     $arr = mysqli_fetch_assoc($result);
     
     $full_name = $arr['full_name'];
     $profile_pic = $arr['profile_pic'];
     $gender = $arr['gender'];
     $city = $arr['city'];
     $state = $arr['state'];
     $phone_number = $arr['phone_number'];
     $_SESSION['user_id']= $arr['user_id'];

     $src = "/var/www/html/OnlineAuction/profile_pics/$profile_pic";
     
     $image = file_get_contents($src);
     echo $image;
     
     // problem in displaying image//

     echo "Fullname ". $full_name;
     echo "<br><br>";
     echo "Gender ". $gender;
     echo "<br><br>";
     echo "City ".$city;
     echo "<br><br>";
     echo "State ".$state;
     echo "<br><br>";
     echo "Phone Number ".$phone_number;

     //echo"<a href="home.php">go to home page</a>";

     // include all thing in heading



     


?>

