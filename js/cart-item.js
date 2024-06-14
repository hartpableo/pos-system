const CartItem = (item) => {
  return `<li class="flex">
  <div id="product-${item.id}" class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
    <img
      src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg"
      alt="product"
      class="h-full w-full object-cover object-center"
    >
  </div>
  <div class="ml-4 flex flex-1 flex-col">
    <div>
      <div class="flex justify-between text-base font-medium">
        <h3>${item.name}</h3>
        <p class="ml-3 whitespace-nowrap">₱ <span class="price">${item.price}</span></p>
      </div>
      <p class="qty">Qty 1</p>
    </div>
    <div class="flex flex-1 items-end justify-between text-sm">
      <div class="flex gap-1">
        <button type="button" class="btn btn-sm btn-success text-white" aria-label="Increment current item">
          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg pointer-events-none" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
          </svg>
        </button>
        <button type="button" class="btn btn-sm btn-neutral text-white" aria-label="Decrement current item">
          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-lg pointer-events-none" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8"/>
          </svg>
        </button>
        <button type="button" class="btn btn-sm btn-error text-white" aria-label="Remove item">
          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash2 pointer-events-none" viewBox="0 0 16 16">
            <path d="M14 3a.7.7 0 0 1-.037.225l-1.684 10.104A2 2 0 0 1 10.305 15H5.694a2 2 0 0 1-1.973-1.671L2.037 3.225A.7.7 0 0 1 2 3c0-1.105 2.686-2 6-2s6 .895 6 2M3.215 4.207l1.493 8.957a1 1 0 0 0 .986.836h4.612a1 1 0 0 0 .986-.836l1.493-8.957C11.69 4.689 9.954 5 8 5s-3.69-.311-4.785-.793"/>
          </svg>
        </button>
      </div>
    </div>
  </div>
</li>`;
}

export default CartItem;