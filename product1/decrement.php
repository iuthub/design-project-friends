<?php include "include/header.php" ?>


    <!-- Navigation -->

<?php include "include/top_nav.php" ?>

<?php include "include/services.php" ?>



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



<?php include "include/nav.php" ?>

<?php echo $_SESSION['product_1']; ?>

 <div class="container">

                  <?php 

              if (isset($_GET['minus'])) {
                # code...
              
                $query="SELECT * FROM product WHERE f_id =". escape_string($_GET['minus']) ." ";
                $result=mysqli_query($con,$query);
                while ($row=mysqli_fetch_assoc($result)) {
                
                

             ?>

      <!-- Portfolio Item Heading -->


      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-8">
          <img class="img-fluid" src="flower1.jpg">
        </div>

        <div class="col-md-4" style="border: 5px solid ;">
          <h1 class="my-4"><?php echo $row['f_title']; ?> 
            <small><?php echo $row['f_price'];?>So'm</small>
          </h1>
          <h3 class="my-3">Flower Description</h3>
          <p><?php echo $row['f_desc']; ?></p>
          <h3 class="my-3">Flower Details</h3>
          <p><?php echo $row['f_details']; ?></p>



          <?php 
            $_SESSION['product_'.$_GET['minus']]--;
          if ( $_SESSION['product_'.$_GET['minus']]>1) {
            # code...
           
            header("location decrement.php");
            echo  "<h1>{$_SESSION['product_1']}</h1>";


          }
            else{
              echo "<h1>Opps</h1>";
            }
           ?>
         
          <?php echo "<a href='increment.php?add={$row['f_id']}'><button type='button' class='btn btn-outline-light btn-lg' style='color:blue;'>Add</button></a>"; ?>
           <?php echo "<a href='decrement.php?minus={$row['f_id']}'><button type='button' class='btn btn-outline-light btn-lg' style='color:blue;'>minus</button></a>"; ?>
          <a href="form.php"><button type="button" class="btn btn-outline-light btn-lg" style="color:blue;">Buy</button></a>
        </div>

      </div>
  <?php }
}
   ?>  


      <!-- /.row -->
<script>
$(document).ready(function(){
    $("#hide").click(function(){
        $(".hide").hide(1000);
    });
    $("#show").click(function(){
        $(".hide").show(1000);
    });
});
</script>


<p>If you click on the "Hide" button, I will disappear.</p>

<button id="hide">Show Less</button>
<button id="show">Show More</button>
<div class="hide">
      <!-- Related Projects Row -->
      <h3 class="my-4">This Flower colors</h3>

      <div class="row">

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="flower1.jpg" alt="">
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="flower1.jpg" alt="">
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="flower1.jpg" alt="">
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="flower1.jpg" alt="">
          </a>
        </div>
</div>
      </div>
      <!-- /.row -->

    </div>





<footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Flower Shopiing</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>