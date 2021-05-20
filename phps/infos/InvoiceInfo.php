<?php 

class InvoiceInfo{

    public $con;
    public $amount,$currency_code,$trans_date,$status;

    public function __construct($amount,$currency_code,$trans_date,$status)
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

        $this->amount = $amount;
        $this-> currency_code = $currency_code;
        $this-> trans_date = $trans_date;
        $this->status = $status;



    }

    public function insertInvoiceInfo($curr_order_id){

        // $amount = 12.5;
        // $currency_code = "USD";
        // $trans_date = "2021-05-05"; //or current date (invoice date)
        // $status = "COMPLETED";

        $qry = "INSERT into invoice (order_id,amount,currency_code,trans_date,status) 
            VALUES ('$curr_order_id','$this->amount','$this->currency_code','$this->trans_date','$this->status')";

        if(!mysqli_query($this->con,$qry)){
            die("INSERTING INVOICE ERROR: ". mysqli_error($this->con));
        }
        // echo "1 invoice row inserted <br>";
        



    }

    

    

    


}



?>