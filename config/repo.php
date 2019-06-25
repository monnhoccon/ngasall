<?php

  include "curl.php";

  if ( isset($_POST["data"]) ) {
    $ambil = req('https://api.github.com/users/'. $_POST["data"]);
    $title = 'TES2TOOLS | Git Information';
  }

?>
