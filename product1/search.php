<?php include "include/header.php" ?>

    <!-- Navigation -->

<?php include "include/top_nav.php" ?>

<?php include "include/services.php" ?>




<?php include "include/nav.php";?>
<!--Form-->
<div class="container1">
 
  <form action="" method="post">
    <div class="input-group">
      <input name="search" type="text" class="form-control"  placeholder="Search">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit" name="search_btn">
                   <i class="fas fa-search"></i>


        </button>
      </div>
    </div>
  </form>   

</div>
 


<div class="container">


  <h1 class="my-4">Colection <small>Flowers</small></h1>

  <div class="row">




  <?php search(); ?>






 
</div>
</div>
<?php include "include/footer.php" ?>
