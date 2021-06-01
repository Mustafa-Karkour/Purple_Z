<head>
    <meta charset="UTF-8">
    <title>Purple Zipper Bags</title>

    <link rel="stylesheet" href="stylesheet.css">
</head>
<h2 class="title">Bag collection </h2>
<?php
$con = mysqli_connect("localhost","root","","purple_z");
if(!$con){
    die("Connection failed". mysqli_connect_error());
}
$qry= "SELECT * FROM product WHERE PROD_TYPE='Bag'";
$rst=mysqli_query($con,$qry);

While($row=mysqli_fetch_assoc($rst)) {
    $prod_ID = $row["PROD_ID"];
    $prod_NAME = $row["PROD_NAME"];
    $prod_TYPE = $row["PROD_TYPE"];
    $prod_IMG = $row["PROD_IMG"];
    $prod_DESC = $row["PROD_DESC"];
    $prod_STARS = $row["PROD_STARS"];
    $prod_PRICE = $row["PROD_PRICE"];
}
    ?>

<img src="<?php echo $prod_IMG?>" alt="">
<h1><?php echo $prod_NAME?></h1>
<p><?php echo $prod_DESC?></p>
<p class="price"><?php echo $prod_PRICE ?></p>
