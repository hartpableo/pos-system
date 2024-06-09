<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php if (str_contains(currentURL(), '/admin')) : ?>
  <meta name="robots" content="noindex, nofollow">
  <?php endif; ?>

  <meta name="description" content="Know what to expect and get the best tips from other people about Moalboal">
  <title>Guide to Moalboal | Deals, Tips, Comments, and more...</title>
  <?php echo renderCSS('style.min.css'); ?>
</head>
<body class="bg-yellow-100 min-h-screen font-primary">

<!-- Header -->
<header role="banner" class="pt-5 mb-8 md:mb-16 pb-28 <?php echo getURL('/') ? 'md:pb-16 border-b border-b-solid border-b-gray-500' : ''; ?> relative isolate z-50">

  <figure class="absolute z-[-1] pointer-events-none inset-0 before:content-[''] before:z-10 before:absolute before:inset-0 before:bg-white before:opacity-20">
    <img
      class="absolute object-center object-cover w-full h-full inset-0"
      src="<?php echo ROOT . '/images/ken-suarez-oO7d1Q9mJZQ-unsplash.jpg'; ?>"
      alt="Moalboal. Photo by Ken Suarez."
      width="3992"
      height="2242"
      loading="lazy"
      decoding="async"
    >
    <figcaption class="pointer-events-auto block absolute bottom-2 left-2 text-xs p-1 leading-none rounded-sm font-medium bg-red-300 z-20">
      photo by <a href="https://unsplash.com/photos/aerial-photography-of-several-white-boats-near-island-oO7d1Q9mJZQ" class="inline hover:underline transition-all" target="_blank" rel="noreferrer nofollow">Ken Suarez</a>
    </figcaption>
  </figure>

  <?php if (isset($_SESSION['msg-success'])) : ?>
    <div class="fixed z-50 top-20 shadow-lg left-1/2 -translate-x-2/4 w-[calc(100%_-_2rem)] max-w-[768px] bg-green-100 border-l-4 border-green-500 text-green-700 p-4" role="alert">
      <?php foreach ($_SESSION['msg-success'] as $msg) : ?>
        <p class="m-0"><?php echo $msg; ?></p>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>

  <?php if (isset($_SESSION['msg-error'])) : ?>
    <div class="fixed z-50 top-20 shadow-lg left-1/2 -translate-x-2/4 w-[calc(100%_-_2rem)] max-w-[768px] bg-red-100 border-l-4 border-red-500 text-red-700 p-4" role="alert">
      <?php foreach ($_SESSION['msg-error'] as $msg) : ?>
        <p class="m-0"><?php echo $msg; ?></p>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>

  <div class="container text-center flex flex-col justify-start items-stretch pt-20">

    <nav class="fixed top-4 left-1/2 -translate-x-2/4 w-[calc(100%_-_2rem)] shadow-md py-2 px-2 bg-white rounded-lg grid grid-cols-3 justify-items-center items-center max-w-[768px] z-10">
      <div class="justify-self-start">
        <a
          href="/create-a-tip"
          class="btn text-sm md:text-base"
        >
          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg inline" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
          </svg>
          Add a Tip
        </a>
      </div>

      <?php if (getURL('/')) : ?>
        <div class="font-bold leading-none text-xl">
          Guide to<br> Moalboal
        </div>
      <?php else : ?>
        <a href="/" class="block font-bold leading-none text-xl">
          Guide to<br> Moalboal
        </a>
      <?php endif; ?>

      <div class="justify-self-end">
        <a
            href="mailto:<?php echo APP_EMAIL; ?>?subject=Feedback%20from%20Guide%20to%20Moalboal"
            class="btn btn-secondary text-sm md:text-base"
        >
          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text-fill inline" viewBox="0 0 16 16">
            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1z"/>
          </svg>
          Leave a feedback
        </a>
      </div>
    </nav>

    <?php if (getURL('/')) : ?>
    <h1 class="text-4xl md:text-5xl font-extrabold mt-8 leading-tight md:leading-relaxed relative py-3 before:content-[''] before:rounded-lg before:z-[-1] before:absolute before:left-1/2 before:top-1/2 before:-translate-x-2/4 before:-translate-y-2/4 before:pointer-events-none before:w-full before:h-full before:bg-white">
      Want to visit <span class="highlight">Moalboal</span>?<br>
      <span class="text-xl md:text-3xl leading-tight md:leading-relaxed block mt-3 md:mt-0">Check out what other people both locals and tourists say!</span>
    </h1>
    <?php endif; ?>

  </div>
</header>
<!-- Header -->
