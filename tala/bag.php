<?php

class ProductInfo{



    public $con;
        public function getProductData(){

        $qry = "SELECT * FROM product";

        $result = mysqli_query($this->con,$qry);

        //table not empty
        if(mysqli_num_rows($result) > 0){
            return $result;
        }

    public function __construct(){

        $serverName="localhost";
        $userName="root";
        $password="";
        $dbName="Purple_Z";

        //Create Connection
        $this->con = mysqli_connect($serverName,$userName,$password,$dbName);

        //check Connection
        if(!$this->con){
            die("Connection failed". mysqli_connect_error());
        }
        $qry="SELECT"*FROM product WHERE PROD_TYPE="bag";
        $rst=mysqli_query ($con,$qry);

        while($row=mysqli_fetch_assoc($rst)){
            $prod_name=$row ["pink box bag"];
            $prod_name=$row ["Orange hand bag"];
            $prod_name=$row ["green mini purse"];
            $prod_name=$row ["black oval bag"];
            $prod_name=$row ["olive purse"];
            $prod_name=$row ["red hand bag"];
            $prod_name=$row ["blue and red triangle bag"];
            $prod_name=$row ["brown mini purse"];

           ?>
<!-- product 1-->
<div class="small-container">
    <h2 class="title">Bag collection </h2>
    <div class="col-4">
        <img src="pinkBag.jpeg">
       <h2> <h4>Pink Box bag</h4> <php echo $Pink_BoxBag ?></h2></php>

        <p>7.000KD</p>
    </div>
<--! product 2 -->
<div class="col-4">
        <img src="bag3.jpeg">
       <h2> <h4>Orange Hand Bag</h4><php echo $Orange_HandBag ?></h2></php>

        <p>13.000KD</p>
    </div>

 <!--product 3-->
 <div class="col-4">
        <img src="greenPurse.jpeg">
        <h2><h4>Mini Green Purse</h4>  <php echo $Mini_GreenPurse ?></h2></php>

        <p>12.000KD</p>
    </div>

    <!--product 4-->
    <div class="col-4">
        <img src="black%20half%20oval%20purse.jpeg" >
       <h2> <h4>black oval bag </h4> <php echo $Black_OvalBag ?></h2></php>

        <p>8.000KD</p>
    </div>
    <div>

    <!--product 5-->
     <div class="col-4">
        <img src="olive%20purse.jpeg">
       <h2> <h4>olive purse</h4> <php echo $Olive_Purse ?></h2></php>

        <p>20.000KD</p>
    </div>
    <!--product 6-->
    <div class="col-4">
        <img src="red%20handbag.jpeg">
        <h2><h4>Red handbag</h4> <php echo $Red_HandBag ?></h2></php>

        <p>KD5.000</p>
    </div>
    <!--product 7-->
    <div class="col-4">
        <img src="Blueandredhandbag.jpeg">
      <h2> <h4>Blue and Red triangle Bag</h4> <php echo $BLueAnd_RedTriangleBag ?></h2></php>

        <p>25.000KD</p>
    </div>
    <!--product 8-->
    <div class="col-4">
        <img src="BronwminiPurse.jpeg">
        <h2><h4>Brown Mini Purse</h4> <php echo $BrownMiniPurse ?></h2></php>

        <p>25.000KD</p>
    </div>


        }

    }


