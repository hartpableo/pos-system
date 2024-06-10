<div class="relative z-10 pt-6">
  <div class="sticky top-4">

    <h2 class="text-3xl font-bold mb-6 leading-none">Cart</h2>

    <ul aria-label="Cart Items" class="flex flex-col gap-4 justify-start items-stretch pb-8 mb-8 border-b-2 border-b-solid border-b-gray-500">
      <?php getTemplate('content/cart-item'); ?>
      <?php getTemplate('content/cart-item'); ?>
      <?php getTemplate('content/cart-item'); ?>
      <?php getTemplate('content/cart-item'); ?>
    </ul>

    <!-- Total -->
    <div class="flex justify-between items-center">
          <span class="block text-2xl font-bold">
            Total:
          </span>
      <span class="block text-3xl font-bold">
            ₱225
          </span>
    </div>
    <!-- Total -->

    <div class="flex justify-between items-stretch flex-wrap mt-10 gap-4">
      <button type="button" class="btn text-lg bg-gray-500 hover:bg-gray-400 focus:bg-gray-400 flex-grow">
        Cancel Order
      </button>
      <button type="button" class="btn text-lg bg-green-600 hover:bg-green-500 focus:bg-green-500 flex-grow">
        Proceed
      </button>
    </div>

  </div>
</div>