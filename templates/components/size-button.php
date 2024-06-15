<?php
$product_id = $args['product_id'];
$size = $args['size'];
$price = $args['price'];
?>

<button
  type="button"
  data-size="<?php echo trim($size); ?>"
  data-size-price="<?php echo trim($price); ?>"
  data-price-target="price-<?php echo $product_id; ?>"
  data-add-to-cart-btn="add-to-cart-<?php echo $product_id; ?>"
  class="size-btn text-base font-bold w-8 h-8 rounded-full border border-solid border-gray-300 hover:bg-primary hover:text-black hover:border-black"
><?php echo $size; ?></button>
