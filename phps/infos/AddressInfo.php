<?php 

class AddressInfo{

    public $con;
    public $address_line, $address_area, $country_code,$postal_code;

    public function __construct($address_line,$address_area,$country_code,$postal_code)
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

        $this-> address_line = $address_line;
        $this-> address_area = $address_area;
        $this-> country_code = $country_code;
        $this-> postal_code = $postal_code;


    }

    public function insertAddressInfo($cus_email){


        $cus_id = $this->getCus_id($cus_email);
        $address_line = $this -> address_line;
        $address_area = $this-> address_area;
        $country_code = $this->country_code;
        $postal_code = $this-> postal_code;

        $qry = "INSERT into address (cus_id,address_line,address_area,country_code,postal_code) 
            VALUES ('$cus_id','$address_line','$address_area','$country_code','$postal_code')";

        if(!mysqli_query($this->con,$qry)){
            die("INSERTING ADDRESS ERROR: ". mysqli_error($this->con));
        }
        // echo "1 address row inserted <br>";
        



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


}



?>