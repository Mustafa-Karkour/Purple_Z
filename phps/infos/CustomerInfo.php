<?php 

class CustomerInfo{

    public $con;
    public $cus_email, $cus_f_name, $cus_l_name;

    public function __construct($cus_email,$cus_f_name,$cus_l_name)
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

        $this-> cus_email = $cus_email;
        $this-> cus_f_name = $cus_f_name;
        $this-> cus_l_name = $cus_l_name;


    }

    public function insertCustomerInfo(){



        $cus_email = $this->cus_email;
        $cus_f_name = $this -> cus_f_name;
        $cus_l_name = $this-> cus_l_name;

        $qry = "INSERT into customer (email,f_name,l_name) VALUES ('$cus_email','$cus_f_name','$cus_l_name')";

            if(!mysqli_query($this->con,$qry)){
                die("INSERTING CUSTOMER ERROR: ". mysqli_error($this->con));
            }
        // echo "1 customer row inserted <br>";
        



    }

    //check if the customer already exists in the customer table
    public function customerAvailability(){

        $cus_email = $this->cus_email;
        $cus_f_name = $this -> cus_f_name;
        $cus_l_name = $this-> cus_l_name;

        $qry= "SELECT cus_id FROM customer WHERE email='$cus_email' 
            AND f_name='$cus_f_name' AND l_name='$cus_l_name'";

        $result = mysqli_query($this->con,$qry);

        if(mysqli_fetch_array($result)){
            // echo "customer already exists in the customer table <br>";
            return true;
        }
        return false;

    }


}



?>