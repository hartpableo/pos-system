<?php

use App\CSRFToken;

$tokenizer = new CSRFToken();
$tokenizer->generateToken();

getTemplate('partials/header-dashboard');
?>

<main>
  <div class="container">

    <!-- Form -->
    <form class="max-w-sm mx-auto mt-10" action="/product/store" method="POST">
      <h2 class="leading-none text-2xl mb-6 font-bold">
        Add a product
      </h2>

      <input type="hidden" name="csrf_token" value="<?php echo $tokenizer->getSessionToken(); ?>">

      <div class="mb-5">
        <label for="product_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
        <input type="text" name="product_name" id="product_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g. Matcha Latte" autocomplete="off"/>
      </div>
      <div class="mb-5">
        <label for="product_price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
        <div class="relative">
          <span class="absolute top-1/2 -translate-y-2/4 left-2 pointer-events-none text-lg font-bold">₱</span>
          <input type="text" name="product_price" id="product_price" class="pl-6 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" autocomplete="off"/>
        </div>
      </div>

      <button type="submit" class="btn btn-success">Submit</button>

    </form>
    <!-- Form -->

  </div>
</main>