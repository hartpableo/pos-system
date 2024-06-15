import Cart from "./cart.js";

document.addEventListener('DOMContentLoaded', () => {
  let sidebarHasOpened = false;
  const cart = new Cart();
  // add an event listener to the .add-to-cart buttons
  const addToCartButtons = document.querySelectorAll('.add-to-cart');
  const sidebar = document.querySelector('.sidebar');
  addToCartButtons.forEach((button) => {
    button.addEventListener('click', (event) => {
      sidebar.classList.remove('hidden');
      if (!sidebarHasOpened) {
        sidebar.classList.remove('sidebar--close');
        sidebarHasOpened = true;
      }
      const item = {
        id: button.dataset.productId,
        name: button.dataset.productName,
        price: button.dataset.productPrice
      };
      // add the item to the cart
      cart.addCartItem(item);
    })
  })

  // size/variant buttons
  const resetAllSizeBtns = (btns) => {
    btns.forEach((btn) => {
      btn.classList.remove('bg-primary', 'text-black', 'border-black');
    })
  }

  const updatePrice = (btn) => {
    const priceTarget = document.getElementById(btn.dataset.priceTarget);
    const sizePrice = btn.dataset.sizePrice;
    priceTarget.innerHTML = sizePrice;
    document.getElementById(btn.dataset.addToCartBtn).dataset.productPrice = sizePrice
  }

  const sizeButtons = document.querySelectorAll('.size-btn');

  sizeButtons.forEach((button) => {
    button.addEventListener('click', (event) => {
      resetAllSizeBtns(sizeButtons);
      button.classList.add('bg-primary', 'text-black', 'border-black');
      updatePrice(button);
    })
  })
})