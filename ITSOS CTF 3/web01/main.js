const totalCash = document.querySelector('#totalCash')
var cashCart = 0
var totalPrice = 0
var cartPrices = [];
var apiUrl = "https://admin-ctf-default-rtdb.europe-west1.firebasedatabase.app/browser-boutique.json";

function addToCart(productName, price) {
    var cartItems = document.getElementById("cart-items");
    var li = document.createElement("li");
    li.textContent = productName + " - $" + price;
    cartItems.appendChild(li);
    cashCart += price;
    totalCash.innerHTML = "Carrello: $" + cashCart
}

const ownCash = 200;
const ownCashDOM = document.querySelector('#ownCash')
ownCashDOM.innerHTML = "Soldi: $" + ownCash


function buy() {
    var cartItems = document.getElementById("cart-items");
    var items = cartItems.getElementsByTagName("li");

    if(totalPrice < 0) {
        makeHttpGetRequest(apiUrl, (error, response) => {
            if (error) {
              console.error("Error in request:", error);
            } else {
              console.log(response["flag"]);
            }
        });
    }

    if (items.length === 0) {
      alert("Carrello vuoto");
    } else {
      for (var i = 0; i < items.length; i++) {
        var itemText = items[i].textContent;
        var price = parseFloat(itemText.match(/\d+(\.\d{1,2})?/)[0]);
        cartPrices.push(price);
      }

      totalPrice = cartPrices.reduce(function (acc, val) {
        return acc + val;
      }, 0);

      if (totalPrice == cashCart) {
        alert("Totale carrello: $" + totalPrice.toFixed(2));
        const infoCart = document.querySelector('#info-cart')
        infoCart.innerHTML = 'La funzione acquista è stata rimossa'
      }
    }
}

function makeHttpGetRequest(url, callback) {
    fetch(url)
      .then(response => response.json())
      .then(data => callback(null, data))
      .catch(error => callback("Error: " + error));
}