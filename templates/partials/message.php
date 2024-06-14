<?php if (isset($_SESSION['msg-success'])) : ?>
  <div class="max-w-3xl w-[98%] absolute z-50 top-6 left-1/2 -translate-x-2/4 flex flex-col justify-start items-stretch gap-2">
    <?php foreach ($_SESSION['msg-success'] as $msg) : ?>
      <div role="alert" class="alert alert-success">
        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
        <span><?php echo $msg; ?></span>
      </div>
    <?php endforeach; ?>
  </div>
<?php endif; ?>

<?php if (isset($_SESSION['msg-error'])) : ?>
  <div class="max-w-3xl w-[98%] absolute z-50 top-6 left-1/2 -translate-x-2/4 flex flex-col justify-start items-stretch gap-2">
    <?php foreach ($_SESSION['msg-error'] as $msg) : ?>
      <div role="alert" class="alert alert-error">
        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
        <span><?php echo $msg; ?></span>
      </div>
    <?php endforeach; ?>
  </div>
<?php endif; ?>