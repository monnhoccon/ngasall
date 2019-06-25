<?php include 'config/urlenc.php'; include 'config/title.php'; ?>

<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title><?php echo $e; ?></title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
</head>
<body>
<div class="container is-fluid">

<nav class="panel">
  <p href="/" class="panel-heading">
    <?php echo $judul; ?>
  </p>
  <p class="panel-tabs">
    <a href="/" class="is-active">home</a>
    <a href="https://github.com/ibnusyawall">forks</a>
  </p>
  <a href="/" class="panel-block">
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
  <a href="urlenc.php" class="panel-block is-active">
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

<form action="#" method="post" autocomplete="off">
<div class="field is-grouped">
  <p class="control is-expanded">
    <input name="data" autocomplete="off" class="input is-info" type="text" placeholder="">
  </p>
</div>
<p class="control">
    <input name="submit" type="submit" class="button is-info is-fullwidth is-outlined" value="submit">
</p>
<br />
<div class="field is-grouped is-grouped-centered">
  <p class="control">
    <a class="button is-primary">
      Result
    </a>
  </p>
  <p class="control">
    <a href="/" class="button is-light">
      Back To Home
    </a>
  </p>
  <a href="https://github.com/ibnusyawall" class="button">
    <span class="icon">
      <i class="fab fa-github"></i>
    </span>
    <span>ibnusyawall</span>
  </a>
</div>
</form>

<div class="control is-expanded">
  <?php

   echo "<pre>";
   print_r('input : '. $ambil. '   |   '. 'output : '. '<code>'.  $hasil. '</code>');
   echo "</pre>";

  ?>
</div>

</div>
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</body>
</html>
