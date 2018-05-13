<?php include "include/header.php"; ?>

    <!-- Navigation -->

<?php include "include/top_nav.php"; ?>

<?php include "include/services.php"; ?>




<?php include "include/nav.php";?>
<!--Form-->
<div class="container1">
  <form>
    <div class="input-group">
      <input type="text" class="form-control"  placeholder="Search">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit">
                   <i class="fas fa-search"></i>


        </button>
      </div>
    </div>
  </form>
</div>
 

    <!-- Page Content -->
    <div class="container">      
                 
            

      <!-- Portfolio Item Heading -->


      <!-- Portfolio Item Row -->

             
   


      <!-- Page Heading -->
      <h1 class="my-4">Colection <small>Flowers</small></h1>

      <div class="row">




       <?php 
                  $con=mysqli_connect("localhost","Bekmurod_flower","flower123","Bekmurod_flower");

                $query="SELECT * FROM product WHERE cid =".escape_string($_GET['category']) ." ";
                $result=mysqli_query($con,$query);
                while ($row=mysqli_fetch_assoc($result)) {
                        $title=$row['f_title'];
                        $price=$row['f_price'];
                        $details=$row['f_details'];
                        $desc=$row['f_desc'];
                        $cat=$row['f_cat'];
                        $id=$row['f_id'];
                        $img=$row['img'];
                        $show=<<<SMTH2
                  <div class="col-lg-3 col-md-4 col-sm-6 product-item" >
          <div class="product-wrapper" >
            <div class="product-inner">
             <a href="insideCat.php?id={$row['f_id']}"><img src="images/{$row['img']}" width="253" alt=""></a>
               <div class="card-body">
              <h4 class="card-title">
                <a href="insideCat.php?id={$row['f_id']}">{$title}</a>
              </h4>
              <p> {$row['f_desc']}</p>

              </div>
              <div class="product-price">
                <span class="product-price-value">{$price} $</span>
               <a class="btn btn-primary" target="_blank" href="insideCat.php?id={$row['f_id']}">KO'RISH</a>
                
              </button>
              </div>

              <div class="product-order-block">
                <a class="product-order-btn" href="#" data-act="add to cart" data-id="135"></a>
              </div>
              
            </div>

        </div>
      </div>
      </div>

SMTH2;
        echo $show;
                }

             ?>


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
