<?php
  if (isset($_POST['data'])) {
    $ambil = $_POST['data'];
    $hasil = base64_encode($ambil);
  }
?>
