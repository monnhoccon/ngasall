<?php

  // include custom module
  include "curl.php";

  //include "./dnslok.php";

  if ( isset($_POST["ip"]) ) {

    $oke = req('https://api.hackertarget.com/nmap/?q='. $_POST["ip"]);
    //$parse = json_decode($oke, TRUE);

    echo "<br /> <pre>";
    print_r($oke);
    echo "</pre>";

  }

  else if ( isset($_POST["dnslok"]) ) {

    $dns = req('https://api.github.com/users/'. $_POST["dnslok"]);
    $parse = json_decode($dns, TRUE);

    if ($parse["message"] == "Not Found") {

      echo "<div class='ui negative message'>";
      echo "<i class='close icon'></i>";
      echo "<div class='header'>";
      print_r($_POST["dnslok"]. ' Tidak ditemukan !1!1!');
      echo "</div></div>";

    } else {

      echo "<div class='ui success message'>";
      echo "<i class='close icon'></i>";
      echo "<div class='header'>";
      print_r($_POST["dnslok"]. ' Ditemukan !1!1!');
      echo "</div></div>";

      echo "<br /> <pre>";
        print_r(" Username   : ". $parse["login"]); echo "<br>";
        print_r(" Url        : ". "https://github.com/". $_POST["dnslok"]); echo "<br>";
        print_r(" Id         : ". $parse["id"]); echo "<br>";
        print_r(" Follower   : ". $parse["followers"]); echo "<br>";
        print_r(" Following  : ". $parse["following"]); echo "<br>";
        print_r(" Bio        : ". $parse["bio"]); echo "<br>";
        print_r(" Total Repo : ". $parse["public_repos"]); echo "<br>";
        print_r(" Location   : ". $parse["location"]); echo "<br>";
      echo "</pre>";
    }
  } else if ( isset($_POST["random"]) ) {
    /* tar lanjurcuy wkwkwk*/
  }

?>
