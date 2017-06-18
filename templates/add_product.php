<?php 
     // script for adding product for auction //
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
</head>
<body>
<h3> Add Product to Auction</h3>

<form action="add_product_process.php" method="post" enctype="multipart/form-data">

<label for="upload">Product Image</label>
<input type="file" name="product"><br><br>

<label>Product Name</label>
<input type="text" name="product_name"><br><br>

<label>Product Description</label>
<input type="text" name="description"><br><br>

<label>Date</label>
<input type="date" name="date"><br><br>

<label>Starting Price</label>
<input type="text" name="price"><br><br>

<input type="submit" name="submit">


</form>
</body>
</html>