  <?php echo renderJS('sidebar', currentURLIs('/')); ?>
<!--  --><?php //echo renderJS('cart', currentURLIs('/')); ?>
  <script type="module" src="<?php echo ROOT . '/js/cart-item.js'; ?>"></script>
  <script type="module" src="<?php echo ROOT . '/js/cart.js'; ?>"></script>
  <script type="module" src="<?php echo ROOT . '/js/add-to-cart.js'; ?>"></script>
<!--  --><?php //echo renderJS('add-to-cart', currentURLIs('/')); ?>
  </body>
</html>