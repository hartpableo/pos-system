<a
href="<?php echo $args['navlink']; ?>"
class="<?php echo currentURLIs($args['navlink']) ? 'bg-base-300 pointer-events-none' : ''; ?>"
>
  <?php echo $args['navtext']; ?>
</a>