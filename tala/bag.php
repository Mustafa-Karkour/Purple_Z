
<head>
    <meta charset="UTF-8">
    <title>Purple Zipper Bags</title>
    <link rel="stylesheet" href="css.css">

    
    
</head>
<!-- <div class="small-container"> -->
    <body style="background-color: white;">
        
<!--Navbar Section Starts-->
    <?php require_once("../phps/navHeader.php") ?>
    <!--Navbar Section Ends-->
    <link rel="stylesheet" href="../styles/style.css" />
    </body>
    <!-- <link rel="stylesheet" href="css.css"> -->

    
    <h2 class="title" style="padding-top: 100px;">Bag collection </h2>
<?php
$con = mysqli_connect("localhost","root","","purple_z");
if(!$con){
    die("Connection failed". mysqli_connect_error());
}
    $qry= "SELECT * FROM product WHERE PROD_TYPE='Bag'";
    $rst=mysqli_query($con,$qry);

    While($row=mysqli_fetch_assoc($rst)){
        $prod_ID=$row["PROD_ID"];
        $prod_NAME=$row["PROD_NAME"];
        $prod_TYPE=$row["PROD_TYPE"];
        $prod_IMG=$row["PROD_IMG"];
        $prod_DESC=$row["PROD_DESC"];
        $prod_STARS=$row["PROD_STARS"];
        $prod_PRICE=$row["PROD_PRICE"];



            ?>
            <!--
<img src="<?php echo $prod_IMG?>">
<h1><?php echo $prod_NAME?></h1>
<p><?php echo $prod_DESC?></p>
<p class="price"><?php echo $prod_PRICE ?> </p> -->


            <div class="col-4" style="padding-bottom: 25px">
                <img width="150px" height="600px" src=".././<?php echo $prod_IMG; ?>">
                <h4><?php echo $prod_NAME; ?></h4>
                <p><?php echo $prod_DESC; ?></p>
                <p><?php echo $prod_PRICE. " KD" ?></p>
            </div>



<?php } ?>
<!--</div> -->
<!----------------------------------------------- Footer -------------------------------------------------------------->
   <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); margin-top: 2350px;">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>