<?php

use App\CSRFToken;
use App\Database;

$db = new Database();
$tokenizer = new CSRFToken();
$tokenizer->generateToken();

$tips = $db->findAll('SELECT *, (likes - dislikes) as score FROM tips WHERE approved = 1 ORDER BY score DESC');
?>

  <main role="main" class="mb-8 md:mb-16 pb-8 md:pb-16 border-b border-b-solid border-b-gray-500">
    <div class="container grid grid-cols-1 gap-4">

      <div class="mb-2 text-sm">
        <h2 class="text-2xl leading-tight font-light">Posted tips by the community</h2>
        <p>You can upvote or downvote the posted tips, or even add your own. No login required!</p>
      </div>

      <?php if (!empty($tips)) : ?>
        <?php foreach ($tips as $tip) : ?>
          <?php
            getTemplate(
              'content/card--post',
              ['tip' => $tip]
            );
          ?>
        <?php endforeach; ?>
      <?php else : ?>
        <p class="text-lg my-10 font-semibold text-gray-500">No tips yet.</p>
      <?php endif; ?>

      <?php require  BASE_PATH . '/templates/partials/bottom-infos.php'; ?>

    </div>
  </main>

<?php
