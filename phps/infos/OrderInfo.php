<?php 

class OrderInfo{

    public $con;
    public $cus_id;
    //order as a table name is not allowed since its a reserved keyword

    public function __construct($cus_email)
    {
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

        $this->cus_id = $this->getCus_id($cus_email);


    }

    public function insertOrderInfo(){


        $cus_id = $this->cus_id;
       
        $qry = "INSERT into order_cus (cus_id) VALUES ('$cus_id')";

        if(!mysqli_query($this->con,$qry)){
            die("INSERTING ORDER ERROR: ". mysqli_error($this->con));
        }
        // echo "1 order row inserted <br>";
        



    }

    //get the current(invoice) customer
    public function getCus_id($cus_email){

        $qry = "SELECT cus_id FROM customer WHERE email='$cus_email'";

        $result = mysqli_query($this->con,$qry);

        if($row = mysqli_fetch_array($result)){
            // echo "customer id is ".$row['cus_id']."<br>";
            return $row['cus_id'];
        }


    }

    public function getCurrentOrderID(){

        $cus_id = $this->cus_id;

        //max(order_id) to retireve the last/recent/current order
        $qry = "SELECT MAX(order_id) AS order_id  FROM order_cus WHERE cus_id='$cus_id'";

        $result = mysqli_query($this->con,$qry);

        if($row = mysqli_fetch_array($result)){
            // echo "order id is ".$row['order_id']."<br>";
            return $row['order_id'];
        }


    }

    public function insertOrderLineInfo($cart_prod_ids,$cart_qts){

        $order_id = $this->getCurrentOrderID();
        // $cart_prod_ids = [1,2,3];
        // $cart_qts = [4,3,1];

        for($index=0;$index<count($cart_prod_ids);$index++){

            $id = (int)$cart_prod_ids[$index];
            $qty = (int)$cart_qts[$index];

            $qry = "INSERT into order_line (order_id,prod_id,purchased_qty) 
            VALUES ('$order_id','$id','$qty')";

            if(!mysqli_query($this->con,$qry)){
                die("INSERTING ORDER_LINE ERROR: ". mysqli_error($this->con));
             }
            //  echo ($index+1)." order_line row inserted <br>";


        }



    }


}



?>