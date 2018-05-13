<?php ob_start(); ?>
<?php require_once "../db.php"; ?>
<?php include "include/header.php"; ?>


    <!-- Navigation -->

<?php include "include/top_nav.php"; ?>

<?php include "include/services.php"; ?>



<script> 
$(document).ready(function(){
    $(".active").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>
<script> 
$(document).ready(function(){
    $(".aziz").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>



<?php include "include/nav.php" ;?>



 <div class="container">
 

<?php 
    if (isset($_POST['submit'])) {
     $phone=$name=$surname=$nmbr="";

     $phone=$_POST['phone'];
     $name=$_POST['name'];
     $surname=$_POST['surname'];
     $nmbr=$_POST['nmbr'];
     $price = $_POST['price'];
     $f_id = $_POST['f_id'];

     $total_sum = $price * $nmbr;


  if ((preg_match("/^[a-zA-Z ]*$/",$name)) && (preg_match("/^[a-zA-Z ]*$/",$surname)) && (preg_match("/^[0-9]{12}$/", $phone)) )  {
 


    
    echo "<h1>THank you will call you in 15 minutes</h1>";


     $query="INSERT INTO orders (f_id, o_total_price, o_quantity, name, surname, phone) VALUES ($f_id, $total_sum, $nmbr, '$name', '$surname', '$phone' )";

    //$query="INSERT INTO orders (f_id, o_total_price, o_quantity, name, surname, phone) VALUES (2, 400, 2, 'Bekkkk', 'dasdasd', '324234234' )";

     $result=mysqli_query($con,$query);

     if(!$result) {
      echo "<h1>Warnign!!!</h1>";
     }




    }
    else{
      header("location: form.php?id=$f_id");





    }
  }
 ?>

 </div>




