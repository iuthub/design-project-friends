<?php   require_once "../db.php"; ?>
<?php include "../functions.php"; ?>
<?php ob_start(); ?>
<?php 
	
 ?>



 <form action="" method="post">
 	
	Username		<input type="text" name="username"><br><br>
	Password   		<input type="text" name="password"><br><br>
	<input type="submit" name="submit" value="submit">

 </form>



 <?php 
		
		if (isset($_POST['submit'])) {
		 		$username=$_POST['username'];
		 		$password=$_POST['password'];


		 		$query="SELECT * FROM users WHERE username = '$username' AND password = '$password' ";

		 		$result=mysqli_query($con,$query);

		 		$row=mysqli_num_rows($result);
		 		if ($row>0) {
		 			header("location: product1.php");
		 		}
		 		else{
		 			echo "wrong ";
		 			header("location: login.php");
		 		}
		 	} 	



  ?>