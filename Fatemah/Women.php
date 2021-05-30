<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
        body {
  background-color: wheat;
 
}
        .card {

  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  
}
.price {
  color: black;
  font-size: 22px;
  text-align: center;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
.card button:hover {
  opacity: 0.7;
}
        
     .checked {
  color: orange;
}   
      * {
  box-sizing: border-box;
}
.column {
  float: left;
  width: 30%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}  
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: grey;
   color: grey;
   text-align: center;
}
p{
    text-align: center;
}
i{
    max-width: 20%;
}



        </style>

    <meta charset="UTF-8">
         <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
    
    
    <body>
    
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
     <a class="navbar-brand" href="#">Purple Z</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown"><a href="#">Home</a></li> 
      <li class="dropdown"><a href="#" href="boot.html">Women</a></li>
        <li class="dropdown"><a href="#" href="menPage.html">Men</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Products<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">New Arrivals</a></li>
    </ul>
     <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="fa fa-shopping-cart"></span> Cart</a></li>
      
    
    </ul>
    
  </div>
</nav>

    


         <p id="rcorners2">
         <div class="card">
<?php

  $con = mysqli_connect("localhost","root","","purple_z");
if(!$con){
    die("Connection failed". mysqli_connect_error());
}
    $qry= "SELECT * FROM product WHERE PROD_TYPE='Women'";
    $rst=mysqli_query($con,$qry);
    $rowNo=0;
?>
    </div>
        <table width="100%">
<?php
    While($row=mysqli_fetch_assoc($rst)){
        $prod_ID=$row["PROD_ID"];
        $prod_NAME=$row["PROD_NAME"];
        $prod_TYPE=$row["PROD_TYPE"];
        $prod_IMG=$row["PROD_IMG"];
        $prod_DESC=$row["PROD_DESC"];
        $prod_STARS=$row["PROD_STARS"];
        $prod_PRICE=$row["PROD_PRICE"];
        if( $rowNo % 3 ==0){
          ?>
        </tr>
             <tr height="500px">
        <?php } ?>
                   <td>
                     <div class="col-4">
                <div class="card mt-3">
                <img width="350px" height="350px" src="<?php echo $prod_IMG; ?>">
                <h4><?php echo $prod_NAME; ?></h4>
                <p><?php echo $prod_DESC; ?></p>
                <p><?php echo $prod_PRICE. " KD" ?></p>
                <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
           <span class="fa fa-star"></span>
             <span class="fa fa-star"></span>
             <p><button>Add to Cart</button></p>
            </div>
            </div> 
                 </td>
    <?php 
        $rowNo++;
        }
    ?>
             </tr>
         </table>
        

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
      
      <h5 class="text-uppercase"><u>Follow Us</u></h5>
      <section class="mb-4">
          
      
       YouTube  
      <i class="fa fa-youtube-square" aria-hidden="true" style='font-size:10px'></i>

     
     
       Github 
     <i class="fa fa-github-square" aria-hidden="true" style='font-size:10px'></i>
    </section>
      </div>
   Copyright © 2021 CSIS255:
    <a class="text-dark" href="https://auk.edu.kw/">auk.edu.kw</a>
    

  
</footer>
        