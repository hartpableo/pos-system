<a
href="<?php echo $args['navlink']; ?>"
class="<?php echo currentURLIs($args['navlink']) ? 'bg-gray-700 pointer-events-none' : ''; ?>"
>
  <?php echo $args['navtext']; ?>
</a>