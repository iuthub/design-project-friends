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



<?php include "include/nav.php"; ?>



 <div class="container">









                  <?php 


  
  


              if (isset($_GET['id'])) {
                # code...
              
                $query="SELECT * FROM product WHERE f_id =". escape_string($_GET['id']) ." ";
                $result=mysqli_query($con,$query);
                while ($row=mysqli_fetch_assoc($result)) {
                         $title=$row['f_title'];
                        $price=$row['f_price'];
                        $details=$row['f_details'];
                        $desc=$row['f_desc'];
                        $cat=$row['f_cat'];
                        $id=$row['f_id'];
                        $img=$row['img'];
                

             ?>

      <!-- Portfolio Item Heading -->


      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-8">
          <img class="img-fluid" src="images/<?php echo $img ?>">
        </div>

        <div class="col-md-4" style="border: 5px solid ;">
          <h1 class="my-4"><?php echo $row['f_title']; ?> 
            <small><?php echo $row['f_price'];?>So'm</small>
          </h1>
          <h3 class="my-3">Flower Description</h3>
          <p><?php echo $row['f_desc']; ?></p>
          <h3 class="my-3">Flower Details</h3>
          <p><?php echo $row['f_details']; ?></p><p><?php echo $row['f_price']; ?></p>
         <?php echo "<a href='form.php?buy={$row['f_id']}'><button type='button' class='btn btn-outline-light btn-lg' style='color:blue;'>Buy</button></a>";
           ?>
         </div>
           

      </div>
  <?php
      }
     }



     ?>  

       

      <!-- /.row -->

      <!-- Related Projects Row -->


      <div class="row">


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