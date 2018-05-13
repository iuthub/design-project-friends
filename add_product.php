<?php   require_once "db.php"; ?>
<?php include "functions.php"; ?>
<?php ob_start(); ?>









<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>ADmin</title>



    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


	<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>



</head>
<body>
  <div class="jumbotron">
  <div class="container text-center">
    <h1>This is Admin's orders page</h1>      
  
  </div>
</div>
<nav class="navbar navbar-inverse" style="margin-top: -30px; background-color: #5E4485 !important;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a style="margin-left: 15px" class="navbar-brand" href="index.php">Flower Shopping</a>
    </div>
    <ul class="nav navbar-nav">
    
      <li><a href="admin_orders.php">orders</a></li>
    <li><a href="admin_products.php">products</a></li>
    <li><a href="add_product.php" class="active">add proucts</a></li>
    <li><a href="product1/product1.php">products</a></li>   
           
    </ul>
  </div>
</nav>



<div class="col-md-12">

<div class="row">
<h1 class="page-header">
   Add Product</h1>
</div>
               


<form action="" method="post" enctype="multipart/form-data">
<?php add_product(); ?>

<div class="col-md-8">

<div class="form-group">
    <label for="product-title">Product Title </label>
        <input type="text" name="flower_title" class="form-control">
       
    </div>


    <div class="form-group">
           <label for="product-title">Product Description</label>
      <textarea name="flower_description" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>



    <div class="form-group row">

      <div class="col-xs-3">
        <label for="flower_price">Product Price</label>
        <input type="number" name="flower_price" class="form-control" size="60">
      </div>

    </div>

    <div class="form-group">
           <label for="product-title">Product Details</label>
      <textarea name="flower_details" id="" cols="30" rows="3" class="form-control"></textarea>
    </div>



    
    

</div><!--Main Content-->


<!-- SIDEBAR-->


<aside id="admin_sidebar" class="col-md-4">

     
     <div class="form-group">
       <input type="reset" name="draft" class="btn btn-warning btn-lg" value="Reset">
        <input type="submit" name="publish" class="btn btn-primary btn-lg" value="Publish">
    </div>


     <!-- Product Categories-->

    <div class="form-group">
         <label for="product-title">Flower Category</label>
          <hr>
      
        <select name="flower_category" id="" class="form-control">
  
          <?php show_categories_add_page(); ?>

        </select>
    
    
</div>
<br>




    <!-- Product Brands-->


    <div class="form-group">
      <label for="product-title">Product Quantity</label>
      <input type="number" class="form-control" name="flower_quantity">
    </div>


<!-- Product Tags -->




    <!-- Product Image -->
    <div class="form-group">
        <label for="product-title">Product Image</label>
        <input type="file" name="file" name="flower_image">
      
    </div>



</aside><!--SIDEBAR-->


    
</form>



                



            </div>


</body>
</html>
