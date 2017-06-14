//Common database file for// 

<?php
     $servername = "localhost";
     $username = "root";
     $password = "bhilai@123";
     $databasename = "OnlineAuction";

     $conn = mysqli_connect($servername, $username, $password, $databasename);

     if(!$conn)
     	die("Could not connect". mysqli_error($conn));

?>
