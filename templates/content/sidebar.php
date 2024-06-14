<div class="sidebar sidebar--close transition-all fixed right-0 top-0 h-full bg-base-300 z-50 py-6 px-6 shadow-2xl w-80">

  <h2 class="text-3xl font-bold mb-6 leading-none">Cart</h2>

  <ul aria-label="Cart Items" class="flex flex-col gap-4 justify-start items-stretch pb-8 mb-8 border-b-2 border-b-solid border-b-gray-500">
    <?php getTemplate('components/cart-item'); ?>
    <?php getTemplate('components/cart-item'); ?>
    <?php getTemplate('components/cart-item'); ?>
    <?php getTemplate('components/cart-item'); ?>
  </ul>

  <!-- Total -->
<!--  <div class="flex justify-between items-center">-->
<!--        <span class="block text-2xl font-bold">-->
<!--          Total:-->
<!--        </span>-->
<!--    <span class="block text-3xl font-bold">-->
<!--          ₱225-->
<!--        </span>-->
<!--  </div>-->
  <!-- Total -->

<!--  <div class="flex justify-between items-stretch flex-wrap mt-10 gap-4">-->
<!--    <button type="button" class="btn text-lg bg-gray-500 hover:bg-gray-400 focus:bg-gray-400 flex-grow">-->
<!--      Cancel Order-->
<!--    </button>-->
<!--    <button type="button" class="btn text-lg bg-green-600 hover:bg-green-500 focus:bg-green-500 flex-grow">-->
<!--      Proceed-->
<!--    </button>-->
<!--  </div>-->

  <button type="button" class="sidebar-toggle">
    <span class="sr-only">Toggle Sidebar</span>
  </button>

</div>
