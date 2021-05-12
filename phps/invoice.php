<?php 

session_start();

$t_date = $_COOKIE["t_date"];
$p_email = $_COOKIE["p_email"];
$f_name = $_COOKIE["f_name"];
$l_name = $_COOKIE["l_name"];
$a_value = $_COOKIE["a_value"];
$a_currency = $_COOKIE["a_currency"];
$address_line = $_COOKIE["address_line"];
$address_area = $_COOKIE["address_area"];
$country_code = $_COOKIE["country_code"];
$postal_code = $_COOKIE["postal_code"];
$status = $_COOKIE["status"];


unset($_SESSION["myCart"]);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    
   
    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../styles/style.css" />
    <!--Website Icon-->
    <link
      rel="shortcut icon"
      href="./images/zipper-icon.png"
      type="image/x-icon"
    />

  </head>
  <body style="background-color: white;">

    <?php require_once("./navHeader.php") ?>

    <!-- greeding intro -->
    <h1 class="text-center bg-info bg-gradient p-2 invoice-greed">
      Thanks for Purchasing from Purple <span id="Z">Z</span> 🐳
    </h1>

    <!-- general duration statement -->
    <h2 class="text-center mb-3 p-2">
      Your Order Will be Delivered within 7 Working Days
    </h2>

    <h3 class="text-center text-success p-2 border rounded bg-light bg-gradient container">
      Your Payment Has Been Approved
    </h3>

    <div class="mt-2 container">

      <!-- Transaction Date Section Starts -->
      <div class="form-group mt-2">
        <div
          id="transactiontime"
          class="border rounded p-2  text-dark"
        >
          Transaction Date: <?php echo $t_date; ?>
        </div>
      </div>
      <!-- Transaction Date Section Ends -->


      <div class="row mt-2">

        <!-- Personal info Section Starts -->
        <div class="col">
          <div class="border rounded p-2  text-dark" id="fname">
            First name: <?php echo $f_name; ?>
          </div>
        </div>
        <div class="col">
          <div class="border rounded p-2  text-dark" id="lname">
            Last name: <?php echo $l_name; ?>
          </div>
        </div>
      </div>
      <!-- Personal info Section Ends -->

      <div class="form-group mt-3">
        <div id="email" class="border rounded p-2  text-dark">
          Email: <?php echo $p_email; ?>
        </div>
      </div>

      <div class="mt-2 fs-3">Purchase Info:</div>

      <div class="row">
        <div class="col-sm-2">
          <div class="border rounded p-2  text-dark" id="amount">
            Amount: <?php echo $a_value; ?>
          </div>
        </div>
          <div class="col-sm-1 border rounded p-2  text-dark" id="currency">
            <?php echo $a_currency; ?>
          </div>
      </div>

      <div class="mt-2 fs-3">Address Info:</div>

      <div class="row">
        <div class="col-md-4">
          <div class="border rounded p-2  text-dark" id="address">
            Address Line: <?php echo $address_line; ?>
          </div>
        </div>
        <div class="col-md-3">
          <div class="border rounded p-2  text-dark" id="area">
            Area: <?php echo $address_area; ?>
          </div>
        </div>
      </div>

      <div class="row mt-2">

      <div class="col-sm-2">

      <div
          class="border rounded p-2  text-dark"
          id="postal"
        >
          Postal Code: <?php echo $postal_code; ?>
        </div>

      </div>
        
        <div class="col-sm-2">

            <div
          class="border rounded p-2  text-dark"
          id="country"
        >
          Country Code: <?php echo $country_code; ?>
        </div>

        </div>

        
      </div>
    </div>

    <h3
      id="status"
      class="text-center text-success mt-2 p-2 border rounded bg-light bg-gradient container"
    >
      <?php echo $status; ?>
    </h3>

    <!-- <h4>currDate/TransactionTime: 2021-05-05</h4>
    <h4>First name: Jone</h4> <h4>Last name: Doe</h4>
    <h4>payer email: test@example.com</h4>
    <h4>Amount: 12.50</h4><h4>Currency code: USD</h4>

    <h4>Address Line: Free Trade Zone</h4>
    <h4>Admin area: Kuwait City</h4>
    <h4>Postal Code: 14005</h4>
    <h4>Country Code: KW</h4>
    <h4>Status: Completed 'Green'</h4> -->

    <!--Scrolling Up Starts-->
    <a href="#" class="to-top " >
      <i class="fa fa-chevron-up" aria-hidden="true"></i>
    </a>
    <!--Scrolling Up Ends-->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../scripts/watches.js"></script>
    
  </body>
</html>