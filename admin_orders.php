<?php   require_once "db.php"; ?>
<?php include "functions.php"; ?>



<!DOCTYPE html>
<html lang="en">
<head>



<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<title>ADmin</title>


	<style>
		#table
		{
			margin-left: 10%;
			margin-right: 10%;
		}


	</style>
















</head>
<body>

	<div class="jumbotron">
  <div class="container text-center">
    <h1>This is Admin's orders page</h1>      
  
  </div>
</div>


<nav class="navbar navbar-inverse" style="margin-top: -30px; background-color: #5E4485 !important;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a style="margin-left: 15px" class="navbar-brand" href="index.php">Flower Shopping</a>
    </div>
    <ul class="nav navbar-nav">
      
   		<li><a href="admin_orders.php">orders</a></li>
		<li><a href="admin_products.php">products</a></li>
		<li><a href="add_product.php">add proucts</a></li>		
		<li><a href="product1/product1.php">>back to flowers</a></li>		
           
    </ul>
  </div>
</nav>




	<ul>
	</ul>

	
<div class="table-responsive" id="table">          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>oreder_id</th>
        <th>oreder_id</th>
        <th>total_price</th>
        <th>quantity</th>
        <th>customer's_name</th>
        <th>customer's_surname</th>
        <th>customer's phone</th>
      </tr>
   







	<?php 

		$query="SELECT * FROM orders ";
		$result=mysqli_query($con,$query);
		while ($row=mysqli_fetch_assoc($result)) {
			$order_id=$row['o_id'];
			$flower_id=$row['f_id'];
			$order_total_price=$row['o_total_price'];
			$order_quantity=$row['o_quantity'];	
			$name=$row['name'];
			$surname=$row['surname'];
			$phone=$row['phone'];

			$simple=<<<smpl
		<tr>
			<td>  $order_id</td>
			<td>  $flower_id</td>
			<td>  $order_total_price</td>
			<td>  $order_quantity</td>
			<td>  $name</td>
			<td>  $surname</td>
			<td>  $phone</td>
			<td><a class="btn btn-danger" href="delete_order.php?id={$row['o_id']}"><span class="glyphicon glyphicon-remove">remove</span></a></td>
		</tr>
smpl;

		echo $simple;

		}	

		?>








 </thead>
	</table>
  </div>
</div>

	


</body>
</html>
