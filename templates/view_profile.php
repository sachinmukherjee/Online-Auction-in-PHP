<?php 
// php script for viewing profile of user//
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
     // include all things in the heading
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Profile</title>
 	<link rel="stylesheet" type="text/css" href="css/viewprofile.css">
 </head>
 <body>
 <div class="viewprofile">
 <table>
    <img src="<?php echo $image?>" alt="profile_pic">

<tr>
    <td>Fullname</td><td><?php echo $full_name;?></td>
</tr>
<tr>
    <td>Gender</td><td><?php echo $gender; ?></td>
</tr>
<tr>
    <td>City</td><td><?php echo $city;?></td>
</tr>
<tr>    
    <td>State</td><td><?php echo $state; ?></td>
</tr>
     <td>Phone Number</td><td><?php echo $phone_number; ?></td>
</table>
     <a href="home.php">Home Page</a>
</div>
 
 </body>
 </html> 

     

     



