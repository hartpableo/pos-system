<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="POS">
  <title>POS</title>
  <?php echo renderCSS('style.min.css'); ?>

  <style>
    /* add border to table and table elements */
    table {
      border-collapse: collapse;
      width: 100%;
    }
    td, th {
      border: 1px solid #444;
      padding: .25em .5em;
    }
  </style>

</head>
<body class="min-h-screen font-primary py-8 isolate">

  <?php if (currentURL() === '/') : ?>
  <div class="dashboard-grid grid w-[98%] max-w-[1920px] mx-auto gap-2">
  <?php endif; ?>
