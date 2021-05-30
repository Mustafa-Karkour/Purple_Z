<?php 

    session_start();

    require_once("productInfo.php");
    require_once("componentHTML.php");
    
    $products = new ProductInfo();

    if(isset($_POST["remove"])){
        // print_r($_GET["id"]);
        if($_GET["action"] == "remove"){
            foreach($_SESSION["myCart"] as $productKey => $productValue){
                if($productValue["prod_id"] == $_GET['id']){
                    unset($_SESSION["myCart"][$productKey]);
                    echo "<script>window.location = 'cart.php'</script>";
                }
            }
        }
    }

   

    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <!--Font Awesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    />
    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../styles/style.css" />
    <!--Website Icon-->
    <link
      rel="shortcut icon"
      href="./images/zipper-icon.png"
      type="image/x-icon"
    />
</head>
<body>

    <?php require_once("navHeader.php") ?>
    <link rel="stylesheet" href="../styles/style.css" />



    <div class="container-fluid shopping-cart-section">
    <div class="row px-5">
        <!-- products in the cart section starts -->
        <div class="col-md-7">
        
            <div class="shopping-cart">
                <h6 class="text-dark">My Cart</h6>
                <hr class="bg-dark">

                <?php 
                
                        $totalPrice = 0;

                    if(isset($_SESSION["myCart"])){
                       
                    
                    $product_ids = array_column($_SESSION["myCart"],"prod_id");

                    $result = $products->getProductData();

                    while($row = mysqli_fetch_assoc($result)){


                        foreach($product_ids as $id){
                            //show only the products from the session
                            $prodID = $row["PROD_ID"];
                            if($prodID ==$id){

                            $prodName = $row["PROD_NAME"];
                            $prodIMG = $row["PROD_IMG"];
                            $prodDESC = $row["PROD_DESC"];
                            $prodSTARS = $row["PROD_STARS"];
                            $prodPRICE = $row["PROD_PRICE"];

                            $totalPrice += floatval($prodPRICE);

                            cartProducts($prodIMG,$prodName,$prodSTARS,$prodPRICE,$prodID);

                            }
                        }
                        
                    }
                    }else{
                        echo "<h5 class=\"text-dark\">Cart is Empty</h5>";
                    }

                ?>

            </div>
        
        </div>
        <!-- products in the cart section ends -->

       

        <!-- payment Section starts -->
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-dark h-25">
            <div>
                <h6 class="text-light pt-2">PRICE DETAILS</h6>
                <hr class="bg-light">
                <div class="row pice-details">
                    <div class="col-md-6">

                    <?php 
                        
                        if(isset($_SESSION["myCart"])){
                            $count = count($_SESSION["myCart"]);
                            
                            if($count == 1){
                                echo "<h6 class='text-light'>Price ($count item)</h6>";
                            }else
                                echo "<h6 class='text-light'>Price ($count item(s))</h6>";
                        }else{
                            echo "<h6 class='text-light'>Price (0 item)</h6>";
                        }

                    ?>

                    <h6 class="text-light">Delivery Charges</h6>
                    <hr class="bg-light">
                    <h6 class="text-light">Payment Amount</h6>

                    </div>
                    <div class="col-md-6">
                        <h6>
                            <?php 
                            
                            echo "<span id=\"fullPrice\" class=\"text-light\">$totalPrice USD</span";
                            
                            ?>
                        </h6>
                        <h6 class="text-success">FREE</h6>
                        <hr class="bg-light">

                        <h6>
                            <?php
                            
                            echo "<span class=\"fullPrice text-light\">$totalPrice USD</span";
                            


                            ?>

                        </h6>

                    </div>


                </div>

            </div>
                        
                        <div class="btn-lg" id="paypal_btn">
                        
                            
                        
                        </div>
                        <!-- <a href="./invoice.php" class="d-block mb-3 btn btn-primary">Invoice
                        
                         
                        </a> -->

                        


        </div>
        <!-- payment Section ends -->
    
    </div>
    </div>



    <!--Scrolling Up Starts-->
    <a href="#" class="to-top " >
      <i class="fa fa-chevron-up" aria-hidden="true"></i>
    </a>
    <!--Scrolling Up Ends-->

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../scripts/watches.js"></script>

    <!-- for PayPal API -->
    <script src="https://www.paypal.com/sdk/js?client-id=AfIGcHNDfAzyrOoKf94t9Iq15w3SXLSK6hf2BV7N8NGTiL1figCasm8cbi0PRforXB3HGj2B9ZqXoq4W&disable-funding=credit,card"></script>
    <!-- <script src="../script/paypal.js"></script> -->
    <script src="../scripts/cart.js"></script>

</body>
</html>