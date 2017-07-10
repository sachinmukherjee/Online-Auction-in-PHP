<?php 
// script for bidding particular item linked to ongoing_auction.php//
session_start();
include 'database.php';

  if (isset($_POST['bidnow'])) 
  {
  	$product_id = $_POST['bidnow'];
  	$query = "select product_name,price from Product where product_id = $product_id;";
  	$result = mysqli_query($conn, $query);
  	$arr = mysqli_fetch_assoc($result);
  	$product_name = $arr['product_name'];
  	$price = $arr['price'];
    
    // querring for last bid for product//

    $query2 = "select final_price from Bids where product_id=$product_id;";
    $result2 = mysqli_query($conn,$query2);

    $arr2 = mysqli_fetch_assoc($result2);
    $rows = mysqli_num_rows($result2);                 // if there is not rows affected means no bidding done till yet
    if($rows)
       $final_price = $arr2['final_price'];  
    else 
       $final_price = 0;            
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Bidnow</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container" style="position: relative; top: 3cm;">
<p><strong>Product Name: <?php echo $product_name;?></strong></p>
<br>
<p><strong> Starting Price: <?php echo $price;?></strong></p>
<br>
<p><strong>Last Bid: </strong>&nbsp;
<?php if($final_price==0)
      echo "<strong>0</strong>";
      else 
      	echo "<strong>$final_price</strong>";
?>
</p>
<br>
<form action = " bidnow.php" method="get" class="form" role="form">
<div class="form-group">
<p><strong>Your Bid</strong></p><br><input type="text" name="mybid" class="form-control" style="width: 5cm;">
	<?php 
	     if(isset($_GET['mybid']))
	     {
	     	if($final_price==0)
	     	{
	     		$mybid = $_GET['mybid'];
	     		$user_id = $_SESSION['user_id'];
	     		$query = "insert into Bids values($product_id,'$product_name',$price,$mybid,$user_id);";
	     	}
	     	else 
	     	{
	     		$mybid = $_GET['mybid'];
	     		$user_id = $_SESSION['user_id'];
	     		$query3 = "update Bids set final_price=$mybid, user_id=$user_id where product_id=$product_id;";
	     		
	     		if(mysqli_query($conn,$query3))
	     		{
	     			echo "Sucess";
	     		}
	     	}
	     }
?>
</div>
</form>

<a href = "ongoing_auction.php">Click here to bid more</a>
</div>
</body>
</html>
