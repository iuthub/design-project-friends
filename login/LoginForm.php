
<?php   require_once "../db.php"; ?>
<?php include "../functions.php"; ?>
<?php ob_start(); ?>
<?php 
	
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Learn HTML CSS</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

	<link rel="stylesheet" href="animate.css">
	
	<link rel="stylesheet" href="style.css">

	<script src="../libs/node_modules/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="sign.js"></script>
	<script type="text/javascript" src="new.js"></script>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>



<div class="container">
	<form action="" method="post">
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Log In</h2>
			</div>
		
			<label for="username">Admin_Name</label>
			<br/>
			<input type="text" id="username" required name="admin_name">
			<br/>
			<label for="password">Password</label>
			<br/>
			<input type="password" id="password" required name="password">
			<br/>
			<button type="submit" id ="sign_btn" name="submit">Sign In</button>
			<br/>
		
		</div>
		</form>
	</div>
</body>

</body>
</html>















 <?php 
		
		if (isset($_POST['submit'])) {
		 		$admin_name=$_POST['admin_name'];
		 		$password=$_POST['password'];


		 		$query="SELECT * FROM admin WHERE admin_name = '$admin_name' AND admin_password = '$password' ";

		 		$result=mysqli_query($con,$query);

		 		$row=mysqli_num_rows($result);
		 		if ($row>0) {
		 			header("Location: ../admin_products.php");
		 		}
		 		else{
		 			echo "wrong ";
		 			header("Location:loginForm.php");
		 		}
		 	} 	



  ?>