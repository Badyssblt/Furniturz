const account = document.getElementById("account");
const order = document.getElementById("order");
const favorite = document.getElementById("favorite");

function displayMenu(item) {
  if (item == "account") {
    account.style.display = "flex";
    order.style.display = "none";
    favorite.style.display = "none";
  } else if (item == "order") {
    account.style.display = "none";
    order.style.display = "flex";
    favorite.style.display = "none";
  } else if (item == "favorite") {
    account.style.display = "none";
    order.style.display = "none";
    favorite.style.display = "flex";
  }
}
