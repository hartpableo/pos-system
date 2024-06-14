<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="POS">
  <title>POS</title>
  <?php echo renderCSS('style.min.css'); ?>
</head>
<body class="min-h-screen font-primary isolate py-6">

<header role="banner" class="navbar bg-base-200 mx-auto px-4 container mb-7">

  <?php if (currentURLIs('/')) : ?>
    <div class="flex-1 text-xl font-bold pl-4">
      My Shop
    </div>
  <?php else : ?>
    <div class="flex-1">
      <a href="/" class="btn btn-ghost text-xl font-bold">
        My Shop
      </a>
    </div>
  <?php endif; ?>

  <div class="flex-none">
    <ul class="menu menu-horizontal px-1">
      <li>
        <a href="/dashboard">Go to dashboard</a>
      </li>
<!--      <li>-->
<!--        <details>-->
<!--          <summary>-->
<!--            Parent-->
<!--          </summary>-->
<!--          <ul class="p-2 bg-base-100 rounded-t-none">-->
<!--            <li><a>Link 1</a></li>-->
<!--            <li><a>Link 2</a></li>-->
<!--          </ul>-->
<!--        </details>-->
<!--      </li>-->
    </ul>
  </div>
</header>
