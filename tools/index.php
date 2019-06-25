<?php include '../config/title.php'; ?>

<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title><?php echo $judul; ?></title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
</head>
<body>
<div class="container is-fluid">

<div class="notification is-primary">
  <button class="delete"></button>
  Selamat datang di <?php echo $judul; ?> , selamat menikmati tools sederhana ini yah
</div>

<nav class="panel">
  <p href="/" class="panel-heading">
    <?php echo $judul; ?>
  </p>
  <p class="panel-tabs">
    <a href="/" class="is-active">home</a>
    <a href="about.php">about</a>
    <a href="https://github.com/ibnusyawall">forks</a>
  </p>
  <a href="/" class="panel-block is-active">
    <span class="panel-icon">
      <i class="fas fa-book" aria-hidden="true"></i>
    </span>
    home
  </a>
  <a href="repo.php" class="panel-block">
    <span class="panel-icon">
      <i class="fas fa-book" aria-hidden="true"></i>
    </span>
    repo.php
  </a>
  <a href="md5enc.php" class="panel-block">
    <span class="panel-icon">
      <i class="fas fa-book" aria-hidden="true"></i>
    </span>
    md5enc.php
  </a>
  <a href="base64enc.php" class="panel-block">
    <span class="panel-icon">
      <i class="fas fa-book" aria-hidden="true"></i>
    </span>
    base64enc.php
  </a>
  <a href="base64dec.php" class="panel-block">
    <span class="panel-icon">
      <i class="fas fa-book" aria-hidden="true"></i>
    </span>
    base64dec.php
  </a>
  <a href="urlenc.php" class="panel-block">
    <span class="panel-icon">
      <i class="fas fa-book" aria-hidden="true"></i>
    </span>
    urlenc.php
  </a>
  <a href="urldec.php" class="panel-block">
    <span class="panel-icon">
      <i class="fas fa-book" aria-hidden="true"></i>
    </span>
    urldec.php
  </a>
  <a href="htmlspecial.php" class="panel-block">
    <span class="panel-icon">
      <i class="fas fa-book" aria-hidden="true"></i>
    </span>
    htmlspecial.php
  </a>
</nav>

</div>
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
<script src="../style/myjs.js"></script>
</body>
</html>
