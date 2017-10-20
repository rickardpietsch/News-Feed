<?php

declare(strict_types=1);

// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP-only file.

require __DIR__.'/data.php';
require __DIR__.'/functions.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Fysiken Crossfit Blog</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/10up-sanitize.css/5.0.0/sanitize.min.css">
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
      <div class="wrapper">

      <h1>Fysiken Crossfit Blog</h1>

      <h2>An epic way to make your body a huge temple</h2>

      <!-- <img class="image" src="images/dannybro.jpg" alt="dannybroflex"> -->

      <?php foreach ($coaches as $coach): ?>
      <div class="container">
          <div class="coach">
            <div class="title"><h3><?php echo $coach['title']; ?></h3></div>
            <div class="content"><p><?php echo $coach['content']; ?></p></div>
            <div class="author"><h4><?php echo $coach['author']; ?></h4></div>
            <div class="date"><?php echo $coach['date']; ?></div>
            <div class="counter"><?php echo $coach['counter']; ?></div>
          </div>
      </div>
      <?php endforeach; ?>




      </div>
    </body>
</html>
