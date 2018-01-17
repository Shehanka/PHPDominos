var netPrice = 0.0;
var DELIVERY_CHARGE = 500.00;
var grandTotal = netPrice + DELIVERY_CHARGE;

document.getElementById("net-price").innerHTML = "Net Price : "+netPrice;
document.getElementById("delivery-charge").innerHTML = "Delivery Charge : "+DELIVERY_CHARGE;
document.getElementById("grand-total").innerHTML = "GRAND TOTAL : "+grandTotal;


