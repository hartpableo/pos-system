<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="POS">
  <title>POS</title>
  <?php echo renderCSS('style.min.css'); ?>
  <?php echo renderCSS('home.css', currentURLIs('/')); ?>
</head>
<body class="min-h-screen font-primary isolate py-6">

<?php getTemplate('partials/message'); ?>

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
      <?php if (currentURLIs('/')) : ?>
      <li class="mr-2">
        <button type="button" class="relative" aria-label="Cart button">
          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4 pointer-events-none" viewBox="0 0 16 16">
            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
          </svg>
          <span class="num-of-items hidden text-sm absolute z-10 pointer-events-none bg-green-400 font-bold text-black rounded-full flex justify-center items-center">
            <!-- items count -->
          </span>
        </button>
      </li>
      <?php endif; ?>
      <li>
        <?php getTemplate(
          'components/navlink',
          [
            'navtext' => 'Home',
            'navlink' => '/'
          ]
        ); ?>
      </li>
      <li>
        <?php getTemplate(
            'components/navlink',
            [
              'navtext' => 'Go to dashboard',
              'navlink' => '/dashboard'
            ]
        ); ?>
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
