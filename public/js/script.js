let cartList = JSON.parse(localStorage.getItem("feda-cart")) || [];
if (cartList.length) {
  document.getElementById("cart-count").innerText = cartList.length;
  document.getElementById("cart-link").classList.toggle("me-3");
  document.getElementById("cart-badge").classList.toggle("d-none");
}
