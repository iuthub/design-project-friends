
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
				<h2>Sign up</h2>
			</div>
		
			<label for="username">Username</label>
			<br/>
			<input type="text" id="username" required name="username">
			<br/>
			<label for="password">Password</label>
			<br/>
			<input type="password" id="password" required name="password">
			<br/>
			<label for="email">Email</label><br>
			<input type="text" id="email" required name="email">
			<br/>
			<label for="phone">Phone</label><br>
			<input type="text" id="phone" required name="phone">
			<br/>
			<button type="submit" id ="sign_btn" name="sign_up">Sign up</button>
			<br/>
		
		
		</div>
		</form>
	</div>
</body>

</body>
</html>

 <?php 
		
		if (isset($_POST['sign_up'])) {
		 		$username=$_POST['username'];
		 		$password=$_POST['password'];
		 		$email=$_POST['email'];
		 		$phone=$_POST['phone'];


		 		$query="INSERT users (username, password, email, phone) VALUES ('$username', '$password', '$email', '$phone') ";

		 		$result=mysqli_query($con,$query);

		 		$row=mysqli_num_rows($result);
		 		
		 			header("Location: ../product1/product1.php");
		 		
		 		
		 		
		 	} 	



  ?>













