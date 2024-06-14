<?php

use App\Products;

$products_data = new Products();
$all_products = $products_data->getAllProducts();
?>

<main>
  <div class="container">

    <h1 class="font-extrabold leading-tight mb-3 text-4xl">
      Products
    </h1>

    <?php if (!empty($all_products)) : ?>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-4 gap-y-6 lg:p-4">
      <?php foreach($all_products as $product) : ?>
        <?php getTemplate('components/product-card', ['product' => $product]); ?>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>

    <?php getTemplate('content/sidebar'); ?>

  </div>
</main>