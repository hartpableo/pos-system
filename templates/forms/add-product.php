<div class="fixed z-50 w-screen h-screen inset-0 hidden flex-col justify-center items-center bg-[rgba(255,255,255,0.75)]">

  <form class="p-4 shadow-2xl bg-white w-full max-w-[600px] rounded-xl">
    <h2 class="text-xl font-bold mb-4">
      Add a new item
    </h2>

    <div class="mb-5">
      <label for="product_name" class="block mb-2 text-sm font-medium text-gray-900">
        Product Name
      </label>
      <input type="text" id="product_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5" placeholder="e.g. Milkshake" />
    </div>
    <div class="mb-5">
      <label for="product_price" class="block mb-2 text-sm font-medium text-gray-900">
        Price
      </label>
      <div class="flex">
            <span class="inline-flex items-center px-3 text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md font-bold text-2xl">
              ₱
            </span>
        <input type="text" id="product_price" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-red-500 focus:border-red-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="149.00">
      </div>
    </div>

    <div class="mb-5">
      <label for="categories" class="block mb-2 text-sm font-medium text-gray-900">
        Product Categories
      </label>
      <textarea id="categories" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-red-500 focus:border-red-500 resize-y"></textarea>
      <p id="categoriesHelp" class="text-xs mt-2">Separate each categories by commas (e.g. Breakfast, Lunch, Dinner).</p>
    </div>

    <div class="flex justify-start items-center flex-wrap gap-2">
      <button type="submit" class="btn">
        Add Product
      </button>
      <button type="button" class="btn btn-secondary">
        Close
      </button>
    </div>
  </form>

</div>