const minusBtns = document.querySelectorAll(".minusBtn");
const plusBtns = document.querySelectorAll(".plusBtn");
const cart_qtys = document.getElementsByClassName("cart-qty");
console.log("cart_qtys size = " + cart_qtys.length);
const cart_productIDs = document.getElementsByClassName("cart-productID");
console.log("cart_productIDs size = " + cart_productIDs.length);

var totalAMT = document.getElementById("fullPrice").innerHTML.split(" ")[0];
totalAMT = parseFloat(totalAMT);

minusBtns.forEach(function (mBtn, index) {
  mBtn.addEventListener("click", function () {
    // console.log(cart_qtys[index].value);

    if (cart_qtys[index].value == 1) {
      //         //skip
    } else {
      cart_qtys[index].value -= 1;
      console.log("cart_qtys current value = " + cart_qtys[index].value);

      const prodPrices = document.querySelectorAll(".prodPrice");

      let prodPrice = prodPrices[index];
      let priceSplit = prodPrice.innerHTML.split(" ");
      let prodPriceVal = parseFloat(priceSplit[0]);
      // console.log("product price = " + prodPriceVal);
      // let finalProdPrice = qty * prodPriceVal;
      // console.log("final product price = " + finalProdPrice);

      const fullPriceSplit = document
        .getElementById("fullPrice")
        .innerHTML.split(" ");

      let cartFullPrice = parseFloat(fullPriceSplit[0]);
      cartFullPrice -= prodPriceVal;
      // console.log("cart full price = "+cartFullPrice);

      // let finalCartPrice = cartFullPrice + " KD";
      let total = (Math.round(cartFullPrice * 10) / 10).toFixed(1);
      totalAMT = total;
      console.log(totalAMT);

      finalCartPrice = total + " USD";
      let cartPriceHTML = document.getElementById("fullPrice");
      cartPriceHTML.innerHTML = finalCartPrice;

      let cartPriceHTML2 = document.getElementsByClassName("fullPrice");
      cartPriceHTML2[0].innerHTML = finalCartPrice;
    }
  });
});

plusBtns.forEach(function (pBtn, index) {
  pBtn.addEventListener("click", function () {
    // console.log(cart_qtys[index].value);

    //increase the qty number
    cart_qtys[index].value = parseInt(cart_qtys[index].value) + 1;
    console.log("the index = " + index);
    console.log(
      "cart_qty current value = " +
        cart_qtys[index].value +
        " for product id = " +
        cart_productIDs[index].value
    );

    // let qty = cart_qtys[index].value;
    // qty-=1;

    // let qty =1;

    const prodPrices = document.querySelectorAll(".prodPrice");

    let prodPrice = prodPrices[index];
    let priceSplit = prodPrice.innerHTML.split(" ");
    let prodPriceVal = parseFloat(priceSplit[0]);
    // console.log("product price = " + prodPriceVal);
    // let finalProdPrice = qty * prodPriceVal;
    // console.log("final product price = " + finalProdPrice);

    const fullPriceSplit = document
      .getElementById("fullPrice")
      .innerHTML.split(" ");

    let cartFullPrice = parseFloat(fullPriceSplit[0]);
    cartFullPrice += prodPriceVal;
    // console.log("cart full price = "+cartFullPrice);

    // let finalCartPrice = cartFullPrice + " KD";
    let total = (Math.round(cartFullPrice * 10) / 10).toFixed(1);
    totalAMT = total;
    console.log(totalAMT);

    finalCartPrice = total + " USD";
    let cartPriceHTML = document.getElementById("fullPrice");
    cartPriceHTML.innerHTML = finalCartPrice;

    let cartPriceHTML2 = document.getElementsByClassName("fullPrice");
    cartPriceHTML2[0].innerHTML = finalCartPrice;
  });
});

const invoice = document.getElementById("invoice");

//---------- PayPal API Section Starts ----------//

if (totalAMT != 0) {
  paypal
    .Buttons({
      style: {
        color: "blue",
        shape: "pill",
        size: "small",
      },
      createOrder: function (data, actions) {
        // This function sets up the details of the transaction, including the amount and line item details.
        return actions.order.create({
          purchase_units: [
            {
              amount: {
                value: totalAMT,
              },
            },
          ],
        });
      },
      onApprove: function (data, actions) {
        // This function captures the funds from the transaction.
        return actions.order.capture().then(function (details) {
          // This function shows a transaction success message to your seller.
          // console.log(details);

          console.log(details.create_time.split("T")[0]);
          document.cookie = "t_date=" + details.create_time.split("T")[0];

          console.log(details.payer.email_address);
          document.cookie = "p_email=" + details.payer.email_address;

          console.log(details.payer.name.given_name);
          document.cookie = "f_name=" + details.payer.name.given_name;

          console.log(details.payer.name.surname);
          document.cookie = "l_name=" + details.payer.name.surname;

          console.log(details.purchase_units["0"].amount.value);
          document.cookie =
            "a_value=" + details.purchase_units["0"].amount.value;

          console.log(details.purchase_units["0"].amount.currency_code);
          document.cookie =
            "a_currency=" + details.purchase_units["0"].amount.currency_code;

          console.log(
            details.purchase_units["0"].shipping.address.address_line_1
          );
          document.cookie =
            "address_line=" +
            details.purchase_units["0"].shipping.address.address_line_1;

          console.log(
            details.purchase_units["0"].shipping.address.admin_area_2
          );
          document.cookie =
            "address_area=" +
            details.purchase_units["0"].shipping.address.admin_area_2;

          console.log(
            details.purchase_units["0"].shipping.address.country_code
          );
          document.cookie =
            "country_code=" +
            details.purchase_units["0"].shipping.address.country_code;

          console.log(details.purchase_units["0"].shipping.address.postal_code);
          document.cookie =
            "postal_code=" +
            details.purchase_units["0"].shipping.address.postal_code;

          console.log(details.status);
          document.cookie = "status=" + details.status;

          //formating the arrays to strings
          var formatedIds = formatArrayToString(cart_productIDs);
          console.log("formatedIds = " + formatedIds);
          document.cookie = "cart_ids=" + formatedIds;

          var formatedQts = formatArrayToString(cart_qtys);
          console.log("formatedQts = " + formatedQts);
          document.cookie = "cart_qts=" + formatedQts;
          //-------------------------------------------

          //TODO: redirect the customer to the invoice/home page
          window.location.replace("http://localhost/Project/phps/invoice.php");
        });
      },
    })
    .render("#paypal_btn");
}
//---------- PayPal API Section Ends ----------//

function formatArrayToString(myArray) {
  let formatedString = "";

  for (let index = 0; index < myArray.length; index++) {
    formatedString += myArray[index].value + "-";
  }

  return formatedString.substr(0, formatedString.length - 1);
}
