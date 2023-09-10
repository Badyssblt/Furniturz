const order = document.querySelector(".content__order");
const favorite = document.querySelector(".content__favorite");
const personal = document.querySelector(".content__personal");
const password = document.querySelector(".content__password");
const logout = document.querySelector(".content__logout");

function displayMenu(item) {
  switch (item) {
    case "Order":
      order.style.display = "block";
      favorite.style.display = "none";
      personal.style.display = "none";
      password.style.display = "none";
      logout.style.display = "none";
      break;
    case "Favorite":
      order.style.display = "none";
      favorite.style.display = "flex";
      personal.style.display = "none";
      password.style.display = "none";
      logout.style.display = "none";
      break;
    case "Personal":
      order.style.display = "none";
      favorite.style.display = "none";
      personal.style.display = "flex";
      password.style.display = "none";
      logout.style.display = "none";
      break;
    case "Password":
      order.style.display = "none";
      favorite.style.display = "none";
      personal.style.display = "none";
      password.style.display = "flex";
      logout.style.display = "none";
      break;
    case "Logout":
      order.style.display = "none";
      favorite.style.display = "none";
      personal.style.display = "none";
      password.style.display = "none";
      logout.style.display = "flex";
      break;
  }
}
