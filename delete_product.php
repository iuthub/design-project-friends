<?php   require_once "db.php"; ?>
<?php include "functions.php"; ?>
<?php ob_start(); ?>


<?php 
		echo "<h1 align='center'>This is Admin's Delete products page</h1>";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>ADmin</title>


	<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>



</head>
<body>
	<ul>
		<li><a href="admin_orders.php">orders</a></li>
		<li><a href="admin_products.php">products</a></li>
	</ul>

	
	<?php 

		if (isset($_GET['id'])) {
			$query="DELETE FROM product WHERE f_id = " . escape_string($_GET['id']) ." ";
			$result=mysqli_query($con,$query);
			
			echo "order deleted";	
			header("location: admin_products.php");
		}



	 ?>





	


</body>
</html>
