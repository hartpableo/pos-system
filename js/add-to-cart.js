import Cart from "./cart.js";

document.addEventListener('DOMContentLoaded', () => {
  const cart = new Cart();
  // add an event listener to the .add-to-cart buttons
  const addToCartButtons = document.querySelectorAll('.add-to-cart');
  const sidebar = document.querySelector('.sidebar');
  addToCartButtons.forEach((button) => {
    button.addEventListener('click', (event) => {
      sidebar.classList.remove('hidden');
      const item = {
        id: button.dataset.productId,
        name: button.dataset.productName,
        price: button.dataset.productPrice
      };
      // add the item to the cart
      cart.addCartItem(item);
    })
  })
})