import CartItem from "./cart-item.js";

class Cart {
  constructor() {
    this.cart = {};
    this.totalPrice = 0;
  }

  addCartItem(item) {
    this.cart[Object.keys(this.cart).length] = item;
    this.logCartItems()
    this.updateCartItems()
    this.updateTotalPrice(parseFloat(item.price));
    this.updateItemsCount();
  }

  logCartItems() {
    console.log(this.cart);
  }

  updateTotalPrice(price) {
    this.totalPrice += price;
    document.getElementById('price-total').textContent = this.totalPrice;
  }

  updateItemsCount() {
    const itemsCount = document.querySelector('.num-of-items');
    itemsCount.classList.remove('hidden');
    itemsCount.textContent = `${Object.keys(this.cart).length}`;
  }

  get items() {
    return this.cart;
  }

  updateCartItems() {
    if (!Object.keys(this.cart).length) {
      return;
    }

    document.querySelector('[aria-label="Cart Items"]').innerHTML = Object.values(this.cart).map((item) => CartItem(item)).join('');
  }
}

export default Cart;