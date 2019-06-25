<?php
  if (isset($_POST['data'])) {
    $ambil = $_POST['data'];
    $hasil = md5($ambil);
  }
?>
