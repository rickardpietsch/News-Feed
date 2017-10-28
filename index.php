<?php

declare(strict_types=1);

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

    <div class="top-nav">
      <div class="left-nav">
        <a target="_blank" href="https://www.facebook.com/FysikenCrossFit/">
        <img id=facebook src="images/facebook1.png" alt="facebook">
        </a>
        <a target="_blank" href="https://www.instagram.com/fysikencrossfit/">
        <img id=instagram src="images/instagram.png" alt="facebook">
        </a>

      </div>
      <div class="center-nav">
        <h1>Fysiken Crossfit Blog</h1>
      </div>
      <div class="right-nav">
        <a id="fysiken" target="_blank" href="http://www.fysiken.nu">www.fysiken.nu</a>
        <a id="telephone" target="_blank" href="tel:+4631106930">Tel: 031-10 69 30</a>
      </div>
    </div>

    <div class="danny-img">
      <img class="image" src="images/dannybro.png" alt="dannybroflex">
    </div>

    <div class="slogan">
    <h2>An epic way to make your body a huge temple</h2>
    </div>

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

    <div class="footer">&copy; <?php echo date('Y') ?> Fysiken</div>

  </div>
</body>
</html>
