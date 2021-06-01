<?php 

  //start a session
  session_start();


  require_once("productInfo.php");
  require_once("componentHTML.php");

  //productInfo instance
  $productInfo = new ProductInfo();

  if(isset($_POST["addCart"])){
      // print_r($_POST["prodID"]);
      if(isset($_SESSION["myCart"])){

        
        //1D array
        $prod_ids = array_column($_SESSION["myCart"],"prod_id");

        // print_r($prod_ids);
        // print_r($_SESSION["myCart"]);

        //check if "$_POST["prodID"]" is in "$prod_ids" array 
        if(in_array($_POST["prodID"],$prod_ids)){
          //the product is already added to the session
          //alert the user
          echo "<script>alert('Product is already added to your cart')</script>";
        }else{

          //number of products already in the session "myCart"
          // $cartProductsNo = count($_SESSION["myCart"]);

          //new product not added yet
          $product_item = ["prod_id" => $_POST["prodID"]];
          //added to the end of the session "myCart"
          $_SESSION["myCart"][] = $product_item;
          // print_r($_SESSION["myCart"]);

        }

        
      }else{

        //session variable is not created

        $product_item = ["prod_id" => $_POST["prodID"]];

        //Create new session variable
        $_SESSION["myCart"][0] = $product_item;

        print_r($_SESSION["myCart"]);


      }
  }


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Watches</title>
    <!--Font Awesome-->
    <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    /> -->
    <!-- Bootstrap -->
    <!-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    /> -->
    <!-- <link rel="stylesheet" href="../styles/style.css" /> -->
    <!--Website Icon-->
    <link
      rel="shortcut icon"
      href="../images/zipper-icon.png"
      type="image/x-icon"
    />
  </head>
  <body>
    <!--Navbar Section Starts-->
    <?php require_once("./navHeader.php"); ?>
    <!--Navbar Section Ends-->

  
 


    <link rel="stylesheet" href="../styles/style.css" />
    

    
    <!--Watches Section Starts-->
    <!--Container for all products Starts-->
    <div class="container my-5 pt-5">

      <!--Row Starts-->
      <div class="row">

        <?php  
          $result = $productInfo->getProductData();  
          
          while($row=mysqli_fetch_assoc($result)){

            $prodID = $row["PROD_ID"];
            $prodName = $row["PROD_NAME"];
            $prodType = $row["PROD_TYPE"];
            $prodIMG = $row["PROD_IMG"];
            $prodDESC = $row["PROD_DESC"];
            $prodSTARS = $row["PROD_STARS"];
            $prodPRICE = $row["PROD_PRICE"];

            //only show watches
            if($prodType === "Watch"){

              displayProductCard($prodID,$prodName,$prodIMG,
                                $prodDESC,$prodPRICE,$prodSTARS,
                                "bg-dark");

            }

            

          }

          //Close the connection
          // mysqli_close($productInfo->con);
        
        ?>

        
        

      </div>
      <!--Row Ends-->

     

    </div>
    <!--Container for all products Ends-->

    <!--Watches Section Ends-->


    <!--Scrolling Up Starts-->
    <a href="#" class="to-top " >
      <i class="fa fa-chevron-up" aria-hidden="true"></i>
    </a>
    <!--Scrolling Up Ends-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../scripts/watches.js"></script>
    <!----------------------------------------------- Footer -------------------------------------------------------------->
   <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  <footer class="bg-light text-center text-lg-start">
   <!---Grid container--> 
  <div class="container p-4">
    <!-- Grid row-->
    <div class="row">
     <!-- Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase"><u>Company</u></h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="#!" class="text-dark">About us</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Our Services</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Privacy Policy</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Affiliate Program</a>
          </li>
        </ul>
      </div>
      

     <!-- Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-0"><u>Get Help</u></h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="text-dark">FAQ</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Shipping</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Returns</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Order Status</a>
          </li>
                  <li>
            <a href="#!" class="text-dark">Payment Options</a>
          </li>

        </ul>
      </div>
     <!-- Grid column-->

      
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase"><u>Online Shop</u></h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="#!" class="text-dark">Watch</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Women</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Men</a>
          </li>
          <li>
            <a href="#!" class="text-dark">New Arrivals</a>
          </li>
        </ul>
      </div>
      
      <!-- <h5 class="text-uppercase"><u>Follow Us</u></h5>
      <section class="mb-4"> -->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase"><u>Follow us</u></h5>

        <ul class="list-unstyled mb-0">
          <li>
           YouTube  
      <i class="fa fa-youtube-square" aria-hidden="true" style='font-size:10px'></i>
          </li>
          <li>
            Github 
     <i class="fa fa-github-square" aria-hidden="true" style='font-size:10px'></i>
          </li>
          
        </ul>
      </div>
      
       <!-- YouTube  
      <i class="fa fa-youtube-square" aria-hidden="true" style='font-size:10px'></i> -->

     
     
       <!-- Github 
     <i class="fa fa-github-square" aria-hidden="true" style='font-size:10px'></i> -->
    </section>
      </div>
    
   <div style="text-align: center;">Copyright © 2021 CSIS255: <a class="text-dark" href="https://auk.edu.kw/">auk.edu.kw</a></div>
    

  
</footer>
  </body>
</html>
