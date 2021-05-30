<!--Font Awesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    />
    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- <link rel="stylesheet" href="../styles/style.css" /> -->
    <!--Website Icon-->
    <link
      rel="shortcut icon"
      href="../images/zipper-icon.png"
      type="image/x-icon"
    />
<header id="header">

    <!--Navbar Section Starts-->
    <!-- navbar-expand-md = show ham menu for medium screens-->
    <nav
      class="navbar fixed-top navbar-expand-md navbar-light"
      style="background-color: #f5f5f5"
    >
      <div class="container">
        <!--Logo-->
        <!--Replace # with home page .html-->
        <a href="../tala/homepage.html" class="navbar-brand mb-0 h1">
          Purple
          <img
            class="d-inline-block"
            src="../../Project/images/Z-logo1.png"
            width="50"
            height="40"
            alt="website logo"
          />
        </a>
        <!--Ham menu-->

        <button
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbar-menu"
          class="navbar-toggler"
          aria-controls="navbar-menu"
          aria-expanded="false"
          aria-label="toggle navigation"
        >
          <!--Ham bars-->
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-menu">
          <ul class="navbar-nav">
            <li class="nav-item">
              <!--Home page-->
              <a href="../tala/homepage.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <!--Women page-->
              <a href="../Fatemah/Women.php" class="nav-link">Women</a>
            </li>
            <li class="nav-item">
              <!--Men page-->
              <a href="../Fatemah/Men.php" class="nav-link">Men</a>
            </li>
            <li class="nav-item dropdown">
              <!--Products page-->
              <a
                href="#"
                class="nav-link dropdown-toggle"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                id="products-dropdown"
                >Products</a
              >
              <!--DropDown List-->
              <ul
                class="dropdown-menu dropdown-menu-light"
                aria-labelledby="products-dropdown"
              >
                <li>
                  <a href="../phps/Watches.php" class="dropdown-item">Watches</a>
                </li>
                <li>
                  <a href="../tala/bag.php" class="dropdown-item">Bages</a>
                </li>
               
              </ul>
            </li>
            <li class="nav-item">
              <!--New Arrivals page-->
              <a href="../Zahraa/All/salea.html" class="nav-link">On Sale</a>
            </li>
          </ul>

           

        </div>

         <div>
            <div class="mr-auto">
                <div class="navbar-nav">
                    <a href="../phps/cart.php" class="nav-item nav-link active">
                        <h5 class="cart">
                            <!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart -->
                            <img src="../../Project/images/cart.png" width="35px" class="pb-2" alt="cart icon"> Cart
                            <?php 
                            
                            if(isset($_SESSION["myCart"])){
                                //products in the cart
                                $count = count($_SESSION["myCart"]);
                                echo "<span id=\"cartCount\" class=\"text-warning bg-dark\">$count</span>";
                            }else{
                                //no products in the cart
                                echo "<span id=\"cartCount\" class=\"text-warning bg-dark\">0</span>";
                            }

                            ?>
                        </h5>
                    </a>
                </div>
            </div>
        </div>

        <!-- Search bar-->
        <!--action = search for a product-->
        <!-- <form action="" class="d-flex">
          <input
            type="text"
            id="searchBar"
            placeholder="Looking for a product?"
            class="form-control me-2"
          />
          <button class="btn btn-outline-primary" type="submit">Search</button>
        </form> -->

        

      </div>
    </nav>
    <!--Navbar Section Ends-->

</header>