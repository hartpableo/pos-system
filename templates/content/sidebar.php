<?php

use App\CSRFToken;

$tokenizer = new CSRFToken();
$tokenizer->generateToken();

?>

<div class="sidebar sidebar--close hidden transition-all fixed right-0 top-0 h-full bg-base-300 z-50 py-6 px-6 shadow-2xl w-80 overflow-y-scroll">

  <h2 class="text-3xl font-bold mb-6 leading-none">Cart</h2>

  <ul aria-label="Cart Items" class="flex flex-col gap-4 justify-start items-stretch pb-8 mb-8 border-b-2 border-b-solid border-b-gray-500">
    <!-- Cart items -->
  </ul>

  <!-- Total -->
  <div class="flex justify-between items-center">
    <div class="block text-2xl font-bold">
      Total:
    </div>
    <div id="price-total" class="block text-3xl font-bold"></div>
  </div>
  <!-- Total -->

  <div class="flex justify-between items-stretch w-full mt-6">
    <button type="button" class="cancel-order btn btn-error text-white">
      Cancel Order
    </button>
    <form action="/checkout" method="POST">
      <input type="hidden" name="csrf_token" value="<?php echo $tokenizer->getSessionToken(); ?>" >
      <input type="hidden" name="total_price" value="0" >
      <button type="submit" class="btn btn-success text-white">
        Proceed
      </button>
    </form>
  </div>

  <button type="button" class="sidebar-toggle">
    <span class="sr-only">Toggle Sidebar</span>
  </button>

</div>
