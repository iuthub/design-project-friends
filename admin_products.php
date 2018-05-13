<?php   require_once "db.php"; ?>
<?php include "functions.php"; ?>



<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>ADmin</title>



    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




	<style>

.table
		{
			margin-left: 1.5%;
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
      <a style="margin-left: 5px" class="navbar-brand" href="index.php">Flower Shopping</a>
    </div>
    <ul style="margin-left: 15px" class="nav navbar-nav">
  
   		<li style="margin-left: 5px"><a href="admin_orders.php">orders</a></li>
		<li style="margin-left: 5px"><a href="admin_products.php">products</a></li>
		<li style="margin-left: 5px"><a href="add_product.php">add proucts</a></li>
		<li style="margin-left: 5px"><a href="product1/product1.php">back to flowers</a></li>		
           
    </ul>
  </div>
</nav>

<div class="table-responsive" >          
  <table class="table table-hover">
    <thead>
      <tr>
        
        <th>flower_id</th>
        <th>flower_categor_id</th>
        <th>flower_name</th>
        <th>flower_price</th>
        <th>flowe_quantity</th>
        <th>flower_description</th>
        <th>flower_details</th>
      </tr>
	








	<?php 

		$query="SELECT * FROM product ";
		$result=mysqli_query($con,$query);
		while ($row=mysqli_fetch_assoc($result)) {
			$flower_id=$row['f_id'];
			$flower_category=$row['cid'];
			$name=$row['f_title'];
			$price=$row['f_price'];	
			$quantity=$row['f_quantity'];
			$description=$row['f_desc'];
			$details=$row['f_details'];
	
			$to_simplfy=<<<simple
		<tr>
			<td> $flower_id </td>
			<td>  $flower_category </td>
			<td>  $name </td>
			<td>  $price </td>
			<td> $quantity </td>
			<td>  $description </td>
			<td>  $details </td>
			<td><a class="btn btn-danger" href="delete_product.php?id={$row['f_id']}"><span class="glyphicon glyphicon-remove">remove</span></a></td>

		</tr>


simple;
		echo $to_simplfy;

		 } 
		 ?>
	</thead>
	</table>
  </div>
</div>



	


</body>
</html>
