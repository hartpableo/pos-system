<a
href="<?php echo trim($args['navlink']); ?>"
class="<?php echo currentURLIs($args['navlink']) ? 'bg-gray-700 pointer-events-none' : ''; ?>"
>
  <?php echo trim($args['navtext']); ?>
</a>