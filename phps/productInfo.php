<?php 

class ProductInfo{


    public $serverName;
    public $userName;
    public $password;
    public $dbName;
    public $con;

    public function __construct(
        $serverName="localhost",
        $userName="root",
        $password="",
        $dbName="Purple_Z"
    ){
        $this->serverName = $serverName;
        $this->userName = $userName;
        $this->password = $password;
        $this->dbName = $dbName;

        //Create Connection
        $this->con = mysqli_connect($serverName,$userName,$password,$dbName);

        //check Connection
        if(!$this->con){
            die("Connection failed". mysqli_connect_error());
        }


    }

    public function getProductData(){

        $qry = "SELECT * FROM product";

        $result = mysqli_query($this->con,$qry);

        //table not empty
        if(mysqli_num_rows($result) > 0){
            return $result;
        }



    }

}

?>