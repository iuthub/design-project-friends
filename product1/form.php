<?php include "include/header.php"; ?>


    <!-- Navigation -->

<?php include "include/top_nav.php"; ?>

<?php include "include/services.php";?>



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
                $f_id = $_GET["id"];
                $query="SELECT * FROM product WHERE f_id =". escape_string($_GET['id']) ." ";
                $result=mysqli_query($con,$query);
                while ($row=mysqli_fetch_assoc($result)) {
                $num=$row['f_quantity'];
       
            ?>

      <!-- Portfolio Item Heading -->


      <!-- Portfolio Item Row -->
               <div class="row">

                 <div class="col-md-8">
                   <img style="width: 400px; height: 400px;"  class="img-fluid" src="images/<?php   echo $row['img'] ?>" >
                 </div>

                 <div class="col-md-4" style="border: 5px solid    #660066 ;">
                   <h1 class="my-4" style="font-size: 60px;
  font-family: Courier; font-weight: bold; text-align: center; color: #cc00cc">
  <?php echo $row['f_title']; ?> <br>
                      <small style="color:   #00b300"><?php echo $row['f_price'];?>$</small>
                   </h1>
  <h3 class="my-3" style="font-size: 30px;
  font-family: Courier;  text-align: left; color: #cc00cc">Flower Description</h3>
                    <p style="margin-left: 5px; font-size: 16px;
  font-family: Courier; font-weight: bold;  color: #000;""><?php echo $row['f_desc']; ?></p>
                    <h3 class="my-3" style="font-size: 30px;
  font-family: Courier;  text-align: left; color: #cc00cc">Flower Details</h3>
                    <p  style="margin-left: 5px; font-size: 14px;
  font-family: Courier; font-weight: bold;  color: #000;"><?php echo $row['f_details']; ?></p>



    <!--       <?php #echo "<a href='form.php?add={$row['f_id']}'><button type='button' class='btn btn-outline-light btn-lg' style='color:blue;'>Add</button></a>"; ?>
                
                <?php #echo "<a href='form.php?minus={$row['f_id']}'><button type='button' class='btn btn-outline-light btn-lg' style='color:blue;'>minus</button></a>"; ?>
                     -->            
                  <form action="end.php" method="post">
                                <input type="text" style="visibility: hidden;" name="f_id" value="<?php echo $f_id; ?>">  
                                <input type="text" style="visibility: hidden;" name="price" value="<?php echo $row['f_price']; ?>">
                                <div class="form-group">
                                    <label for="product-title" style="font-size: 17px;
  font-family: Courier; font-weight: bold; text-align: center; color: #cc00cc">Name </label>
                                       <input type="text" placeholder="Name" name="name" class="form-control" >
       
                                </div>
                                  <div class="form-group">
                                    <label for="product-title" style="font-size: 17px;
  font-family: Courier; font-weight: bold; text-align: center; color: #cc00cc">Surname </label>
                                       <input type="text" placeholder="Surname" name="surname" class="form-control">
       
                                </div>
                              
                                   <div class="form-group row">

                                       <div class="col-xs-3">
                                                 <p style="margin-left: 20px; font-size: 17px;
  font-family: Courier; font-weight: bold; text-align: center; color: #cc00cc"> QUANTITY</p>   
                                              <input style ="margin-left: 20px;" name="nmbr" type="number" min="1" max='<?php echo $row['f_quantity']; ?>' class="form-control" size="60">
                                        </div>

                                    </div>
                                                                  <div class="form-group row">

                                       <div class="col-xs-3">
                                                 <p style="margin-left: 17px; font-size: 17px;
  font-family: Courier; font-weight: bold; text-align: center; color: #cc00cc"> Phone number</p>   
                                              <input style="margin-left: 20px;" type="text" placeholder="998" name="phone" class="form-control" >
       
                                        </div>

                                    </div>     
                                <br> <br>                                  
<!--                                  <div class="form-group">
       Phone number
      <input type="text" placeholder="+998" name="phone" class="form-control" >
       
                                </div> -->

                                     <div class="form-group">
                                      <input  type="submit" value="submit" name="submit" class="btn btn-primary btn-lg" style=" background-color: #00b300">
                                             </div>                                  
          

                                </div>
                  </form>
                    

             </div>
            
         <?php }
         echo"Errors";

         if(isset($_POST['submit']))
         {
          $Errors = unserialize($_POST['Errors']);
          if(!empty($Errors))
          {
            echo "Errors:<br/>";
            foreach ($Errors as $key => $value) {
              echo "$value<br/>";
            }
          }
         }

          } ?>  
          
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
