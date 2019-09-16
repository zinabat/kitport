const greeting = "Yo ";
const name = "Thor";
const message = ", please check your order:";
const welcome = greeting + name + message;
const sign = "Le Grand Hotel Motel";
const withoutSpace = sign.replace(/ /g, "");
const tiles = withoutSpace.length;
const subTotal = tiles * 5;
const shipping = 7;
const grandTotal = subTotal + shipping;

document.getElementById("greeting").textContent = welcome;
document.getElementById("userSign").textContent = sign;
document.getElementById("tiles").textContent = tiles;
document.getElementById("subTotal").textContent = "$"+subTotal;
document.getElementById("shipping").textContent = "$"+shipping;
document.getElementById("grandTotal").textContent = "$"+grandTotal;
