const cart = document.getElementById("cart");
const cartContent = document.querySelector(".cart__content");

document.body.addEventListener("click", function (event) {
  const clickElem = event.target;

  if (
    clickElem !== cart &&
    !cart.contains(clickElem) &&
    clickElem !== cartContent &&
    !cartContent.contains(clickElem)
  ) {
    if (cartContent.style.display === "grid") {
      console.log("Cliqué en dehors de cartContent");
      cartContent.style.display = "none";
    }
  }
});

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
