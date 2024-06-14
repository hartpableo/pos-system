<?php

use App\Products;

$products_data = new Products();
$all_products = $products_data->getAllProducts();

getTemplate('partials/header-dashboard'); ?>

<main>
  <div class="container">
    <div class="mb-6 flex justify-between items-center flex-wrap">
      <h2 class="leading-none text-2xl font-bold">
        Inventory
      </h2>
      <div class="flex justify-end items-center">
        <a href="/product/add" class="btn btn-outline">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle inline mr-1" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
          </svg>
          Add a product
        </a>
      </div>
    </div>

    <?php if (!empty($all_products)) : ?>
    <div class="overflow-x-auto">
      <table class="table text-base">
        <thead class="text-base">
          <tr>
            <th class="text-white">&nbsp;</th>
            <th class="text-white">Product Name</th>
            <th class="text-white">Price</th>
            <th class="text-white">Amount given by customer</th>
            <th class="text-white">Change</th>
            <th class="text-white">Transaction Date (mm-dd-yyyy)</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($all_products as $index => $product) : ?>
            <tr class="hover">
              <th><?php echo $index + 1; ?></th>
              <td><?php echo $product['product_name']; ?></td>
              <td>₱ <?php echo $product['product_price']; ?></td>
              <td>₱ 100</td>
              <td>₱ 55</td>
              <td>mm-dd-yyyy</td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <?php endif; ?>
  </div>
</main>