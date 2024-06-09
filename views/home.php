<div>

  <?php getTemplate('partials/header'); ?>

  <main>
    <h2 class="sr-only">Product Results</h2>

    <div class="container grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4">

      <?php getTemplate('content/product-card'); ?>
      <?php getTemplate('content/product-card'); ?>
      <?php getTemplate('content/product-card'); ?>
      <?php getTemplate('content/product-card'); ?>
      <?php getTemplate('content/product-card'); ?>
      <?php getTemplate('content/product-card'); ?>
      <?php getTemplate('content/product-card'); ?>
      <?php getTemplate('content/product-card'); ?>
      <?php getTemplate('content/product-card'); ?>
      <?php getTemplate('content/product-card'); ?>
      <?php getTemplate('content/product-card'); ?>
      <?php getTemplate('content/product-card'); ?>


    </div>

  </main>

</div>

<?php getTemplate('forms/add-product'); ?>
<?php getTemplate('content/sidebar'); ?>