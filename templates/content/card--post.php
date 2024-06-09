<?php
/**
 * Post Card Component
 */
$tip = $args['tip'];
$voter_ip = $_SERVER['REMOTE_ADDR'];
?>

<article role="article" class="shadow rounded-lg bg-white p-6 text-surface shadow-secondary-1">
  <div class="mb-4 text-base">
    <?php echo nl2br($tip['tip']); ?>
  </div>

  <div class="text-sm text-gray-500 mt-6 flex flex-col md:flex-row justify-start md:justify-between items-stretch md:items-center flex-wrap">

    <p>
      <?php echo $tip['likes']; ?> likes | <?php echo $tip['dislikes']; ?> dislikes
    </p>

    <?php
    // Preprocess tip author name
    if (!empty($tip['social_link'])) {
      $tip['name'] = '<a href="' . trim($tip['social_link']) . '" target="_blank" rel="noreferrer nofollow" class="hover:underline">' . $tip['name'] . '</a>';
    }
    ?>

    <div class="md:order-last">
      posted by <?php echo $tip['name']; ?>
      |
      <time datetime="<?php echo date('m-d-Y', strtotime($tip['created_at'])); ?>">
        <?php echo date('M d, Y', strtotime($tip['created_at'])); ?>
      </time>
    </div>

    <?php
    /**
     * Check $tip['ip_addresses'] and decode the json string to an associative array.
     * If the current user's IP address is in the list, then get the vote type.
     */
    $voter_vote = NULL;
    if (!empty($tip['ip_addresses'])) {
      $voter_ips = json_decode($tip['ip_addresses'], TRUE);
      if (array_key_exists($voter_ip, $voter_ips)) {
        $voter_vote = $voter_ips[$voter_ip];
      }
    }
    ?>

    <div class="flex justify-start md:justify-end items-stretch mt-3 md:mt-0 gap-2">

      <?php if (!$voter_vote || $voter_vote === 'downvote') : ?>
        <form action="/vote?tip_id=<?php echo $tip['id']; ?>" method="POST">

          <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token'] ?>">
          <input type="hidden" name="vote_type" value="upvote">

          <button type="submit" class="btn btn-with-icon">
            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
            </svg>
            upvote
          </button>
        </form>
      <?php elseif ($voter_vote === 'upvote') : ?>
        <button type="button" disabled class="btn btn-with-icon opacity-50 pointer-events-none">
          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
          </svg>
          upvoted
        </button>
      <?php endif;?>

      <?php if (!$voter_vote || $voter_vote === 'upvote') : ?>
        <form action="/vote?tip_id=<?php echo $tip['id']; ?>" method="POST">

          <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token'] ?>">
          <input type="hidden" name="vote_type" value="downvote">

          <button type="submit" class="btn btn-secondary btn-with-icon">
            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
              <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z"/>
            </svg>
            downvote
          </button>
        </form>
      <?php elseif ($voter_vote === 'downvote') : ?>
        <button type="button" disabled class="btn btn-secondary btn-with-icon opacity-50 pointer-events-none">
          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z"/>
          </svg>
          downvoted
        </button>
      <?php endif;?>

    </div>
  </div>

</article>