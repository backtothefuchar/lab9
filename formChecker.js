let smallCost = 5;
document.querySelector("#small").innerHTML = "0";
let small = document.querySelector("#small").value;

let mediumCost = 10;
document.querySelector("#medium").value = "0";
let medium = document.querySelector("#medium").value;

let largeCost = 15;
document.querySelector("#large").value = "0";
let large = document.querySelector("#large").value;

let shippingCost = 0;
document.querySelector("#shippingCost").value = "0";
document.querySelector("#items").value = "0";

let total = 0;
let totalItems = 0;
this.total();

if (this.total < 1 || this.totalItems < 1) {
	alert("Select at least one item to buy.");
	return false;
}

let username = document.querySelector("#username").value;
let password = document.querySelector("#password").value;

if (username == "" || password == "") {
	alert("Please enter a username and password.");
	return false;
}

console.log(this.total + "---------");
this.total = 0;
this.totalItems = 0;
return true;

<>filler due to unreachable code</>

let small = parseInt(document.querySelector("small").value);
let medium = parseInt(document.querySelector("#medium").value);
let large = parseInt(document.querySelector("#large").value);
this.shipping();
this.total = (small * this.smallCost) + (medium * this.mediumCost) + (large * this.largeCost);
this.totalItems = small + medium + large;
this.totalPrice += this.delivery;

let shipping = document.getElementsByName("shippingCost");
let price = 0;
for (let i = 0; i < shipping.length; i++) {
	if (shipping[i].checked) {
		price = shipping[i].value;
	}
}
if (price == "free") {
	this.delivery = 0;
}
else if (price == "overNight") {
	this.delivery = 50;
}
else if (price == "threeDay") {
	this.delivery = 5;
}

this.total();
this.shipping();
document.querySelector("#totalItems").innerHTML = "$ " + this.totalItems;
document.querySelector("#shippingCost").innerHTML = "$ " + this.delivery;
document.querySelector("#total").innerHTML = "$ " + this.total;

this.total = 0;
this.totalItems = 0;

