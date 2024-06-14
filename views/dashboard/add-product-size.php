<?php

use App\CSRFToken;
use App\Products;

$tokenizer = new CSRFToken();
$tokenizer->generateToken();
$products_data = new Products();

if (!isset(getQueryStrings()['_product_id'])) {
  setErrorMessage('There was an error processing your request. Please try again.');
  redirect('/dashboard/inventory');
}

// SQL query to get all id in products
$product = $products_data->findProductById(getQueryStrings()['_product_id']);
if (!$product) {
  setErrorMessage('Product not found.');
  redirect('/dashboard/inventory');
}

getTemplate('partials/header-dashboard');
?>

<main>
  <div class="container">

    <!-- Form -->
    <form class="max-w-sm mx-auto mt-10" action="/product/size/store" method="POST">
      <h2 class="leading-none text-2xl mb-6 font-bold">
        Add a size variant for <span class="font-extrabold underline"><?php echo $product['product_name']; ?></span>
      </h2>

      <input type="hidden" name="csrf_token" value="<?php echo $tokenizer->getSessionToken(); ?>">
      <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">

      <div class="mb-5">
        <label for="product_size" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Size</label>
        <select id="product_size" name="product_size" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <?php foreach (PRODUCT_SIZES as $size => $label) : ?>
            <option value="<?php echo $size; ?>"><?php echo $label; ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="mb-5">
        <label for="product_size_price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
        <div class="relative">
          <span class="absolute top-1/2 -translate-y-2/4 left-2 pointer-events-none text-lg font-bold">₱</span>
          <input type="text" name="product_size_price" id="product_size_price" class="pl-6 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" autocomplete="off"/>
        </div>
      </div>

      <button type="submit" class="btn btn-success">Submit</button>

    </form>
    <!-- Form -->

  </div>
</main>