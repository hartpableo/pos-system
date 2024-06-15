<?php

use App\Products;

$products_data = new Products();

$product = $args['product'];
$product_sizes = [];
$product_variants = $products_data->getProductVariants($product['id']);
if (!empty($product_variants)) {
  $product_sizes = $product_variants;
}

?>

<div>
  <div class="card w-96 h-full max-w-full bg-base-100 shadow-xl" id="<?php echo 'product-' . $product['id']; ?>">
    <figure class="relative">
      <img
      src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg"
      alt="Shoes"
      />
      <?php
      /**
       * <div class="flex justify-end items-center absolute top-2 right-2 gap-2 z-10">
       * <span class="badge badge-primary text-base font-bold block h-auto">
       * Large
       * </span>
       * </div>
       */
      ?>
    </figure>
    <div class="card-body">
      <h2 class="card-title">
        <?php echo $product['product_name']; ?>
      </h2>
      <p class="text-2xl leading-none">
        ₱ <span id="price-<?php echo $product['id']; ?>" class="price"><?php echo $product['product_price']; ?></span>
      </p>

<!--      --><?php //if (!empty($product_sizes)) : ?>
<!--      <div class="flex justify-start items-center flex-wrap gap-2 my-4">-->
<!--        <p class="flex-grow-0">Size:&nbsp;</p>-->
<!--        --><?php
//          foreach ($product_sizes as $variant => $price) {
//            getTemplate(
//              'components/size-button',
//              [
//                'product_id' => $product['id'],
//                'size' => $variant,
//                'price' => $price,
//              ]
//            );
//          }
//        ?>
<!--      </div>-->
<!--      --><?php //endif; ?>

      <div class="card-actions justify-end">
        <button
          id="add-to-cart-<?php echo $product['id']; ?>"
          class="add-to-cart btn btn-primary"
          type="button"
          data-product-id="<?php echo $product['id']; ?>"
          data-product-name="<?php echo $product['product_name']; ?>"
          data-product-price="<?php echo $product['product_price']; ?>"
        >
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart inline mr-1" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
          </svg>
          Add to cart
        </button>
      </div>
    </div>
  </div>
</div>