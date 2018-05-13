<?php include "include/header.php"; ?>

    <!-- Navigation -->

<?php include "include/top_nav.php"; ?>

<?php include "include/services.php"; ?>




<?php include "include/nav.php";?>
<!--Form-->
<div class="container1">

  <form action="search.php" method="post">
  
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
 

 

    <!-- Page Content -->






     
  






    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4" style="text-align: center; font-family: Comic Sans; font-size: 40px;" >Colection <small>Flowers</small></h1>

      <div class="row">




      <?php get_elements(); ?>
  


       

      <!-- /.row -->

      <!-- Pagination -->
<!--       <div style="margin-left: 530px;">
  <ul class="pagination justify-content-center" >
     <li class="page-item">
       <a class="page-link" href="#" aria-label="Previous">
         <span aria-hidden="true">&laquo;</span>
         <span class="sr-only">Previous</span>
      </a>
     </li>
     <li class="page-item">
      <a class="page-link" href="#">1</a>
     </li>
     <li class="page-item">
      <a class="page-link" href="#">2</a>
     </li>
     <li class="page-item">
      <a class="page-link" href="#">3</a>
     </li>
     <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
      <span aria-hidden="true">&raquo;</span>
      <span class="sr-only">Next</span>
    </a>
  </li>
</ul>
  </div> -->
</div>
</div>
<?php include "include/footer.php" ?>
