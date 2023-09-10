const cart = document.getElementById("cart");
const cartContent = document.querySelector(".cart__content");

cart.addEventListener("click", () => {
  if (
    cartContent.style.display === "none" ||
    cartContent.style.display === ""
  ) {
    cartContent.style.display = "grid";
  } else {
    cartContent.style.display = "none";
  }
});
