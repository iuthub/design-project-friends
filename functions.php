<?php   require_once "db.php"; ?>
<?php ob_start(); ?>
<?php 



	function escape_string($string){
 		global $con;
 		return mysqli_real_escape_string($con,$string);
 	}


	function get_categories(){
		global $con;

		$query="SELECT * FROM categories";
		$result=mysqli_query($con,$query);
		while ($row=mysqli_fetch_assoc($result)) {
			echo "   <li class='nav-item active'>
         
            			<a class='nav-link' href='categories.php?category={$row['cat_id']}'>{$row['cat_t']}  |
  						<span class='sr-only'>(current)</span></a>
				  	</li> ";
		}

	}



	function get_elements(){

		global $con;
  			$query="SELECT * FROM product";
 			$result=mysqli_query($con,$query);
 			while ($row=mysqli_fetch_assoc($result)){
 				$title=$row['f_title'];
 				$price=$row['f_price'];
 				$details=$row['f_details'];
 				$desc=$row['f_desc'];
 				$cat=$row['f_cat'];
 				$id=$row['f_id'];

 				$show=<<<SMTH
 				        <div class="col-lg-3 col-md-4 col-sm-6 product-item" >
          <div class="product-wrapper" >
            <div class="product-inner">
             <a href="form.php?id={$row['f_id']}"><img src="images/{$row['img']}" width="253" alt=""></a>
               <div class="card-body">
              <h4 class="card-title" id="title">
                <a href="form.php?id={$row['f_id']}">{$title}</a>
              </h4>
              <p id="desc"> {$row['f_desc']}</p>

              </div>
              <div class="product-price" id="price">
                <span class="product-price-value" >{$price} $</span> <br> 
              <a class="btn btn-primary" target="_blank" href="form.php?id={$row['f_id']}">Details</a>
                
              </button>
              </div>
              <br>
              <div class="product-order-block">
                <a class="product-order-btn" href="#" data-act="add to cart" data-id="135"></a>
              </div>
              
            </div>

        </div>
      </div>

SMTH;
				echo $show;
 			}
	}



       /*Sorting elements by categories*/


	function sort_elements(){

		global $con;
  			$query="SELECT * FROM product WHERE f_cat =". escape_string($_GET['category']) ." ";
 			$result=mysqli_query($con,$query);
 			while ($row=mysqli_fetch_assoc($result)){
 				$title=$row['f_title'];
 				$price=$row['f_price'];
 				$details=$row['f_details'];
 				$desc=$row['f_desc'];
 				$cat=$row['f_cat'];
 				$id=$row['f_id'];
 				$img=$row['img'];

 				$show=<<<SMTH2
 		<div class="col-lg-3 col-md-4 col-sm-6 product-item">
          <div class="product-wrapper">
            <div class="product-inner">
             <a href="insideCat.php?id={$row['f_id']}"><img src="image/echo $img;" width="253" alt=""></a>
               <div class="card-body">
              <h4 class="card-title">
                <a href="insideCat.php?id={$row['f_id']}">{$title}</a>
              </h4>
              <p> {$desc}</p>
              </div>
              <div class="product-price">
                <span class="product-price-value">{$price} So'm</span>
               <a class="btn btn-primary" target="_blank" href="cinsideCat.php?id={$row['f_id']}">KO'RISH</a>
                
              </button>
              </div>

              <div class="product-order-block">
                <a class="product-order-btn" href="#" data-act="add to cart" data-id="135"></a>
              </div>
              
            </div>

        </div>
      </div>

SMTH2;
				echo $show2;
 			}
	}

?> 






 <!-- Searching elements  -->




<?php 
	function search(){
			global $con;
			$search="";
			
		
			if(isset($_POST['search_btn'])){	

				$search=$_POST['search'];	
				/*$search=mysqli_real_escape_string($con,$_POST['search']);
*/
				$query="SELECT * FROM product WHERE f_title LIKE '%$search%' ";
				$result=mysqli_query($con,$query);
				$count=mysqli_num_rows($result);


			 if($count>0){
					


 					while ($row=mysqli_fetch_assoc($result)){
 						$title=$row['f_title'];
 						$price=$row['f_price'];
 						$details=$row['f_details'];
 						$desc=$row['f_desc'];
 						$cat=$row['f_cat'];
 						$id=$row['f_id'];
            $img=$row['img'];
		
 						$show=<<<SMTH3
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
SMTH3;
				echo $show;
 			}

	}
				else{
					echo "no result";
				}

	}


	}

 ?>



 <?php 


    function set_message($msg){
      if (!empty($msg)) {
        $_SESSION['message']=$msg;
      }
      else{
        $msg="";
      }
    }


    function display_message(){
      if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
      }
    }






/* Admin LOGIN PAGE*/


    function admin_login(){
      global $con;


      if (isset($_POST['submit'])) {
        $name=$_POST['name'];
        $password=$_POST['password'];

        $query="SELECT * from admin WHERE admin_name = '{$name}' AND admin_password ='{$password}' ";
        $result=mysqli_query($con,$query); 
        $row=mysqli_num_rows($result);
        if ($row==0) {
          set_message("wrong");
          header("location: admin.php");
        }
        else{
          header("location: admin_info.php");
        }

      }


    }



/*Adding new products*/





    function show_categories_in_add(){
        global $con;

        $query="SELECT * FROM categories ";
        $result=mysqli_query($con,$query);

        while ($row=mysqli_fetch_assoc($result)) {
          $category_id=$row['cat_id'];
          echo $category_id ."<br>";
        }

    }

/*  
f_title`, `f_price`, `f_quantity`, `f_desc`, `f_details`, `f_id`, `cid`, `f_cat`, `img
*/

    function add_product(){
        global $con;


        $flower_title=$flower_desciption=$flower_price=$flower_category="";

      if (isset($_POST['publish'])) {

        $flower_title=$_POST['flower_title'];
        $flower_desciption=$_POST['flower_description'];
        $flower_price=$_POST['flower_price'];
        $flower_details=$_POST['flower_details'];
        $flower_category=$_POST['flower_category'];
        $flower_quantity=$_POST['flower_quantity'];
        
        $flower_image=$_FILES['file']['name'];
        // $image_temp_location=$_FILES['file']['name'];



        $query="INSERT INTO product (f_title, f_price, f_quantity, f_desc, f_details, cid, img) VALUES ('{$flower_title}', '{$flower_price}', '{$flower_quantity}', '{$flower_desciption}', '{$flower_details}', '{$flower_category}', '{$flower_image}')";
          $result=mysqli_query($con,$query);
          header("location: admin_products.php");

          
      }
    }
      function show_categories_add_page(){
    global $con;

    $query="SELECT * FROM categories";
    $result=mysqli_query($con,$query);
    while ($row=mysqli_fetch_assoc($result)) {
        
        $show=<<<cate
               <option value="{$row['cat_id']}">{$row['cat_t']}</option>


cate;
               echo $show;

    }

  }




  ?>