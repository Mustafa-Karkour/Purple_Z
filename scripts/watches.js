
//Scroll back to top icon Starts
const toTop = document.querySelector(".to-top");

window.addEventListener("scroll", ()=>{

    if(window.pageYOffset>100){
        toTop.classList.add("active");
    }else{
        toTop.classList.remove("active");
    }

})
//Scroll back to top icon ends

/*Filter products section starts
let productNames = [];
let products = document.getElementsByClassName("productName");
for(let productIndex=0;productIndex<products.length;productIndex++){
    productNames[productIndex] = (products[productIndex].innerHTML).toLowerCase();
}
const searchBar = document.getElementById('searchBar');
// 'keyup' means when a key from the keyboard is pressed down then released
//e.g press 'e' then the key is e
searchBar.addEventListener("keyup",function(event){

    let searchedString = event.target.value;
    searchedString = searchedString.toLowerCase();
    let fileteredName = productNames.filter(productName =>{

        return productName.includes(searchedString);

    });

    console.log(fileteredName);


})
/Filter products section ends*/

