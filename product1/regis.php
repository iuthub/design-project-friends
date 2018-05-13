<?php   require_once "../db.php"; ?>
<?php include "../functions.php"; ?>
<?php ob_start(); ?>
<?php 
	
 ?>



 <form action="" method="post">
 	
	Username		<input type="text" name="username"><br><br>
	Password   		<input type="text" name="password"><br><br>
	Email			<input type="text" name="email"><br><br>
	Phone			<input type="text" name="phone"><br><br>
	<input type="submit" name="submit" value="submit">

 </form>



 <?php 

 	if (isset($_POST['submit'])) {
 	$username=$_POST['username'];
 	$password=$_POST['password'];
 	$email=$_POST['email'];
 	$phone=$_POST['phone'];
 	
 		$query="INSERT INTO users (username, password, email, phone ) VALUES ('$username','$password','email', '$phone')";
 		$result=mysqli_query($con,$query);

 		if($result){
 		header("location: product1.php");
 		}
 		else{
 			echo "ums";
 		}


 	}


  ?>