
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>