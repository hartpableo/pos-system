  <?php echo renderJS('sidebar', currentURLIs('/')); ?>
  <?php echo renderJS('cart-item', currentURLIs('/'), true, true); ?>
  <?php echo renderJS('cart', currentURLIs('/'), true, true); ?>
  <?php echo renderJS('add-to-cart', currentURLIs('/'), true, true); ?>
  </body>
</html>