import CartItem from "./cart-item.js";

class Cart {
  constructor() {
    this.cart = {};
  }

  addCartItem(item) {
    this.cart[Object.keys(this.cart).length] = item;
    this.logCartItems()
    this.updateCartItems()
  }

  logCartItems() {
    console.log(this.cart);
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