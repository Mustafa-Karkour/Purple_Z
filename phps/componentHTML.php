<?php 

function displayProductCard($prodID,
                            $prodName,
                            $prodImg,
                            $prodDesc,
                            $prodPrice,
                            $prodStars,
                            $cartBtnTheme){


    $stars ="<div class=\"star mt-3 align-items-center\">"; 


                for($starIndex=0;$starIndex<5;$starIndex++){

                    if($prodStars!=0){
                        $stars = $stars . "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>";
                        $prodStars--;
                    }else{
                        $stars = $stars . "<i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>";
                    }

                }
    $stars = $stars . "</div>";

    $card = "<div class=\"col-md-4\">
          <form action=\"watches.php\" method=\"POST\">

              <div class=\"card mt-3\">
            <div class=\"product algin-items-center p-2 text-center\">
              <img
                src=\"./$prodImg\"
                alt=\"$prodName\"
                width=50%
                class=\"rounded pb-4\"
              />
              <h5 class=\"productName\">$prodName</h5>
              <!--Card info section starts-->
              <div class=\"mt-3 info\">
                <span class=\"apple-desc d-block lh-base\">
                  $prodDesc
                </span>
              </div>
              <div class=\"apple-watch-cost mt-3 text-dark\">
                <span>$prodPrice USD</span>
                <!-- Ratings Section -->"
                .$stars.
              
            "</div>
            </div>
            <!--Add to cart button-->
            <div class=\"p-3 apple-watch-cart $cartBtnTheme text-center text-white mt-3 cursor\">
              <button type=\"submit\" name=\"addCart\" class=\"text-uppercase border-0 text-white bg-transparent\">
                Add to cart
              </button>
              <input type=\"hidden\" name=\"prodID\" value=\"$prodID\">
            </div>
          </div>
          <!--Card info section ends-->
          </div>
        </form>";


    echo $card;

}



function cartProducts($productIMG,$productName,$productStars,$productPrice,$productID){


  $element = "<form action=\"cart.php?action=remove&id=$productID\" method=\"POST\" class=\"cart-items\">

                <div>
                    <div class=\"row pb-2\">
                        <div class=\"col-md-3\" id=\"cart-section-1\" style=\"background-color: #f8f1f2;\">
                            <img src=\"$productIMG\" width=\"100%\" height=\"100%\" alt=\"$productName\" 
                            class=\"img-fuild\">
                        </div>
                        <div class=\"col-md-6\" style=\"background-color: #f8f1f2;\">
                            <h5 class=\"pt-2 text-dark\">$productName</h5>
                            <small class=\"text-success\"><b>Ratings: $productStars</b></small>
                            <h5 class=\"prodPrice pt-2\">$productPrice USD</h5>

                            <!-- <button type=\"submit\" class=\"btn btn-warning\">Save For Later</button> -->

                            <button type=\"submit\" class=\"btn btn-danger removeBtn\" name=\"remove\">Remove</button>
                        </div>
                        <div class=\"col-md-3 py-5\" id=\"cart-section-2\" style=\"background-color: #f8f1f2;\">
                            <!-- Quantity Section -->

                            <!-- minus button -->
                            <button type=\"button\" class=\"minusBtn btn bg-light border rounded-circle\">
                                <i class=\"fa fa-minus\"></i>
                            </button>
                            <input type=\"number\" min=1 name=\"qty\" value=\"1\" class=\"cart-qty form-control  d-inline\">
                           
                            <!-- plus button -->
                            <button type=\"button\" class=\"plusBtn btn bg-light border rounded-circle\">
                                <i class=\"fa fa-plus\"></i>
                            </button>                    
                    </div>
                    </div>
                </div>

                </form>";

                echo $element;


}







?>